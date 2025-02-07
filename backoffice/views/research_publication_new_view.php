<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center mt-3">
      <h1>Create New Publication</h1>
    </div>

    <!-- Form Edit Principal Fields -->
    <form class="row">   

      <div class="col-12 p-4 mx-auto text-center">  
        
        <br><br>
        <label for="link">Link: </label>
        <input type="text" name="link" required>          
        <br><br>
        <label for="button_link">Button Text: </label>
        <input type="text" name="button_link" required>          
        <br><br>
        <label for="text">Principal Text: </label>
        <br>
        <textarea name="text" cols="100" rows="30" id="texto_principal"></textarea>            
        <br><br>       
      
      </div>

      <!-- Butons de Create/Back -->
      <div class="col-12 m-auto text-center">
        <button class="btn btn-success">Create</button>
        <a href="research.php" class="btn btn-danger">Back</a>
      </div>

    </form>   

  </div>

</main>