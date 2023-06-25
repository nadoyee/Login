<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Asisten Praktikum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/asisten/search">Cari Asisten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/asisten/simpan">Simpan Asisten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/asisten/update">Update Asisten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/asisten/delete">Hapus Asisten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="login"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
        <h1 class="mt-4">Pendaftaran Asisten Praktikum</h1>
        <table class="table mt-4">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas Praktikum</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asisten as $row): ?>
                <tr>
                    <td><?= $row['NIM'] ?></td>
                    <td><?= $row['NAMA'] ?></td>
                    <td><?= $row['PRAKTIKUM'] ?></td>
                    <td><?= $row['IPK'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>