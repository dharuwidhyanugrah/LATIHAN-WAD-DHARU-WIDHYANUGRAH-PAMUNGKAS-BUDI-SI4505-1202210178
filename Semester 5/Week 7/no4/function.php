<?php
$conn = mysqli_connect("localhost","root","","seventeen");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $kode = $data ["KODE"];
    $MODEL = $data ["JUDUL"];
    $merek = $data ["VERSI"];
    $HARGA = $data ["HARGA"];

    $query = "INSERT INTO data_album (KODE, JUDUL, VERSI, HARGA) VALUES ('$kode','$JUDUL','$versi','$HARGA')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function hapus($plt){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_album WHERE KODE = '$plt'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>