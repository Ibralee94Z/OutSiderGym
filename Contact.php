<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />


</head>
<style>
    .error{
        color: red;
    }
  .c1{
    border: 2px red ridge;
  }
  body{
    position: relative;
  }
</style>

<body style="background-color: darken(#eee, 10%);">

	<nav id="mynavbar" class="navbar  navbar-expand-lg bg-warning navbar-light fixed-top">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.html">
      <img src="img/ts.jpg" style="width:45px;" class="rounded-pill" alt="Bootstrap">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav m-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "href="Services.html">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="Gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Contact.php">Contact</a>
        </li>
      </ul>
      <!-- <a href="#"><button class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#exampleModal1">Login</button></a>
      <a href="#"><button class="btn btn-warning btn-sm "data-bs-toggle="modal" data-bs-target="#exampleModal2">SignUp</button></a> -->
    </div>
  </div>
</nav>


 <div id="Contact" class="py-5">
 <div class="container-fluid">
   <div class="container mt-4">
     <div>
       <h2 class="text-center mb-5 shadow-sm p-3 underline">Contact US:</h2>
     </div>
     <div class="row">

       <div class="col-md-7 shadow rounded p-5 ">
        <div class="row">
            <form action="SendEmail.php" method="POST">
         <div class="input-group mb-3">
                 <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required="Please enter your name.">
                   <div class="input-group-text bg-warning">
                     <span class="fas fa-user"></span>
                   </div> 
              </div>
          <div class="input-group mb-3">
                 <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required ="Please enter your email address.">
                   <div class="input-group-text bg-warning">
                     <i class="fa-solid fa-envelope"></i>
                   </div> 
              </div>
              <div class="input-group mb-3">
                 <input type="text" id="Phone" name="Phone" class="form-control" placeholder="Phone Number" required ="Please enter your Phone Number.">
                   <div class="input-group-text bg-warning">
                     <i class="fa-solid fa-phone"></i>
                   </div> 
              </div>
           <div class="mb-3">
           <!--  <label class="form-label">Phone Number:</label>
            <input type="text" id="Phone" name="Phone" class="form-control" placeholder="Phone Number" required> -->
         
           <div class="control-group form-group">
              <div class="controls">
                <!-- <label>Message:</label> -->
                <textarea rows="10" cols="100" class="form-control" name="message" placeholder="Message"  style="resize:none" required="Text message"></textarea>
              </div>
            </div>
            <div id="success"></div>
          
        </div>
        <button class="btn btn-primary" id="submit" name="sendMessageButton">Submit</button>
        </div>
       
        <!-- <button class="btn btn-primary" name="Submit">Submit</button> -->
         
       </div>
       <div class="col-md-5 ml-5">
         <div class="ml-4">
           <img src="img/bc.jpg" style="height:550px; width:105%;" alt="" class="img-responsive">
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>

 <footer id="sticky-footer" class="flex-shrink-0 mt-2 bg-dark text-white-50">
    <div class="container text-center py-3">
      <small>Copyright 2024 &copy;The OutSide Gym</small>
    </div>
  </footer>
    <div>
     <button class="btn btn-primary btn-sm my-5" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-sharp fa-solid fa-arrow-up"></i></button> 
  </div>
</div>
<!-- end of contact -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

       var MessageText = "<?= $_SESSION['status'] ?? ''; ?>";

        if (MessageText != '') { 
        Swal.fire({
     title: "Thank you we receive your Message",
     text: "Message Successfuly",
     icon: "Success"
  });
        <?php unset($_SESSION['status']); ?>
}
</script>
</body>
</html>