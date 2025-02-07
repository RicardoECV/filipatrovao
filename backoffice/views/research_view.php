<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center">
      <h1 class="p-3">Research Page (Edit)</h1>      
    </div> 
    
    <!-- Edit Table to Principal Fields-->
    <div class="col-12">
      <h2 class="text-center mb-4">Principal Page Fields</h2>
      <table class="m-auto mb-3">

        <tr class="text-center">   
          <th>Title</th>
          <th>Sub Title 1</th>                       
          <th>Sub Title 2</th>  
          <th>Editor</th>            
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>
      
        <tr>
          
          <td><?= $research_page_info["title"]; ?></td>
          <td><?= $research_page_info["sub_title_1"]; ?></td>
          <td><?= $research_page_info["sub_title_2"]; ?></td>         
          <td><?= getUserName($research_page_info["editor_id"])["name"]; ?></td> 
          <td><?= $research_page_info["edit_date"]; ?></td>     
          
          <!-- Edit Button -->
          <td>
            <a class="btn btn-primary" href="research_principal.php">Edit</a>  
          </td>
          
        </tr>
    
      </table>
    </div>

    <div class="col-12 mt-5">
      <h2 class="text-center mt-4">Publications Table</h2>

      <div class="col-12 text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="research_publication_new.php">New Publication</a>            
      </div>

      <table class="m-auto">

        <tr class="text-center">   
          <th>Text</th>
          <th>Link</th> 
          <th>Button Link</th> 
          <th>Creator</th> 
          <th>Creation Date</th>
          <th>Edit</th> 
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>

        <?php foreach($publications_info as $p): ?>
      
          <tr>            
            
            <td><?= $p["text"]; ?></td>
            <td><?= $p["link"]; ?></td>
            <td><?= $p["button_link"]; ?></td>
            <td><?= getUserName($p["creator_id"])["name"]; ?></td> 
            <td><?= $p["creation_date"]; ?></td>         
            <td><?= getUserName($p["editor_id"])["name"]; ?></td> 
            <td><?= $p["edit_date"]; ?></td>     
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="research_publication.php?id=<?= $p["id"]; ?>">Edit</a>   
              <br><br>  
              <a class="btn btn-danger" href="research_publication_delete.php?id=<?= $p["id"]; ?>">Delete</a>  
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>
    
    <div class="col-12 mt-5">
      <h2 class="text-center mt-4">Projects Table</h2>

      <div class="col-12 text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="research_project_new.php">New Project</a>            
      </div>

      <table class="m-auto">

        <tr class="text-center">   
          <th>Image</th>
          <th>Img Title</th>
          <th>Title</th>         
          <th>Text</th> 
          <th>Creator</th> 
          <th>Creation Date</th> 
          <th>Edit</th>            
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>

        <?php foreach($projects_info as $p): ?>
      
          <tr>
            
            <td><img src="<?= $p["img"]; ?>" alt="<?= $p["img"]; ?>"></td>
            <td><img src="<?= $p["title_logo"]; ?>" alt="<?= $p["title_logo"]; ?>"></td>
            <td><?= $p["title"]; ?></td>
            <td><?= $p["text"]; ?></td>    
            <td><?= getUserName($p["creator_id"])["name"]; ?></td> 
            <td><?= $p["creation_date"]; ?></td>                 
            <td><?= getUserName($p["editor_id"])["name"]; ?></td> 
            <td><?= $p["edit_date"]; ?></td>     
            
            <!-- Edit/Back Buttons -->
            <td>
              <a class="btn btn-primary" href="research_project.php?id=<?= $p["id"]; ?>">Edit</a>   
              <br><br> 
              <a class="btn btn-danger" href="research_project_delete.php?id=<?= $p["id"]; ?>">Delete</a>   
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

  </div>

</main>