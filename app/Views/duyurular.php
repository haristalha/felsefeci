<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyurular</title>
    <link rel="stylesheet" href="<?php echo base_url('denemeler.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('navbar.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php include 'iceaktarmalar/navbar.php'; ?>
<div class="container mt-5 pt-5">
    <h2 class="text-center">Duyurular</h2>
    <div class="deneme-container">
        <?php if (count($duyurular) > 0): ?>
            <?php foreach ($duyurular as $duyuru): ?>
                <div class="deneme">
                    <h3><?php echo htmlspecialchars($duyuru['baslik']); ?></h3>
                    <p><?php echo htmlspecialchars(mb_strimwidth($duyuru['icerik'], 0, 100, "...")); ?></p>
                    <p><small><?php echo htmlspecialchars($duyuru['tarih']); ?></small></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Henüz eklenmiş duyuru yok.</p>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
