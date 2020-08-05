<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style type="text/css">
        .button {
            background-color: #0080ff;
            border: none;
            color: #ffffff;
            border-radius: 5px;
            display: inline-flex;
            font-size: 26px;
            padding: 10px 20px;
            transition-duration: 0.4s;
        }

        .button:hover {
            color: #0080ff;
            background-color: #ffffff;
        }

        .body {
            background-color: #296d98;
            justify-content: center;
            display: flex;
            padding-top: 50px;
        }

        .container {
            background-color: #a3a3a3;
            border: 3px solid #0121fe;
            border-radius: 12px;
            height: 50ex;
            width: 100ex;
            line-height: 70px;
            text-align: center;
        }

        .title {
            color: #000000;
            font-size: 36px;
            text-decoration: underline;
        }
    </style>
</head>

<body class="body">
    <div class="container">
        <h1 class="title">Welcome</h1>
        <button class="button" onclick="document.location='index.php?param=users'">Users</button></br>
        <button class="button" onclick="document.location='index.php?param=advertisements'">Advertisements</button>
    </div>
</body>
</html>