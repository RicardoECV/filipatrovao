<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Principal Page Fields (<?= substr($aboutmeFields["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($aboutmeFields)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $aboutmeFields["title"]; ?>" autofocus required>
          <br><br>
          <label for="sub_title_1">Sub Title 1: </label>
          <input type="text" name="sub_title_1" value="<?= $aboutmeFields["sub_title_1"]; ?>" required>          
          <br><br>
          <label for="sub_title_1">Sub Title 2: </label>
          <input type="text" name="sub_title_2" value="<?= $aboutmeFields["sub_title_2"]; ?>" required>          
          <br><br>
          <label for="sub_title_1">Sub Title 3: </label>
          <input type="text" name="sub_title_3" value="<?= $aboutmeFields["sub_title_3"]; ?>" required>          
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
        <h1 class="text-danger">Principal Fields Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>