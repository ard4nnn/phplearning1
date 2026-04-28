<?php 
  function hello()
{
    echo "Selamat datang diweb saya";
}
hello();

echo"<br>===============================<br>";

function tambah(int $a, int $b)
{
    $hasil = $a + $b;
    return $hasil;
}
tambah(10,20);
echo "hasil dari 10 + 20 adalah ".tambah(10,20);
echo "<br>";

function kurang(int $a, int $b)
{
    $hasil = $a - $b;
    return $hasil;
}
function kali(int $a, int $b)
{
    $hasil = $a * $b;
    return $hasil;
}
function bagi(int $a, int $b)
{
    $hasil = $a / $b;
    return $hasil;
}
function login(string $username, string $password)
{
    if ($username == "ardannn" && $password == "1234567") {
        return true;
    } else {
        return false;
    }
}
    
?>

<?php
echo"<br>===============================<br>";
?>

<form method="post">
    Masukkan Angka1 : <input type="number" name="angka">
    Masukkan Angka2 : <input typer="number" name="angka2">
    <input type="submit" name="Kirim" value="Kirim">
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $angka2 = $_POST['angka2'];
    echo "hasil dari ".$angka." + ".$angka2." adalah ".tambah($angka,$angka2);
    echo "<br>";
    echo "hasil dari ".$angka." - ".$angka2." adalah ".kurang($angka,$angka2);
    echo "<br>";
    echo "hasil dari ".$angka." * ".$angka2." adalah ".kali($angka,$angka2);
    echo "<br>";
    echo "hasil dari ".$angka." / ".$angka2." adalah ".bagi($angka,$angka2);
}
?>

<?php
echo"<br>===============================<br>";
?>

<form method="post">
    <label for="">Username</label>
    <input type="text" name="username">
    <label for="">Password</label>
    <input type="password" name="password">
    <input type="submit" name="Kirim" value="Kirim">
</form>

<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (login($username,$password)) {
        echo "Login berhasil";
    } else {
        echo "Login gagal";
    }
}
?>