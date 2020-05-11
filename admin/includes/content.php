
   

     <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Blank Page
            <small>Subheading</small>
        </h1>
        
        <?php    
            $sql = "SELECT *
                    FROM users
                    WHERE user_id = 1";
            
            $result = $database->query($sql);
            
            $users_found = mysqli_fetch_array($result);
        
            echo $users_found['user_lastname'];
          
         ?>
        
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
        
        
        
    </div>
    </div>