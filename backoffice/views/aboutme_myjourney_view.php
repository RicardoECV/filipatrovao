<main class="container-fluid">

  <div class="row justify-content-center">

    <div class="col-11 text-center m-3">
      <h1>Edit Expertise Fields (<?= substr($myjourney["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($myjourney)): ?>

      <!-- Form Edit Journey -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $myjourney["id"]; ?>">
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $myjourney["title"]; ?>" autofocus required>
          <br><br>
          <label for="title_logo">Title Image: </label>
          <input type="text" name="title_logo" value="<?= $myjourney["title_logo"]; ?>" required>          
          <br><br>
          <label for="img">Image: </label>
          <input type="text" name="img" value="<?= $myjourney["img"]; ?>" required>        
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">File Manager</a>  
          <br><br>
          <label for="text">Principal Text: </label>
          <br>
          <textarea name="text" cols="100" rows="30" id="texto_principal"><?= $myjourney["text"]; ?></textarea>            
          <br><br>     
        
        </div>

        <!-- Edit/Back Buttons -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="aboutme.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage JourneyNot Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Journey Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>