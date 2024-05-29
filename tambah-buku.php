<?php
    include_once("./connect.php");
    
    if(isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (
        NULL, '$judul', '$isbn', $unit
    )");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form Tambah Data Buku</h1>
    <form action="" method="post">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input required type="text" class="form-control" id="judul" aria-describedby="judul" name="judul">
        <div id="judul" class="form-text">Masukkan judul buku yang akan ditambahkan</div>
    </div>
  
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input required type="text" class="form-control" id="isbn" name="isbn">
    </div>

    <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input required type="number" class="form-control" id="unit" name="unit">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a class="btn btn-success" href="./buku.php">Kembali ke halaman data buku</a>
</form>
    </div>
</body>
</html>