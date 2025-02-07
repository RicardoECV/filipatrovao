<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Contacts (Edition)</h1>      
    </div>    

    <!-- Tabela de Contactos -->
    <div class="col-auto m-auto text-center">
      <table>

        <tr class="text-center">
          <th>Logo Email</th>
          <th>Email</th>
          <th>Logo Linkdin</th> 
          <th>Linkdin</th> 
          <th>Logo X</th>           
          <th>X</th>           
          <th>Editor</th> 
          <th>Last Edit Date</th> 
          <th>Settings</th> 
        </tr>
       
          <tr>

            <td>
              <img src="<?= $contacts["logo_email"]; ?>" alt="<?= $contacts["logo_email"]; ?>">
            </td>
            <td><?= $contacts["email"]; ?></td> 
            <td>
              <img src="<?= $contacts["logo_linkdin"]; ?>" alt="<?= $contacts["logo_linkdin"]; ?>">
            </td>
            <td><?= $contacts["linkdin"]; ?></td>             
            <td>
              <img src="<?= $contacts["logo_twiter"]; ?>" alt="<?= $contacts["logo_twiter"]; ?>">
            </td>  
            <td><?= $contacts["twiter"]; ?></td>                
            <td><?= getUserName($contacts["editor_id"])["name"]; ?></td>            
            <td><?= $contacts["edit_date"]; ?></td>  
            
            <!-- Botão de Editar -->
            <td>
              <a class="btn btn-primary" href="contacts_edit.php">Edit</a>  
            </td>
            
          </tr>
     
      </table>
    </div>
  </div>

</main>