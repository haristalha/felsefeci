<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .admin-panel {
            background-color: #fff;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .admin-panel h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
        }

        .menu ul li {
            margin-bottom: 10px;
        }

        .menu ul li a {
            display: block;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: #0056b3;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="admin-panel">
    <h1>Admin Paneli</h1>
    <div class="menu">
        <ul>
            <li><a href="<?php echo base_url('uyeislem'); ?>">Üye İşlemleri</a></li>
            <li><a href="<?php echo base_url('navbarekle'); ?>">Menü Ekle</a></li>
            <li><a href="<?php echo base_url('duyuruislem'); ?>">Duyuru İşlemleri</a></li>
            <li><a href="<?php echo base_url('denemeislem'); ?>">Deneme İşlemleri</a></li>
            <li><a href="<?php echo base_url('admin/logout'); ?>">Çıkış Yap</a></li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
