<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE  id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);
    
    if(isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "UPDATE buku SET judul='$judul', isbn='$isbn', unit='$unit' WHERE id=$id");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form Edit Data Buku</h1>
    <form action="" method="post">
    
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input value="<?php echo $buku['judul'] ?>" required type="text" class="form-control" id="judul" aria-describedby="judul" name="judul">
        <div id="judul" class="form-text">Masukkan judul buku yang akan ditambahkan</div>
    </div>
  
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input value="<?php echo $buku['isbn'] ?>" required type="text" class="form-control" id="isbn" name="isbn">
    </div>

    <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input value="<?php echo $buku['unit'] ?>" required type="number" class="form-control" id="unit" name="unit">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a class="btn btn-success" href="./buku.php">Kembali ke halaman buku</a>
    </form>
    </div>
</body>
</html>