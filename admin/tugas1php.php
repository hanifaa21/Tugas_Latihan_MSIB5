<?php

$aboutme = 'A dedicated web developer committed to crafting stunning and functional web solutions. Blending creativity, perseverance, and a love for technology to produce exceptional web experiences. Always excited to learn and grow in this ever-evolving field';
$nama = 'Hanifa Azzahra';
$nohp = '082173213761';
$alamat = 'Jln. Moh Hatta Limau Manis';
$skil = 'Desain';
$bidang = 'Fullstack Development';
$email = 'hanifaazzahra123@gmail.com';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hanifa Profile</title>
    <link rel="icon" type="image/png" href="images/kucing.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
    <!-- nav bar -->
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Niww</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link action" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutme">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portofolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a> -->
                <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
            <!-- </ul>
          </div>
        </div>
      </nav> -->
      <!-- nav bar end -->
      <section>
        <div class="container">
            <div class="profile">
            <img 
            class="rounded-circle profleImage" 
            src="images/kucing.jpg" alt="">
            <h2><?= $nama ?></h2>
            <h4><?= $bidang ?>  </h4>
        </div>
        </div>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,69.3C384,64,480,32,576,64C672,96,768,192,864,202.7C960,213,1056,139,1152,101.3C1248,64,1344,64,1392,64L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <section id="aboutme" class="biodata">
        <h1 class="text-center">About Me</h1>
        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <?= $aboutme ?>
              </div>
              <div class="col-md-3">
              </div>
            </div>
          </div>
          <div class="background" >
                    
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                    <h4>My Self</h4>
                    <p>Nama : <?= $nama ?></p>
                    <p>No Handphone : <?= $nohp ?></p>
                    <p>Alamat : <?= $alamat ?> </p>
                    <p>Skill : <?= $skil ?></p>
                    <p>Email : <?= $email ?></p>
                    </div>
                    <div class="col">
                    <img src="images/kucing.jpg" class="profil" >      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portofolio" class="portfolio">
        <div class="container">
            <h1 class="text-center">PORTOFOLIO</h1>
            <div class="container text-center">
                <div class="row align-items-start">
                  <div class="col-sm-4">
                    <div class="card" style="width: 22rem;">
                        <div class="card-body">
                          <h5 class="card-title">Main Skill</h5>
                          <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                          <p ><b>User experiences design </b> - UI/UX</p>
                          <br>
                          <p ><b>Web and user interface design </b> - Development</p>
                          <!-- <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 22rem;">
                        <div class="card-body">
                          <h5 class="card-title">Experience</h5>
                          <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                          <p>Make design UI/UX Sites Academic </p>
                          <p>Make design feature Pet Hotel </p>
                          <p>Make Portfolio Website (Front-End)</p>
                          <!-- <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card" style="width: 22rem;">
                        <div class="card-body">
                          <h5 class="card-title">Awards</h5>
                          <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-text">Some quick example text to build on the card title</p>
                          <!-- <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a> -->
                        </div>
                      </div>
                  </div>
                </div>
              </div>    
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,176C672,128,768,64,864,69.3C960,75,1056,149,1152,170.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
    <section id="contact" class="footer">
        <h1 class="text-center">CONTACT</h1>
        <div class="container text-center contact">
            <a href="https://www.linkedin.com/in/hanifaazzahra21/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/haaniifaa_/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
            <p class="text-center watermark">Created by hanifa 2023</p>
        </div>
    </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>