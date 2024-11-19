<!-- Inisialisasi connection.php agar dapat menyambung ke database -->
<?php
define('HOST_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'kejorastore_db');

$koneksi = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

?>