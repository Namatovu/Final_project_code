<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db='smes';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
$records = mysqli_query($conn,"SELECT * FROM users");

 

?>

<!-- This piece of PHP code defines the structure of the html table -->

 

<!DOCTYPE html>
<html>
    <head>
        <title> Fetching data </title>
    </head>

    <body>

        <table width="400" border="2" cellpadding="2" cellspacing='1' id="table_id">

           <tr bgcolor="#2ECCFA">
                     <th> Name</th>
                     <th>Age</th>
                     <th>Location</th>
           </tr>

<!-- We use while loop to fetch data and display rows of date on html table -->

<?php

     while ($user = mysqli_fetch_array($records)){

           echo "<tr>";
               echo "<td>".$user['Name']."</td>";
               echo "<td>".$user['age']."</td>";
               echo "<td>".$user['location']."</td>";
           echo "</tr>";

     }
?>
        </table>

   </body>
   <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Newl\datatables.min.css">
  
<script type="text/javascript" charset="utf8" src="C:\xampp\htdocs\Newl\datables.min.js"></script>


<script type="text/javascript">
   $(document).ready( function () {
    $('#table_id').DataTable({
      
       "sorting":false
    });
} );
</script>
</html>