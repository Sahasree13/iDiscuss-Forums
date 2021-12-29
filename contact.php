<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    .container{
      min-height: 87vh;
    }
    </style>
  </head>
  <body>
  <?php include 'partials/dbconnect.php';?>
   <?php include 'partials/header.php';?>
   <div class="container my-3">
<h1 class="text-center">Contact Us</h1>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Email address</b></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="idiscussforums@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Alternative Email address</b></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="idiscuss@yahoo.com">
  </div>


  <div class="form-group">
  <label for="exampleFormControlSelect2"><b>Contact Number</b></label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>+91 1234567890</option>
      <option>+91 8967248089</option>
      <option>+91 7859038268</option>
      <option>+91 4573829039</option>


    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Address</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">1755 Buhne Dr Eureka, California(CA), 95503</textarea>
  </div>
 
</form>
</div>
    
   <?php include 'partials/footer.php';?>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>