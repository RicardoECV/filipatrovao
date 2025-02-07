<main class="container-fluid">

  <div class="row justify-content-center">

    <div class="col-11 text-center m-3">
      <h1>Edit Project Fields (<?= substr($project["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($project)): ?>

      <!-- Form Edit Project -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $project["id"]; ?>">
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $project["title"]; ?>" autofocus required>
          <br><br>
          <label for="title_logo">Title Image: </label>
          <input type="text" name="title_logo" value="<?= $project["title_logo"]; ?>" required>    
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>         
          <br><br>
          <label for="img">Image: </label>
          <input type="text" name="img" value="<?= $project["img"]; ?>">   
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>       
          <br><br>
          <label for="text">Principal Text: </label>
          <br>
          <textarea name="text" cols="100" rows="30" id="texto_principal"><?= $project["text"]; ?></textarea>            
          <br><br>     
        
        </div>

        <!-- Edit/Back Buttons -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="research.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Project Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Project Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>