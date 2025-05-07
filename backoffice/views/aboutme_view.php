<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center">
      <h1 class="p-3">About Me Page (Edit)</h1>      
    </div> 
    
    <!-- Tabela de Edição Principal -->
    <div class="col-12">
      <h2 class="text-center mb-4">Principal Page Fields</h2>
      <table class="m-auto mb-3">

        <tr class="text-center">   
          <th>Título</th>
          <th>Sub Título 1</th>                       
          <th>Sub Título 2</th>            
          <th>Sub Título 3</th>            
          <th>Editor</th>            
          <th>Last Edit Date</th>          
          <th>Ações</th> 
        </tr>
      
        <tr>          
          <td><?= $aboutme_page_info["title"]; ?></td>
          <td><?= $aboutme_page_info["sub_title_1"]; ?></td>
          <td><?= $aboutme_page_info["sub_title_2"]; ?></td>
          <td><?= $aboutme_page_info["sub_title_3"]; ?></td>
          <td><?= getUserName($aboutme_page_info["editor_id"])["name"]; ?></td> 
          <td><?= $aboutme_page_info["edit_date"]; ?></td>     
          
          <!-- Botões de Editar/Apagar -->
          <td>
            <a class="btn btn-primary" href="aboutme_principal.php">Edit</a>  
          </td>          
        </tr>
    
      </table>
    </div>

    <div class="col-12">
      <h2 class="text-center mt-4">Skills Table</h2>

      <div class="text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="aboutme_skill_new.php">New Skill</a>            
      </div>

      <table class="m-auto">

        <tr class="text-center">   
          <th>Image</th>
          <th>Title</th>                       
          <th>Text</th> 
          <th>Creator</th> 
          <th>Creation Date</th> 
          <th>Edit</th>            
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>

        <?php foreach($skills_info as $skill): ?>
      
          <tr>
            
            <td><img src="<?= $skill["img"]; ?>" alt="<?= $skill["img"]; ?>"></td>
            <td><?= $skill["title"]; ?></td>
            <td><?= $skill["text"]; ?></td>        
            <td><?= getUserName($skill["creator_id"])["name"]; ?></td> 
            <td><?= $skill["creation_date"]; ?></td>         
            <td><?= getUserName($skill["editor_id"])["name"]; ?></td> 
            <td><?= $skill["edit_date"]; ?></td>     
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="aboutme_skill.php?id=<?= $skill["id"]; ?>">Edit</a>
              <br><br>   
              <a class="btn btn-danger" href="aboutme_skill_delete.php?id=<?= $skill["id"]; ?>">Delete</a> 
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

    <div class="col-12 mt-5">
      <h2 class="text-center mt-4">Journeys Table</h2>

      <div class="text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="aboutme_myjourney_new.php">New Journey</a>            
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

        <?php foreach($myjourney_info as $m): ?>
      
          <tr>
            
            <td><img src="<?= $m["img"]; ?>" alt="<?= $m["img"]; ?>"></td>
            <td><img src="<?= $m["title_logo"]; ?>" alt="<?= $m["title_logo"]; ?>"></td>
            <td><?= $m["title"]; ?></td>
            <td><?= $m["text"]; ?></td>    
            <td><?= getUserName($m["creator_id"])["name"]; ?></td> 
            <td><?= $m["creation_date"]; ?></td>                 
            <td><?= getUserName($m["editor_id"])["name"]; ?></td> 
            <td><?= $m["edit_date"]; ?></td>     
            
            <!-- Edit/Back Buttons -->
            <td>
              <a class="btn btn-primary" href="aboutme_myjourney.php?id=<?= $m["id"]; ?>">Edit</a>   
              <br><br> 
              <a class="btn btn-danger" href="aboutme_myjourney_delete.php?id=<?= $m["id"]; ?>">Delete</a>   
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

    <div class="col-12 mt-5">
      <h2 class="text-center mt-4">Personal Interests Table</h2>

      <div class="text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="aboutme_personal_new.php">New Personal</a>            
      </div>

      <table class="m-auto">

        <tr class="text-center">   
          <th>Image</th>
          <th>Title</th> 
          <th>Creator</th> 
          <th>Creation Date</th>
          <th>Edit</th> 
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>

        <?php foreach($personal_info as $p): ?>
      
          <tr>
            
            <td><img src="<?= $p["img"]; ?>" alt="<?= $p["img"]; ?>"></td>
            <td><?= $p["title"]; ?></td>
            <td><?= getUserName($p["creator_id"])["name"]; ?></td> 
            <td><?= $p["creation_date"]; ?></td>         
            <td><?= getUserName($p["editor_id"])["name"]; ?></td> 
            <td><?= $p["edit_date"]; ?></td>     
            
            <!-- Botões de Editar/Apagar -->
            <td>
              <a class="btn btn-primary" href="aboutme_personal.php?id=<?= $p["id"]; ?>">Edit</a>   
              <br><br>  
              <a class="btn btn-danger" href="aboutme_personal_delete.php?id=<?= $p["id"]; ?>">Delete</a>  
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

  </div>

</main>