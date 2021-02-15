<?php
  include "../../koneksi.php";

  $query = "SELECT ph.*, a.* FROM pinjaman_header AS ph JOIN anggota AS a ON ph.noanggota = a.noanggota ORDER BY ph.id_pinjam DESC";
  $result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Data Pinjaman</title>
</head>
<body>
  <h1>CARI DATA PINJAM</h1>
  <form action="detail.php" method="GET">
      <select name="id_pinjaman" id="id_pinjam">
        <option value="" selected>ID Pinjaman | Nama Anggota</option>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
          <option value="<?=$row["id_pinjam"];?>"><?=$row["id_pinjam"];?> | <?=$row["namaanggota"];?> (<?=$row["noanggota"];?>)</option>
        <?php endwhile; ?>
      </select>
      <button type="submit" name="buttonSubmit" id="buttonSubmit">Search</button>
    </div>
  </form>
  </div>
</body>
</html>