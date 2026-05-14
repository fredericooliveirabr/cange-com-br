<?php
// =============================================================
// HM2026 Contact Form Handler
// Dedicated handler for hannover2026.php
// =============================================================

// --- Recipient (hardcoded, no CC / BCC) ---
$to      = 'frederico.oliveira@cange.me';

// --- CORS headers ---
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// --- Parse input (JSON body or form-encoded) ---
$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    $input = $_POST;
}
if (empty($input)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'No data received.']);
    exit;
}

// --- Spam check: honeypot ---
if (!empty($input['telefone'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

// --- Sanitize fields ---
$name    = isset($input['fullName'])    ? trim(strip_tags($input['fullName']))    : '';
$company = isset($input['companyName']) ? trim(strip_tags($input['companyName'])) : '';
$email   = isset($input['email'])       ? trim(strip_tags($input['email']))       : '';
$details = isset($input['details'])     ? trim(strip_tags($input['details']))     : '';

// --- Validate required fields ---
if (empty($name) || empty($email)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Name and email are required.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// --- Build subject (identifies HM2026 leads clearly in Frederico's inbox) ---
$subject = '[HM2026] New contact from hannover2026 landing page — ' . $name . ' / ' . $company;

// --- Build plain-text email body ---
$body  = "New lead from the HANNOVER MESSE 2026 landing page\n";
$body .= str_repeat('=', 55) . "\n\n";
$body .= "Name:    " . $name    . "\n";
$body .= "Company: " . $company . "\n";
$body .= "Email:   " . $email   . "\n\n";
$body .= "Details / Message:\n" . $details . "\n\n";
$body .= str_repeat('-', 55) . "\n";
$body .= "Sent from: https://www.cange.com.br/hannover2026\n";
$body .= "Page: HANNOVER MESSE 2026 landing page\n";

// --- Headers: plain text, Reply-To set to visitor's email, NO CC / BCC ---
$headers  = 'From: HM2026 Landing <noreply@cange.me>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";

// --- Send ---
$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Mail delivery failed. Please try again.']);
}
