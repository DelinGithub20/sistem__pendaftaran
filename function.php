<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['NIM'];
  $email = $_POST['email'];
  $nohp = $_POST['nohp'];
  $tempatlahir = $_POST['tempatlahir'];
  $tanggal_lahir = $_POST['tgl_lahir'];
  $jeniskelamin = $_POST['gender'];
  $alasan = $_POST['alasan'];

// Memeriksa apakah data sudah ada dalam file CSV sebelum menulisnya
$data_exist = false;
$file = fopen("peserta.csv", "r");
while (($data = fgetcsv($file, 1000, ",")) !== false) {
  if ($data[1] === $nim) { // Memeriksa apakah NIM sudah ada dalam file
    $data_exist = true;
    break;
  }
}
fclose($file);

if (!$data_exist) {
  // Jika data belum ada, maka tulis data ke file CSV
  $file = fopen("peserta.csv", "a");
  fputcsv($file, array($nama, $nim, $email, $nohp, $tempatlahir, $tanggal_lahir, $jeniskelamin, $alasan));
  fclose($file);
} else{
  //jika data sudah ada, tampilkan alert 
  echo '<script>document.getElementById("alert").innerHTML = "Data dengan NIM '.$nim.' sudah ada dalam database.";</script>';
}


// Membaca data dari file CSV
if (($handle = fopen("peserta.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
      echo "<tr>";
      echo "<td>$data[0]</td>";
      echo "<td>$data[1]</td>";
      echo "<td>$data[2]</td>";
      echo "<td>$data[3]</td>";
      echo "<td>$data[4]</td>";
      echo "<td>$data[5]</td>";
      echo "<td>$data[6]</td>";
      echo "<td>$data[7]</td>";
      echo "</tr>";
    }
    fclose($handle);
  }
}
?>
