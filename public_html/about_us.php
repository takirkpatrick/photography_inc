<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About Us</title>

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

  </head>
    
    <body>
        <?php include 'navigation.php'; ?>


                <img class="image" src="img/MadsenBrown_header.jpg" alt="Madsen-Brown Header" width="100%" />
                
                
                <div class="jumbotron">
  <h1 class="display-3">About Us</h1>
  <p class="lead">Simpson College students Ashtyne Madsen and Kyann Brown developed their passion for photography while attending schools. But they didn't want their artistry to be limited to just the classroom. Thus, Madsen-Brown Photography and Design was born.</p>
  <p>From landscape to portraits to newborn babies, these two ladies can capture exactly what you're looking for -- even if you don't know it yet. Study abroad experiences and in-class work gives the business an eclectic style that is unrivaled in the photography world.</p>
  <p> 
  <hr class="m-y-2">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p>Affordable yet astounding quality, Madsen-Brown Photography and Design settles for nothing less than spectacular. Prices are available upon inquiry.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

</div>
 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/Monica.jpg" alt="Garrett and Monica">
    </div>

    <div class="item">
      <img src="img/Abby.jpg" alt="Abby">
    </div>

    <div class="item">
      <img src="img/Maddie.jpg" alt="Maddie and Caleb">
    </div>

    <div class="item">
      <img src="img/Pierce.jpg" alt="Pierce">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
</div>
=======
        
      <div class="jumbotron">  
        <h1 class="display-3"> More About Us </h1>

	<br>
        <p style="font-size: 20px; font-family: arial,sans-serif">
           We're two college students trying to help others learn the art of photography. We gained our skills at Simpson College and through many study abroad
            experiences. We have taken an interest in creating this website because we believe that everyone should know the joys of owning their very own camera.   We             fell in love with photography while we were in Intro to Photography in high school. It made us really appreciate how a memory can be cherished on a piece             of paper for years to come, like our graduation day from high school.                    
        </p>
        </div>
        
        <img class="image" src="img/stick_people.png" alt="Stick People of Us" /> <img class="image" src="img/graduation.png" alt="Graduation" />


    <?php include 'footer.php'; ?>


    </body>
    
</html>
