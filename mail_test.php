<?php
// =============================================================
// mail_test.php — Diagnostic for PHP mail() availability
// DELETE this file after testing.
// =============================================================
header('Content-Type: text/plain; charset=UTF-8');

$to      = 'frederico.oliveira@cange.me';
$subject = '[HM2026] mail_test.php — ' . date('Y-m-d H:i:s');
$body    = "This is a test message from mail_test.php.\nServer: " . ($_SERVER['SERVER_NAME'] ?? 'unknown') . "\n";
$headers = 'From: HM2026 Test <noreply@cange.me>' . "\r\n"
         . 'Content-Type: text/plain; charset=UTF-8' . "\r\n";

echo "PHP version: " . PHP_VERSION . "\n";
echo "sendmail_path: " . ini_get('sendmail_path') . "\n";
echo "SMTP (Windows): " . ini_get('SMTP') . "\n\n";

$result = mail($to, $subject, $body, $headers);

echo "mail() returned: " . ($result ? "TRUE (queued)" : "FALSE (failed)") . "\n";
echo "\nCheck " . $to . " for the test message.\n";
echo "Also check /logs/hm2026_mail_errors.log if the handler has run.\n";
