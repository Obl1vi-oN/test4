<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <p>Hello</p>
    <div>
        <h1>Добавить животное</h1>
        <form action="" method="POST">
            @csrf
            <div class="input">
                <label for="nickname">Кличка</label>
                <input type="text" placeholder="Введите кличку..." name="nickname"  required autofocus>
            </div>
            <div class="input">
                <label for="age">Возраст</label>
                <input type="number" placeholder="Введите возраст..." name="age" required>
            </div>
            <div class="input">
                <label for="breed">Порода</label>
                <input type="text" placeholder="Введите породу..." name="breed" required>
            </div>
            <button type="submit">Добавить</button>
        </form>
    </div>
</div>

</body>
</html>
