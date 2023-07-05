<!DOCTYPE html>
<html>
<head>
    <title>500 - Internal Server Error</title>
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

        .description {
            font-size: 18px;
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
        500: Internal Server Error
    </div>
    <div class="description">
        Oops! Something went wrong on our side.
        <br>
        Try to go back to the previous page or home page instead, or feel free to contact us when this error keeps showing.
    </div>
    <div>
        <span class="button"><a href="javascript:history.back()" style="color: #fff;">Previous Page</a></span>
        <span class="beam"></span>
        <span class="button"><a href="{{ url('/') }}" style="color: #fff;">Home Page</a></span>
        <span class="beam"></span>
        <span class="button"><a href="{{ url('/posts/contact') }}" style="color: #fff;">Contact Support</a></span>
    </div>
</div>
</body>
</html>
