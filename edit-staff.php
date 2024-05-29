<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE  id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);
    
    if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nmr_telp = $_POST["nmr_telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', nmr_telp='$nmr_telp', email='$email' WHERE id=$id");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form Edit Data Staff</h1>
    <form action="" method="post">
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input value="<?php echo $staff['nama'] ?>" required type="text" class="form-control" id="nama" aria-describedby="nama" name="nama">
    </div>

    <div class="mb-3">
        <label for="nmr_telp" class="form-label">Telp</label>
        <input  value="<?php echo $staff['nmr_telp'] ?>" required type="text" class="form-control" id="nmr_telp" name="nmr_telp">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input  value="<?php echo $staff['email'] ?>" required type="text" class="form-control" id="email" name="email">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a class="btn btn-success" href="./staff.php">Kembali ke halaman staff</a>
    </form>
    </div>
</body>
</html>