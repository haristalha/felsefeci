<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilim</title>
    <link rel="stylesheet" href="<?php echo base_url('form.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="form-container">
    <h2>Profilim</h2>
    <form method="post" action="<?php echo base_url('profilim'); ?>">
        <div class="form-group">
            <label for="ad">Ad:</label>
            <input type="text" id="ad" name="ad" class="form-control" value="<?php echo $ad; ?>" required>
        </div>
        <div class="form-group">
            <label for="soyad">Soyad:</label>
            <input type="text" id="soyad" name="soyad" class="form-control" value="<?php echo $soyad; ?>" required>
        </div>
        <div class="form-group">
            <label for="eposta">E-posta:</label>
            <input type="email" id="eposta" name="eposta" class="form-control" value="<?php echo $eposta; ?>" required>
        </div>
        <div class="form-group">
            <label for="sifre">Şifre Değiştir:</label>
            <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Yeni şifreniz">
        </div>
        <button type="submit" class="btn btn-primary">Bilgileri Güncelle</button>
        <a href="<?php echo base_url('denemeekle'); ?>" class="btn btn-success">Deneme Ekle</a>
    </form>
    <br>
    <a href="<?php echo base_url('profilim/logout'); ?>" class="btn btn-danger">Çıkış Yap</a>
    <a href="<?php echo base_url(); ?>" class="btn btn-secondary">Geri Dön</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
