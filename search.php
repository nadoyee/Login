<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hapus Data</title>
</head>
<style>
body {
    background-color: pink;
}
</style>

<body>
    <div class="container">
        <div class="p-4 text-white rounded" style="background-color: grey; ">
            <div class="jumbotron">
                <h1>Pencarian Asisten Praktikum</h1>
            </div>

            <form action="/asisten/search" method="post">
                <?= csrf_field() ?>
                <div class="form-group mt-4">
                    <label for="key">Pencarian:</label>
                    <input type="text" class="form-control" name="key" id="key">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>

            <?php if (!empty($hasil)) : ?>
            <div class="bg-secondary p-4 mt-4 text-white rounded">
                <h1>Hasil Pencarian</h1>
                <p>Nama: <?= $hasil['NAMA'] ?></p>
                <p>Praktikum: <?= $hasil['PRAKTIKUM'] ?></p>
                <p>IPK: <?= $hasil['IPK'] ?></p>
            </div>
            <?php endif; ?>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>