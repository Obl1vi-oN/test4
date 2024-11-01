<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        p {
            margin: 0;
            padding: 0;
        }
        form {
            margin-top: 250px;
            width: 600px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            border-radius: 20px;
            border: 1px solid black;
            padding: 20px;
        }
        .input {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input {
            padding: 10px;
            border-radius: 20px;
            border: 1px solid black;
        }
        button {
            padding: 10px;
            border-radius: 20px;
            background-color: black;
            color: white;
            border: 1px solid black;
            cursor: pointer;
        }
        a {
            text-align: center;
            color: gray;
            text-decoration: none;
        }
    </style>
    <title>Registration</title>
</head>
<body>
<div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input">
            <label for="email">Почта</label>
            <input type="text" placeholder="Введите почту..." value="{{ old('name') }}" >
        </div>
        <div class="input">
            <label for="password">Пароль</label>
            <input type="text" placeholder="Введите пароль..." >
        </div>
        <button type="submit">Вход</button>
        <a href="{{ route('register') }}">Или регистрация</a>
    </form>
</div>

</body>
</html>
