<!DOCTYPE html>
<!-- I claim this file in the name of Tyler Godfrey. -->

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title> Log In - Photography Inc.  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    </head>
    
    <body>
<div style="overflow: auto; height: 45px;">
<?php include '../resources/navigation.php'; ?>


        </div>
        <h1 id="login"> Log In </h1>

<div class="container">
    <form>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<br>
<br>
<div class="container">
<div class="alert alert-info fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sign Up Now!</strong> If you don't already have an account to the page, go ahead and sign up on the sign up page found in the menu bar at the top.
  </div>
<div class="alert alert-info fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Times!</strong> Make sure to check out the new hours that we are available to help with all of your camera/photography needs.
</div>
</div>

  
        
    <?php include '..footer.php'; ?>


    </body>
</html>