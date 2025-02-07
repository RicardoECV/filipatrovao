<main class="container-fluid">

  <?php if(!empty($personal_info)): ?>

    <!-- Confirmation to Delete Personal -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Do You Wish To Delete This Personal? (<?= $personal_info["title"]; ?>)</h2>      
      </div>

      <!-- Confirmation Buttons -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="aboutme_personal_deleted.php?id=<?= $personal_info["id"]; ?>">Yes</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="aboutme.php">No</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Personal Not Found -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Personal Not Found</h2>
      </div>
    </div>

  <?php endif; ?>

</main>