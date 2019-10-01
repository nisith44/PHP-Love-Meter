<?php require_once('connection.php'); ?>

<?php 
$ref_id=mysqli_real_escape_string($connection,$_GET['ref_id']);
$friend="";
$crush="";


if(isset($_POST['submit'])){
    $friend=mysqli_real_escape_string($connection,$_POST['friend']);
    $crush=mysqli_real_escape_string($connection,$_POST['crush']);
    
    $query="INSERT INTO data (ref_id,friend,crush) 
      VALUES ('{$ref_id}','{$friend}','{$crush}')
    ";

    $result=mysqli_query($connection,$query);
    if($result){
        header('Location:joke.php?ref_id='.$ref_id);
    }
    else{
    echo "database error";
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ඔයාගේ හිතේ ඉන්න කෙනා ඔයාට කොච්චර ආදරෙයිද කියලා බලමු">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" >

    <title>Love මිටරය </title>
  </head>
  <body>

  <div class="container-fluid" align="center">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">LOVE මිටරය</a>
  
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
    <img src="love.png" alt="" width="90%">
    <div class="box" style="width:90%">
    <h3>ඔයාගේ හිතේ ඉන්න කෙනා ඔයාට කොච්චර ආදරෙයිද කියලා බලමුද?</h3>
    <img src="arrow-down.gif" alt="" width="40%">
    <form action="index.php?ref_id=<?php echo $ref_id?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">ඔයාගේ නම</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="friend"  placeholder="ඔයාගේ නම ටයිප් කරන්න" Required>
    
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">ඔයාගේ හිතේ ඉන්න කෙනගේ නම</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="crush"  placeholder="එයාගේ නම ටයිප් කරන්න" Required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block ">ලකුනු බලන්න</button>
</form>
    </div>
<br>
<script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="UCx9Ep4vDZ7gc36oPGZPaBUQ" data-layout="default" data-theme="dark" data-count="default"></div>
    <br>
    <a href="https://www.youtube.com/watch?v=F49GrDkYc5A" target="_blank"><img src="www1.jpg" alt=""></a><br>

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