<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Jumbotron -->
<section class="">
  <div class="jumbotron jumbotron-fluid bgt"> 
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="<?= base_url('assets/video/wisata.mp4') ?>" type="video/mp4">
    </video>

    <div class="container text-light py-5">
      <h1 class="display-1 text">Selamat Datang!</h1>
      <p class="lead text">Cari tempat wisata? disini kami menawarkan begitu banyak informasi tempat wisata yang bisa dikunjungi, yang tentunya di seputaran Raja Ampat dan sekitarnya.</p>
      <hr class="my-4 text garis">
      <p class="text">Terdapat tiga kategori tempat wisata yang ditawarkan: Gunung (daratan), Pesisir Pantai dan juga Pulau. Anda bisa lihat melalui Menu kategori.</p>
      <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=6285244430426&text=Hay%20Kami%20dari%20Sorong%20Wisata.%0Aada%20yang%20bisa%20dibantu%3F%0A%0A(ini%20merupakan%20Akun%20WhatsApp%20Bisnis%20Sorong%20Wisata)." target="_blank" role="button"><i class="fa fa-whatsapp"></i> Chat Via WhatsApp</a>
    </div>
  </div>
</section>


<!-- Profil -->
<section class="py-5" id="profil">
  <div class="container mt-3">
    <div class="row mt-5">
      <div class="col text-center">
        <h2 class="text">Profil</h2>
        <hr class="text-dark">
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-7">
        <img src="<?= base_url() ?>assets/img/7.jpeg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-md-5 my-auto">
        <h3 class="text">Apa itu Batanta Raja Ampat Tour</h3>
        <hr class="text">
        <p>Batanta Raja Ampat Tour (BRAT) adalah penyedia layanan dan informasi Seputar tempat wisata yang ada di Areal Sorong atau lebih tepatnya kepulauan Raja Ampat dengan beberapa pilihan Kategori yang ditawarkan, diantaranya Tempat Wisata di areal Dataran (Pegunungan), Areal Pesisir Pantai dan juga di Pulau-pulau. Wisata Batanta Tour dibuat oleh Mahasiswa Teknik Informatika Universitas Papua pada tahun 2020 sebagai Skripsi dan dikelolah langsung oleh Putra Asli yang lahir dan besar di Kepulauan Batanta. Wisata Batanta Tour berlokasi di  Jl. junung salju, Raja Ampat, Papua Barat.</p>
      </div>
      <div class="col-md-5 my-auto text-right">
        <h3 class="text">Sekilas Mengenai Kepulauan Batanta</h3>
        <hr class="text">
        <p>Batanta adalah nama dari salah satu pulau yang ada di Raja Ampat, pulau ini diduduki oleh 16 Marga yang terbagi di 7 kampung diantaranya Wailebet, Weiman, Yenanas, Amdui, Yarweser, Arefi dan Yensawai.</p>
        <p>Batanta merupakan salah satu dari empat pulau terbesar di kepulauan Raja Ampat di provinsi Papua Barat . pulau ini memiliki total luas 453 km ² . Pulau-pulau utama lainnya di kepulauan ini adalah Salawati, Misool dan Waigeo.</p>
      </div>
      <div class="col-md-7">
        <img src="<?= base_url() ?>assets/img/9.jpeg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-md-7">
        <img src="<?= base_url() ?>assets/img/8.jpeg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-md-5 my-auto">
        <h3 class="text">Kenapa Memilih Batanta Raja Ampat Tour</h3>
        <hr class="text">
        <!-- <h4>1. BerLokasi di kepulauan Batanta</h4> -->
        <ol>
          <li>Batanta Raja Ampat Tour Berlokasi langsung di Kepulauan Batanta dan dapat menjangkau semua tempat wisata yang ada di Batanta.</li>
          <!-- <h4>". Harga yang Terjangkau</h4> -->
          <li>Menawarkan Harga yang sangat Terjangkau dan bersahabat.</li>
          <!-- <h4>3. Menawarkan Informasi yang Akurat</h4> -->
          <li>Informasi mengenai tempat wisata seputaran Kepulauan Batanta sangaat akurat dan terpercaya.</li>
          <!-- <h4>4. Dikelolah Oleh Putra Batanta</h4> -->
          <li>Batanta Raja Ampat Tour dikelolah Oleh <a href="">Wihelmus Mayor</a> yang meruakan Putra Asli Batanta.</li>
        </ol>
      </div>
    </div>
  </div>
