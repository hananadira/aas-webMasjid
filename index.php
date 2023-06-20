<?php 
    require 'function.php';
    $students = query("SELECT * FROM masjid");

    if (isset($_POST["click"])) {
       
      if (tambahData($_POST) > 0 ) {
          echo "
          <script>
              alert('data berhasil di simpan');
              document.location.href='index.php'; 
          </script>
          ";
      } else {
          echo "
          <script>
              alert('data gagal di simpan');
              document.location.href='index.php'; 
          </script>
          ";
      }
  }

  $donatur = new Prosses();
  $tnom = new Prosses();
  $tdon = new Prosses();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://icons.getbootstrap.com/">  
</head>
<style>
    table {
        color: #232323;
    }
    table, th, td {
        margin-right: auto;
        margin-left: auto;
        padding: 45px;
        position: relative;
        border: 1px solid #868B8E;
    }

   .card-body {
    margin-top: 29px;
}
  
.card-title {
    font-style: normal;
    font-weight: 700;
    font-size: 31px;
    line-height: 39px;
    text-transform: capitalize;
  }
  
  .cardd {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 6px 17px;
    margin-top: 30px;
    margin-left: 50px;
    margin-right: 45px;
    left: 15px;
    right: 30px;
    width: 580px;
    height: 257px;
    box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);
    border-radius: 19.49px;
  }
  
  .cardd h1 {
    color: #1F3984;
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 40px;
  }
  
  .card-text {
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 160%;
    color: #999999;
  }

  .ccardd {
    position: absolute;
    right: 348px;
    top: 260px;
  }

  .ccard {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 16px 15px;
    gap: 12px;
    width: 200px;
    height: 70px;
    background-color: #ffff;
    box-shadow: 1px 8px 58px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
  }

  /* footer */
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

footer {
  background-color: #001E42;
  color: white;
  height: 80%;
}

.roww {
  display: flex;
  justify-content: space-between;
  padding: 30px 40px;
}

.footer-col {
  margin-right: 75px;
}

.footer-col h4 {
  color: white;
  margin-bottom: 5px;
  font-size: 18px;
  position: relative;
}

.footer-col ul li {
  padding: 7px 0;
}

.footer-col ul li a {
  color: white;
  text-decoration: none;
  font-size: 14px;
  opacity: 0.7;
  transition: 0.5s;
}

.footer-col input {
  width: 288px;
  height: 35px;
  left: 1035px;
  top: 102px;
  border-radius: 4px;
}

.footer-col button {
  flex-direction: row;
  align-items: flex-start;
  padding: 12px 28px;
  gap: 10px;
  background-color: yellow;
  color: black;
  border-radius: 5px;
  width: 120px;
  height: 48px;
}

.footer-img-img {
  display: flex;
}

.alamat ul li a {
  font-weight: 700;
  font-size: 16px;
  line-height: 104%;
}

.roww {
  padding: 33px;
  gap: 26px;

  width: 1296px;
  height: 267px;
}

.cad {
    color: black;
    font-size: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 30px;
    gap: 24px;
    isolation: isolate;
    width: 374.66px;
    height: 461.9px;
    box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);
    border-radius: 19.4895px;
}

