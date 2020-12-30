<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
<link rel="stylesheet" type="text/css" href="css/contactFormStyle.css">
<link rel="stylesheet" type="text/css" href="css/footerStyle.css">

</head>
<body>
<?php include("header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-100">

<center><h3>Contact Form</h3></center>

<div class="formContainer">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email id</label>
    <input type="text" id="email" name="email" placeholder="Your email id..">

    <label for="Phone No">Contact No</label>
    <input type="number" id="number" name="number" placeholder="Your contact number..">


    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>
