<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,'mohith');
$emailaddr=$_POST['email'];
/*
// Check connection
if ($conn->connect_error) {
  die("Connection failed to database " . $conn->connect_error);
}
echo "<script>
  alert('succesfully connected to database');
</script>";
*/
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Check your Score</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">MK's Quiz app</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: black;" class="nav-link" href="../html/scores.php">Scores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  
<h1>Check your Results</h1>
<!--<div class="detailsbox" 
    style="border: 2px solid #333;
          border-radius: 0.5rem;
          background-color: #29bb89;
          width: 65rem;
          padding: 2rem;
          margin: 3rem 0rem 5rem 15rem;


          ">
      <form id="form1" method="post" action="results.php">
        <label style="font-weight: bold;">Name</label>
        <input type="text" name="uname" id="uname">
        <label style="padding-left: 10rem;">Submit all answers</label>
        <input type="submit" name="submit" id="submitbtn">
      </form>
      
    </div>
   --> 
 <div class="result">
      <?php 
     $result = mysqli_query($conn,"SELECT score from quizapp WHERE email='$emailaddr'");
      $i=0;
      while($row = mysqli_fetch_array($result)) {
        ?>
        <h1 style="background-color: transparent;">Your score is <?php echo $row["score"]; ?></h1> 
        <?php
      }
      ?>
    </div>-
  <footer>
    <div>
    <p>All Rights are Reserved@Mk'squiz</p>
    <p>CopyRights&copy; 2021</p>
    </div>
  </footer>
<style type="text/css">
  #uname{
    background: transparent;
    border: 0.05rem solid #333;
    border-radius: 0.5rem;

  }
  #submitbtn{
    border: 0.05rem solid #333;
    background-color: #fff;
    border-radius: 0.5rem;
    padding: 0.1rem;
  }

  #form1{
    padding-left: 5rem;
  }
  

  .result{
    margin-top: 7rem;
  }

  footer{
    margin-top: 8rem;
  }
</style>
</body>
</html>