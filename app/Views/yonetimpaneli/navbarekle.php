<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menü Ekle</title>
    <link rel="stylesheet" href="<?php echo base_url('yonetim.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="form-container">
    <h2>Menü Ekle</h2>
    <form action="<?php echo base_url('navbarekle'); ?>" method="post">
        <div class="form-group">
            <label for="menu_adi">Menü Adı:</label>
            <input type="text" id="menu_adi" name="menu_adi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gidilecekyer">Uzantı:</label>
            <input type="text" id="gidilecekyer" name="gidilecekyer" class="form-control" required>
        </div>
        <div class="form-group d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">Menü Ekle</button>
            <a href="<?php echo base_url('admin'); ?>" class="btn btn-secondary">Geri Dön</a>
        </div>
    </form>

    <?php if (isset($hata_mesaji) && !empty($hata_mesaji)): ?>
        <div class='alert alert-danger'><?php echo $hata_mesaji; ?></div>
    <?php elseif (isset($basari_mesaji) && !empty($basari_mesaji)): ?>
        <div class='alert alert-success'><?php echo $basari_mesaji; ?></div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
