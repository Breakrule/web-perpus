function kirimUlasan(){


$.ajax({
    type : "POST",

    url : "./tambah_ulasan.php",
    data :{ 
        "id_buku": document.getElementById("id_bukubaru").value, 
        "id_pengguna": document.getElementById("id_pengguna").value, 
        "isi": document.getElementById("comment").value
    }
    ,
    success : function(msg){
        if (msg.trim()=="success"){
            alert("berhasil menambah ulasan");
            window.location.reload();
        }else{
            alert("gagal menambah ulasan");
        }
    }
});

}