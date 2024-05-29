<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h2 class="my-4">Register</h2>
    <form method="POST" ACTION="./register-proses.php">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="register" class="btn btn-primary" name="register">Register</button>
  <a class="btn btn-success" href="./login.php">Login</a>
    </form>
    </div>
</body>
</html>