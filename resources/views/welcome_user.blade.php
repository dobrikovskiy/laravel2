<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Привет, {{ $first_name }}!</h1>
    <p>Ваши данные:</p>
    <ul>
        <li><strong>Имя:</strong> {{ $first_name }}</li>
        <li><strong>Фамилия:</strong> {{ $last_name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
    </ul>
</body>
</html>