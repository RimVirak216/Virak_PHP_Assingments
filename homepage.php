<?php 
define('TITLE', 'Login');
include('templates/header1.html');

// <!-- Main jumbotron for a primary marketing message or call to action --
    echo 
    '
    <h2> Here is the page for UploadFiles and UploadImages </h2> 
    <hr>
          <p style="text-align: center; padding: 100px 100px; font-size: 30px;">
             <span style="padding:150px;"><a class="test" href="../VirakHomeworkUploadFile/uploadfiles.php">Upload File</a></span>
             <span><a href="../VirakHomeworkUploadFile/uploadimages.php">Upload Images</a></span>
          </p>
    ';
include('templates/footer.html'); // Need the footer.
?>