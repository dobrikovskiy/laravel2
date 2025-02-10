<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h1>User Form</h1>
    <form method="POST" action="/store_form">
        @csrf <!-- CSRF-токен для защиты -->
        <label for="first_name">Имя:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="last_name">Фамилия:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <button type="submit">Ок</button>
    </form>
</body>
</html>