<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PIXIE</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/p3.css">
  <link rel="stylesheet" type="text/css" href="css/footerStyle.css">
</head>
<body>

  <div class="bodyContainer">

    <header>
      <div class="headerLogo">
        <img src="images/logo/live.png" style="height: 50px; width: 100px;">
      </div>
      <div class="navbar">  
        <ul>
          <li><a  class="active" href="#">HOME</a></li>
          <li><a href="products.php">PRODUCTS</a></li>
          <li><a href="contact.php">CONTACTS</a></li>
        </ul>
      </div>
    </header>


    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="assets/images/banner/banner1.png" style="width:100%">
        <div class="slideDot">
          <span onclick="currentSlide(1)" class="dot dotActive"></span> 
          <span onclick="currentSlide(2)" class="dot"></span> 
          <span onclick="currentSlide(3)" class="dot"></span> 
        </div>
      </div>
      <div class="mySlides fade">
        <img src="assets/images/banner/banner2.jpg" style="width:100%">
        <div class="slideDot">
          <span onclick="currentSlide(1)" class="dot"></span> 
          <span onclick="currentSlide(2)" class="dot dotActive"></span> 
          <span onclick="currentSlide(3)" class="dot"></span> 
        </div>
      </div>
      <div class="mySlides fade">
        <img src="assets/images/banner/banner3.jpg" style="width:100%">
        <div class="slideDot">
          <span onclick="currentSlide(1)" class="dot"></span> 
          <span onclick="currentSlide(2)" class="dot"></span> 
          <span onclick="currentSlide(3)" class="dot dotActive"></span> 
          <span onclick="currentSlide(1)" class="dotActive"></span> 
        </div>
      </div>
    </div>


    <section class="toggleableTab">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Tab One</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Tab Two</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tab Three</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tab Four</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tab Five</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tab Six</button>
      </div>
      <div id="London" class="tabcontent">
        <div class="innerFlexContainer">
          <div class="columnContainer">
            <center><img src="assets/images/images.png" style="width: 350px; padding: 15px 40px;"></center> 
          </div>
          <div class="columnContainer" style="padding-top:50px;">       
            <center><h2>A Destination For The New Millennium</h2></center>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
            minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
            minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
          </div>
        </div>
      </div>
      <div id="Paris" class="tabcontent">
        <div class="innerFlexContainer">
          <div class="columnContainer">
            <center><img src="assets/images/climb.jpg" style="width: 350px; padding: 15px 40px; border-radius: 50% 25%;"></center> 
          </div>
          <div class="columnContainer" style="padding-top:50px;">       
            <center><h2>A Destination For The New Advancture</h2></center>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
            minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
            minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
          </div>
        </div>
      </div>
      <div id="Tokyo" class="tabcontent">
        <div class="innerFlexContainer">
          <div class="columnContainer">
            <center><img src="assets/images/images.png" style="width: 350px; padding: 15px 40px;"></center> 
          </div>
          <div class="columnContainer" style="padding-top:50px;">       
            <center><h2>A Destination For The New Millennium</h2></center>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
            minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
            minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
          </div>
        </div>
      </div>
    </section>


    <section class="outerFlexContainer">
      <div class="innerFlexContainer">
        <div class="columnContainer" style="padding-top:50px;">       
          <center><h2>A Destination For The New Millennium</h2></center>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
          minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quae iste ullam sed earum dignissimos quos
          minus unde odio soluta harum minima nemo eos iure dolorem suscipit repellat consequuntur fuga!
        </div>      
      </div>
    </section>


    

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <center><p><b>CONTACT US</b></p></center> 
        <form onsubmit="return myAlert0()">
          <div class="row">
              <input type="text" id="Name0" name="firstname" placeholder="Name" required>
          </div>
          <div class="row">
              <input type="email" id="email0" name="email" placeholder="Email" required>
          </div>
          <div class="row">
          <center><input type="number" id="mobile0" name="number" placeholder="Mobile No." required></center>   
          </div>
          <div class="row">
            <input type="submit" value="SEND">
          </div>
        </form>          
      </div>
    </div>

  </div>
  <?php include("footer.php"); ?>

</body>
</html>
<script src="assets/js/p3.js"></script>