<?php
if (isset($_COOKIE['Username'])) {
    echo "<h1>Cookie 'Username' ada. Isinya : " .
        $_COOKIE['Username'];
} else {
    echo "<h1>Cookie 'Username' TIDAK ada.</h1>";
}
if (isset($_COOKIE['NamaLengkap'])) {
    echo "<h1>Cookie 'NamaLengkap' ada. Isinya : " .
        $_COOKIE['NamaLengkap'];
} else {
    echo "<h1>Cookie 'NamaLengkap' TIDAK ada.</h1>";
}
echo "<h2>Klik <a href='cookie_01.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie_03.php'>di sini</a> untuk penghapusan cookies</h2>";
?>
