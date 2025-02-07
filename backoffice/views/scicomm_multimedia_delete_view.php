<main class="container-fluid">

  <?php if(!empty($scicommmultimedia)): ?>

    <!-- Confirmation to Delete Multimedia -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Do You Wish To Delete This Multimedia? (<?= $scicommmultimedia["title"]; ?>)</h2>      
      </div>

      <!-- Confirmation Buttons -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="scicomm_multimedia_deleted.php?id=<?= $scicommmultimedia["id"]; ?>">Yes</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="scicomm.php">No</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Multimedia Not Found -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Multimedia Not Found</h2>
      </div>
    </div>

  <?php endif; ?>

</main>