<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("refresh:0;url=index.html");
}else {
  $con = mysqli_connect('localhost','root','','job_bridge') or die("connection not estblished");
  $id=$_SESSION['id'];
  $sql="SELECT *FROM user WHERE id=$id ";
  $result=mysqli_query($con,$sql);
  $results=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Job_bridge/css/index1.css">
    <style>
        body { 
    display: grid;
    grid-template-areas: 
      "header header header"
      "nav article ads"
      "footer footer footer";
    grid-template-rows: 80px 1fr 70px;  
    grid-template-columns: 20% 1fr 15%;
    grid-row-gap: 10px;
    grid-column-gap: 10px;
    height: 100vh;
    margin: 0;
    }  
  header, footer, article, nav, div {
    padding: 0.2em;
    background:#0689aa;
    }
  #pageHeader {
    grid-area: header;
    }
  #pageFooter {
    grid-area: footer;
    }
  #mainArticle { 
    grid-area: article;      
    }
  #mainNav { 
    grid-area: nav; 
    }
  #siteAds { 
    grid-area: ads; 
    } 
  /* Stack the layout on small devices/viewports. */
  @media all and (max-width: 575px) {
    body { 
      grid-template-areas: 
        "header"
        "article"
        "ads"
        "nav"
        "footer";
      grid-template-rows: 80px 1fr 70px 1fr 70px;  
      grid-template-columns: 1fr;
   }
  }
  
    </style>
</head>
<body>
    <header id="pageHeader">
        <div class="container" style=" font-weight: bolder;">
            
            <ul class="nav justify-content-center" style="color: black;">
              <li class="nav-item">
                <a style="color: black;" class="nav-link" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a  style="color: black;" class="nav-link" href="#">JOBS</a>
              </li>
              <li class="nav-item">
                <a style="color: black;" class="nav-link" href="#">MESSAGE</a>
              </li>
              <li class="nav-item">
                <a style="color: black;" class="nav-link " href="#">NOTIFICATIONS</a>
              </li>
              <li class="nav-item">
                <a style="color: black;" class="nav-link " href="logout.php">Logout</a>
              </li>
            </ul>
           </div>
    </header>
    <article id="mainArticle">
        <div class="container">
  
            <div class="card">
              <div class="card-header">
              <?php echo $results['fname'];?> <?php echo $results['lname']; ?></div>
              <div class="card-body">First Name: <?php echo $results['fname']; ?></div>
              <div class="card-body">Last Name: <?php echo $results['lname']; ?></div>
              <div class="card-body">Email: <?php echo $results['email']; ?></div>
              <div class="card-body">Gender: <?php echo $results['gender']; ?></div>
              <div class="card-body">Account Type: <?php echo $results['who']; ?></div>
            </div>
          </div>
    </article>
    <nav id="mainNav">
        <div class="container">
            <div class="card" style="width:243px">
              <img class="card-img-top" src="img/img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title"><?php echo $results['fname'];?> <?php echo $results['lname']; ?></h4>
                <p class="card-text">Gender: <?php echo $results['gender'];?></p>
                <p class="card-text">Status: Online</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
            <br>
    </nav>
    <div id="siteAds" style="background-color: white;"></div>
    <footer id="pageFooter"><!-- Footer -->
        <footer class="page-footer font-small blue">
        
          <!-- Copyright -->
          <div style="background-color: black; color: white;" class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> JobBridge.com</a>
          </div>
          <!-- Copyright -->
        
        </footer>
        </footer>
</body>
</html>

<?php }?>