<form method="post">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" name="Kirim" value="Kirim">
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    for ($i = 1; $i <= $angka; $i++) {
        echo "ini angka ke $i <br>";
    }
   }
?>
