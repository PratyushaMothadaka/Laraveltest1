<!doctype html>
<html lang="en">
    <head>
        <title> Welcome Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=" https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple|anaglyph">
    </head>
    <style>
    body{
            text-align:center;
            font-family: 'Rancho',serif;
            font-size: 100px;
            font-weight:200;
            height:100vh;
            text-shadow: 14px 14px 4px #ff9999;
            margin:0;
        }
        .p{
            font-family: 'Rancho', serif;
            font-size: 70px
        }
    </style>
    <body>
       <h1 style="color:#800000;">My Posts</h1>
       <p> {{$data}}</p>
    </body>
</html>