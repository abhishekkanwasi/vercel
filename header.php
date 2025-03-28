<?php
include_once("config.php");
?>
<div class="container-fluid sticky-top nav-style-Onscroll px-xs-0">
  <div class="container px-xs-0">

    <nav class="navbar navbar-hover navbar-light navbar-expand-lg" id="after_scroll_nav_bar" style="display: none;">
      <ul  class="nav nav-tabs package-detail flex-nowrap" id="custom-content-below-tab" role="tablist">
        <li class="nav-item top-tab">
          <a class="nav-link active OVERVIEW-ITINERARY-tab" id="OVERVIEW-ITINERARY-tab" data-toggle="pill" href="#OVERVIEW-ITINERARY" role="tab" aria-controls="OVERVIEW-ITINERARY" aria-selected="true">OVERVIEW</a>
        </li>
        <li class="nav-item top-tab things_tab d-none">
          <a class="nav-link Things-To-Carry-tab" id="Things-To-Carry-tab" data-toggle="pill" href="#Things-To-Carry" role="tab" aria-controls="Things-To-Carry" aria-selected="false">THINGS TO CARRY</a>
        </li>
        <li class="nav-item top-tab safty_tab d-none">
          <a class="nav-link SAFETY-SECURITY-tab" id="SAFETY-SECURITY-tab" data-toggle="pill" href="#SAFETY-SECURITY" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">SAFETY & SECURITY</a>
        </li>
        <li class="nav-item top-tab fitness_tab d-none">
          <a class="nav-link FITNESS-TIPS-tab" id="FITNESS-TIPS-tab" data-toggle="pill" href="#FITNESS-TIPS" role="tab" aria-controls="FITNESS-TIPS" aria-selected="false">FITNESS TIPS</a>
        </li>

        <!--<li class="nav-item top-tab">-->
        <!--  <a class="nav-link ITINERARY-tab" id="ITINERARY-tab" data-toggle="pill" href="#ITINERARY" role="tab" aria-controls="ITINERARY" aria-selected="false">ITINERARY</a>-->
        <!--</li>-->

        <li class="nav-item top-tab">
          <a class="nav-link FEE-POLICY-tab" id="FEE-POLICY-tab" data-toggle="pill" href="#FEE-POLICY" role="tab" aria-controls="FEE-POLICY" aria-selected="false">POLICY</a>
        </li>
        <li class="nav-item top-tab">
          <a class="nav-link FAQ-tab" id="FAQ-tab" data-toggle="pill" href="#FAQ" role="tab" aria-controls="FAQ" aria-selected="false">FAQ</a>
        </li>

      </ul>
      <ul class="nav nav-tabs package-detail flex-nowrap float-right" id="custom-content-below-tab1" role="tablist">

        <li class="nav-item top-tab py-1 top_price ">
          <p class="my-1 h4"><small>Starting from</small> &#8377; <span id="header_price"><?php echo $cost_with_discount ?></span></p>
        </li>

        <li class="nav-item top-tab top_book_btn">
          <button type="button" class="btn btn-block" data-toggle="modal" data-target="#my_calander"> Book Now </button>
        </li>

      </ul>
    </nav>

    <style>
      @media screen and (min-width: 1200px) {
        .sticky_nav_icon_continer_other {
          align-items: center;
          justify-content: center;
          margin-left: 12% !important ;
        }
      }
    </style>
    <nav class="navbar navbar-hover navbar-light navbar-expand-lg" id="main_nav_bar">

      <ul class="navbar-nav">
        <li class="nav-item active"> <a class="" href="https://himalayayatri.com/"><img height="45px" src="img/test/himslayayatri-logo.png" alt="Trekker Logo" title="Trekker logo" id="main_logo"></a></li>
      </ul>
      <ul  class="navbar-nav sticky_nav_icon_continer_other">
        <li class="nav-item">
          <a class="nav-link" href="trekking.php" target="_Blank">
            <img src="img/test/trekking.png" width="30px" alt="Trekking">
            <span>Trekking</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link Cultural_icon" href="yatra.php" target="_Blank">
            <img src="img/test/yatra.png" width="30px" alt="Yatra Tours">
            <span>Spiritual</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link Cultural_icon" href="expedition.php">
            <img src="img/test/expedition.png" width="30px" alt="Expeditions">
            <span>Expeditions</span>
          </a>
        </li>


        <li class="nav-item dropdown ">
          <a class="nav-link Cultural_icon" href="#" data-toggle="dropdown">
            <img src="img/test/destination.png" width="30px" alt="Destination" title="Destination">
            <span class="dropdown-toggle">Destination</span>
          </a>
          <div class="dropdown-menu animate fade-down " role="menu" id="nav-Destination-list">

            <a class="dropdown-item" href="uttarakhand.php">Uttarakhand</a>
            <a class="dropdown-item" href="himachal.php">Himanchal Pradesh</a>
            <a class="dropdown-item" href="kashmir.php">Kashmir</a>
            <!--<a class="dropdown-item" href="<?php echo $root1 ?>/sikkim.php">Sikkim</a>-->
          </div>
        </li>


      </ul>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99" id="menutogglebutton" style="color:red;">
      <i style="color:red" class="fa fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="main_nav99">

        <ul class="navbar-nav" id="main_logo_for_slide">
          <li class="nav-item active"> <a class="" href="https://himalayayatri.com/"><img height="45px" style="; margin-bottom:10px" src="img/test/himslayayatri-logo.png" alt=" logo" title="logo" id="main_logo"></a></li>
        </ul>

        <ul  class="navbar-nav ml-auto">

          <li  class="nav-item d-md-block d-lg-none"><a class="nav-link active" href="trekking.php" target="_Blank"><img src="img/test/trekking.png" width="25px" alt="Trekking" alt="Trekking"> <b>Trekking</b> </a></li>

          <li class="nav-item d-md-block d-lg-none"><a class="nav-link active" href="yatra.php" target="_Blank"><img src="img/test/yatra.png" width="25px" alt="Religious" title="Religious"> Yatra </a></li>
          <li class="nav-item d-md-block d-lg-none"><a class="nav-link active" href="expedition.php"><img src="img/test/expedition.png" width="25px" alt="Expeditions" title="Expeditions"> Expedition </a></li>


          <li style="font-size: 1rem;  width: 75px; height: 35px; margin-top: 5px; display: flex; align-items: center; justify-content: center; " class="nav-item">

            <a class="nav-link active" href="#" target="_Blank"> Blogs</a>
          </li>
           <li style="font-size: 1rem;  width: 75px; height: 35px; margin-top: 5px; display: flex; align-items: center; justify-content: center; " class="nav-item">

            <a class="nav-link active" href="#" target="_Blank"> Offer</a>
          </li>
          </li>
          <li style="font-size: 1rem; width: 100px; height: 35px; margin-top: 5px; display: flex; align-items: center; justify-content: center; " class="nav-item">
            <a class="nav-link active " href="contact.php" target="_Blank">
              <span class="link-text navgradient">Contact</span>

              </span>
            </a>

            <style>
