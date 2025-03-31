<!-- Main -->
<main class="container-fluid">

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle text-center">
      <h1 class="research_title"><?= $research_page["title"]; ?></h1>
    </div>
  </div> 

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="aboutme_sub_title"><?= $research_page["sub_title_1"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-center gap-5 mb-5">
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

  <div class="row justify-content-around gap-3 gap-md-0 mt-md-4">
    <div class="col-11">
      <h1 class="freestyle research_sub_title"><?= $research_page["sub_title_2"]; ?></h1>
    </div>

    <?php foreach($publications as $p): ?>
      <div class="col-11 my-lg-3">
        <div class="d-flex justify-content-between flex-md-row flex-column">
          <p class="me-3 publication_text"><?= $p["text"] ?></p>
          <a target="_blank" href="<?= $p["link"] ?>" class="publication_button text-decoration-none align-self-center m-md-1 m-auto text-center"><?= $p["button_link"] ?></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-11 freestyle">
      <h1 class="research_sub_title"><?= $research_page["sub_title_3"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-center">   
    <?php foreach($projects as $p): ?>

      <div class="col-11 m-3">

        <div class="d-flex">
          <img src="<?= $p['title_logo'] ?>" class="project_logo" alt="<?= $p['title_logo'] ?>">
          <h4 class="d-inline align-self-center m-0 freestyle project_title"><?= $p['title'] ?></h4>
        </div>

        <div class="d-flex justify-content-between flex-md-row flex-column">
          <p class="me-md-4 project_text"><?= $p['text'] ?></p>
          <?php if($p['img']): ?>
            <img src="<?= $p['img'] ?>" class="project_img m-auto" alt="<?= $p['img'] ?>">
          <?php endif; ?>
        </div>

      </div>

    <?php endforeach; ?>  
  </div>   

</main>
<!-- Fim Main -->