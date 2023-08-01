<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
  </head>
  <body>
    <div class="container">
      <h1>Sistem Pendaftaran UKM Paskibra</h1>
      <form action="" method="POST" autocomplete="off">
        <div class="card">
          <label for="nama">Nama Lengkap:</label><br />
          <input type="text" name="nama" id="nama" style="width: 300px" autofocus required minlength="2" />
        </div>
        <div class="card">
          <label for="nim">NIM:</label><br />
          <input type="tel" name="NIM" id="nim" required /><br />
        </div>
        <div class="card">
          <label for="email">Email:</label><br />
          <input type="email" name="email" id="email" required />
        </div>
        <div class="card">
          <label for="nohp">No Hp:</label><br />
          <input type="tel" name="nohp" id="nohp" required pattern="(\+62|62|0)8[1-9][0-9]{6,9}$" /><br />
        </div>
        <div class="card">
          <label for="tempatlahir">Tempat lahir</label><br />
          <input type="text" name="tempatlahir" id="tempatlahir" required />
        </div>
        <div class="card">
          <label for="tgl_lahir">Tanggal Lahir</label><br />
          <input type="date" name="tgl_lahir" id="tgl_lahir" required />
        </div>
        <div class="card">
          <label for="gender">Jenis Kelamin:</label><br />
          <input type="radio" id="perempuan" value="perempuan" name="gender" />
          <label for="perempuan">Perempuan</label><br />
          <input type="radio" id="cowo" value="Laki-laki" name="gender" />
          <label for="cowo">Laki-laki</label><br />
        </div>
        <div class="card">
          <label for="alasan">Alasan masuk UKM Paskibra</label><br />
          <textarea id="alasan" name="alasan" rows="4" cols="50" required></textarea>
        </div>
        <div>
          <button type="submit" name="submit" role="button" class="submit">Submit</button>
          <button type="reset" name="reset" role="button" class="reset">Reset</button>
        </div>
      </form>
    </div>

    <div class="box">
      <h2>Daftar Peserta</h2>
      <table class="box">
        <thead>
          <tr>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alasan Masuk UKM Paskibra</th>
          </tr>
        </thead>
        <tbody>
        <div id="alert"></div>
          <?php include 'function.php'; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
