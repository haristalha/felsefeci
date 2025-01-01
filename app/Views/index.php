<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denemeler</title>
    <link rel="stylesheet" href="<?php echo base_url('denemeler.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('navbar.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .deneme h3 a {
            color: #000;
            text-decoration: none;
        }

        .deneme h3 a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<?php include 'iceaktarmalar/navbar.php'; ?>
<div class="container mt-5 pt-5">
    <h2 class="text-center">Denemeler</h2>
    <div class="deneme-container">
        <?php if (count($denemeler) > 0): ?>
            <?php foreach ($denemeler as $deneme): ?>
                <div class="deneme">
                    <h3>
                        <a href="deneme.php?id=<?php echo htmlspecialchars($deneme['id']); ?>">
                            <?php echo htmlspecialchars($deneme['baslik']); ?>
                        </a>
                    </h3>
                    <p><?php echo htmlspecialchars(mb_strimwidth($deneme['icerik'], 0, 100, "...")); ?></p>
                    <p><small><?php echo htmlspecialchars($deneme['tarih']); ?></small></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Henüz eklenmiş deneme yok.</p>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
