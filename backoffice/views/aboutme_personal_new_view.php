<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Create New Personal</h1>
    </div>

    <!-- Form Edit Personal Fields -->
    <form class="row">   

      <div class="col-12 p-4 mx-auto text-center">        
        
        <label for="title">Title: </label>
        <input type="text" name="title" autofocus required>
        <br><br>
        <label for="img">Image: </label>
        <input type="text" name="img" required>    
        <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>      
        <br><br>
        
      </div>

      <!-- Butons de Edit/Back -->
      <div class="col-12 m-auto text-center">
        <button class="btn btn-success">Create</button>
        <a href="aboutme.php" class="btn btn-danger">Back</a>
      </div>

    </form>   

  </div>

</main>