select {
  width: 300px;
  padding: 8px;
  margin-bottom: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.option {
  margin-bottom: 8px;
  margin-left: -25px;
}

form {
  width: 300px;
  margin: 0 auto;
}

.p-2 a {
  color: #000;
}

.p-2 a::after {
    content: '';
    height: 3px;
    width: 0;
    background: #1F3984;
    position: absolute;
    left: 0;
    bottom: -5px;
    transition: 0.5s;
}


</style>
<body>

    <!-- navbar -->
<div class="d-flex" style="margin-top: 20px;">
<nav class="navbar navbar-fixed-top" style="background-color: #ee7614;">
  <div class="container-fluid " style="position: absolute; margin-left: 85px;">
    <ul class="nav navbar-nav">
    <li><img class="image" border="0" src="img/logo-wikrama.png"  width="55px" style=" margin-left: 40px; margin: 1px; padding: 0px color:white;"></li>
    </ul></b>
  </div>
</nav>

  <div class="p-2 flex-grow-1" style="margin-left: 150px; font-size: 20px;">
           <b> SMK WIKRAMA <br>BOGOR</b>
  </div class="nav-nav">
    <div class="p-2"><a href="#content1">Beranda</a></div><hr>
    <div class="p-2"><a href="#content2">Cara Wakaf</a></div><hr>
    <div class="p-2"><a href="#content3">Data Wakaf</a></div><hr>
    <div class="p-2"><a href="#content4">Gallery</a></div><hr>
    <div class="p-2"><a href="#content5">Web Wikrama</a></div><hr>
  </div>

<!-- beranda -->
<div class="content1" id="content1">
    <div class="text1">
        <div class="text">
            <p>Masjid Besar SMK Wikrama Bogor</p>
                <h1>Mari 
                <span>Tingkatkan <br>Keimanan</span>
                Masyarakat <br>
                SMK Wikrama Bogor</h1>
        </div>
    </div>

    <img src="img/logo-wikrama.png" style="position:absolute; margin-left:87%; height: 60px; width: 60px; margin-top: 13%;  background-color: #FFFFFF; border: 8.14286px solid #FFFFFF;
                                            filter: drop-shadow(0.771459px 6.17167px 46.2875px rgba(0, 0, 0, 0.1));  border-radius: 195px;  width: -15%;">

    <div class="ccardd">
      <div class="ccard">
        <img src="img/Vector.png" alt="" style="width: 45px; height: 45px; ">
        <p>Lingkungan Terjaga.</p>
      </div>

      <div class="ccard" style="margin-top: 28px;">
        <img src="img/vector1.png" alt="" style="width: 45px; height: 45px; border-radius: 0;">
        <p>Kapasitas Besar.</p>
      </div>

      <div class="ccard" style="margin-top: 28px;">
        <img src="img/al-qur'an.jpg" alt="" style="width: 45px; height: 45px; border-radius: 0;">
        <p>Al-Qur'an Gratis.</p>
      </div>
    </div> 

    <img src="img/masjid.svg" style="margin-top: 25px;"/>
    
    <!-- Button trigger modal -->
<button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background: #1F3984; margin-left: 8%; margin-top: -2%;">
  Beri Bantuan Shodaqoh
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Donatur Masjid Wikrama</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!-- form -->
        <form action="#" method="post">
            <div class="mb-3">
              <label for="nama_donatur" class="form-label">Masukan Nama Donatur</label>
              <input type="string" class="form-control" id="nama_donatur" name="nama_donatur">
          </div>

          <div class="mb-3">
            <label for="id_donatur" class="form-label">Masukan ID Donatur</label>
            <input type="number" class="form-control" id="id_donatur" name="id_donatur">
          </div>

          <div class="option">
            <div class="mb-3 form-check">
              <select name="paket" id="paket">
                <option selected disabled>pilih paket</option>
                <option value="paket 1">paket 1</option>
                <option value="paket 2">paket 2</option>
              </select>
            </div>
          </div><br>

          <div class="option">
            <div class="mb-3 form-check">
              <select name="jenis_barang" id="jenis_barang">
                <option selected disabled>pilih kategori</option>
                <option value="emas">emas</option>
                <option value="uang">uang</option>
              </select>
            </div>
          </div><br>

          <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Nominal</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="click" class="btn btn-primary">Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script>

// const myModal = document.getElementById('myModal')
// const myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', () => {
//   myInput.focus()
// })
</script>
</div>

<!-- persentese -->
<div class="cadd">
    <!-- <div class="bg-body-light p-5 rounded-top border border-light shadow"> -->
                <div class="roww">
                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Target Dana</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $target = $donatur->target();
                                                        echo "Rp." .  number_format($target); ?></h1>  <!-- number_format untuk menformat angka, misalkan juta bakal kepisah sendiri 0 nya -->
                    </div>

                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Dana Terkumpul</h5>
                        <h1 class="display-5 fw-bold"> <?php
                                                        $tnom = $donatur->totalNominal();
                                                          echo "Rp." . number_format($tnom['jumlah']); ?> </h1>                                   
                    </div>

                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Donatur</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $tdon = $donatur->totalDonatur();
                                                        echo number_format($tdon); ?> Orang</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="progress" role="progressbar" aria-label="Terpenuhi" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 35px">
                            <div class="progress-bar" style="width: <?php echo $donatur->persentase(); ?>%; background-color: #1F3984;"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <b><span style="font-size: x-large; color:darkblue;">
                                <?php echo number_format($donatur->persentase()); ?>% </span> <span style="font-size: larger; color:darkblue;">Terpenuhi</span></b>
                    </div>
                </div>
    </div>
</div>

            <div class="progress2">
              <div class="p-2 rounded-bottom " style="background-color: #1F3984;">
                  <marquee behavior="scroll" direction="left">
                    <b>
                      <?php
                        foreach ($students as $student) {
                          echo '<span style="font-size: x-large; color: white;">' . $student['nama_donatur'] . " - </span>";
                          echo '<span style="font-size: x-large; color: #FFF500;">' . $student['jenis_barang'] . " : ";
                          echo "RP." . $student['jumlah_barang'] . "</span>" . '<span style="display: inline-block; font-size: 30px; color: #bbb9b9; margin-left: 5px; margin-right: 5px;">  • </span>';
                        }
                      ?>
                    </b>
                  </marquee>
              </div>

            </div>

<!-- banner -->
<div id="carouselExampleIndicators" class="carousel slide" style="margin-top:80px; margin-left:52px; margin-right:30px; ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/masjid1.jpeg" class="d-block w-100" style="height:500px; width: 350px; border-radius:20px;">
    </div>
    <div class="carousel-item">
      <img src="img/masjid2.jpeg" class="d-block w-100" style="height:500px; width: 350px; border-radius:20px;">
    </div>
    <div class="carousel-item">
      <img src="img/masjid3.png" class="d-block w-100" style="height:500px; width: 350px; border-radius:20px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- manfaat wakaf -->
<div class="font">
    <div class="judul">
        <h1><span>Manfaat </span><b>Wakaf, Infaq <br>
        Shodaqoh</b></h1>
    </div>
    <div class="deskripsi">
        <p>Berikut adalah beberapa Keutamaan Wakaf, Infaq
            Shodaqoh Yang Akan Anda Dapatkan
        </p>
    </div>
  </div>
  
  <div class="tangan" style="margin-top: 42%;">
      <img src="img/tangan.jpg" style="margin-top: 15px;">
  </div>
  <div class="content">
    <div class="container">
        <div class="cad">
            <div class="card-body" style="background-image: url(img/icon1.jpg); background-size: 70%; background-repeat: no-repeat; background-position: right bottom">
                <div class="icon d-flex align-items-center justify-content-center" style="background: rgba(31, 57, 132, 0.15); height: 60px; width: 60px; border-radius: 100px;">
                    <img src="img/like.png" style="height: 29px; width: 33px;">
                </div>
                <h3>Menjadikan Hati Lebih Tenang</h3><br>
                <p>kami berikan harga yang terbaik dibandingkan kompetitor kami</p>
            </div>
        </div>

        <div class="cad">
            <div class="card-body" style="background-image: url(img/icon2.jpg); background-size: 70%; background-repeat: no-repeat; background-position: right bottom">
                <div class="icon d-flex align-items-center justify-content-center" style="background: rgba(31, 57, 132, 0.15); height: 60px; width: 60px; border-radius: 100px;">
                    <img src="img/sub.png" style="height: 30px; width: 30px;">
                </div>
                <h3>Terbukanya Pintu Rezeki</h3><br>
                <p>Allah SWT akan membuka pintu rezeki dari arah yang tidak diperkirakan sebelumnya</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="cad">
            <div class="card-body" style="background-image: url(img/icon3.jpg); background-size: 70%; background-repeat: no-repeat; background-position: right bottom">
                <div class="icon d-flex align-items-center justify-content-center" style="background: rgba(31, 57, 132, 0.15); height: 60px; width: 60px; border-radius: 100px;">
                    <img src="img/cek.png" style="height: 30px; width: 30px;">
                </div>
                <h3>Menjauhkan Dari Bahaya</h3><br>
                <p>Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
            </div>
        </div>

        <div class="cad">
            <div class="card-body" style="background-image: url(img/icon4.jpg); background-size: 70%; background-repeat: no-repeat; background-position: right bottom">
                <div class="icon d-flex align-items-center justify-content-center" style="background: rgba(31, 57, 132, 0.15); height: 60px; width: 60px; border-radius: 100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                    </svg>
                </div>
                <h3>Pahala Yang Tak Terputus</h3><br>
                <p>Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
            </div>
        </div>
    </div>
</div>


<!-- cara wakaf -->
<div class="content2" id="content2">
  <div class="font">
      <div class="judul">
          <h1><span>Cara </span><b>Wakaf, Infaq <br>
          Shodaqoh</b></h1>
      </div>
      <div class="deskripsi">
          <p>Berikut adalah beberapa Keutamaan Wakaf, Infaq
              Shodaqoh Yang Akan Anda Dapatkan
          </p>
      </div>
  </div>
</div>

<!-- card cara wakaf -->
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="cardd">
        <div class="card-body">
          <h1>01</h1>
          <h5 class="card-title">Isi Form data diri</h5>
          <p class="card-text">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
        </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="cardd" style="margin-left: 15px;">
      <div class="card-body">
        <h1>02</h1>
        <h5 class="card-title">Isikan nominal shodaqoh</h5>
        <p class="card-text">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
      </div>
    </div>
  </div>
</div>

    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="cardd">
      <div class="card-body">
        <h1>03</h1>
        <h5 class="card-title">upload bukti pembayaran</h5>
        <p class="card-text">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="cardd" style="margin-left: 15px;">
      <div class="card-body">
        <h1>04</h1>
        <h5 class="card-title">Verifikasi Pembayaran</h5>
        <p class="card-text">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- data wakaf -->
<div class="content3" id="content3">
  <div class="font">
      <div class="judul">
          <h1><span>Data Donatur </span><b>Wakaf, Infaq <br>
          Shodaqoh</b></h1>
      </div>
      <div class="deskripsi">
          <p>Berikut adalah data donatur wakaf, infaq 
              shodaqoh untuk masjid besar SMK Wikrama Bogor
          </p>
      </div>
  </div>
</div>

<!-- table data -->
<div style="overflow: auto; width: 1275px; height: 450px;">
<table border="1">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama Donatur</th>
                <th>ID Donatur</th>
                <th>Paket</th>
                <th>Kategori</th>
                <th>Nominal Barang</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
            <?php foreach( $students as $student ) { ?>
            <tr>
                <td><?= $i ?></td>
                <td><?php echo $student["nama_donatur"] ?></td>
                <td><?php echo $student["id_donatur"] ?></td>
                <td><?php echo $student["paket"] ?></td>
                <td><?php echo $student["jenis_barang"] ?></td>
                <td><?php echo $student["jumlah_barang"] ?></td>
                <td>
                  <img src="img/action.jpg" alt="" style="margin-left: 10px;"></a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- gallery -->
<div class="content4" id="content4">
  <div class="font">
    <div class="judul">
        <h1><span>Gallery </span><b>Masjid besar SMK Wikrama Bogor<br>
        </b></h1>
    </div>
    <div class="deskripsi">
        <p>Berikut adalah gallery masjid besar sMK Wikrama Bogor.
            </p>
        </div>
        <div class="gall">
            <img src="img/aas1.jpg" alt="Cinque Terre">
          
            <img src="img/aas2.jpg" alt="Forest">
        
            <img src="img/aas3.jpg" alt="Northern Lights">

            <div class="gal">
            <img src="img/aas4.jpg" alt="Cinque Terre">
          
            <img src="img/aas5.jpg" alt="Forest">
        
            <a href="galeri.php"><img src="img/aas7.png" alt="Northern Lights"></a>
            </div>
            </div>
  </div>
</div>


<!-- web wikrama / footer -->

<div class="content5" id="content5">
<footer class="footer" style="height: 488px;">
    <div class="containerr">
        <div class="roww" style="display: flex;">
            <!-- coloum 1 -->
            <div class="footer-col">
                <div class="footer-img-img" style="display: flex;">
                    <img src="img/logo-wikrama.png" alt="" style="weight: 55px; height: 55px;">
                    <p>SMK WIKRAMA <br>
                        BOGOR</p>
                </div>
                <ul style="list-style: none; padding: 8px;">
                  <h4>Alamat</h4>
                    <li><a href="">Jl. Raya Wangun</a></li>
                    <li><a href="">Kelurahan Sindangsari</a></li>
                    <li><a href="">Bogor Timur 16720</a></li>
                </ul>
                <hr>

                <ul style="list-style: none; padding: 8px;">
                  <h4>Telepon</h4>
                    <li><a href="">0251-8242411 /</a></li>
                    <li><a href="">082221718035 (Whatsapp) </a></li>
                    <hr>
                    <img src="img/facebook.png">
                  <img src="img/twitter.png">
                  <img src="img/ig.png">
                  <img src="img/youtube.png"
              </ul>

            </div>
            
            <!-- coloum 2 -->
            <div class="footer-col" style="margin-top: 68px;">
                <h4>Tentang Wikrama</h4>
                <ul>
                    <li>Sejarah</li>
                    <li>Peraturan Sekolah</li>
                    <li>Rencana Strategi & Prestasi</li>
                    <li>Yayasan</li>
                    <li>Struktur Organisasi</li>
                    <li>Cabang</li>
                    <li>Penghargaan</li>
                    <li>Kerjasama</li>
                </ul>
            </div>

            <!-- coloum 3 -->
            <div class="footer-col" style="margin-top: 65px;">
                <h4>Kirim Pesan</h4>
                <form action="mailto:hananadirasavaira@smkwikama.sch.id" method="post" enctyype="text/plain">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="nama">
                        </div><br>

                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="email" style="margin-top: -15px;">
                        </div><br>

                        <div class="mb-3">
                            <input type="pesan" class="form-control" id="pesan" placeholder="pesan" style="width: 288px; height: 120px; margin-top: -15px;">
                        </div><br>

                        <button type="submit" class="btn btn-primary" style="margin-top: -15px; margin-left: 58%; border-radius: 10px;">Submit</button>
                </form>
            </div>

        </div>
      </div>
      
      
    </div>
  </footer>
</body>
</html>