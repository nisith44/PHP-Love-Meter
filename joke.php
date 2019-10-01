<?php require_once('connection.php'); ?>

<?php 
    $ref_id=mysqli_real_escape_string($connection,$_GET['ref_id']);

    $query="SELECT ref_name FROM refers WHERE ref_id='{$ref_id}' LIMIT 1 ";
    $result=mysqli_query($connection,$query);
    $ref_name;
    if($result){
        while($refer=mysqli_fetch_assoc($result)){
            $ref_name= $refer['ref_name'];
    }}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" >

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container-fluid" align="center">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">LOVE මිටරය</a>
  <a class="nav-link" href="refer_sign.php">යාලුවෝ රවට්ටමු</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    
  </div>
</nav>
<br><br>

    <div class="box" style="width:90%" align="center" style="margin:0 auto;">
        <h3 >හෝ හෝ <?php echo $ref_name; ?> ඔයාව රැවැට්ටුවා.... දැන් <?php echo $ref_name; ?> ඔයාගේ අරයා ගැන දැනගත්තා..ඔයාගේ යාලුවන්ගේ ඒවත් මේ විදියට බලමුද?</h3>
        <br>
        <a href="refer_sign.php" class="btn btn-primary btn-lg btn-block">ඔයාගේ යාලුවන්වත් රවට්ටන්න මෙතනින් එන්න</a>
    </div>

    <br> <h4>පහලින් අපිව Like කරන්න</h4>
<div class="fb-like" data-href="https://www.facebook.com/tutuandtiti/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>


<br><br>
<div class="fb-page" data-href="https://www.facebook.com/tutuandtiti" data-tabs="timeline" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tutuandtiti" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tutuandtiti">Tutu titi ටුටූයි ටිටීයි</a></blockquote></div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>

<br><br>
<!-- Footer -->
<footer class="page-footer font-small bg-primary">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:white;">© 2018 Copyright:
    <a href="https://www.youtube.com/okkomamekepage">Design By OKKOMAMEKE</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>