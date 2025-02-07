<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filipa Trovão</title>

  <!-- Local Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">

  <!-- Local Fonts -->
  <link rel="stylesheet" href="public/fonts/stylesheet.css">

  <!-- Local JS --> 
  <script src="public/js/main.js"></script> 
  <script src="public/js/index.js"></script>
</head>
<body>

  <!-- Header -->
  <header>

    <!-- Desktop Navbar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-none d-lg-block">
          <nav class="navbar navbar-expand">
            <div class="container-fluid">
              <div class="navbar-brand d-flex flex-column text-center">
                <a href="index.php" class="navbar-brand p-0 freestyle font_color header_title"><?= $home_page["header"]; ?></a>
                <a href="index.php" class="navbar-brand text-decoration-none font_color header_sub_title"><?= $home_page["header_sub_title"]; ?></a>               
              </div>    
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" >
                <div class="navbar-nav gap-4">
                  <a class="nav-link pe-4 p-0 <?= ($actual_page == 'home') ? 'active' : ''; ?> font_color" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link pe-4 p-0 <?= ($actual_page == 'aboutme') ? 'active' : ''; ?> font_color" href="aboutme.php">About Me</a>
                  <a class="nav-link pe-4 p-0 <?= ($actual_page == 'research') ? 'active' : ''; ?> font_color" href="research.php">Research</a>                
                  <a class="nav-link pe-4 p-0 <?= ($actual_page == 'scicomm') ? 'active' : ''; ?> font_color" href="scicomm.php">SciComm</a>   
                  <a class="nav-link pe-4 p-0 font_color contact-link" href="index.php#contacts_title">Contacts</a>             
                  <a target="_blank" class="nav-link pe-4 p-0 font_color" href="https://drive.google.com/file/d/19qPuG2eAmemURv6sAHMk-yYqY7Os183W/view?usp=sharing">CV</a>   
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>   
    </div>

    <!-- Mobile Navbar-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-lg-none d-block">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <div class="d-flex flex-column">
                <a href="index.php" class="navbar-brand text-center p-0 freestyle font_color header_title"><?= $home_page["header"]; ?></a>
                <a href="index.php" class="navbar-brand text-decoration-none font_color header_sub_title"><?= $home_page["header_sub_title"]; ?></a>
              </div>            
              <button onclick="toggleIcon()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> 
                <img src="public/logos/icons8-x-24.png" class="logo_mobile d-none">           
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-end">
                  <li class="nav-item">
                    <a class="nav-link nav_mobile_link p-0 <?= ($actual_page == 'home') ? 'active' : ''; ?> font_color" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav_mobile_link p-0 <?= ($actual_page == 'aboutme') ? 'active' : ''; ?> font_color" href="aboutme.php">About Me</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link nav_mobile_link p-0 <?= ($actual_page == 'research') ? 'active' : ''; ?> font_color" href="research.php">Research</a>                
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link nav_mobile_link p-0 <?= ($actual_page == 'scicomm') ? 'active' : ''; ?> font_color" href="scicomm.php">SciComm</a>               
                  </li> 
                  <li class="nav-item">
                    <a target="_blank" class="nav-link nav_mobile_link p-0 font_color" href="https://drive.google.com/file/d/19qPuG2eAmemURv6sAHMk-yYqY7Os183W/view?usp=sharing">CV</a>               
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link nav_mobile_link p-0 font_color contact-link" href="index.php#contacts_title">Contacts</a>               
                  </li> 
                </ul>              
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

  </header>  
  <!-- Fim Header -->