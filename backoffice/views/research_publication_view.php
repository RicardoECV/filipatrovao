<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center mt-3">
      <h1>Edit Publication Fields (<?= substr($researchpublication["text"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($researchpublication)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <input type="hidden" name="id" value="<?= $researchpublication["id"]; ?>">          
          <label for="link">Link: </label>
          <input type="text" name="link" value="<?= $researchpublication["link"]; ?>" required>          
          <br><br>
          <label for="button_link">Button Text: </label>
          <input type="text" name="button_link" value="<?= $researchpublication["button_link"]; ?>" required>          
          <br><br>
          <label for="text">Principal Text: </label>
          <br>
          <textarea name="text" cols="100" rows="30" id="texto_principal"><?= $researchpublication["text"]; ?></textarea>            
          <br><br>   
        
        </div>

        <!-- Butons de Edit/Back -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="research.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensage Field Not Found -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Publication Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>