</section>


<!-- Layanan -->
<section class="py-5 b" id="layanan">
  <div class="container">
    <div class="row mt-5">
      <div class="col text-center text-light">
        <h2 class="text">Layanan</h2>
        <hr class="text text-light">
      </div>
    </div>
    <div class="row mb-5 justify-content-center">
      <div class="col-md-4">
        <div class="card mx-1 my-1">
          <img src="<?= base_url() ?>assets/img/p1.jpeg" class="card-img-top" height="200px">
          <div class="card-body">
            <h5 class="card-title">Alat Transportasi</h5>
            <p class="card-text">Menyediakan Layanan Trannsportasi Seperti Perahu / Speed Boat untuk transportasi Laut.</p>
            <a href="#" class="btn btn-primary">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mx-1 my-1">
          <img src="<?= base_url() ?>assets/img/h1.jpeg" class="card-img-top" height="200px">
          <div class="card-body">
            <h5 class="card-title">Tempat Penginapan</h5>
            <p class="card-text">Tempat Penginapan atau HomeStay yang dapat digunakan untuk menginap berdasarkan jangka waktu tertentu.</p>
            <a href="#" class="btn btn-primary">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mx-1 my-1">
          <img src="<?= base_url() ?>assets/img/a1.jpeg" class="card-img-top" height="200px">
          <div class="card-body">
            <h5 class="card-title">Spot</h5>
            <p class="card-text">dan juga layanan Tempat-tempat Wisata yang dapat dikunjungi mulai dari pulau-pulau pesisir pantai dan lain-lain.</p>
            <a href="#" class="btn btn-primary">Selengkapnya...</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Foto-foto -->
<section class="py-5 foto" id="foto">
  <div class="container mt-3">
    <div class="row mt-5">
      <div class="col text-center">
        <h2 class="text">Foto-foto</h2>
        <hr class="text-dark text">
      </div>
    </div>
    <div class="row mb-5 justify-content-center">
      <?php foreach($gbr as $g) { ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img height="250px" src="<?= base_url('assets/img/upload/'.$g['wst_gambar']) ?>" class="card-img-top">
          </div>  
        </div>
      <?php } ?>
    </div>
  </div>
</section>


<!-- Kontak -->
<section class="py-5 bg-light" id="kontak">
  <div class="container mt-3">
    <div class="row mt-5">
      <div class="col text-center">
        <h2 class="text">Kontak</h2>
        <hr class="text-dark text">
      </div>
    </div>

    <div class="row mb-5 justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-primary text-white mb-4 text-center">
          <div class="card-body">
            <h5 class="card-title text">Hubungi Kami</h5>
            <p class="card-text">Hubungi kami melalui kontak dibawah ini, ini kontak resmi kami.</p>
          </div>
        </div>
        
        <ul class="list-group mb-4">
          <li class="list-group-item"><h3>Kontak / Lokasi</h3></li>
          <li class="list-group-item">0812-xxxx-xxxx</li>
          <li class="list-group-item">wisata.sorong@gmail.com</li>
          <li class="list-group-item">Jl. Gunung Salju Amban, Manokwari</li>
          <li class="list-group-item">Papua Barat, Indonesia</li>
        </ul>
      </div>
      
      <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635218.8825694858!2d129.86719698314985!3d-1.0041262848098864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5e80b3fbaa477d%3A0x622f6c920ed64eb5!2sPulau%20Batanta!5e0!3m2!1sid!2sid!4v1600652197228!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>