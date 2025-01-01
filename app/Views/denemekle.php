<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deneme Ekle</title>
    <link rel="stylesheet" href="<?php echo base_url('form.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="form-container">
    <h2>Deneme Ekle</h2>
    <?php if (isset($basari_mesaji)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $basari_mesaji; ?>
        </div>
    <?php elseif (isset($hata_mesaji)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $hata_mesaji; ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo base_url('denemeekle'); ?>" method="post">
        <div class="form-group">
            <label for="baslik">Başlık:</label>
            <input type="text" id="baslik" name="baslik" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="icerik">İçerik:</label>
            <textarea id="icerik" name="icerik" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Deneme Ekle</button>
    </form>
    <br>
    <a href="<?php echo base_url('profilim'); ?>" class="btn btn-secondary">Profilime Geri Dön</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
