<?php

// CONFIGURAÇÕES
$email = 'frederico.oliveira@cange.me';
$apikey = '$2a$08$HxagCvs0WTqroihexNqqjutydr67qqX1TZRtxKr9LGHFTUs75tA12';
$form_id = 1403;
$flow_id = 316;

// Habilita CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

/* CAMPOS DO FORMULÁRIO NO CANGE
$campos = [
  'fullName' => '5c1c50401f044621ed995b5e98a5d31d4dd98009',
  'phoneNumber' => '23058af78a9ea30c4e10e7550fb536618e38b8dd',
  'emailAddress' => '34fe6a9f2cec68a786e96a41141abf3b66fb9bcc',
  'companyName' => '8a4654bfb610220b3d046c55614d4ebb571085d6',
  'segment' => 'a855105ed97401d9dcc60e3070ec4ff36b49f129',
  'employees' => '14e2c7cb969dccf12f00c80be287bfbeac5a78d4',
  'projectDetails' => '94d56a023db3a7827b7fa675e216a60cb76e2d52'
];*/


$campos = [
  'fullName' => "5c1c50401f044621ed995b5e98a5d31d4dd98009",
  'phoneNumber' => "23058af78a9ea30c4e10e7550fb536618e38b8dd",
  'emailAddress' => "34fe6a9f2cec68a786e96a41141abf3b66fb9bcc",
  'companyName' => "8a4654bfb610220b3d046c55614d4ebb571085d6",
  'segmento' => "a855105ed97401d9dcc60e3070ec4ff36b49f129",
  'numeroFuncionarios' => "14e2c7cb969dccf12f00c80be287bfbeac5a78d4",
  'projectDetails' => "94d56a023db3a7827b7fa675e216a60cb76e2d52"
];

#print_r($campos);

// VALIDA ENTRADA JSON
$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    $input = $_POST;
    if (!$input) {
      http_response_code(400);
      echo json_encode(["success" => false, "message" => "Dados inválidos ou ausentes."]);
      exit;
    }
}

// AUTENTICAÇÃO COM CANGE
$auth = curl_init("https://api.cange.me/session");
curl_setopt_array($auth, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "Origin: https://app.cange.me"
  ],
  CURLOPT_POSTFIELDS => json_encode([
    'email' => $email,
    'apikey' => $apikey
  ])
]);

$authResponse = curl_exec($auth);

if ($authResponse === false) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Erro de cURL: " . curl_error($auth)]);
    exit;
}
curl_close($auth);
$authData = json_decode($authResponse, true);

if (empty($authData['token'])) {
  http_response_code(401);
  echo json_encode(["success" => false, "message" => "Falha na autenticação com Cange."]);
  exit;
}

$token = $authData['token'];

// PREPARA OS VALORES
$valores = [];
foreach ($campos as $inputName => $fieldHash) {
    if (isset($input[$inputName])) {
        // Converte o valor para UTF-8
        $valores[$fieldHash] = mb_convert_encoding($input[$inputName], 'UTF-8', 'auto');
    }
}


// CRIA O CARTÃO
$payload = [
  "id_form" => $form_id,
  "origin" => 'https://app.cange.me',
  "values" => $valores,
  "flow_id" => $flow_id
];

file_put_contents("debug_payload.json", json_encode($payload, JSON_PRETTY_PRINT));
file_put_contents("debug_input.json", json_encode($input, JSON_PRETTY_PRINT));
file_put_contents("debug.valores.json", json_encode($valores, JSON_PRETTY_PRINT));
file_put_contents("debug.inputcheck.json", json_encode($input, JSON_PRETTY_PRINT));


$create = curl_init("https://api.cange.me/form/new-answer");
curl_setopt_array($create, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "Origin: https://app.cange.me",
    "Authorization: Bearer $token"
  ],
  CURLOPT_POSTFIELDS => json_encode($payload)
]);

$response = curl_exec($create);
$httpCode = curl_getinfo($create, CURLINFO_HTTP_CODE);
curl_close($create);

$data = json_decode($response, true);

// RESPOSTA
if ($httpCode >= 200 && $httpCode < 300) {
  echo json_encode(["success" => true]);
} else {
  http_response_code($httpCode);
  echo json_encode([
    "success" => false,
    "message" => $data['error'] ?? 'Erro desconhecido ao criar cartão.',
    "debug" => $data
  ]);
}
