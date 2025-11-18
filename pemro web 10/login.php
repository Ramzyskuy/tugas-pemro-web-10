<?php
$username = $_POST['username'];
$password = $_POST['pass'];

if ((($username == "wawan") && ($password == "admin123")) ||
    (($username == "amir") && ($password == "passamir"))) {
    echo "Login sukses";
} else {
    echo "Login gagal";
}
?>