<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="<?php echo base_url('navbar.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<nav class="navbar">
    <ul>
        <?php if (isset($menuler) && count($menuler) > 0): ?>
            <?php foreach ($menuler as $menu): ?>
                <li><a href="<?php echo htmlspecialchars($menu['gidilecekyer']); ?>">
                        <?php echo htmlspecialchars($menu['menu_adi']); ?>
                    </a></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Menü öğeleri bulunamadı.</li>
        <?php endif; ?>
    </ul>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
