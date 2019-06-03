<?php 
include 'conns.php';
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>THE SMECreditPortal</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <script type = "text/javascript" src="js/jquery.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript">
  $(function(){

    var requiredCheckboxes = $(':checkbox[required]');

    requiredCheckboxes.change(function(){

        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        }

        else {
            requiredCheckboxes.attr('required', 'required');
        }
    });

});

    $(function() {


      

      $("#home").click(function(x){
       x.preventDefault();
       $(".go").show("slow",function(){
        $(".prof").hide();
        $(".repo").hide();
        $(".req").hide();
         
         
       });

      });

      $("#profile").click(function(y){
       y.preventDefault();
       $(".prof").show("slow",function(){
        $(".go").hide();
        $(".repo").hide();
        $(".req").hide();
         
       });

      });

       $("#reports").click(function(u){
       u.preventDefault();
       $(".repo").show("slow",function(){
        $(".go").hide();
         $(".prof").hide();
         $(".req").hide();

         
       });

      });

        $("#requests").click(function(u){
       u.preventDefault();
       $(".req").show("slow",function(){
        $(".go").hide();
         $(".prof").hide();
         $(".repo").hide();
         
       });

      });

       
      

    });
  </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SME</b>CreditPortal</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
       <div class="navbar-custom-menu">
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
         
          <!-- Tasks Menu -->
         
          <!-- User Account Menu -->
          
          
         
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> <?=$username ?></span>
            </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
         
               
         
             
               
      </div>
    
    </nav>


  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
    

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
       
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="#" id="home"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>
        <li><a href="#" id="profile"><i class="fa fa-user-circle" aria-hidden="true"></i><span>Profile</span></a></li>
        <li><a href="#" id="reports"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Reports</span></a></li>
        <li><a href="#" id="requests"><i class="fa fa-bars" aria-hidden="true"></i><span>Requests</span></a></li>
        <li><a href="logout2.php"><i class="fa fa-link"></i> <span>logout</span></a></li>
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="go" id="home">
      
<div class="well" style="width: 700px; margin-left: 15%;">
      <h1>Fill this form for credit risk profiling</h1><br>
     
        <form  class="form-horizontal" role="form" method="post" action="querie.php">
            <fieldset>
              <legend>Business information</legend>
               
     <table>
 <div class="form-group">
      <label class="control-label col-sm-2" for="tof">Type of enterprise:</label>
       <div class="col-sm-10">
       <label class="radio-inline">
      <input type="radio" name="TypeOfEnterprise" value="1" >Medium
    </label>
    <label class="radio-inline">
      <input type="radio" name="TypeOfEnterprise" value="2">Small
    </label>
    <label class="radio-inline">
      <input type="radio" name="TypeOfEnterprise" value="3">Micro
    </label>
      </div> 
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="tof">Form of business ownership:</label>
      
         <div class="col-sm-10">
       <label class="radio-inline">
      <input type="radio" name="ownership" value="1">Sole Proprietorship
    </label>
    <label class="radio-inline">
      <input type="radio" name="ownership" value="2">Partnership
    </label>
    <label class="radio-inline">
      <input type="radio" name="ownership" value="3">Limited company
    </label>
      </div>  
    </div> 

     <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Business Age:</label>
      <div class="col-sm-10 ">
      <input type="text" name="age" class="form-control">
      </div>
    </div>    
            

              <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Number of employees:</label>
      <div class="col-sm-10 ">
      <input type="text" name="employees" class="form-control">
      </div>
    </div>
             
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="loc">Type of business:</label>
       <div class="col-sm-10">
       <label class="radio-inline">
      <input type="radio" name="typeofbusiness" value="1">Retail
    </label>
    <label class="radio-inline">
      <input type="radio" name="typeofbusiness" value="2">Service
    </label>
    <label class="radio-inline">
      <input type="radio" name="typeofbusiness" value="3">Manufacturing
    </label>
      </div>  
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Sales Inventory:</label>
      <div class="col-sm-10 ">
      <input type="text" name="SalesInventory" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Fixed asset value:</label>
      <div class="col-sm-10 ">
      <input type="text" name="fixedAssets" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Turn over:<span style="color: red; ">*</span></label>
      <div class="col-sm-10 ">
      <input type="text" name="turnover" class="form-control" placeholder="The items quantity and amount of money sold in a given period i.e. monthly">
      </div>
    </div>
    
    <legend>Credit history</legend>
 <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Have you ever sourced for a loan?:</label>
      <div class="col-sm-10">
       <label class="radio-inline">
      <input type="radio" name="CreditHistory" value="1">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="CreditHistory" value="2">No
    </label>
      </div>
    </div>


     
    

 <div class="form-group">
  <input type="submit" class="btn btn-primary btn-block" name="data4" value = "Submit" style="width: 100px; float: right;">
              


                </div>
                </table>
                 </fieldset>
              </form>
   </div>   
          

