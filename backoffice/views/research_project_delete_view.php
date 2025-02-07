<main class="container-fluid">

  <?php if(!empty($project)): ?>

    <!-- Confirmation to Delete Project -->
    <div class="row">

      <div class="col-12 text-center p-5">        
        <h2>Do You Wish To Delete This Project? (<?= $project["title"]; ?>)</h2>      
      </div>

      <!-- Confirmation Buttons -->
      <div class="col-12 text-center">
        <a class="btn btn-danger text-decoration-none text-white p-3 m-4" href="research_project_deleted.php?id=<?= $project["id"]; ?>">Yes</a>
        <a class="text-decoration-none text-white p-3 m-4 btn btn-primary" href="research.php">No</a>
      </div>

    </div>

  <?php else: ?>

    <!-- Project Not Found -->
    <div class="row">
      <div class="col-12 text-center p-4">
        <h2 class="text-danger">Project Not Found</h2>
      </div>
    </div>

  <?php endif; ?>

</main>