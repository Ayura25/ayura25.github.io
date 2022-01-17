<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="js/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="style/style_bukuTamu.css" />
    <title>Buku Tamu</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #4bbdeb">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="gambar/logo_kategori/k.png" alt="Logo Brand" width="30" height="30" class="d-inline-block align-text-top me-2" />
          <strong>Flowers</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-4">
            <li class="nav-item">
              <a class="nav-link btn-outline-light" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-light" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-light" href="belanja1.html">Belanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-light" aria-current="page" href="#">Buku Tamu</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search" />
            <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="nav-shop ms-3 mb-lg-0">
        <a class="navbar-nav-right btn d-inline-block" id="menuCart" href="#" data-bs-toggle="#cart" style="color: black; text-decoration: none; font-size: 1.1rem"
            ><i class="fas fa-shopping-cart"> (<span class="total-count mb-lg-0"></span>)</i><a href="#" class="clear-cart btn btn-outline"><i class="far fa-trash-alt"></i></a>
          </a>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal form -->
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-sm-6">
            <div class="card">
                <div class="card-body mx-4">
                    <h3 class="card-title"><b>Buku Tamu</b></h3>
                    <form action="insert_tamu.php" method="post">
                        <div class="mb-4 mt-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control"  placeholder="Nama Tamu">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control"  placeholder="Alamat Tamu">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="name@example.com">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" rows="3"></textarea>
                        </div>                  
                        <div class="mb-4 mt-4">
                            <input type="submit" value="Save" class="btn btn-danger" >
                            <input class="btn btn-danger" type="reset" value="Reset">                    
                        </div>                                  
                    </form>
                    <!-- <a href="buku_tamu" class="btn btn-danger"></a>     -->
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Akhir form -->

    <!-- Awal php -->
    <?php
        include "koneksi_tamu.php";
        $sql = "select * from bukutamu";
        $hasil = mysqli_query($conn, $sql);
        ?>
    <!-- Akhir php -->

    <!-- Awal Footer -->
    <footer class="p-4 text-center" style="background-color: rgb(160, 159, 161)">
      <div class="container">
        <div class="row">
          <div class="col">
            <span><b>Copyright @2021 developed by A11.2020.12918 | Mufida Rahayu</b></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>