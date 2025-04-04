<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Edit Principal Page Fields (<?= substr($scicomm_page_info["title"], 0, 45); ?>)</h1>
    </div>

    <?php if(!empty($scicomm_page_info)): ?>

      <!-- Form Edit Principal Fields -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center">
          
          <label for="title">Title: </label>
          <input type="text" name="title" value="<?= $scicomm_page_info["title"]; ?>" autofocus required>
          <br><br>
          <label for="sub_title_1">Sub Title 1: </label>
          <input type="text" name="sub_title_1" value="<?= $scicomm_page_info["sub_title_1"]; ?>" required>          
          <br><br>
          <label for="sub_title_1">Sub Title 2: </label>
          <input type="text" name="sub_title_2" value="<?= $scicomm_page_info["sub_title_2"]; ?>" required>          
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
        <h1 class="text-danger">Principal Fields Not Found</h1>
      </div>

    <?php endif; ?>

  </div>

</main>