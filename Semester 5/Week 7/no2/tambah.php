<?php 
require 'function.php';



 if (isset( $_POST ["submit"])) {
    $kode = $_POST ["KODE"];
    $MODEL = $_POST ["JUDUL"];
    $merek = $_POST ["VERSI"];
    $HARGA = $_POST ["HARGA"];

    $query = "INSERT INTO data_album (KODE, JUDUL, VERSI, HARGA) VALUES ('$kode','$JUDUL','$versi','$HARGA')";


    mysqli_query($conn,$query);
    

    
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARAT STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../no1/index.php">
        
        CARAT STORE
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="KODE" class="form-label">KODE ALBUM :</label>
                <input type="text" class="form-control" id="KODE" name ="KODE" required>
            </div>
            <div class="mb-3">
                <label for="JUDUL" class="form-label">JUDUL ALBUM :</label>
                <input type="text" class="form-control" id="JUDUL" name ="JUDUL" required>
            </div>
            <div class="mb-3">
                <label for="VERSI" class="form-label">VERSI ALBUM :</label>
                <input type="text" class="form-control" id="VERSI" name ="VERSI" required>
            </div>
            <div class="mb-3">
                <label for="HARGA" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="HARGA" name ="HARGA" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>