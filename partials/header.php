<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/forum">iDISCUSS</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forum">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
      $sql = "SELECT category_name, category_id FROM `categories` LIMIT 4";
      $result = mysqli_query($conn, $sql); 
      while($row = mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item" href="threads.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>'; 
      }
    
        echo '</div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>
    <div class=" d-flex">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    echo '<form class="d-flex" method="get" action="search.php">
      <input class="form-control me-2 d-flex" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success d-flex" type="submit">Search</button>
      <p class="text-light my-0 mx-3 ">Welcome '.$_SESSION['useremail']. '</p>
      <a href="partials/logout.php" class="btn btn-outline-success ml-2">Logout</a>
    </form>';
    }
    else{
echo '<form class="d-flex">
      
      <input class="form-control me-2 d-flex" name="search" type="search" placeholder="Search" aria-label="Search">
    </form>
<button class="btn btn-outline-success mx-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
  <button class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>';
    }
    echo'
    </div>
</div>
</nav>';
?>
<?php 
include 'partials/loginModal.php';
include 'partials/signupModal.php';

?>
<?php
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
        </div>';
}


?>