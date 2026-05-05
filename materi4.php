<?php
include 'koneksi.php';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    $query = mysqli_query($koneksi, $sql);
    
    if ($query) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }
}

?>

<form method ="post">
    Username : <input type="text" name="username"><br><br>
    Password : <input type="password" name="password"><br><br>
    Nama : <input type="text" name="nama"><br><br>
    Email : <input type="email" name="email"><br><br>
    <input type="submit" value="Kirim data">
</form>

<table border = "1">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

<?php
$sql = "SELECT * FROM user";
$query = mysqli_query($koneksi, $sql);
while ($row = mysqli_fetch_assoc($query)) {
    echo"<tr>";
    echo"<td>" . $row['id'] . "</td>";
    echo"<td>" . $row['username'] . "</td>";
    echo"<td>" . $row['password'] . "</td>";
    echo"<td>" . $row['nama'] . "</td>";
    echo"<td>" . $row['email'] . "</td>";
    echo"<td> <a href='materi4.php?edit=$row[id]'>Edit</a> | <a href='materi4.php?hapus=$row[id]'>Hapus</a> </td>";
    echo"</tr>";
}
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM user WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "Data berhasil dihapus";
    } else {
        echo "Data gagal dihapus";
    }
}
?>
</table>