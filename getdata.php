<?php
// // Перевірка, чи був відправлений POST-запит
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Прийняття значень змінних
//     $days = isset($_POST['days']) ? $_POST['days'] : '';
//     $fullness = isset($_POST['fullness']) ? $_POST['fullness'] : '';

//     // Шлях до файлу для запису
//     $filename = 'variables.txt';

//     // Формування рядка для запису
//     $data = "\$days = $days\n\$fullness = $fullness\n";

//     // Запис у файл
//     file_put_contents($filename, $data);

//     echo "Дані збережено.";
// } else {
//     echo "Чекаю на POST-запит.";
// }

// Встановлюємо заголовки для дозволу доступу з будь-якого джерела
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Встановлюємо ваш секретний ключ для авторизації
$secretKey = 'Secret_key_12345';

// Отримуємо заголовок авторизації
$headers = getallheaders();
$authHeader = isset($headers['Authorization']) ? $headers['Authorization'] : null;

// Перевірка авторизації
if ($authHeader !== $secretKey) {
    // Якщо ключ неправильний, повертаємо помилку
    http_response_code(403);
    echo json_encode(['message' => 'Unauthorized access.']);
    exit;
}

// Отримуємо JSON-дані з тіла запиту
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

// Перевірка чи JSON правильно розпарсився
if (json_last_error() === JSON_ERROR_NONE) {
    // Встановлюємо шлях до текстового файлу
    $file = 'data.txt';

    // Формуємо строку для запису в файл
    $dataToWrite = "Days: " . $input['days'] . "\n";
    $dataToWrite .= "Fullness: " . $input['fullness'] . "\n";
    $dataToWrite .= "Days_ru: " . $input['days_ru'] . "\n";
    $dataToWrite .= "Fullness_ru: " . $input['fullness_ru'] . "\n";

    // Відкриваємо файл для запису (додаємо нові дані до існуючих)
    $handle = fopen($file, 'w');
    if ($handle) {
        // Записуємо дані в файл
        fwrite($handle, $dataToWrite);
        // Закриваємо файл
        fclose($handle);
        // Відправляємо успішну відповідь
        http_response_code(200);
        echo json_encode(['message' => 'Data saved successfully.']);
    } else {
        // Відправляємо помилку, якщо не вдалося відкрити файл
        http_response_code(500);
        echo json_encode(['message' => 'Unable to open file for writing.']);
    }
} else {
    // Відправляємо помилку, якщо JSON не вірний
    http_response_code(400);
    echo json_encode(['message' => 'Invalid JSON received.']);
}
