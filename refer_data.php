<?php require_once('connection.php'); ?>

<?php 
$cookie_name="ref_id";
$ref_id=0;
if(!isset($_COOKIE[$cookie_name])) {
  echo "ඔයාගේ යාලුවන්ගේ විස්තර බලන්න කලින් ආපු browser එකෙන්ම එන්න" ;
} else {
  $ref_id=$_COOKIE[$cookie_name];
}



$query="SELECT * FROM data WHERE ref_id='{$ref_id}' ";
$refers=mysqli_query($connection,$query);
$friend_list="";


if($refers){
    while($refer=mysqli_fetch_assoc($refers)){
        $friend_list.="<tr>";
        $friend_list.="<td>{$refer['data_id']}</td>";
        $friend_list.="<td>{$refer['friend']}</td>";
        $friend_list.="<td>{$refer['crush']}</td>";
        $friend_list.="<tr>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" >
  </head>
  <body>

 <div class="container-fluid" align="center">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">LOVE මිටරය</a>
  <a class="nav-link" href="#">link</a>
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

<div class="box">
<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">යාලුවා</th>
      <th scope="col">යාලුවගේ අරයා</th>
      
    </tr>
  </thead>
  <tbody>
    

    <?php echo $friend_list ?>

  </tbody>
</table>
<a href="refer_share.php?ref_id=<?php echo $ref_id ;?>" class="btn btn-primary btn-lg btn-block" >ඔයාගේ ලින්ක් එක</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>