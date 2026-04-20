<form method="post">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" name="Kirim" value="Kirim">
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
   if ($angka % 2 == 0)
    echo "Genap";
else
    echo "Ganjil";
}
?>