<?php 
include 'conns.php';
$username = $_SESSION['username'];
$query10= "SELECT * FROM sme_data WHERE ID='1'";
$result= mysqli_query($con,$query10);

?>


<html>
    <head>
            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" />
            <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css" rel="stylesheet" />
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    </head>
    <body>
    <h1> Hello <?=$username ?> !</h1>
    <h4 style="font-weight: bold;">Your Credit score is;</h4>
    <h5 style="font-weight: bold;">0.52..</h5>

            <div class="container" style="width: 800px; border: 1px solid black; padding: 3px">
            <table id="datatable"  style="background-color: slateGray; border-color: red blue gold ;">
                <thead>
                    <tr>
                       <th>Type of Enterprise
                        </th>
                        <th>Business ownership
                        </th>
                        <th>Age of business
                        </th>
                        <th>Number of employees
                        </th>
                        <th>Type of business
                        </th>
                        <th>Sales Inventory
                        </th>
                        <th>Credit
                        </th>
                        <th>Fixed Asset Value
                        </th>
                        <th>Business Monthly turnover
                        </th>
                        <th>Credit history
                        </th>
                      
                    </tr>
                </thead>
                   
                <tbody>
         <!--Use a while loop to make a table row for every DB row-->
<?php
while ($user = mysqli_fetch_assoc($result)){

  echo "<tr style='background-color: Gray;'>";
  echo "<td>".$user['TypeOfEnterprise']."</td>";
  echo "<td>".$user['Ownership']."</td>";
  echo "<td>".$user['Age']."</td>";
  echo "<td>".$user['Employees']."</td>";
  echo "<td>".$user['TypeOfBusiness']."</td>";
  echo "<td>".$user['SalesInventory']."</td>";
  echo "<td>".$user['credit']."</td>";
  echo "<td>".$user['FixedAssets']."</td>";
  echo "<td>".$user['turnover']."</td>";
  echo "<td>".$user['CreditHistory']."</td>";
  echo "</tr>";

}
?>
                    <tr style="background-color: Gray;">
                        <td><br>1 -stands for Micro Enterprise<br>2 -stands for Small Enterprise <br> 3 -stands for Medium Enterprise</td>
                        <td>   </br>1 -stands for Sole proprietorship<br>2 -stands for Partnership<br>3 -stands for Medium Enterprise
                        </td>
                        <td><br>How long the business has been in operation<br><br><br></td>
                        <td><br><br>How many workers the business has<br><br><br><br></td>
                        <td><br>1 -stands for Retail<br>2- stands for Service<br>3- stands for Manufacturing</td>
                        <td><br>Value of goods available for sale<br><br><br></td>
                        <td><br>How much you owe <br><br><br><br></td>
                        <td><br><br>Value of Fixed assets in the business<br><br></td>
                        <td><br>Monthly turnover of the business<br><br><br></td>
                        <td><br><br>1 -stands for No ,I have never sourced for a loan<br>2-stands for Yes ,I have never sourced for a loan</td>

                        </tr>
                    

                </tbody>
            </table>

</div>
                    
                      
                    
    </body>
</html>


<script>
$(document).ready(function() {
    $('#datatable').DataTable({
      dom: 'Bfrtip',
      buttons: [{
        extend: 'pdf',
        title: 'Credit risk report',
        filename: 'credit_risk_report',
        sButtonText: 'download as pdf'
      }, {
        extend: 'excel',
        title: 'Credit risk report',
        filename: 'credit_risk_report'
      }]
    });
  });
</script>