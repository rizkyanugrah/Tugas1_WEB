<?php
// KONEKSI KE DATABASE
$conn = mysqli_connect('sql105.epizy.com', 'epiz_33863132', 'sWIVvMD8b9RbK', 'epiz_33863132_db_playstation'); // urutannya (hostname,username,password,nama_database)

// Cek koneksi database
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// FUNGSI UNTUK MELAKUKAN REGISTRASI
function registrasi($data)
{
    global $conn;

    $email = htmlspecialchars($data["email"]);
    $status = $data["status"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $gender = $data["gender"];


    // cek username sudah ada apa belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        echo "<script> 
                    alert('USERNAME TELAH DI PAKAI SILAHKAN CARI YANG LAIN!');
                </script>";
        return false;
    }

    // enkripsi password atau mengamankan
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "ALTER TABLE users AUTO_INCREMENT = 1");

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$email', '$status', '$username', '$password', '$gender') ");
    return mysqli_affected_rows($conn);
}


// FUNCTION FOR LOGIN
function login($data)
{
    global $conn;

    $username = mysqli_real_escape_string($conn, $data['username']);
    $password = mysqli_real_escape_string($conn, $data['password']);


    // die($username);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $pass_verif = password_verify($password, $row['password']);
        if ($pass_verif != true) {
            header('location: index.php?pesan=gagal');
        } else {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            header("Location: ../home/home.php");
            exit;
        }
    } else {
        header('location: index.php?pesan=gagal');
    }
}
