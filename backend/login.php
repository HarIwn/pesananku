<?php
require 'connection.php';
session_start();

if (isset($_SESSION['login'])) {
    header('location: ../index.php');
    exit;
}

$error = ''; // Inisialisasi variabel error

if (isset($_POST['login'])) {
    $client_name = $_POST['client_name'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk menghindari SQL injection
    $stmt = $koneksi->prepare("SELECT * FROM client WHERE client_name = ?");
    $stmt->bind_param("s", $client_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Langsung membandingkan password
        if ($password === $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['client_name'] = $client_name;

            echo "window.alert('Login Berhasil!')";

            header('location: ../client/index.php');
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css   ">
    <link rel="stylesheet" href="../src/vendor/bootstrap/css/styles.min.css" />
    <style>
        * {
            overflow: hidden;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image ">
                            <img style="user-select: none; -webkit-user-select-: none;"
                                class="img-fluid mx-auto w-100 p-1 h-100"
                                src="../src/vendor/bootstrap/images/backgrounds/Banner-Hero.png"
                                style="object-fit: contain;">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Pesananku</h1>
                                    <small>Pesananku membuat semuanya jadi praktis.</small>
                                </div>
                                <?php if ($error): ?>
                                    <div class="alert alert-danger"><?php echo $error; ?></div>
                                <?php endif; ?>
                                <form method="post" class="user">
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control" id="client_name" name="client_name"
                                            placeholder="Masukan Email" required>
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="password" class="form-control" id="exampleInputPassword"
                                            name="password" placeholder="Masukan Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 w-100" name="login">Login</button>
                                </form>
                                <div class="w-100 d-flex justify-content-between mt-3">
                                    <a href="">Lupa Password?</a>
                                    <a href=""><u>Buat akun</u></a>
                                </div>
                                <div style="opacity: .6;" class="separator mt-2">DENGAN</div>
                                <div class="container d-flex row mt-2">
                                    <div class="col">
                                        <a style="text-decoration: none; display:inline-block; width: 180px;" href="">
                                            <div style="border: 1px solid #252525; padding: 10px;"
                                                class="col d-flex justify-content-center align-items-center">
                                                <svg viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg" fill="#000000" width="24"
                                                    height="24">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16"
                                                            fill="#00ac47"></path>
                                                        <path
                                                            d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16"
                                                            fill="#4285f4"></path>
                                                        <path
                                                            d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z"
                                                            fill="#ffba00"></path>
                                                        <polygon fill="#2ab2db"
                                                            points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374">
                                                        </polygon>
                                                        <path
                                                            d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z"
                                                            fill="#ea4435"></path>
                                                        <polygon fill="#2ab2db"
                                                            points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626">
                                                        </polygon>
                                                        <path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z"
                                                            fill="#4285f4"></path>
                                                    </g>
                                                </svg>
                                                <span style="color: #000; margin: 0 .2em;">Google</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>