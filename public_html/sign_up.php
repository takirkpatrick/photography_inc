<!DOCTYPE html>
<!-- I claim this file in the name of Tyler Godfrey. --> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title> Sign Up - Photography Inc.  </title>
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
        
    <h1 id="signup"> Sign Up </h1>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type ="number" class="form-control" id="number" placeholder="Enter number">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="confirmedpwd">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmedpwd" placeholder="Confirm password">
            </div>
            <button type="submit" class="btn btn-success btn-large">Submit</button>
        </form>
    </div>


        
    <?php include '..footer.php'; ?>


    </body>

    
</html>