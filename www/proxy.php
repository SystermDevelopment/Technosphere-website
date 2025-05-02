<?php
if (!isset($_GET['target'])) {
    http_response_code(400);
    echo json_encode(['error' => 'targetパラメータが必要です']);
    exit;
}

// URLのホワイトリスト
$target = $_GET['target'];
$whitelist = [
    'http://pose.technosphere.co.jp/',
];

if (!in_array($target, $whitelist)) {
    http_response_code(403);
    echo json_encode(['error' => '許可されていないURLです']);
    exit;
}

$ch = curl_init($target);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode(['error' => '接続エラー']);
} else {
    http_response_code($httpCode);
    header('Content-Type: application/json');
    echo $response;
}
curl_close($ch);
?>
