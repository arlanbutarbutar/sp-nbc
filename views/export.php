<?php require_once("../controller/script.php");
require_once("redirect.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-data-uji-pasien-rsupp-betun.xls");
?>

<center>
  <h3>Laporan Data Uji Pasien Rawat Jalan Dan Rawat Inap RSUPP Betun</h3>
</center>
<table border="1">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">Jenis Rawat</th>
      <th scope="col" class="text-center">Jenis Kelamin</th>
      <th scope="col" class="text-center">Usia</th>
      <th scope="col" class="text-center">Lama Idap</th>
      <th scope="col" class="text-center">Penyakit</th>
    </tr>
  </thead>
  <tbody>
    <?php if (mysqli_num_rows($data_uji) > 0) {
      $no = 1;
      while ($row = mysqli_fetch_assoc($data_uji)) { ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $row["nama"] ?></td>
          <td><?= $row["rawat"] ?></td>
          <td><?= $row["jenis_kelamin"] ?></td>
          <td><?= $row["usia"] ?></td>
          <td><?= $row["lama_idap"] ?></td>
          <td><?= $row["nama_penyakit"] ?></td>
        </tr>
    <?php }
    } ?>
  </tbody>
</table>