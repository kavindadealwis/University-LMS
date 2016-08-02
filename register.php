<?php require 'includes/mainheader.php'; ?>

<head>

    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/image.css">
    <title>LMS</title>

    <script>
        function validate() {
            if (document.registration.fullName.value.length==0) {
                alert("Please Type Your Full Name");
                return false;
            }
            if (document.registration.address.value.length==0){
                alert("Please Type Your Address");
                return false;
            }
            if (document.registration.currentadd.value.length==0){
                alert("Please Type Your Current Address");
                return false;
            }
            if (document.registration.email.value.length==0){
                alert("Please Type Your E-mail");
                return false;
            }
            if (document.registration.home.value.length==0){
                alert("Please Type Your Home contact");
                return false;
            }
            if (document.registration.mobile.value.length==0){
                alert("Please Type Your Mobile Contact");
                return false;
            }
            if (document.registration.birthDate.value.length==0){
                alert("Please Type Your Birth Date");
                return false;
            }
            if (document.registration.startDate.value.length==0){
                alert("Please Choose A Startdate");
                return false;
            }
        }
    </script>
</head>
<?php require 'includes/subheader.php'; ?>

<div class="container">
        <div class="col-md-3">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    <div class="col-md-6">
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="insert.php" method="post">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="fullName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" name="fullName" placeholder="Type Here" class="form-control" autofocus>
                <span class="help-block">Full Name, eg.: De Alwis P A Kavinda</span>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Address</label>
            <div class="col-sm-9">
                <input type="text" name="address" placeholder="Type Here" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="currentadd" class="col-sm-3 control-label">Current Address</label>
            <div class="col-sm-9">
                <input type="text" name="currentadd" placeholder="Type Here" class="form-control" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" name="email" placeholder="Type Here" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="home" class="col-sm-3 control-label">Contact Number(Home)</label>
            <div class="col-sm-9">
                <input type="number" name="home" placeholder="Type Here" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="mobile" class="col-sm-3 control-label">Contact Number(Mobile)</label>
            <div class="col-sm-9">
                <input type="number" name="mobile" placeholder="Type Here" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" name="birthDate" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Start Date</label>
            <div class="col-sm-9">
                <select name="startDate" class="form-control">
                    <option>--Select--</option>
                    <option>10th of October 2016</option>
                    <option>25th of March 2017</option>
                    <option>10th of October 2017</option>
                </select>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="M"> Male
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="F"> Female
                        </label>
                    </div>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="terms">I accept <a href="#">terms</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
    </div>
    <div class="col-md-3">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
</div> <!-- ./container -->

<?php require 'includes/footer.php'; ?>