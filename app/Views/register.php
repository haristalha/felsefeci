<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ol</title>
    <link rel="stylesheet" href="<?php echo base_url('form.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="form-container">
        <h2>Üye Ol</h2>
        <form action="<?php echo base_url('auth/register'); ?>" method="post">
            <div class="form-group">
                <label for="kullanici_adi">Kullanıcı Adı:</label>
                <input type="text" id="kullanici_adi" name="kullanici_adi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" id="sifre" name="sifre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="eposta">E-posta:</label>
                <input type="email" id="eposta" name="eposta" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ad">Ad:</label>
                <input type="text" id="ad" name="ad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="soyad">Soyad:</label>
                <input type="text" id="soyad" name="soyad" class="form-control" required>
            </div>
            <?php if (isset($hata_mesaji)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $hata_mesaji; ?>
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Üye Ol</button>
            <p class="text-center mt-3">
                Zaten hesabın var mı? <a href="<?php echo base_url('auth/login'); ?>">Giriş Yap</a>
            </p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
