<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Expertise Fields (<?= substr($aboutmeSkill["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($aboutmeSkill)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $aboutmeSkill["id"]; ?>">
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $aboutmeSkill["title"]; ?>" autofocus required>
          <br><br>
          <label for="img">Image: </label>
          <input type="text" name="img" value="<?= $aboutmeSkill["img"]; ?>" required>   
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>       
          <br><br>
          <label for="text">Principal Text: </label>
          <br>
          <textarea name="text" cols="100" rows="30" id="texto_principal"><?= $aboutmeSkill["text"]; ?></textarea>            
          <br><br>     
        
        </div>

        <!-- Buttons de Edit/Back -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="aboutme.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Field Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Expertise Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>