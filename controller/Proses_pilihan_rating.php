<?php
include '../koneksi/koneksi.php';
$id = $_GET["order_id"];
$query = mysqli_query($conn, "SELECT * FROM TRANSAKSI WHERE id_transaksi = $id");
while ($data = mysqli_fetch_assoc($sql)) :
    $id_makanan = $data['id_makanan'];
    echo $id_makanan;
endwhile;
if ($id_makanan == null) {
    // echo "ojek";
    // echo $id_makanan;
    header("Location:../view/rating_ojek.php?order_id=$id_transaksi");
} else {
    // echo 'makanan';
    header("Location:../view/rating.php?order_id=$id_transaksi");
}
