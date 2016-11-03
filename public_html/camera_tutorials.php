<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Camera Tutorials</title>

    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- If you don't like how bootstrap looks, go here and see other themes
         that are available:
         https://bootswatch.com/

         You can replace the 'optional theme' with links from the page below
         to get that theme:
         https://www.bootstrapcdn.com/bootswatch/
    -->

    <!-- Our custom stylesheet that WE write. We need this to not have our
         text appear under the nav bar. -->
    <link rel="stylesheet" href="custom.css">
    
    <body>
    <div style="overflow: auto; height: 45px;">
           <?php include 'navigation.php'; ?>

        </div>
        
        <img class="image" src="img/MadsenBrown_header.jpg" alt="Madsen-Brown Header" width="100%" />
        
        
        <h1 id="cameraTutorials"> Camera Tutorials </h1>

        <img class="image" src="img/labeled_camera.png" alt="Labeled Camera" />
    
        <p>
           
        </p>

        <div class="container">
  <h2>Which camera should you buy?</h2>
  <p>Here are the different types of cameras:</p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>BRAND</th>
        <th>LENS</th>
        <th>TYPE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sony</td>
        <td>Ultra Wide Angle</td>
        <td>Digital Camera</td>
      </tr>
      <tr>
        <td>Canon</td>
        <td>Wide Angle</td>
        <td>Video Camera</td>
      </tr>
      <tr>
        <td>Kodak</td>
        <td>Standard Angle</td>
        <td>Disposable</td>
      </tr>
    </tbody>
  </table>
</div>
    <?php include 'footer.php'; ?>


    </body>
    
</html>