.navgradient {
  position: relative;
  background: #ff0000; /* Solid red background */
  color: #fff;
  padding: 8px 10px;
  border-radius: 8px;
  text-decoration: none;
  overflow: hidden; /* Ensure moving gradient doesn’t overflow */
}

/* Create a moving gradient overlay */
.navgradient::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.3) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.3) 50%,
    rgba(255, 255, 255, 0.3) 75%,
    transparent 75%,
    transparent
  );
  background-size: 50px 50px; /* Adjust grid size as needed */
  animation: moveGradient 5s linear infinite;
  pointer-events: none; /* Allow clicks through the pseudo-element */
}

@keyframes moveGradient {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(50px, 50px); /* Diagonal movement */
  }
}


              .nav-link {
                display: inline-block;
                text-align: center;
                font-size: 0.8rem;
              }

              .navbar-nav .nav-item .nav-link:hover {
                border-bottom: none;
              }

              .link-text {
                display: block;
                margin-bottom: px;
                /* Adjust as needed for spacing */
                font-size: 0.8rem;
              }

              .link-image a {
                display: inline-block;

                margin: px;
                /* Adjust as needed for spacing between images */
              }
                .nav-item{
                    font-family: Arial, sans-serif;
                   
                }

              .offer-nav {
                background: linear-gradient(45deg, #ffd700, #ffec8b);
                width: 70px;
                height: 30px;

                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                color: black;
                position: relative;
                overflow: hidden;
                border-radius: 5px;
              }

              .offer-nav::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.5);
                transform: skewX(-45deg);
                transition: 0.5s;
              }

              .offer-nav:hover::before {
                left: 100%;
              }

              .navbar-dark .navbar-nav .nav-link.active.offer-nav {
                color: black;
              }

              .main-logo-size {
                height: 50px;
                width: auto;
              }
              .navbar-nav .nav-item .nav-link {

                margin-bottom: 5px !important;
}
              
              .navbar-nav .nav-item {
    text-align: left;  /* Align text to the left */
    display: flex;  /* Ensure proper alignment */
    justify-content: flex-start;  /* Push content to the left */
}
            </style>



          </li>
         
        </ul>

      </div>
    </nav>
  </div>

</div>

<style>
  .nav-link img:hover {
    transform: scale(1.2);
  }

  .nav-link {
    border: none !important;
  }
</style>