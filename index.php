<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Utama</title>
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center">Daftar Siswa</h1>
      <a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          
        <tbody>
          <tr>
            <th scope='row'>1</th>
            <td>data nis</td>
            <td>data nama</td>
            <td>data ke</td>
            <td> 
              <a href='#' type='button' class='btn btn-success'>Update</a>
              <a href='#' type='button' class='btn btn-danger' onlick='return confirm("Yakin ingin menghapus data?")'>Delete</a>
            </td>
          </tr>  
        </tbody>  
      </table>
    </div>
  </section>
</body>
</html>