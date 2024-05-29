<?php
    include_once("./connect.php");
    
    if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nmr_telp = $_POST["nmr_telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO staff VALUES (
        NULL, '$nama', '$nmr_telp', '$email'
    )");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form Tambah Data Staff</h1>
    <form action="" method="post">
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input required type="text" class="form-control" id="nama" aria-describedby="nama" name="nama">
    </div>
  
    <div class="mb-3">
        <label for="nmr_telp" class="form-label">Telp</label>
        <input required type="text" class="form-control" id="nmr_telp" name="nmr_telp">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input required type="email" class="form-control" id="email" name="email">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a class="btn btn-success" href="./staff.php">Kembali ke halaman data staff</a>
    </form>
    </div>
</body>
</html>