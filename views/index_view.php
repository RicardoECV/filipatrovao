<!-- Main -->
<main class="container-fluid">

  <div class="row justify-content-center mt-5">
    
    <div class="col-lg-5 col-12 d-flex">
      <img src="<?= $home_page['img']; ?>" class="index_img w-100 align-self-center" alt="">      
    </div>

    <div class="col-lg-5 col-11">
      <div class="m-5">
        <h2 class="freestyle home_title"><?= $home_page['title']; ?></h2>
        <p class="home_text"><?= $home_page['text']; ?></p>          
      </div>    
      <div class="d-flex justify-content-between m-5">
        <div class="d-flex gap-4">
          <a class="home_more_link text-decoration-none" href="aboutme.php">More...</a>
        </div>                        
      </div>    
    </div>  

  </div>

  <div class="row justify-content-center">
    <div class="col-11 text-center">
      <h1 id="contacts_title" class="freestyle m-3 home_title">Contacts</h1>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-3 text-center">
      <a href="mailto:<?= $contacts['email'] ?>">
        <img class="home_icon" src="<?= $contacts['logo_email'] ?>" alt="<?= $contacts['logo_email'] ?>">
      </a>      
    </div>

    <div class="col-3 text-center">
      <a href="<?= $contacts['linkdin'] ?>">
        <img class="home_icon" src="<?= $contacts['logo_linkdin'] ?>" alt="<?= $contacts['logo_linkdin'] ?>">
      </a>      
    </div>

    <div class="col-3 text-center">
      <a href="<?= $contacts['twiter'] ?>">
        <img class="home_icon" src="<?= $contacts['logo_twiter'] ?>" alt="<?= $contacts['logo_twiter'] ?>">
      </a>      
    </div>
  </div>

</main>
<!-- Fim Main -->