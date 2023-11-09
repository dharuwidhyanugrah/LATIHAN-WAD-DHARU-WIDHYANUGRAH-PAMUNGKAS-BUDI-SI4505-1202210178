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
    $JUDUL = $data ["JUDUL"];
    $versi = $data ["VERSI"];
    $HARGA = $data ["HARGA"];

    $query = "INSERT INTO data_album (KODE, JUDUL, VERSI, HARGA) VALUES ('$kode','$JUDUL','$versi','$HARGA')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $kode = $data ["KODE"];
    $JUDUL = $data ["JUDUL"];
    $versi = $data ["VERSI"];
    $HARGA = $data ["HARGA"];

    

    $query = "UPDATE data_computer SET
                
                JUDUL = '$JUDUL',
                VERSI = '$versi',
                HARGA = '$HARGA',
                nama = '$nama'
            WHERE KODE = '$kode'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    return var_dump($data);
    
}


?>