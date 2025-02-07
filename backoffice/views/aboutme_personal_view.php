<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Personal (<?= substr($personal_info["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($personal_info)): ?>

      <!-- Form Edit Peronal -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $personal_info["id"]; ?>">
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $personal_info["title"]; ?>" autofocus required>
          <br><br>
          <label for="img">Image: </label>
          <input type="text" name="img" value="<?= $personal_info["img"]; ?>" required>  
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>        
          <br><br>           
        
        </div>

        <!-- Butons de Edit/Back -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="aboutme.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Field Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Personal Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>