<main class="container-fluid">

  <?php if(!empty($scicommactivitie)): ?>

    <!-- Confirmation to Delete Activitie -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Do You Wish To Delete This Activitie? (<?= $scicommactivitie["text"]; ?>)</h2>      
      </div>

      <!-- Confirmation Buttons -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="scicomm_activitie_deleted.php?id=<?= $scicommactivitie["id"]; ?>">Yes</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="scicomm.php">No</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Activitie Not Found -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Activitie Not Found</h2>
      </div>
    </div>

  <?php endif; ?>

</main>