</div>

<!-- profile div-->
<div class="prof" style="display: none;">
<div class="well" style="width: 700px;">
<h2>Hello <?=$username ?> here is your profile</h2>

  <table>
   <?php
    $query7= "SELECT * FROM fi WHERE username='$username' ";
    $result= mysqli_query($con,$query7);

   while($row = mysqli_fetch_array($result)){
    echo "<tr><td>Name:</td><td>" . $row['name'] . "</td> </tr>
      <tr><td>Email:</td><td>" . $row['email'] . "</td></tr>
      <tr><td>Phone contact:</td><td>" . $row['phone'] . "</td></tr>
      <tr><td>Type of financial institution:</td><td>" . $row['typeoffi'] . "</td></tr>
      <tr><td>Registration Status:</td><td>" . $row['regstatus'] . "</td></tr>
      <tr><td>Location:</td><td>" . $row['location'] . "</td></tr>
      <tr><td>Score limit:</td><td>" . $row['scorelimit'] . "</td></tr>";
   }
   echo "</table>".mysqli_error($con);

    ?>
</div>
</div>

<!-- reports div-->
<div class="repo" style="display: none;">
  <form>
    
  </form>
  
</div>

<!-- requests div-->
<div class="req" style="display: none;">
 
          <div class="well well-sm"  style="width: 450px;  ">
            <div class="card-header">
              <h3 style="text-center">Request for credit risk report verification</h3>
              
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
              <input type="input" class="form-control col-md-5" name="name" placeholder="Name of SME" required="required">
                </div>
                 <div class="form-group">
              <input type="email" class="form-control col-md-5" name="emaill" placeholder="Emailto" required="required">
                </div>
                 <div class="form-group">
              <input type="file" class="form-control col-md-5" name="attachment" placeholder="add file" required="required"><br>
                </div>
                
               
                 <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="send" value = "Send">

                </div>
                
              </form>
            </div>

          </div>
  
</div>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <a href="#">Terms and conditions</a>
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Visit us on:  
      <i class="fa fa-facebook-official" aria-hidden="true" style="color: #3c8dbc;"></i>
       <i class="fa fa-linkedin-square" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true" style="color: #3c8dbc;"></i>
      <a href="#"> FAQs</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


<!--registration -->

<div class="reg" style="display: none;">
  <form action="" class="form-group">
    <fieldset>
      <legend>Business Information:</legend>
    User name: <input type="text" name="un"></br></br>

    Password: <input type="text" name="pw"></br></br>

    Confirm Password: <input type="text" name="cpw"></br></br>

    Email Address: <input type="text" name="em"></br></br>

    Phone Contact: <input type="text" name="pc"></br></br>

    Name of enterprise: <input type="text" name="noe"></br></br>

    Registration Status: <input type="radio" name="rs">Yes <input type="radio" name="rs">No<br> <br>

    Type of Business: <input type="checkbox" name="tob">Sole <input type="checkbox" name="tob">Partnership <input type="checkbox" name="tob">Corporation <input type="checkbox" name="tob">Other <br> <br>

    Date of establishment: <input type="date" name=""><br><br>


    Location:<select name="loc">
    <option value="kampala">Kampala</option>
    <option value="kikoni">kikoni</option>
    <option value="wakiso">wakiso</option>
    <option value="gulu">gulu</option>
  </select><br><br>

  <button type="button" >Submit</button> <button type="button" >Cancel</button>


       </fieldset>
  </form>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
