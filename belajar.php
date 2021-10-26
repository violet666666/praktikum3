<?php
$nama_barang = array("Terigu", "Gula", "Kopi", "Mentega", "Beras");
$nomor = array(1, 2, 3, 4, 5);
$berat = array(2, 3, 0.5, 1.5, 10);
$stok = array(100, 0, 50, 20, 22);
?>
<!DOCTYPE html>
<html style="background-color:#191970;">
  <head>
    <style>
      * {
        font-family: sans-serif;
        color: white;
      }
    </style>
  </head>
  <body>
    <h2 style="Color:#FFFFFF; text-align:center; margin-top : 200px;">Toko Kelontong Pak Joy </h2>
    <table class="father" border='4' style="border-radius:10px; margin-left: auto; margin-right: auto; margin-top : 10px;">
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Berat(kg)</th>
        <th>Berat(g)</th>
        <th>Berat(mg)</th>
        <th>Berat(liter)</th>
        <th>Stok</th>
      </tr> <?php for ($i=0; $i < 5; $i++) { ?> <?php $color;
        if ($stok[$i] == 0) {
        $color = "style='background-color: red;'";
        }else{
        $color = "style='background-color: #191970;'";
        } ?> <tr>
        <td> <?php echo $nomor[$i]; ?> </td>
        <td> <?php echo $nama_barang[$i]; ?> </td>
        <td> <?php echo $berat[$i]; ?> </td>
        <td> <?php echo $berat[$i] * 1000; ?> </td>
        <td> <?php echo $berat[$i] * 1000000; ?> </td>
        <td> <?php echo "-"; ?> </td>
        <td <?= $color ?>> <?php if ($stok[$i] == 0 ){
            echo "kosong";
            }
            else {
                echo $stok[$i];
            }?> </td>
      </tr> <?php } ?>
    </table>
    <h4 style="text-align:center; margin-top : 5px;">Nama: Tegar Alfalakh Thamrin <br>NIM: 105219025 </h4>
  </body>
</html>