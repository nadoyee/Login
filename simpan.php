<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hapus Data</title>

    <style>
    form {
        width: 300px;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
    }

    input[type="submit"] {
        width: 104%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffc0cb;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .bg-primary {
        background-color: grey;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="p-4 text-white rounded" style="background-color: grey; ">
            <div class="jumbotron">
                <h1>PENDAFTARAN ASISTEN PRAKTIKUM</h1>
            </div>

            <form action="/asisten/simpan" method="post">
                <?= csrf_field() ?>
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" />

                <label for="nama">NAMA:</label>
                <input type="text" id="nama" name="nama" />

                <label for="praktikum">PRAKTIKUM:</label>
                <input type="text" id="praktikum" name="praktikum" />

                <label for="ipk">IPK:</label>
                <input type="text" id="ipk" name="ipk" />
                <br><br>
                <input type="submit" value="Simpan" />
            </form>
</body>

</html>