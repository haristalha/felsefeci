<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FELSEFECİN </title>
    <style>
        .deneme {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-height: 300px;
        }

        .deneme h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .deneme p {
            font-size: 1em;
            color: #333;
        }

        .deneme p small {
            color: #777;
        }

        .deneme a {
            color: #007bff;
            text-decoration: none;
        }

        .deneme a:hover {
            text-decoration: underline;
        }

        .navbar {
            width: 100%;
            height: 50px;
            background-color: #333;
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar li {
            display: inline-block;
            margin: 0 10px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 15px;
        }

        .navbar a:hover {
            background-color: #111;
        }

        .navbar li.active a {
            color: #f00;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php include 'iceaktarmalar/navbar.php'; ?>
<div class="container mt-5 pt-5">
    <h2 class="text-center">FELSEFECİN</h2>
    <div class="deneme-container">
        <div class="deneme">
            <p>s</p>
            <p><small>s</small></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
