<?php 
require("../../../lang/lang.php");
$strings = tr();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title> <?php echo $strings['kayit'] ?> </title>
    <style>
      body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
      }
    </style>
  </head>
  <body>
    <script id="VLBar" title="SQLi Union Post" category-id="2" src="/public/assets/js/vlnav.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
  
    
    <?php


    if(isset($_REQUEST['delete']) and $_REQUEST['delete'] == 1)
    {
        if(isset($_REQUEST['search']))
        {
            unset($_REQUEST['search']);
        }
    }
    include('dependencies/dbConnect.php');   

    global $mysqli;

?> 
    <main>
      <div class="" style="padding: 60px;">
        <div class="container-fluid">
          <h1 class="mt-4">Datos de la panda</h1>
        
    <div class="form-group">
      <span></span>
    </div>
    <div class="row">
      <div class="col-4">
        <form method="POST">
          <input type="text"placeholder="Search" value="" name="search" >
          <button class="btn btn-primary" type="submit"> Search</button>
        </form>
      </div>
        <form method="POST">
          <button class="btn btn-primary" type="submit">Reset</button>         
          <!-- <input placeholder="Delete" style="display:none" value="1" name="delete"> -->
        </form>

    </div>
    <div class="">
      <fieldset>
        <div class="form-group">
          <div class="">
            <div class="table-responsive mt-4">
              <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>E-Mail</th>
                    <th>Name</th>
                    <th>Surname</th>
                    
                  </tr>
                </thead>
                <tbody> <?php


                                        
                                            if(isset($_POST['search']) and $_POST['search'] != "" )
                                            {
                                              $query = $mysqli->query("SELECT * FROM users WHERE 
                                              name LIKE '%" . $_POST['search'] . "%'");
                                          
                                          }
                                          else
                                          {
                                            $query = $mysqli->query("SELECT * FROM users ");
                                              
                                              
                                          }

                                          while($list = $query->fetch_array())
                                              {
                                                  echo '
                                                  
                                                      <tr>
                                                        <td>'.$list['username'].'</td>
                                                        <td>'.$list['email'].'</td>
                                                        <td>'.$list['name'].'</td>
                                                        <td>'.$list['surname'].'</td>
                                                      </tr>
                                                  ';
                                              }
                                        ?> </tbody>
              </table>
            </div>
          </div>
        </div>
      </fieldset>
    </div>
    </div>
 
    </main>
  </body>

</html>