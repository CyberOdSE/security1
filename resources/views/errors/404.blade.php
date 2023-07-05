<!DOCTYPE html>
<html>
<head>
    <title>404 - Page Not Found</title>
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            color: #000;
            font-family: Arial, sans-serif;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #333;
        }

        .beam {
            display: inline-block;
            width: 2px;
            height: 30px;
            background-color: #000;
            margin: 0 10px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="content">
    <div class="title">
        404: The page you are looking for was not found! Try another search instead or go back to the home page.
    </div>
    <div>
        <span class="button"><a href="{{ url('/') }}" style="color: #fff;">Back Home</a></span>
        <span class="beam"></span>
    </div>
</div>
</body>
</html>
