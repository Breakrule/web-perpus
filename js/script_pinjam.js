function pinjam (x,y){
    window.location.replace("pinjam.php?id_buku=" + x + "&id_pengguna="+ y);
}

function kembalikan(id_peminjaman, id_buku){
 window.location.replace("kembalikkan_proses.php?id_peminjaman=" + id_peminjaman + "&id_buku="+ id_buku);

}