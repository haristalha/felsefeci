<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Düzenle</title>
    <link rel="stylesheet" href="<?php echo base_url('yonetim.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container mt-4">
    <h2>Üye Düzenle</h2>
    <form action="<?php echo base_url('uyeduzenle/edit/' . $id); ?>" method="post">
        <div class="mb-3">
            <label for="kullanici_adi" class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" id="kullanici_adi" name="kullanici_adi"
                   value="<?php echo $kullanici_adi; ?>" required>
        </div>
        <div class="mb-3">
            <label for="eposta" class="form-label">E-posta</label>
            <input type="email" class="form-control" id="eposta" name="eposta" value="<?php echo $eposta; ?>" required>
        </div>
        <div class="mb-3">
            <label for="ad" class="form-label">Ad</label>
            <input type="text" class="form-control" id="ad" name="ad" value="<?php echo $ad; ?>" required>
        </div>
        <div class="mb-3">
            <label for="soyad" class="form-label">Soyad</label>
            <input type="text" class="form-control" id="soyad" name="soyad" value="<?php echo $soyad; ?>" required>
        </div>
        <?php if (isset($hata_mesaji)): ?>
            <div class="alert alert-danger" role="alert"><?php echo $hata_mesaji; ?></div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Üye Düzenle</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
