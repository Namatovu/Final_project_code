<?php include 'querie.php'; ?>
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


      $('#sign').on('click',function(e){
        e.preventDefault();
        $('.sin').slideToggle("slow");
         $(".sin2").hide();
          $(".sin3").hide();
      });

      $('#sign2').on('click',function(e){
        e.preventDefault();
        $('.sin2').slideToggle("slow");
         $(".sin").hide();
          $(".sin3").hide();
      });

      $('#sign3').on('click',function(e){
        e.preventDefault();
        $('.sin3').slideToggle("slow");
         $(".sin").hide();
          $(".sin2").hide();
      });


      $("#services").click(function(z){
       z.preventDefault();
       $(".servi").show("slow",function(){
        $(".go").hide();
        $(".abt").hide();
         $(".con").hide();
          $(".sup").hide();

       });

      });

      $("#home").click(function(x){
       x.preventDefault();
       $(".go").show("slow",function(){
        $(".servi").hide();
        $(".abt").hide();
         $(".con").hide();
         $(".sup").show();
         
       });

      });

      $("#about").click(function(y){
       y.preventDefault();
       $(".abt").show("slow",function(){
        $(".servi").hide();
        $(".go").hide();
         $(".con").hide();
         $(".sup").hide();
       });

      });

       $("#contact").click(function(u){
       u.preventDefault();
       $(".con").show("slow",function(){
        $(".servi").hide();
        $(".go").hide();
         $(".abt").hide();
         $(".sup").hide();
       });

      });

       
   

    });





  </script>
</head>

<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SME</b>CreditPortal</span>
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
             <a href="#" class="dropdown-toggle" data-toggle = "modal" data-target = "#modi">
              Register

              
            </a>
            
          </li>
         
         
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-dash"></i>
              <span class="hidden-xs">Sign In</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><a href = "#" id="sign">SME</a></li>
              
                <!-- Inner Menu: contains the notifications -->
               
                  <li class="header"><!-- start notification -->
                    <a href="#" id="sign2">
                       Financial Institution
                    </a>
                  
                  <!-- end notification -->
               
              </li>
              <li class="header"><a href="#" id="sign3">Admin</a></li>
            </ul>
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

    

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
       
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="#" id="home"><i class="fa fa-home" aria-hidden="true"></i <span>Home</span></a></li>
        <li><a href="#" id="services"><i class="fa fa-tasks" aria-hidden="true"></i><span>Services</span></a></li>
        <li><a href="#" id="about"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>About</span></a></li>
        <li><a href="#" id="contact"><i class="fa fa-address-book-o" aria-hidden="true"></i><span>Contact</span></a></li>
       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <p> Welcome to the SME financial risk profiling portal</p>
        
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="go">
        <img src="SMEs.jpg" alt="sme" style="width:350px;height:228px;"></br><br>

     <font size="3"><p> Are you a financial instiution and interested in getting client SMEs to fund.Request for an account creation <a href="#" data-toggle = "modal" data-target = "#modi2"> here</a>.</br>
    Are you an SME? Do you need funds to grow your business.The SMECreditPortal is here to help risk profile you,</br> so as you get easy and quick access to funds from financial institutions such as banks.</br>Sign up <a href="#" data-toggle = "modal" data-target = "#modi"  >here </a> if you are interested in opening an account with us.</p><br></font>
  </div>

  <!-- customer support div -->
       <div class="sup well well-sm"  style="width: 300px; position: absolute; margin-left: 60%; margin-top: -12%; ">
            <div class="card-header">
              <h3 style="text-center">Customer support</h3>
              
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
              <input type="input" class="form-control col-md-5" name="name" placeholder="Name" required="required">
                </div>
                 <div class="form-group">
              <input type="email" class="form-control col-md-5" name="emaill" placeholder="Email" required="required">
                </div>
                <div class="form-group">
              <textarea  class="form-control" name="subject" placeholder="Comments" style="height:80px"></textarea>
                </div>
                 <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="send" value = "Send">

                </div>
                
              </form>
            </div>

          </div>
      
 
   
<!-- sign in div-->
 <div class="card sin well well-sm" style="width: 300px; position: absolute; margin-left: 60%; margin-top: -30%; display: none;">
            <div class="card-header">
              <h3 style="text-center">SME</h3>
              
            </div>
            <div class="card-body">
              <form action="querie.php" method="post">

          <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
               <input type="input" class="form-control col-md-5" name="username" placeholder="username" required="required" >
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </div>

              <input type="password" class="form-control col-md-5" name="password" placeholder="password" required="required">
            </div>
          </div>

           <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="submit1" value = "Login">

           </div>

                <a href="#">forgot password?</a>  <a href="#" style="float: right;">change password</a>
              </form>
            </div>

          </div>

<!-- sign2 in div-->  
<div class="card sin2 well well-sm" style="width: 300px; position: absolute; margin-left: 60%; margin-top: -30%; display: none;">
            <div class="card-header">
              <h3 style="text-center">FINANCIAL INSTITUTION</h3>
              
            </div>
            <div class="card-body">
              <form action="querie.php" method="post">

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <input type="input" class="form-control col-md-5" name="username" placeholder="username" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
              <input type="password" class="form-control col-md-5" name="password" placeholder="password" required="required">
                  </div>
                </div>

                 <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="submit2" value = "Login">
                </div>

                <a href="#">forgot password?</a>  <a href="#" style="float: right;">change password</a>
              </form>
            </div>

          </div>        

