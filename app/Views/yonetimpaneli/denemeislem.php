<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deneme İşlemleri</title>
    <link rel="stylesheet" href="<?php echo base_url('yonetim.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container mt-4">
    <h2 class="mb-3">Deneme İşlemleri</h2>

    <div class="d-flex justify-content-start mb-3">
        <a href="<?php echo base_url('admin'); ?>" class="btn btn-secondary me-3">Geri Dön</a>
    </div>

    <form action="<?php echo base_url('denemeislem'); ?>" method="post">
        <div class="mb-3">
            <label for="baslik" class="form-label">Başlık:</label>
            <input type="text" class="form-control" id="baslik" name="baslik" required>
        </div>
        <div class="mb-3">
            <label for="icerik" class="form-label">İçerik:</label>
            <textarea class="form-control" id="icerik" name="icerik" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Deneme Ekle</button>
    </form>

    <?php if (isset($hata_mesaji) && !empty($hata_mesaji)): ?>
        <div class='alert alert-danger mt-3'><?php echo $hata_mesaji; ?></div>
    <?php elseif (isset($basari_mesaji) && !empty($basari_mesaji)): ?>
        <div class='alert alert-success mt-3'><?php echo $basari_mesaji; ?></div>
    <?php endif; ?>

    <h3 class="mt-5">Deneme Listesi</h3>
    <div class="table-responsive">
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Başlık</th>
                <th scope="col">İçerik</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($denemeler) && count($denemeler) > 0): ?>
                <?php foreach ($denemeler as $deneme): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($deneme['id']); ?></td>
                        <td><?php echo htmlspecialchars($deneme['baslik']); ?></td>
                        <td><?php echo htmlspecialchars($deneme['icerik']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan='3'>Henüz deneme bulunmamaktadır.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
