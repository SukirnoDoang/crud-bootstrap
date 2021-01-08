<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah Data</title>

      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

    <section>
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4" >Form Tambah Data</h1>
            <form method="post">
                <div class="mb-3">
                 <label for="inputNis" class="form-label">Nis </label>
                 <input type="number" class="form-control" id="inputNis" name="nis" placeholder="Masukan Nis siswa">
                </div>
                <div class="mb-3">
                 <label for="inputNama" class="form-label">Nama </label>
                 <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukan Nama siswa">
                </div>
                <div class="mb-3">
                 <label for="inputKelas" class="form-label">Kelas </label>
                 <input type="text" class="form-control" id="inputKelas" name="kelas" placeholder="Masukan Kelas siswa">
                </div>
                <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
                <a href="index.php" type="button" class="btn btn-info text-white">Kembali </a>
            </form>
        </div>
    </section>
    <?php
        // buat kondisi jika tombol diklik
        if(isset($_POST['daftar'])){
        // membuat variable setiap field inputan agar kodingan lebih rapi
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        //membuat query
        $query = "INSERT INTO tb_siswa (nis, nama, kelas) VALUES ('".$nis."', '".$nama."', '".$kelas."')";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("location: index.php");
        } else {
            echo "<script>alert('Data Gagal ditambahkan!')</script>";
        }
        }
    ?>
    
</body>
</html>