<!-- Main -->
<main class="container-fluid">

  <div class="row justify-content-center mt-md-4">
    <div class="col-11 m-3 freestyle text-center">
      <h1 class="scicomm_title"><?= $scicomm_page["title"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-lg-around justify-content-center gap-lg-0 gap-3"> 
    
    <?php foreach($scicommcards as $s): ?>

      <div class="col-md-4 col-lg-2 col-10">        
          <div class="card">
            <img src="<?= $s['img']; ?>" class="card-img-top" alt="<?= $s['img']; ?>">
            <div class="card-body">
              <h5 class="card-title scicomm_card_title"><?= $s['title']; ?></h5>            
            </div>
          </div>        
      </div>

    <?php endforeach; ?>
    
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="scicomm_sub_title"><?= $scicomm_page["sub_title_1"]; ?></h1>
    </div>
  </div>

  <div class="row justify-content-center">

    <?php foreach($activities as $a): ?>
      
      <div class="col-11">        
        <p class="me-4 scicomm_activitie"><?= $a['text'] ?></p> 
      </div>

    <?php endforeach; ?>
   
  </div>
     
  <div class="row justify-content-center mt-4">
    <div class="col-11 m-3 freestyle">
      <h1 class="scicomm_sub_title"><?= $scicomm_page["sub_title_2"]; ?></h1>
    </div>
  </div>
    
  <div class="row p-0 justify-content-center">  

    <?php foreach($multimediacontent as $m): ?>
    
      <div class="col-lg-3 col-xl-2 col-md-4 col-10 m-3">
                
          <div class="card h-100">
            <a target="_blank" href="<?= $m['link']; ?>">
              <img src="<?= $m['img']; ?>" class="card-img-top" alt="<?= $m['img']; ?>">
            </a> 
            <div class="card-body">
              <h5 class="card-title">
                <a target="_blank" href="<?= $m['link']; ?>" class="text-decoration-none text-black scicomm_multimedia">
                  <?= $m['title']; ?>
                </a>
              </h5>            
            </div>          
          </div>  
        
      </div>

    <?php endforeach; ?>
   
  </div>

</main>
<!-- Fim Main -->