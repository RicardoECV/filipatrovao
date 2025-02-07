<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Card Fields (<?= substr($scicommcard["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($scicommcard)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $scicommcard["id"]; ?>">
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $scicommcard["title"]; ?>" autofocus required>
          <br><br>
          <label for="img">Image: </label>
          <input type="text" name="img" value="<?= $scicommcard["img"]; ?>" required>  
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>
        
        </div>

        <!-- Butons de Edit/Back -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="scicomm.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Card Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Card Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>