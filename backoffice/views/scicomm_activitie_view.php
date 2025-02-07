<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Activitie Fields (<?= substr($scicommactivitie["text"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($scicommactivitie)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $scicommactivitie["id"]; ?>">
          <label for="text">Text: </label>
          <input type="text" name="text" value="<?= $scicommactivitie["text"]; ?>" autofocus required>          
        
        </div>

        <!-- Butons de Edit/Back -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="scicomm.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Activitie Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Activitie Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>