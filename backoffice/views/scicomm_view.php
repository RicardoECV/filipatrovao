<main class="container-fluid">

  <div class="row">

    <div class="col-12 text-center">
      <h1 class="p-3">Scicomm Page (Edit)</h1>      
    </div> 
    
    <!-- Principal Edit Table -->
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
          
          <td><?= $scicomm_page_info["title"]; ?></td>
          <td><?= $scicomm_page_info["sub_title_1"]; ?></td>
          <td><?= $scicomm_page_info["sub_title_2"]; ?></td>        
          <td><?= getUserName($scicomm_page_info["editor_id"])["name"]; ?></td> 
          <td><?= $scicomm_page_info["edit_date"]; ?></td>     
          
          <!-- Edit Button -->
          <td>
            <a class="btn btn-primary" href="scicomm_principal.php">Edit</a>  
          </td>
          
        </tr>
    
      </table>
    </div>

    <div class="col-12">
      <h2 class="text-center mt-4">Scicomm Cards Table</h2>

      <div class="col-12 text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="scicomm_card_new.php">New Card</a>            
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

        <?php foreach($scicommcards_info as$s): ?>
      
          <tr>
            
            <td><img src="<?=$s["img"]; ?>" alt="<?=$s["img"]; ?>"></td>
            <td><?=$s["title"]; ?></td>
            <td><?= getUserName($s["creator_id"])["name"]; ?></td> 
            <td><?=$s["creation_date"]; ?></td>         
            <td><?= getUserName($s["editor_id"])["name"]; ?></td> 
            <td><?=$s["edit_date"]; ?></td>     
            
            <!-- Edit/Delete Buttons -->
            <td>
              <a class="btn btn-primary" href="scicomm_card.php?id=<?=$s["id"]; ?>">Edit</a>
              <br><br>   
              <a class="btn btn-danger" href="scicomm_card_delete.php?id=<?=$s["id"]; ?>">Delete</a> 
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

    <div class="col-12 mt-5">
      <h2 class="text-center mt-4">Activities Table</h2>

      <div class="col-12 text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="scicomm_activitie_new.php">New Activitie</a>            
      </div>

      <table class="m-auto">

        <tr class="text-center">  
          <th>Text</th> 
          <th>Creator</th> 
          <th>Creation Date</th> 
          <th>Edit</th>            
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>

        <?php foreach($activities_info as $a): ?>
      
          <tr>          
                      
            <td><?= $a["text"]; ?></td>    
            <td><?= getUserName($a["creator_id"])["name"]; ?></td> 
            <td><?= $a["creation_date"]; ?></td>                 
            <td><?= getUserName($a["editor_id"])["name"]; ?></td> 
            <td><?= $a["edit_date"]; ?></td>     
            
            <!-- Edit/Back Buttons -->
            <td>
              <a class="btn btn-primary" href="scicomm_activitie.php?id=<?= $a["id"]; ?>">Edit</a>   
              <br><br> 
              <a class="btn btn-danger" href="scicomm_activitie_delete.php?id=<?= $a["id"]; ?>">Delete</a>   
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

    <div class="col-12 mt-5">
      <h2 class="text-center mt-4">Multimedia Content Table</h2>

      <div class="col-12 text-center p-4">      
        <a class="text-decoration-none text-white btn btn-primary" href="scicomm_multimedia_new.php">New Multimedia Content</a>            
      </div>

      <table class="m-auto">

        <tr class="text-center">   
          <th>Image</th>
          <th>Title</th> 
          <th>Link</th>           
          <th>Creator</th> 
          <th>Creation Date</th>
          <th>Edit</th> 
          <th>Last Edit Date</th>          
          <th>Settings</th> 
        </tr>

        <?php foreach($multimediacontent_info as $m): ?>
      
          <tr>
            
            <td><img src="<?= $m["img"]; ?>" alt="<?= $m["img"]; ?>"></td>
            <td><?= $m["title"]; ?></td>
            <td><?= $m["link"]; ?></td>
            <td><?= getUserName($m["creator_id"])["name"]; ?></td> 
            <td><?= $m["creation_date"]; ?></td>         
            <td><?= getUserName($m["editor_id"])["name"]; ?></td> 
            <td><?= $m["edit_date"]; ?></td>     
            
            <!-- Edit/Back Buttons -->
            <td>
              <a class="btn btn-primary" href="scicomm_multimedia.php?id=<?= $m["id"]; ?>">Edit</a>   
              <br><br>  
              <a class="btn btn-danger" href="scicomm_multimedia_delete.php?id=<?= $m["id"]; ?>">Delete</a>  
            </td>
            
          </tr>

        <?php endforeach; ?>
    
      </table>
    </div>

  </div>

</main>