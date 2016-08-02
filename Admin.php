
<?php require 'includes/mainheader.php'; ?>
<?php require 'includes/subheader.php'; ?>
<?php require 'functions/connection.php'; ?>


  <head>
    <title>LMS 2016</title>
      <link href="Bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
      <script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
      <script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>
      <link  href="css/subform.css" type="text/css" rel="stylesheet">
    </head>

       <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        
            <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="img/pic3.png" alt="people" class="img-circle width-60" />
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="text-white text-display-1 margin-v-0">User Name</h4>
                    <h6 class="text-subhead"><a class="link-white text-underline" href="website-student-public-profile.html">View public profile</a></h6>
                </div>
                <div class="media-right">
                    <p class="label bg-blue-500">Position</p>
                    
                </div>
            </div>
        </div>
    </div>
        
        
        
      </div>
    </div>




        <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
          
          <h3></h3>
              
              <!--begin tabs going in wide content -->
               <ul class="nav nav-tabs content-tabs" id="maincontent" role="tablist">
                  <li><a href="#student" role="tab" data-toggle="tab">Add Student</a></li>
                  <li><a href="#lecturer" role="tab" data-toggle="tab">Add Lecturer</a></li>
                  <li><a href="#admin" role="tab" data-toggle="tab">Add Admin </a></li>

               </ul><!--/.nav-tabs.content-tabs -->
               
               
               
              
          
               <div class="tab-content">
                 
                  <div class="tab-pane fade in active" id="home">

          
                                

  <meta name="viewport" content=", ">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



                    

                  </div><!--/.tab-pane -->
                 
                 
                 
                 
                  <div class="tab-pane fade" id="student">
                       
                             <div class="tab-content">
                            
                                <form class="form-horizontal" role="form" action="insert.php" method="post">
                                    <div class="frm">
                                    <h2>Student SignUp</h2>
                                    <div class="form-group">
                                        <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fullName" placeholder="Type Here" class="form-control" autofocus>
                                            <span class="help-block">Full Name, eg.: De Alwis P A Kavinda</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" placeholder="Type Here" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="repass" class="col-sm-3 control-label">Re-Enter Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" id="repass" placeholder="Type Here" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <button type="submit" class="btn btn-primary btn-block">Add Student</button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                   </div>
                        <!-- // END Panes -->
                   <div class="tab-pane fade" id="lecturer">


                       <div class="tab-content">

                           <form class="form-horizontal" role="form" action="insert.php" method="post">
                               <div class="frm">
                                   <h2>Lecturer SignUP</h2>
                                   <div class="form-group">
                                       <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="fullName" placeholder="Type Here" class="form-control" autofocus>
                                           <span class="help-block">Full Name, eg.: De Alwis P A Kavinda</span>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="password" class="col-sm-3 control-label">Password</label>
                                       <div class="col-sm-9">
                                           <input type="password" name="password" placeholder="Type Here" class="form-control" autofocus>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="repass" class="col-sm-3 control-label">Re-Enter Password</label>
                                       <div class="col-sm-9">
                                           <input type="password" id="repass" placeholder="Type Here" class="form-control" autofocus>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="col-sm-9 col-sm-offset-3">
                                           <button type="submit" class="btn btn-primary btn-block">Add Student</button>
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>

                   </div>

                   <div class="tab-pane fade" id="admin">


                       <div class="tab-content">

                           <form class="form-horizontal" role="form" action="insert.php" method="post">
                               <div class="frm">
                                   <h2>Admin SignUP</h2>
                                   <div class="form-group">
                                       <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                                       <div class="col-sm-9">
                                           <input type="text" name="fullName" placeholder="Type Here" class="form-control" autofocus>
                                           <span class="help-block">Full Name, eg.: De Alwis P A Kavinda</span>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="password" class="col-sm-3 control-label">Password</label>
                                       <div class="col-sm-9">
                                           <input type="password" name="password" placeholder="Type Here" class="form-control" autofocus>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="repass" class="col-sm-3 control-label">Re-Enter Password</label>
                                       <div class="col-sm-9">
                                           <input type="password" id="repass" placeholder="Type Here" class="form-control" autofocus>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <div class="col-sm-9 col-sm-offset-3">
                                           <button type="submit" class="btn btn-primary btn-block">Add Student</button>
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>

                   </div>








                       
                       
                       
              
                 
          
     
      
        
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
               
       <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>         
        
      </div>
       </div> 

   <?php require 'includes/footer.php'; ?> 
