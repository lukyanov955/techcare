<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2,1,С2траница приветствия</title>
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
        .time {
            font-weight: bold;
            color: #333;
        }
    </style>
    <script>
        // Функция для обновления времени в реальном времени
        function updateTime() {
            const timeElement = document.getElementById('currentTime');
            const now = new Date();
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric'
            };
            const formattedTime = now.toLocaleDateString('ru-RU', options);
            timeElement.textContent = formattedTime;
        }

        // Обновляем время каждую секунду
        setInterval(updateTime, 1000);

        // Обновляем время при загрузке страницы
        window.onload = updateTime;
    </script>
</head>
<body>
    <div class="container">
        <?php
            // Получаем имя пользователя из параметров URL, если оно передано
            $userName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Гость';

            // Приветствие пользователя
            echo "<h1>Добро пожаловать, $userName!</h1>";
        ?>
        <p>Текущее время: <span id="currentTime" class="time"></span></p>
    </div>
</body>
</html>
