<!-- Main -->
<main class="container-fluid">

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle text-center">
      <h1 class="aboutme_title"><?= $aboutme_page["title"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="aboutme_sub_title"><?= $aboutme_page["sub_title_1"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-center gap-5">

    <?php foreach($expertise as $i => $e): ?>

      <div class="col-lg-2 col-md-4 col-8 p-0">
        <div class="card">
          <img src="<?= $e['img']; ?>" class="card-img-top" alt="<?= $e['img']; ?>">          
          <div class="card-body">                   
            <h5 class="d-inline-flex gap-1 m-0">
              <p class="card-title expertise_card_title text-decoration-none m-0" data-bs-toggle="collapse" href="#collapseExample-<?= $i; ?>" role="button" aria-expanded="false" aria-controls="collapseExample-<?= $i; ?>" onclick="clickCard('<?= $i; ?>')">
                <?= $e['title']; ?>
                <img src="public/logos/icons8-arrow-up-24.png" alt="Arrow Icon" class="expertise_arrow_<?= $i; ?> transition-expertise">
              </p> 
            </h5>
            <div class="collapse" id="collapseExample-<?= $i; ?>">
              <div class="card card-body expertise_card_text"><?= $e['text']; ?></div>
            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>

  <div class="row justify-content-center mt-5">
    <div class="col-11 mt-5 freestyle">
      <h1 class="aboutme_sub_title"><?= $aboutme_page["sub_title_2"]; ?></h1>
    </div>
  </div>

  <div class="row">

    <div class="col-1 d-md-block d-none text-center my-3">
      <img src="public/logos/seta2.png" class="aboutme_arrow px-2 position-sticky top-0" alt="Imagem Seta">
    </div>

    <div class="col-11 m-auto">
      <div class="container-fluid">

        <?php foreach($myjourneys as $m): ?>

          <div class="row">

            <div class="col-11 m-md-3 mt-3 m-auto">
              <div class="d-flex">
                <img src="<?= $m["title_logo"]; ?>" class="journey_logo" alt="<?= $m["title_logo"]; ?>">
                <h4 class="d-inline align-self-center m-0 freestyle journey_title"><?= $m["title"]; ?></h4>
              </div>

              <div class="d-flex flex-column flex-md-row justify-content-between">
                <p class="me-md-3 m-2 journey_text">
                  <?= $m["text"]; ?>
                </p>
                <?php if($m['img']): ?>
                  <img src="<?= $m["img"]; ?>" class="align-self-center journey_img m-md-1 mb-5" alt="<?= $m["img"]; ?>">
                <?php endif; ?>
              </div>
            </div>

          </div>

        <?php endforeach; ?>        

      </div>

    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="aboutme_sub_title"><?= $aboutme_page["sub_title_3"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-around gap-md-0 gap-4">

    <?php foreach($personal as $p): ?>
    
      <div class="col-md-3 col-10 ">        
          <div class="card">
            <img src="<?= $p['img'] ?>" class="card-img-top" alt="<?= $p['img'] ?>">
            <div class="card-body">
              <h5 class="card-title personal_title"><?= $p['title'] ?></h5>            
            </div>
          </div>
      </div>

    <?php endforeach; ?>
    
  </div>

</main>
<!-- Fim Main -->