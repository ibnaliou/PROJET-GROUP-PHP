<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
    <div class="panel">
    <div class="panel panel-heading "></div>
    <div class="panel panel-body">
    <table class="table">
    <?php
    if(isset($_GET['numpiece']))
    {
        include_once "mesclasses.php";

        extract($_POST);
 
        $row=findProprietaire($numpiece);
        echo "
         
            <tr>
                    <th>id</th>
                     <th>numpiece</th>
                    <th>nom </th>
                    <th>tel</th>
             </tr>
             <tr>
                    <td>.'row[0]'.</td>
                    <td>.'row[1]'.</td>
                    <td>.'row[2]'.</td>
                    <td>.'row[3]'.</td>

             </tr>
            ";
    }
    ?>
    </table>
    </div>
    </div>
</div>
   </body>
</html>