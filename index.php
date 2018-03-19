<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home - Ezaddon Switch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:300" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Css/slick.css" />
  <link rel="stylesheet" type="text/css" href="Css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="Css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img alt="" class="header_icon" src="Icons/Honeywell_Primary_Logo_RGB copy.png">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="paddle-colors.php">Shop</a>
          </li>
          <li>
            <a href="learn.php">Learn</a>
          </li>
          <li>
              <a href="learn.php"><i class="cart-icon fa fa-shopping-bag" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <hr>

  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img  class="animated fadeIn" src="Images/iStock_000068822847_Large.jpg" alt="Make Your Smart Home Even Smarter">
        <center>
          <div class="carousel-text-box">
            <p class="txt-big">Plug-in Outdoor Switch</p>
            <p class="txt-small">DUI ACCUMSAN SIT AMET NULL</p>
          </div>
          <button class="btn btn-info custom-btn carousel-btn">Learn More</button>
        </center>
      </div>

      <div class="item">
        <img src="Images/iStock_000005442631Large.jpg" alt="Plug-in Outdoor">
        <center>
          <div class="carousel-text-box">
            <p class="txt-big">Plug-in Outdoor Switch</p>
            <p class="txt-small">DUI ACCUMSAN SIT AMET NULL</p>
          </div>
          <button class="btn btn-info custom-btn carousel-btn">Learn More</button>
        </center>
      </div>

      <div class="item">
        <img class="animated fadeIn" src="Images/624459774.jpg" alt="In-wall Smart Dimmers and Switches">
        <center>
          <div class="carousel-text-box">
            <p class="txt-big">Plug-in Outdoor Switch</p>
            <p class="txt-small">DUI ACCUMSAN SIT AMET NULL</p>
          </div>
          <button class="btn btn-info custom-btn carousel-btn">Learn More</button>
        </center>
      </div>
          <!-- Carousel nav -->
          <a data-slide="prev" data-target="#myCarousel" class="left carousel-control">
          <i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i></a>
          <a data-slide="next" data-target="#myCarousel"  class="right carousel-control">
          <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>
    </div>
    </div>


    <div id="shop-carousel" class="animated fadeIn">
      <h1> Shop Honeywell</h1>
      <!-- Create your own class for the containing div -->
      <div class="container">
        <div class="slick-carousel shop-carousel">
          <!-- Inside the containing div, add one div for each slide -->

          <div>
              <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
              <img src="http://placekitten.com/g/250/240" alt="EcoSurvivor LED Lantern (Orange Camo)" style="max-width:100%;" />
              </a>
                 <div class="shop-caption">
                   <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                   <span class="prod-title">Example Product</span><br>
                   </a>
                   <span class="price">$14.99</span><br>
                   <button class="button-cart" onClick="addCart('https://byjasco.com/products/1307/add-to-cart?subtheme=ecosurvivor', this)">Add to Cart</button>
                  </div>
              </div>

              <div>
                  <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                  <img src="http://placekitten.com/g/250/240" alt="EcoSurvivor LED Lantern (Orange Camo)" style="max-width:100%;" />
                  </a>
                     <div class="shop-caption">
                       <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                       <span class="prod-title">Example Product</span><br>
                       </a>
                       <span class="price">$14.99</span><br>
                       <button class="button-cart" onClick="addCart('https://byjasco.com/products/1307/add-to-cart?subtheme=ecosurvivor', this)">Add to Cart</button>
                      </div>
                  </div>

          <div>
              <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
              <img src="http://placekitten.com/g/250/240" alt="EcoSurvivor LED Lantern (Orange Camo)" style="max-width:100%;" />
              </a>
                 <div class="shop-caption">
                   <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                   <span class="prod-title">Example Product</span><br>
                   </a>
                   <span class="price">$14.99</span><br>
                   <button class="button-cart" onClick="addCart('https://byjasco.com/products/1307/add-to-cart?subtheme=ecosurvivor', this)">Add to Cart</button>
                  </div>
              </div>

              <div>
                  <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                  <img src="http://placekitten.com/g/250/240" alt="EcoSurvivor LED Lantern (Orange Camo)" style="max-width:100%;" />
                  </a>
                     <div class="shop-caption">
                       <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                       <span class="prod-title">Example Product</span><br>
                       </a>
                       <span class="price">$14.99</span><br>
                       <button class="button-cart" onClick="addCart('https://byjasco.com/products/1307/add-to-cart?subtheme=ecosurvivor', this)">Add to Cart</button>
                      </div>
                  </div>

                  <div>
                      <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                      <img src="http://placekitten.com/g/250/240" alt="EcoSurvivor LED Lantern (Orange Camo)" style="max-width:100%;" />
                      </a>
                         <div class="shop-caption">
                           <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                           <span class="prod-title">Example Product</span><br>
                           </a>
                           <span class="price">$14.99</span><br>
                           <button class="button-cart" onClick="addCart('https://byjasco.com/products/1307/add-to-cart?subtheme=ecosurvivor', this)">Add to Cart</button>
                          </div>
                      </div>

                      <div>
                          <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                          <img src="http://placekitten.com/g/250/240" alt="EcoSurvivor LED Lantern (Orange Camo)" style="max-width:100%;" />
                          </a>
                             <div class="shop-caption">
                               <a href="https://byjasco.com/products/ecosurvivor-35mm-audio-cable" target="_blank">
                               <span class="prod-title">Example Product</span><br>
                               </a>
                               <span class="price">$14.99</span><br>
                               <button class="button-cart" onClick="addCart('https://byjasco.com/products/1307/add-to-cart?subtheme=ecosurvivor', this)">Add to Cart</button>
                              </div>
                          </div>
                          </div>
      </div>
      <center>
        <button class="btn btn-info custom-btn">Shop All</button>
      </center>
    </div>
    <div id="features">
    <div class="container">
    <div class="row" >
      <div class="col-sm-6">
        <div class="info-boxes">
          <img src="Images/Scheduled-Time-photo.jpg" class="header"> 
          <div class="pull-left"> <img src="images/calendar-icon.png"></div>
          <h1>SCHEDULE TIMED EVENTS FOR CONNECTED DEVICES</h1>
          <p>Aliquam purus sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non enim praesent
            elementum facilisis leo vel fringilla est ullamcorper eget.</p>
          </div>
        </div>
      <div class="col-sm-6">
        <div class="info-boxes">
          <img src="Images/Scheduled-Time-photo.jpg" class="header"> 
          <div class="pull-left"> <img src="images/house-icon.png"></div>

          <h1>CUSTOMIZED SCENES FOR DAY OR NIGHT, HOME OR AWAY</h1>
          <p>With a full line of pairable wireless remote switches, motion, door and light sensors, you can easily expand and
            control multiple lights from a single remote switch or sensor.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="info-boxes">
          <img src="Images/Scheduled-Time-photo.jpg" class="header"> 
          <div class="pull-left"> <img src="images/bulb-icon.png"></div>

          <h1>WORKS WITH ALL LED, CFL HALOGEN AND INCANDESCENT BULBS, AND OTHER DEVICES</h1>
          <p>Wireless lighting control doesn’t have to be complicated or expensive thanks to MySelectSmart wireless lighting
            controls.</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="info-boxes">
          <img src="Images/Scheduled-Time-photo.jpg" class="header">
          <div class="pull-left"> <img src="images/phone-icon.png"></div>
 
          <h1>CONTROL WITH ONE TOUCH FROM ANYWHERE </h1>
          <p>Aliquam purus sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non enim praesent.</p>
        </div>
      </div>
    </div>
    <h6> *Use with movile device requires compatible gateway — Sold Seperately</h6>
  </div>
</div>
    <footer>
      <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <span class="heading">Section One</span>
          <ul class="list-group">
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3">
          <span class="heading">Section Two</span>
          <ul class="list-group">
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3">
          <span class="heading">Section Three</span>
          <ul class="list-group">
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
            <li class="list-group-item">
              <a href="">Secondary Link</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3">
          <span class="heading" style="text-align: right;">Social</span>
        </div>
      </div>
    </div>

      <div class="footer-bottom-bar">
        <hr>
        <div class="row">
          <div class="col-sm-6">
            <p class="terms-bar">
              <a href="">Terms and Conditions</a>|
              <a href="">Privacy Policy</a>|
              <a href="">Contact Honeywell</a>
            </p>
          </div>



          <div class="col-sm-6">
            <p class="copyright-bar">© 2017 Honeywell International Inc.</p>
          </div>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="Js/slick.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $('.shop-carousel').slick({
          infinite: true,
          slidesToShow: 4, // Shows a three slides at a time
          slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
          arrows: true, // Adds arrows to sides of slider
          dots: true // Adds the dots on the bottom
        });
      });
    </script>
    <script>
    $('.carousel').carousel();
    </script>

</body>

</html>