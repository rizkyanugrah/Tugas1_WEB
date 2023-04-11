<?php
require '../functions.php';

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "
        <script>
            alert('Selamat Anda telah berhasil registrasi silahkan Login!!!');
            window.location.href = '../index.php';
        </script>
        ";
    } else {
        echo "
        <script>    
            alert('Anda Gagal Registreasi');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-holder">
        <div class="form-content">
            <div class="form-items">
                <h3 style="text-align: center;">REGISTRATION FORM</h3>
                <p style="text-align: center;">Fill in the data below.</p>
                <form class="requires-validation" method="post" novalidate>
                    <div class="col-md-12">
                        <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                        <div class="valid-feedback">Email field is valid!</div>
                        <div class="invalid-feedback">Email field cannot be blank!</div>
                    </div>

                    <div class="col-md-12">
                        <select class="form-select mt-3" name="status" required>
                            <option selected disabled value="">Status</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Anak - Anak">Anak - Anak</option>
                            <option value="Dewasa">Dewasa</option>
                        </select>
                        <div class="valid-feedback">You selected a position!</div>
                        <div class="invalid-feedback">Please select a position!</div>
                    </div>

                    <div class="col-md-12">
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                        <div class="valid-feedback">Username field is valid!</div>
                        <div class="invalid-feedback">Username field cannot be blank!</div>
                    </div>

                    <div class="col-md-12">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                        <div class="valid-feedback">Password field is valid!</div>
                        <label class="informasi mt-2">
                            Password Anda <span class="status lemah">LEMAH</span>
                        </label>
                        <div class="invalid-feedback">Password field cannot be blank!</div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label class="mb-3 mr-1" for="gender">Gender : </label>

                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="Male" required>
                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="Female" required>
                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                        <div class="valid-feedback mv-up">You selected a gender!</div>
                        <div class="invalid-feedback mv-up">Please select a gender!</div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label">I confirm that all data are correct</label>
                        <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                    </div>


                    <div class="form-button mt-3">
                        <button id="submit" type="submit" name="submit" class="btn btn-primary">Register</button>
                        <a href="../index
                        .php" class="btn btn-primary ml-5">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="register.js"></script>
</body>

</html>