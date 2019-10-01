<?php require_once('connection.php'); ?>

<?php 

$ref_id=mysqli_real_escape_string($connection,$_GET['ref_id']);
$ref_link="http://www.lovermeter.ga/index.php?ref_id=".$ref_id;
$new_link=$ref_link;


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
  <a class="nav-link" href="refer_data.php">ඔයාගේ යාලුවෝ</a>
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


<div class="box" style="width:90%">

  <div class="form-group">
  <h2>පහල ලින්ක් එක ඔයාගේ යාලුවන්ට Share කරන්න</h2>
    
    <input type="text" class="form-control" id="exampleInputEmail1" name="ref_link"  placeholder="" value="<?php echo $ref_link?>">
    
  </div>
  <br>
  
  <button  onclick="myFunction()" name="submit" class="btn btn-primary btn-lg btn-block ">COPY LINK</button>

<a class="btn btn-success btn-lg btn-block" href="refer_data.php">ඔයාගේ යාලුවෝ ටයිප් කරපුවා මෙතනින් බලන්න</a>
<br>
<a href="whatsapp://send?text=ඔයාගේ හිතේ ඉන්න කෙනා ඔයාට කොච්චර ආදරෙයිද කියලා බලමුද <?php echo $new_link; ?> " class="btn btn-success btn-lg btn-block" style="background:green;">Share on Whatsapp</a>
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.lovermeter.ga/index.php?ref_id=<?php echo $ref_id;?>" target="_blank" class="btn btn-info btn-lg btn-block" style="background:blue;">Share on Facebook</a>
<a href="viber://forward?text=ඔයාගේ හිතේ ඉන්න කෙනා ඔයාට කොච්චර ආදරෙයිද කියලා බලමුද <?php echo $new_link; ?>" class="btn btn-success btn-lg btn-block" style="background:purple;">Share on Viber</a>
<a href="sms:?&body=ඔයාගේ හිතේ ඉන්න කෙනා ඔයාට කොච්චර ආදරෙයිද කියලා බලමුද <?php echo $new_link; ?> " class="btn btn-warning btn-lg btn-block">Share on sms</a>
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





<script>
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("exampleInputEmail1");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>


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