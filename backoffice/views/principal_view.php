<main class="container-fluid">

  <div class="row">
    <div class="col-12 text-center">
      <h1 class="p-3">Home Page (Edit)</h1>      
    </div>    

    <!-- Main Fields Table -->
    <div class="col-auto m-auto text-center">      
      <table>

        <tr class="text-center">
          <th>Header Main Title</th>           
          <th>Header Sub Title</th>           
          <th>Image</th>           
          <th>Title</th>          
          <th>Text</th>
          <th>Editor</th> 
          <th>Last Edit Date</th> 
          <th>Settings</th>           
        </tr>
       
        <tr>

          <td><?= $home_page_info["header"]; ?></td>
          <td><?= $home_page_info["header_sub_title"]; ?></td>
          <td>
            <img src="<?= $home_page_info['img']; ?>" alt="<?= $home_page_info['img']; ?>">
          </td>
          <td><?= $home_page_info["title"]; ?></td>
          <td><?= $home_page_info["text"]; ?></td>             
          <td><?= getUserName($home_page_info["editor_id"])["name"]; ?></td>            
          <td><?= $home_page_info["edit_date"]; ?></td>  
          
          <!-- Botão de Editar -->
          <td>
            <a class="btn btn-primary" href="principal_edit.php">Edit</a>  
          </td>
          
        </tr>
     
      </table>
    </div>
  </div>

</main>