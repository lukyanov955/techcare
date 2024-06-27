<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница приветствия</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Получаем текущее время
            $currentDateTime = date('d M Y H:i:s');

            // Получаем имя пользователя из параметров URL, если оно передано
            $userName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Гость';

            // Приветствие пользователя
            echo "<h1>Добро пожаловать, $userName!</h1>";

            // Отображение текущей даты и времени
            echo "<p>Текущее время: $currentDateTime</p>";
        ?>
    </div>
</body>
</html>