<!-- sign3 in div--> 
<div class="card sin3 well well-sm" style="width: 300px; position: absolute; margin-left: 60%; margin-top: -30%; display: none;">
            <div class="card-header">
              <h3 style="text-center">ADMIN</h3>
              
            </div>
            <div class="card-body">
              <form method="post" action="querie.php">

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
              <input type="input" class="form-control col-md-5" name="username" placeholder="username" required="required">
               </div>
                </div>

                 <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                     <i class="fa fa-lock" aria-hidden="true"></i> 
                    </div>
              <input type="password" class="form-control col-md-5" name="password" placeholder="password" required="required">
                </div>
                </div>

                 <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="submit3" value = "Login">
               </div>

                <a href="#">forgot password?</a>  <a href="#" style="float: right;">change password</a>
              </form>
            </div>

          </div>        

         


<!-- modal 2-->

<div class="modal" tabindex="-1" role="dialog" id="modi2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Request Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
         <div class="card-body">
           <form  class="form-horizontal" role="form" method="post" action="mail/mailer.php">
            <fieldset>
              <legend>Fill this form</legend>
               <div class="form-group">
      <label class="control-label col-sm-2" for="nof">Name of financial institution:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nof" placeholder="name of financial institution" name="nem" required="required">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="email" required="required" name="email">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="username" required="required" name="username">
      </div>
    </div>
                 <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="password" required="required" name="password">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="cpassword">Confirm Password:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="confirm_password" placeholder=" confirm password" required="required" name="confirm">
      </div>
    </div>
          
        <div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Phone contact:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="contact" placeholder="phone number" required="required" name="phone">
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="tof">Type of financial institution:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
         <label class="checkbox-inline">
      <input type="checkbox" value="Bank" name="fi" required="required">Bank
    </label>
     <label class="checkbox-inline">
      <input type="checkbox" value="Sacco" name="fi" required="required">Sacco
    </label>
      </div>
    </div>     
            

              <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Registration Status:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
       <label class="radio-inline">
      <input type="radio" name="regstatus" required="required" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="regstatus" value="no">No
    </label>
      </div>
    </div>
             
     
    <div class="form-group">
      <label class="control-label col-sm-2" for="loc">Location:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
       <select name="location" class="form-control" required="required">
    <option value="kampala">Kampala</option>
    <option value="kikoni">kikoni</option>
    <option value="wakiso">wakiso</option>
    <option value="gulu">gulu</option>
  </select>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="score">Score limit:<span style="color: red;">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="score" placeholder="score limit" required="required" name="scorelimit">
      </div>
    </div> 
     <div class="form-group">
             
                </div>

                 </fieldset>
              
         </div> 
        </div>
      </div>

      <div class="modal-footer">
        
          <input type="submit" name="data2" class="btn btn-primary" value="Submit" />

        <input name="" type="reset" class="btn btn-secondary" value="Clear" />
        
      </div>
      </form>

    </div>
  </div>
</div>


<!-- modal 1 -->
<div class="modal" tabindex="-1" role="dialog" id="modi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Registration Form</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
         <div class="card-body">
           <form  class="form-horizontal" role="form" method="post" action="querie.php">
            
            <?php include('errors.php'); ?>

            <fieldset>
              <legend>Business Information</legend>
               <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="username" name="user" required="required">
      </div>
      <div style="background: red; display: none;" class="mm"> wrong input</div>
    </div>
                 <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" placeholder="password" name="pass" required="required">
      </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="cpassword">Confirm Password:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="cpassword" placeholder=" confirm password" name="confirm" required="required">
      </div>
    </div>
           <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="email" name="email" required="required">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Phone contact:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="contact" placeholder="phone number" name="phone" required="required">
      </div>
    </div>      
            
<div class="form-group">
      <label class="control-label col-sm-2" for="enterprise">Name of enterprise:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="enterprise" placeholder="enterprise name" name="nom" required="required">
      </div>
    </div>
              <div class="form-group">
      <label class="control-label col-sm-2" for="rs">Registration Status:<span style="color: red">*</span></label>
      <div class="col-sm-10" >
       <label class="radio-inline">
      <input type="radio" name="regstat" required="required" value="Yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="regstat" value="No">No
    </label>
      </div>
    </div>
             
    <div class="form-group">
      <label class="control-label col-sm-2" for="tob">Type of business:<span style="color: red">*</span></label>
      <div class="col-sm-10">
         <label class="checkbox-inline">
      <input type="checkbox" value="sole" name="tob" required="required">Sole
    </label>
     <label class="checkbox-inline">
      <input type="checkbox" value="partnership" name="tob" required="required">Partnership
    </label>
     <label class="checkbox-inline">
      <input type="checkbox" value="corporation" name="tob" required="required">Corporation
    </label>
         <label class="checkbox-inline">
      <input type="checkbox" value="other" name="tob" required="required" >Other
    </label>
      </div>
    </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="doe">Date of establishment:<span style="color: red">*</span></label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="doe" placeholder="date of establishment" name="doe" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="loc">Location:<span style="color: red">*</span></label>
      <div class="col-sm-10">
       <select name="loc" class="form-control" required="required">
    <option value="kampala">Kampala</option>
    <option value="kikoni">kikoni</option>
    <option value="wakiso">wakiso</option>
    <option value="gulu">gulu</option>
  </select>
      </div>
    </div>

                 </fieldset>
              
         </div> 
        </div>
      </div>

      <div class="modal-footer">
         <input type="submit" class="btn btn-primary" name="data1"  value="submit">
        <input name="" type="reset" class="btn btn-secondary" value="Clear" />
       
      </div>
      </form>
    </div>
  </div>
</div>

<!-- services div-->
<div class="servi" style="display: none;">
  <p>sdfghjklfdcgvjhbkj</p>
  
</div>
<!-- about div-->
<div class="abt" style="display: none;">
  <p>dododododod</p>
  
</div>

<!-- contact div-->
<div class="con" style="display: none;">
  <p>cocococococ</p>
  
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

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  



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
