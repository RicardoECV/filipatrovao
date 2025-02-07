<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center m-3">
      <h1>Editar Contactos</h1>
    </div>

    <?php if(!empty($contacts)): ?>

      <!-- Formulário de Edição dos Contactos -->
      <form class="row">   

        <div class="col-12 p-4 mx-auto text-center contactos-backoffice">
          
          <label for="logo_email">Email Logo: </label>
          <input type="text" name="logo_email" value="<?= $contacts["logo_email"]; ?>" autofocus required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>
          <label for="email">Email: </label>
          <input type="text" name="email" value="<?= $contacts["email"]; ?>" required>
          <br><br>
          <label for="logo_linkdin">Linkdin Logo: </label>
          <input type="text" name="logo_linkdin" value="<?= $contacts["logo_linkdin"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>
          <label for="linkdin">Linkdin: </label>
          <input type="text" name="linkdin" value="<?= $contacts["linkdin"]; ?>" required>
          <br><br>
          <label for="logo_twiter">Logo X: </label>
          <input type="text" name="logo_twiter" value="<?= $contacts["logo_twiter"]; ?>" required>
          <a class="btn btn-primary" target="_blank" href="../tinyfilemanager/tinyfilemanager.php">Gestor de Ficheiros</a>
          <br><br>
          <label for="twiter">X: </label>
          <input type="text" name="twiter" value="<?= $contacts["twiter"]; ?>" required>
          <br><br>
        
        </div>

        <!-- Botões de Editar/Voltar -->
        <div class="col-12 m-auto text-center">
          <button class="btn btn-success">Edit</button>
          <a href="contacts.php" class="btn btn-danger">Back</a>
        </div>

      </form>

    <?php else: ?>

      <!-- Mensagem de Contactos Não Encontrados -->
      <div class="col-12 text-center m-3">
        <h1 class="text-danger">Contactos Not Found!</h1>
      </div>

    <?php endif; ?>

  </div>

</main>