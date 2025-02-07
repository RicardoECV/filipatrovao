<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Multimedia Fields (<?= substr($scicommmultimedia["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($scicommmultimedia)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $scicommmultimedia["id"]; ?>">
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $scicommmultimedia["title"]; ?>" autofocus required>
          <br><br>
          <label for="img">Image: </label>
          <input type="text" name="img" value="<?= $scicommmultimedia["img"]; ?>" required>   
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>       
          <br><br>
          <label for="link">Link: </label>
          <input type="text" name="link" value="<?= $scicommmultimedia["link"]; ?>" required>            
          <br><br>     
        
        </div>

        <!-- Butons de Edit/Back -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="scicomm.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Field Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Multimedia Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>