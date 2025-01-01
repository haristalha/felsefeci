<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye İşlemleri</title>
    <link rel="stylesheet" href="<?php echo base_url('yonetim.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container mt-4">
    <h2>Üye İşlemleri</h2>
    <a href="<?php echo base_url('admin'); ?>" class="btn btn-secondary mb-3">Geri Dön</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kullanıcı Adı</th>
            <th scope="col">E-posta</th>
            <th scope="col">Ad</th>
            <th scope="col">Soyad</th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($uyeler) && count($uyeler) > 0): ?>
            <?php foreach ($uyeler as $uye): ?>
                <tr>
                    <td><?php echo htmlspecialchars($uye['iduyeler']); ?></td>
                    <td><?php echo htmlspecialchars($uye['kullanici_adi']); ?></td>
                    <td><?php echo htmlspecialchars($uye['eposta']); ?></td>
                    <td><?php echo htmlspecialchars($uye['ad']); ?></td>
                    <td><?php echo htmlspecialchars($uye['soyad']); ?></td>
                    <td>
                        <a href="<?php echo base_url('uyesil/' . htmlspecialchars($uye['iduyeler'])); ?>"
                           class="btn btn-danger">Üye Sil</a>
                        <a href="<?php echo base_url('uyeduzenle/edit/' . htmlspecialchars($uye['iduyeler'])); ?>"
                           class="btn btn-warning">Üye Düzenle</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan='6'>Henüz üye bulunmamaktadır.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</script>
</body>

</html>
