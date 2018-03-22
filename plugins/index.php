<html>
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="plugins/Font-Awesome/css/font-awesome.css" />
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title>Contact pdf creator</title>
</head>

<body>
<div class="container">
      <form class="contact-us form-horizontal" action="actionpdf.php" method="post">
        <legend>Fill The Form And Submit.</legend>        
        <div class="control-group">
            <label class="control-label">Name</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                    <input type="text" class="input-xlarge" name="name" placeholder="Name">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label"> <span class="add-on"><i class="icon-envelope"></i></span>Email</label>
            <div class="controls">
                <div class="input-prepend">
               
                    <input type="text" class="input-xlarge" name="email" placeholder="Email">
                </div>
            </div>    
        </div>
        <div class="control-group">
            <label class="control-label">Url</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-globe"></i></span>
                    <input type="text" id="url" class="input-xlarge" name="url" placeholder="http://www.example.com">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Comment</label>
            <div class="controls">
                <div class="input-prepend">
                <span class="add-on"><i class="icon-pencil"></i></span>
                    <textarea name="comment" class="span4" rows="4" cols="80" placeholder="Comment (Max 200 characters)"></textarea>
                </div>
            </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="cancel" class="btn">Cancel</button>
          </div>    
        </div>
      </form>
</div>
</body>
</html>