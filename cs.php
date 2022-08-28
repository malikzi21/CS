<?php
 $message_sent = false;
if(isset($_POST['email']) && $_POST['email'] !=''){
    if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)){
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "blah@blah.com";
    $body = "";

    $body .= "Form: ".$userName. "\r\n";
    $body .= "Email: ".$userName. "\r\n";
    $body .= "Message: ".$userName. "\r\n";
     $message_sent = true;
    }
  
    else{
        $invalid_class_name= "form-invalid";
    }

}



 
?>
<html lang="en">
<head>
    
        <meta charset="utf-8">
          
        <title>CS_IITK</title>
       
        <!-- kit -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <!-- google_fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&family=Ubuntu&display=swap" rel="stylesheet">
        <!-- bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="red.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <?php
    if($message_sent):
    ?>
    <h3 class="line">Thanks, well be in touch</h3>
    <?php
    else:
    ?>
     <section id="title">

<div class="container-fluid">


  <nav class="navbar navbar-expand-lg navbar-dark">

    <a class="navbar-brand" href="https://www.iitk.ac.in/counsel/">CS_IITK</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://www.iitk.ac.in/counsel/team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.iitk.ac.in/">IITK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.spo.iitk.ac.in/">SPO</a>
        </li>
      </ul>

    </div>
  </nav>


  <!-- Title -->

 
</div>


<!-- <section id="title">
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="https://www.iitk.ac.in/counsel/">CS_IITK</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="https://www.iitk.ac.in/counsel/team.php"> Teams </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.iitk.ac.in/"> IITK </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cta"> SPO </a>
            </li>

        </ul>
        </div>
    </nav>

</div>
</section> --> 




<div class="container">
<form action="webform.php" method="POST" class="form">
    <div class="form-group">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Your Email</label>
        <input  type="email" class="form-control" id="email" name="email" placeholder="xyz@iitk.ac.in" tabindex="2" required>
    </div>
    <div class="form-group">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
    </div>
    <div class="form-group">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
    </div>
    <div>
        <button class="button-29" role="button">Send email</button>
    </div>
</form>
</div>



<!-- Title -->
<footer id="footer">


<a href="https://www.facebook.com/iitkanpur/">  <i class="fa-brands fa fa-facebook-f"></i></a>
<a href="https://twitter.com/iitkanpur"><i class="fa-brands fa fa-twitter"></i></a> 
<a href="https://medium.com/@csiitk"><i class="fa-solid fa fa-envelope"></i></a>
<p>© Copyright CS_IITK</p>
</footer>


</div>
    <?php
    endif;
    ?>
</body>

</html>