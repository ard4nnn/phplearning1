<?php
include 'koneksi.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sql = "UPDATE user SET username = '$username', password = '$password', nama = '$nama', email = '$email' WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='materi4.php';</script>";
        exit;
    } else {
        echo "Data gagal diupdate";
    }
}

elseif (isset($_POST['username']) && !isset($_POST['id'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    $query = mysqli_query($koneksi, $sql);
    
    if ($query) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href='materi4.php';</script>";
        exit;
    } else {
        echo "Data gagal ditambahkan";
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM user WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='materi4.php';</script>";
        exit;
    } else {
        echo "Data gagal dihapus";
    }
}
?>

<?php if (isset($_GET['edit'])): 
    $id = $_GET['edit'];
    $sql = "SELECT * FROM user WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($query);
    if ($row):
?>
    <h3>Edit Data User</h3>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
        Username : <input type="text" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required><br><br>
        Password : <input type="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required><br><br>
        Nama : <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required><br><br>
        Email : <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
        <input type="submit" value="Update data">
        <a href="materi4.php"><button type="button">Batal</button></a>
    </form>
    <hr>

<?php endif; else: ?>
    <h3>Tambah Data User</h3>
    <form method="post">
        Username : <input type="text" name="username" required><br><br>
        Password : <input type="password" name="password" required><br><br>
        Nama : <input type="text" name="nama" required><br><br>
        Email : <input type="email" name="email" required><br><br>
        <input type="submit" value="Kirim data">
    </form>
    <hr>
<?php endif; ?>

<h3>Daftar Data User</h3>
<table border="1">
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
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
    echo "<td>" . htmlspecialchars($row['password']) . "</td>";
    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td> 
            <a href='materi4.php?edit=" . $row['id'] . "'>Edit</a> | 
            <a href='materi4.php?hapus=" . $row['id'] . "' onclick=\"return confirm('Yakin ingin menghapus data " . htmlspecialchars($row['username']) . "?');\">Hapus</a>
          </td>";
    echo "</tr>";
}
?>
</table>