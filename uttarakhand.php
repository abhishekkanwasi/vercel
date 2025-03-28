<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>Trekking Packages in India - Himalaya Yatri</title>
  <!-- External CSS and slider libraries -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  
  <link rel="shortcut icon" href="src/img/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/img/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/img/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/img/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/img/apple-touch-icon-144x144-precomposed.png" />
  
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/Main.css" type="text/css" />
  <link rel="stylesheet" href="css/footer.css" type="text/css" />
  <link rel="stylesheet" href="css/header.css" type="text/css" />
  <link rel="stylesheet" href="css/new-Main.css" type="text/css" />
  <link rel="stylesheet" href="css/trekking.css" type="text/css" />
  
    <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/anime.min.js"></script>

  <!-- Slick Slider -->
  <script type="text/javascript" src="src/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/Main.js"></script>

  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="src/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="src/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
    .container {
      max-width: min(100vw, 1100px);
      
      /* centers inline content inside the container */

    }



    * {
      box-sizing: border-box;
    }



  </style>
  <style>
    @media screen and (min-width: 1200px) {
      .sticky_nav_icon_continer_other {
        align-items: center;
        justify-content: center;
        margin-left: 180px !important;
      }
  </style>
</head>

<body>

  <?php

  include_once("header.php"); ?>
  <div class="container">
    <!-- Filter Navigation -->
    <style>
  
      .filter-section {
        display: none;
        padding: 0px;

        margin: 10px 0;
        border-radius: 8px;
        background: #fff;
      }

      .filter-section.active {
        display: block;
      }

    
       
    </style>

    <style>
      .custom-dropdown {
        position: relative;
        width: 200px;
        margin: 20px auto;
        font-family: poppins;
        margin-left:0px ;
      }

      /* Dropdown "button" */
      .dropdown-select {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        border: 2px solid #ff8c00;
        /* Dark orange border */
        border-radius: 6px;
        padding: 5px 7px;
        cursor: pointer;
        font-size: 10px;
        font-weight: bold;
        color: #333;
      }

      /* Add an arrow indicator using a pseudo-element or directly as text. */
      .dropdown-select::after {
        content: '▾';
        /* Or ▼ */
        margin-left: 5px;
        font-size: 14px;
        color: #ff8c00;
        transition: transform 0.3s ease;
      }

      /* Rotate the arrow when active */
      .custom-dropdown.active .dropdown-select::after {
        transform: rotate(-180deg);
      }

      /* The dropdown list (initially hidden) */
      .dropdown-list {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        max-height: 0;
        overflow: hidden;
        background-color: #fff;

        border-radius: 6px;
        transition: max-height 0.3s ease;
        z-index: 10;
      }

      /* Reveal the list when the .active class is on the parent */
      .custom-dropdown.active .dropdown-list {
        max-height: 200px;
        /* enough space for items */
      }

      /* List items */
      .dropdown-list li {
        list-style: none;
        padding: 10px 14px;
        border-bottom: 1px solid #f2f2f2;
        font-size: 16px;
        color: #333;
        cursor: pointer;
      }

      /* Remove border for the last item */
      .dropdown-list li:last-child {
        border-bottom: none;
      }

      /* Hover effect */
      .dropdown-list li:hover {
        background-color: #ffefdc;
        /* a light orange tint */
      }
    .top-treks {
  font-family: 'Poppins', sans-serif;
  font-size: 2.2em;
  font-weight: bold;
  color: white;
  background: linear-gradient(45deg, #ff4e00, #ff9e00); /* Red to Orange gradient */
  text-align: center;
  padding: 20px 40px;
  border-radius: 10px;
  margin-top: 50px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */

  letter-spacing: 2px;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
}

.top-treks:hover {
  transform: translateY(-5px); /* Slight hover lift effect */
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
}
 @media (max-width: 600px) {
         .top-treks {
  
  font-size: 1.8em;
  
}
}
@media (max-width: 768px) {
    .glow-on-hover {
        min-width: 80px;
        height: 45px;
        max-width: 130px;
    }
}
.offer .slider {
    width: 100%;
    margin: 0 auto;
}

.offer .slider img {
    width: 100%;
    height: auto;
    display: block;
}

@media (max-width: 768px) {
    .offer .slider img {
        width: 100%;
    }
}
    @media screen and (min-width: 768px) {
    
.card-slider {
    display: flex;
    justify-content: center;
    align-items: center;
 
    width: 100%;
}

/* Grid container for the cards */
.card-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 columns in a row */
    width: 100%;
    max-width: 1200px; /* Limit the width on large screens to keep the content centered */
  
}
}

h2{
    font-size: 2.2rem !important;
    font-weight: bold;
    margin-top: 20px !important;
}
@media (max-width: 768px) {
    h2{
    font-size: 1.6rem !important;
}
}
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
    $('.offer.slider').slick({
        lazyLoad: 'ondemand', // Lazy loading for images
        infinite: true, // Infinite scrolling
        autoplay: true, // Auto scroll
        autoplaySpeed: 2000, // Speed of auto scroll
        arrows: false, // Disable next/previous arrows
        dots: false, // Disable navigation dots
        responsive: [
            {
                breakpoint: 768, // for mobile/tablet
                settings: {
                    autoplay: true
                }
            }
        ]
    });
});
</script>


<h1 class="top-treks">Uttarakhand Tour Packages 2025</h1>

<div class="offer slider">
    <div>
        <a><img data-lazy="img/packageImage/uttarakhand-banner.jpg" data-sizes="100vw" alt="Uttarakhand Tours"></a>
    </div>
    <div>
        <a><img data-lazy="img/packageImage/uttarakhand-banner-1.jpg" data-sizes="100vw" alt="Uttarakhand Tours"></a>
    </div>
    <div>
        <a><img data-lazy="img/packageImage/uttarakhand-banner-2.jpg" data-sizes="100vw" alt="Uttarakhand Tours"></a>
    </div>
 
</div>

        <p>Uttarakhand, often referred to as the 'Land of Gods', offers a diverse range of experiences, from serene hill stations and sacred pilgrimage sites to thrilling adventure activities.</p>
    
    <div class="custom-dropdown" id="filterDropdown">
      <div class="dropdown-select">Select by type </div>
      <ul class="dropdown-list">
        <li data-value="all">All</li>
        <li data-value="treks">Treks</li>
        <li data-value="yatras">Yatras</li>
        <li data-value="expeditions">Expeditions</li>
      </ul>
    </div>


   <script>
  // Toggle custom dropdown open/close
  const dropdown = document.getElementById('filterDropdown');
  const dropdownSelect = dropdown.querySelector('.dropdown-select');
  const dropdownList = dropdown.querySelector('.dropdown-list');
  const listItems = dropdownList.querySelectorAll('li');

  dropdownSelect.addEventListener('click', (e) => {
    dropdown.classList.toggle('active');
    // Stop propagation to avoid document click closing it immediately
    e.stopPropagation();
  });

  // Filtering function: hides all sections then shows the one based on selection.
  function filterSections(selectedValue) {
    document.querySelectorAll('.filter-section').forEach(section => {
      section.style.display = 'none';
    });

    // If "all" is selected, show the "all" section
    if (selectedValue === 'all') {
      document.getElementById('section-all').style.display = 'block';
    } else {
      document.getElementById('section-' + selectedValue).style.display = 'block';
    }
  }

  // Attach event listener to each list item
  listItems.forEach(item => {
    item.addEventListener('click', function() {
      const selectedValue = this.getAttribute('data-value');
      const selectedText = this.textContent;

      // Update dropdown button text
      dropdownSelect.textContent = selectedText;

      // Filter sections based on selection
      filterSections(selectedValue);

      // Close dropdown after selection
      dropdown.classList.remove('active');
    });
  });

  // Close the dropdown if clicking outside of it
  document.addEventListener('click', function(e) {
    if (!dropdown.contains(e.target)) {
      dropdown.classList.remove('active');
    }
  });

  // Show a default section on page load (e.g., "all")
  window.addEventListener('DOMContentLoaded', (event) => {
    filterSections('all');
  });
</script>


    <!-- Filter Sections -->
    <!-- "All" Section -->
    <section id="section-all" class="filter-section active">
      <h2>Recommended Treks Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
       <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
          <a class="my_card" href="kedarkantha-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(156 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarkantha-trek-2.jpg" data-lazy="img/packageImage/kedarkantha-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kedarkantha Trek
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>5 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,500 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 5,000 </small></s>
                    <b> &#8377; 4,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="har-ki-dun-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.7 <small>(136 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/har-ki-dun-trek-4.jpg" data-lazy="img/packageImage/har-ki-dun-trek-4.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Har Ki Dun Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,800 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,398 </small></s>
                    <b> &#8377; 6,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/chopta-trek-2.jpg" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Chopta Tungnath Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Easy</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,083 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 4,799 </small></s>
                    <b> &#8377; 3,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

<a class="my_card" href="dodital-darwa-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/dodital-trek.jpg" data-lazy="img/packageImage/dodital-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Dodital Darwa Pass Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,400 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 13,125 </small></s>
                    <b> &#8377; 10,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          <a class="my_card" href="gaumukh-tapovan-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/gaumukh-tapovan-trek.jpg" data-lazy="img/packageImage/gaumukh-tapovan-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Gaumukh Tapovan Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>8 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>14,600 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 19,875 </small></s>
                    <b> &#8377; 15,900</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

          
          
          <a class="my_card" href="phulara-ridge-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/phulara-ridge-trek.jpg" data-lazy="img/packageImage/phulara-ridge-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Phulara Ridge Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,150 m</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 10,199 </small></s>
                    <b> &#8377; 8,499</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          <!-- Add additional cards as needed -->
        </div>
      </div>

      <h2>Recommended Yatras Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
          <a class="my_card" href="kedarnath-yatra.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarnath-yatra.jpg" data-lazy="img/packageImage/kedarnath-yatra.jpg" alt="Kedarnath Yatra">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kedarnath Yatra
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,755 Ft. </small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 11,875 </small></s>
                    <b> &#8377; 9,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="do-dham-yatra.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/do-dham-card.jpg" data-lazy="img/packageImage/do-dham-card.jpg" alt="Do Dham Yatra">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Do Dham Yatra
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>5 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,755 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 15,625 </small></s>
                    <b> &#8377; 12,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="char-dham-yatra.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/char-dham-card.jpg" data-lazy="img/packageImage/char-dham-card.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Char Dham Yatra
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>9 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,755 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 25,000 </small></s>
                    <b> &#8377; 20,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <!-- Add additional cards as needed -->
        </div>
      </div>
      
      <!--<h2>Recommended Expeditions Uttarakhand</h2>-->
      <!-- Wrap the grid in a slider container -->
      <!--<div class="card-slider">-->
      <!--  <div class="card-grid">-->
          <!-- Example Card -->


          <!-- Add additional cards as needed -->
      <!--  </div>-->
      <!--</div>-->
    </section>

    <!-- Nature Section -->
    <section id="section-treks" class="filter-section active ">
      <!--<h2>Recommended Treks Uttarakhand</h2>-->
      <!-- Wrap the grid in a slider container -->
<!--      <div class="card-slider">-->
<!--        <div class="card-grid">-->
          <!-- Example Card -->
<!--          <a class="my_card" href="kedarkantha-trek.php" target="_Blank">-->
<!--            <div style="border: 1px solid #e0e0e0;" class="box">-->
<!--              <div class="productCard_discountTag__bJQTv">-->
<!--                <span class="productCard_discountTagIcon__10rS7">-->
<!--                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
<!--                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
<!--                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
<!--                  </svg>-->
<!--                </span>-->
<!--                20%-->
<!--                <div class="productCard_discountTagAmount__9R5ID">off</div>-->
<!--              </div>-->
<!--              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
<!--              <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarkantha-trek-2.jpg" data-lazy="img/packageImage/kedarkantha-trek-2.jpg" alt="Chopta Trek">-->
<!--              <div class="p-2">-->
<!--                <div class="price-details">-->
<!--                  <div style="padding-top: 5px;">-->
<!--                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
<!--                      Kedarkantha Trek-->
<!--                    </h5>-->




<!--                  </div>-->

<!--                </div>-->


<!--                <div class="ratings">-->
<!--                  <div class="main-grid">-->
                    <!-- Location -->
<!--                    <div class="sub-grid location">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-map-marker fa-lg"></i>-->

<!--                        <small>Uttarakhand</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Difficulty -->
<!--                    <div class="sub-grid difficulty">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-tasks fa-lg"></i>-->
<!--                        <small>Moderate</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->

<!--                  <div class="main-grid">-->
                    <!-- Duration (Days) -->
<!--                    <div class="sub-grid duration">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-calendar-alt fa-lg"></i>-->
<!--                        <small>5 Days</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Altitude -->
<!--                    <div class="sub-grid altitude">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-arrow-up fa-lg"></i>-->
<!--                        <small>12,500 Ft.</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->



<!--                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
<!--                  <span class="tour-price">-->
<!--                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
<!--                    <b> &#8377; 3,250</b>-->
<!--                  </span>-->

                  <!-- Get Quote Button -->
<!--                  <button class="glow-on-hover">Get Quote</button>-->
<!--                </div>-->

<!--              </div>-->
<!--              <hr>-->
<!--            </div>-->
<!--          </a>-->


<!--          <a class="my_card" href="har-ki-dun-trek.php" target="_Blank">-->
<!--            <div style="border: 1px solid #e0e0e0;" class="box">-->
<!--              <div class="productCard_discountTag__bJQTv">-->
<!--                <span class="productCard_discountTagIcon__10rS7">-->
<!--                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
<!--                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
<!--                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
<!--                  </svg>-->
<!--                </span>-->
<!--                20%-->
<!--                <div class="productCard_discountTagAmount__9R5ID">off</div>-->
<!--              </div>-->
<!--              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
<!--              <img class="card-img-top" width="355" height="220" src="img/packageImage/har-ki-dun-trek-4.jpg" data-lazy="img/packageImage/har-ki-dun-trek-4.jpg" alt="Har Ki Dun Trek">-->
<!--              <div class="p-2">-->
<!--                <div class="price-details">-->
<!--                  <div style="padding-top: 5px;">-->
<!--                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
<!--                      Har Ki Dun Trek-->
<!--                    </h5>-->



<!--                  </div>-->

<!--                </div>-->


<!--                <div class="ratings">-->
<!--                  <div class="main-grid">-->
                    <!-- Location -->
<!--                    <div class="sub-grid location">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-map-marker fa-lg"></i>-->

<!--                        <small>Uttarakhand</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Difficulty -->
<!--                    <div class="sub-grid difficulty">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-tasks fa-lg"></i>-->
<!--                        <small>Moderate</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->

<!--                  <div class="main-grid">-->
                    <!-- Duration (Days) -->
<!--                    <div class="sub-grid duration">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-calendar-alt fa-lg"></i>-->
<!--                        <small>7 Days</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Altitude -->
<!--                    <div class="sub-grid altitude">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-arrow-up fa-lg"></i>-->
<!--                        <small>11,800 Ft.</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->



<!--                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
<!--                  <span class="tour-price">-->
<!--                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
<!--                    <b> &#8377; 3,250</b>-->
<!--                  </span>-->

                  <!-- Get Quote Button -->
<!--                  <button class="glow-on-hover">Get Quote</button>-->
<!--                </div>-->

<!--              </div>-->
<!--              <hr>-->
<!--            </div>-->
<!--          </a>-->


<!--          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">-->
<!--            <div style="border: 1px solid #e0e0e0;" class="box">-->
<!--              <div class="productCard_discountTag__bJQTv">-->
<!--                <span class="productCard_discountTagIcon__10rS7">-->
<!--                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
<!--                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
<!--                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
<!--                  </svg>-->
<!--                </span>-->
<!--                20%-->
<!--                <div class="productCard_discountTagAmount__9R5ID">off</div>-->
<!--              </div>-->
<!--              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
<!--              <img class="card-img-top" width="355" height="220" src="img/packageImage/chopta-trek-2.jpg" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">-->
<!--              <div class="p-2">-->
<!--                <div class="price-details">-->
<!--                  <div style="padding-top: 5px;">-->
<!--                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
<!--                      Chopta Tungnath Trek-->
<!--                    </h5>-->



<!--                  </div>-->

<!--                </div>-->


<!--                <div class="ratings">-->
<!--                  <div class="main-grid">-->
                    <!-- Location -->
<!--                    <div class="sub-grid location">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-map-marker fa-lg"></i>-->

<!--                        <small>Uttarakhand</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Difficulty -->
<!--                    <div class="sub-grid difficulty">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-tasks fa-lg"></i>-->
<!--                        <small>Easy</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->

<!--                  <div class="main-grid">-->
                    <!-- Duration (Days) -->
<!--                    <div class="sub-grid duration">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-calendar-alt fa-lg"></i>-->
<!--                        <small>3 Days</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Altitude -->
<!--                    <div class="sub-grid altitude">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-arrow-up fa-lg"></i>-->
<!--                        <small>12,083 Ft.</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->



<!--                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
<!--                  <span class="tour-price">-->
<!--                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
<!--                    <b> &#8377; 3,250</b>-->
<!--                  </span>-->

                  <!-- Get Quote Button -->
<!--                  <button class="glow-on-hover">Get Quote</button>-->
<!--                </div>-->

<!--              </div>-->
<!--              <hr>-->
<!--            </div>-->
<!--          </a>-->

<!--<a class="my_card" href="dodital-darwa-pass-trek.php" target="_Blank">-->
<!--            <div style="border: 1px solid #e0e0e0;" class="box">-->
<!--              <div class="productCard_discountTag__bJQTv">-->
<!--                <span class="productCard_discountTagIcon__10rS7">-->
<!--                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
<!--                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
<!--                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
<!--                  </svg>-->
<!--                </span>-->
<!--                20%-->
<!--                <div class="productCard_discountTagAmount__9R5ID">off</div>-->
<!--              </div>-->
<!--              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
<!--              <img class="card-img-top" width="355" height="220" src="img/packageImage/dodital-trek.jpg" data-lazy="img/packageImage/dodital-trek.jpg" alt="Chopta Trek">-->
<!--              <div class="p-2">-->
<!--                <div class="price-details">-->
<!--                  <div style="padding-top: 5px;">-->
<!--                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
<!--                      Dodital Darwa Pass Trek-->
<!--                    </h5>-->



<!--                  </div>-->

<!--                </div>-->
    

<!--                <div class="ratings">-->
<!--                  <div class="main-grid">-->
                    <!-- Location -->
<!--                    <div class="sub-grid location">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-map-marker fa-lg"></i>-->

<!--                        <small>Uttarakhand</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Difficulty -->
<!--                    <div class="sub-grid difficulty">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-tasks fa-lg"></i>-->
<!--                        <small>Moderate</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->

<!--                  <div class="main-grid">-->
                    <!-- Duration (Days) -->
<!--                    <div class="sub-grid duration">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-calendar-alt fa-lg"></i>-->
<!--                        <small>7 Days</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Altitude -->
<!--                    <div class="sub-grid altitude">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-arrow-up fa-lg"></i>-->
<!--                        <small>11,400 Ft.</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->



<!--                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
<!--                  <span class="tour-price">-->
<!--                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
<!--                    <b> &#8377; 3,250</b>-->
<!--                  </span>-->

                  <!-- Get Quote Button -->
<!--                  <button class="glow-on-hover">Get Quote</button>-->
<!--                </div>-->

<!--              </div>-->
<!--              <hr>-->
<!--            </div>-->
<!--          </a>-->
          
<!--          <a class="my_card" href="gaumukh-tapovan-trek.php" target="_Blank">-->
<!--            <div style="border: 1px solid #e0e0e0;" class="box">-->
<!--              <div class="productCard_discountTag__bJQTv">-->
<!--                <span class="productCard_discountTagIcon__10rS7">-->
<!--                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
<!--                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
<!--                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
<!--                  </svg>-->
<!--                </span>-->
<!--                20%-->
<!--                <div class="productCard_discountTagAmount__9R5ID">off</div>-->
<!--              </div>-->
<!--              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
<!--              <img class="card-img-top" width="355" height="220" src="img/packageImage/gaumukh-tapovan-trek.jpg" data-lazy="img/packageImage/gaumukh-tapovan-trek.jpg" alt="Chopta Trek">-->
<!--              <div class="p-2">-->
<!--                <div class="price-details">-->
<!--                  <div style="padding-top: 5px;">-->
<!--                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
<!--                      Gaumukh Tapovan Trek-->
<!--                    </h5>-->



<!--                  </div>-->

<!--                </div>-->
    

<!--                <div class="ratings">-->
<!--                  <div class="main-grid">-->
                    <!-- Location -->
<!--                    <div class="sub-grid location">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-map-marker fa-lg"></i>-->

<!--                        <small>Uttarakhand</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Difficulty -->
<!--                    <div class="sub-grid difficulty">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-tasks fa-lg"></i>-->
<!--                        <small>Moderate</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->

<!--                  <div class="main-grid">-->
                    <!-- Duration (Days) -->
<!--                    <div class="sub-grid duration">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-calendar-alt fa-lg"></i>-->
<!--                        <small>8 Days</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Altitude -->
<!--                    <div class="sub-grid altitude">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-arrow-up fa-lg"></i>-->
<!--                        <small>14,600 Ft.</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->



<!--                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
<!--                  <span class="tour-price">-->
<!--                    <s><small style="margin-left: 5px;">&#8377; 8,254 </small></s>-->
<!--                    <b> &#8377; 5,500</b>-->
<!--                  </span>-->

                  <!-- Get Quote Button -->
<!--                  <button class="glow-on-hover">Get Quote</button>-->
<!--                </div>-->

<!--              </div>-->
<!--              <hr>-->
<!--            </div>-->
<!--          </a>-->

          
          
<!--          <a class="my_card" href="phulara-ridge-trek.php" target="_Blank">-->
<!--            <div style="border: 1px solid #e0e0e0;" class="box">-->
<!--              <div class="productCard_discountTag__bJQTv">-->
<!--                <span class="productCard_discountTagIcon__10rS7">-->
<!--                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
<!--                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
<!--                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
<!--                  </svg>-->
<!--                </span>-->
<!--                20%-->
<!--                <div class="productCard_discountTagAmount__9R5ID">off</div>-->
<!--              </div>-->
<!--              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
<!--              <img class="card-img-top" width="355" height="220" src="img/packageImage/phulara-ridge-trek.jpg" data-lazy="img/packageImage/phulara-ridge-trek.jpg" alt="Chopta Trek">-->
<!--              <div class="p-2">-->
<!--                <div class="price-details">-->
<!--                  <div style="padding-top: 5px;">-->
<!--                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
<!--                      Phulara Ridge Trek-->
<!--                    </h5>-->



<!--                  </div>-->

<!--                </div>-->


<!--                <div class="ratings">-->
<!--                  <div class="main-grid">-->
                    <!-- Location -->
<!--                    <div class="sub-grid location">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-map-marker fa-lg"></i>-->

<!--                        <small>Uttarakhand</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Difficulty -->
<!--                    <div class="sub-grid difficulty">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-tasks fa-lg"></i>-->
<!--                        <small>Moderate</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->

<!--                  <div class="main-grid">-->
                    <!-- Duration (Days) -->
<!--                    <div class="sub-grid duration">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-calendar-alt fa-lg"></i>-->
<!--                        <small>6 Days</small>-->
<!--                      </div>-->
<!--                    </div>-->

                    <!-- Altitude -->
<!--                    <div class="sub-grid altitude">-->
<!--                      <div class="icon-container">-->
<!--                        <i class="fa fa-arrow-up fa-lg"></i>-->
<!--                        <small>12,150 m</small>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->



<!--                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
<!--                  <span class="tour-price">-->
<!--                    <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
<!--                    <b> &#8377; 3,250</b>-->
<!--                  </span>-->

                  <!-- Get Quote Button -->
<!--                  <button class="glow-on-hover">Get Quote</button>-->
<!--                </div>-->

<!--              </div>-->
<!--              <hr>-->
<!--            </div>-->
<!--          </a>-->
          <!-- Add additional cards as needed -->
<!--        </div>-->
<!--      </div>-->

      <h2>Best Selling Treks Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
          <a class="my_card" href="kedarkantha-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarkantha-trek-2.jpg" data-lazy="img/packageImage/kedarkantha-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kedarkantha Trek
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>5 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,500 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 5,000 </small></s>
                    <b> &#8377; 4,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="har-ki-dun-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/har-ki-dun-trek-4.jpg" data-lazy="img/packageImage/har-ki-dun-trek-4.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Har Ki Dun Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,800 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,398 </small></s>
                    <b> &#8377; 6,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/chopta-trek-2.jpg" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Chopta Tungnath Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Easy</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,083 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 4,799 </small></s>
                    <b> &#8377; 3,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

          

          <!-- Add additional cards as needed -->
        </div>
      </div>
      
      <h2>Best Winter Treks Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
          
          <a class="my_card" href="kuari-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kuari-pass-trek.jpg" data-lazy="img/packageImage/kuari-pass-trek.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kuari Pass Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,750 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,399 </small></s>
                    <b> &#8377; 6,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          <a class="my_card" href="tour/kedarkantha-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarkantha-trek-2.jpg" data-lazy="img/packageImage/kedarkantha-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kedarkantha Trek
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>5 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,500 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 5,000 </small></s>
                    <b> &#8377; 4,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="har-ki-dun-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/har-ki-dun-trek-4.jpg" data-lazy="img/packageImage/har-ki-dun-trek-4.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Har Ki Dun Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,800 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,398 </small></s>
                    <b> &#8377; 6,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/chopta-trek-2.jpg" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Chopta Tungnath Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Easy</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,083 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 4,799 </small></s>
                    <b> &#8377; 3,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          
          
          <a class="my_card" href="dodital-darwa-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/dodital-trek.jpg" data-lazy="img/packageImage/dodital-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Dodital Darwa Pass Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,400 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 13,125 </small></s>
                    <b> &#8377; 10,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          

          
          
          <a class="my_card" href="phulara-ridge-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/phulara-ridge-trek.jpg" data-lazy="img/packageImage/phulara-ridge-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Phulara Ridge Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,150 m</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 10,199 </small></s>
                    <b> &#8377; 8,499</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

          

          <!-- Add additional cards as needed -->
        </div>
      </div>
      
      <h2>Best Summer Treks Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
                    <a class="my_card" href="bali-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/bali-pass-trek-1.jpg" data-lazy="img/packageImage/bali-pass-trek-1.jpg" alt="Bali Pass Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Bali Pass Trek
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>16,200 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 22,800 </small></s>
                    <b> &#8377; 19,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="har-ki-dun-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/har-ki-dun-trek-4.jpg" data-lazy="img/packageImage/har-ki-dun-trek-4.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Har Ki Dun Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,800 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,398 </small></s>
                    <b> &#8377; 6,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          <a class="my_card" href="kuari-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kuari-pass-trek.jpg" data-lazy="img/packageImage/kuari-pass-trek.jpg" alt="Har Ki Dun Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kuari Pass Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,750 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,399 </small></s>
                    <b> &#8377; 6,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/chopta-trek-2.jpg" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Chopta Tungnath Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Easy</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,083 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 4,799 </small></s>
                    <b> &#8377; 3,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

           <a class="my_card" href="borasu-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/borasu-pass-trek.jpg" data-lazy="img/packageImage/borasu-pass-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Borasu Pass Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Difficult</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>8 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>17,880 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 37,500 </small></s>
                    <b> &#8377; 30,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          <a class="my_card" href="dodital-darwa-pass-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/dodital-trek.jpg" data-lazy="img/packageImage/dodital-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Dodital Darwa Pass Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,400 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 13,125 </small></s>
                    <b> &#8377; 10,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          <a class="my_card" href="gaumukh-tapovan-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/gaumukh-tapovan-trek.jpg" data-lazy="img/packageImage/gaumukh-tapovan-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Gaumukh Tapovan Trek
                    </h5>



                  </div>

                </div>
    

                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>8 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>14,600 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 19,875 </small></s>
                    <b> &#8377; 15,900</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

         
          
          <a class="my_card" href="phulara-ridge-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/phulara-ridge-trek.jpg" data-lazy="img/packageImage/phulara-ridge-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Phulara Ridge Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,150 m</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 10,199 </small></s>
                    <b> &#8377; 8,499</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

          

          <!-- Add additional cards as needed -->
        </div>
      </div>
      
      
      <h2>Best Monsoon Treks Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
 

          <a class="my_card" href="chopta-tungnath-chandrashila-deoriatal-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/chopta-trek-2.jpg" data-lazy="img/packageImage/chopta-trek-2.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Chopta Tungnath Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Easy</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>12,083 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 4,799 </small></s>
                    <b> &#8377; 3,999</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>

          <a class="my_card" href="kashmir-great-lakes-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kashmir-great-lakes-1.jpg" data-lazy="img/packageImage/kashmir-great-lakes-1.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kashmir Great Lakes Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Kashmir</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>7 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>13,750 m</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 18,750 </small></s>
                    <b> &#8377; 15,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
          
          <a class="my_card" href="valley-of-flowers-trek.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/valley-of-flowers-trek.jpg" data-lazy="img/packageImage/valley-of-flowers-trek.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Valley of Flowers Trek
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>6 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>14,100 m</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 8,125 </small></s>
                    <b> &#8377; 6,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>
              

          

          <!-- Add additional cards as needed -->
        </div>
      </div>
    </section>

    <!-- Architecture Section -->
    <section id="section-yatras" class="filter-section active">
      <!--<h2>Recommended Yatras Uttarakhand</h2>-->
      <!-- Wrap the grid in a slider container -->
      <!--<div class="card-slider">-->
      <!--  <div class="card-grid">-->
          <!-- Example Card -->
      <!--    <a class="my_card" href="kedarnath-yatra.php" target="_Blank">-->
      <!--      <div style="border: 1px solid #e0e0e0;" class="box">-->
      <!--        <div class="productCard_discountTag__bJQTv">-->
      <!--          <span class="productCard_discountTagIcon__10rS7">-->
      <!--            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
      <!--              <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
      <!--              <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
      <!--            </svg>-->
      <!--          </span>-->
      <!--          20%-->
      <!--          <div class="productCard_discountTagAmount__9R5ID">off</div>-->
      <!--        </div>-->
      <!--        <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
      <!--        <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarnath-yatra.jpg" data-lazy="img/packageImage/kedarnath-yatra.jpg" alt="Kedarnath Yatra">-->
      <!--        <div class="p-2">-->
      <!--          <div class="price-details">-->
      <!--            <div style="padding-top: 5px;">-->
      <!--              <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
      <!--                Kedarnath Yatra-->
      <!--              </h5>-->




      <!--            </div>-->

      <!--          </div>-->


      <!--          <div class="ratings">-->
      <!--            <div class="main-grid">-->
                    <!-- Location -->
      <!--              <div class="sub-grid location">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-map-marker fa-lg"></i>-->

      <!--                  <small>Uttarakhand</small>-->
      <!--                </div>-->
      <!--              </div>-->

                    <!-- Difficulty -->
      <!--              <div class="sub-grid difficulty">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-tasks fa-lg"></i>-->
      <!--                  <small>Moderate</small>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->

      <!--            <div class="main-grid">-->
                    <!-- Duration (Days) -->
      <!--              <div class="sub-grid duration">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-calendar-alt fa-lg"></i>-->
      <!--                  <small>3 Days</small>-->
      <!--                </div>-->
      <!--              </div>-->

                    <!-- Altitude -->
      <!--              <div class="sub-grid altitude">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-arrow-up fa-lg"></i>-->
      <!--                  <small>11,755 Ft. </small>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--          </div>-->



      <!--          <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
      <!--            <span class="tour-price">-->
      <!--              <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
      <!--              <b> &#8377; 3,250</b>-->
      <!--            </span>-->

                  <!-- Get Quote Button -->
      <!--            <button class="glow-on-hover">Get Quote</button>-->
      <!--          </div>-->

      <!--        </div>-->
      <!--        <hr>-->
      <!--      </div>-->
      <!--    </a>-->


      <!--    <a class="my_card" href="do-dham-yatra.php" target="_Blank">-->
      <!--      <div style="border: 1px solid #e0e0e0;" class="box">-->
      <!--        <div class="productCard_discountTag__bJQTv">-->
      <!--          <span class="productCard_discountTagIcon__10rS7">-->
      <!--            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
      <!--              <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
      <!--              <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
      <!--            </svg>-->
      <!--          </span>-->
      <!--          20%-->
      <!--          <div class="productCard_discountTagAmount__9R5ID">off</div>-->
      <!--        </div>-->
      <!--        <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
      <!--        <img class="card-img-top" width="355" height="220" src="img/packageImage/do-dham-card.jpg" data-lazy="img/packageImage/do-dham-card.jpg" alt="Do Dham Yatra">-->
      <!--        <div class="p-2">-->
      <!--          <div class="price-details">-->
      <!--            <div style="padding-top: 5px;">-->
      <!--              <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
      <!--                Do Dham Yatra-->
      <!--              </h5>-->



      <!--            </div>-->

      <!--          </div>-->


      <!--          <div class="ratings">-->
      <!--            <div class="main-grid">-->
                    <!-- Location -->
      <!--              <div class="sub-grid location">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-map-marker fa-lg"></i>-->

      <!--                  <small>Uttarakhand</small>-->
      <!--                </div>-->
      <!--              </div>-->

                    <!-- Difficulty -->
      <!--              <div class="sub-grid difficulty">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-tasks fa-lg"></i>-->
      <!--                  <small>Moderate</small>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->

      <!--            <div class="main-grid">-->
                    <!-- Duration (Days) -->
      <!--              <div class="sub-grid duration">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-calendar-alt fa-lg"></i>-->
      <!--                  <small>5 Days</small>-->
      <!--                </div>-->
      <!--              </div>-->

                    <!-- Altitude -->
      <!--              <div class="sub-grid altitude">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-arrow-up fa-lg"></i>-->
      <!--                  <small>11,755 Ft.</small>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--          </div>-->



      <!--          <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
      <!--            <span class="tour-price">-->
      <!--              <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
      <!--              <b> &#8377; 3,250</b>-->
      <!--            </span>-->

                  <!-- Get Quote Button -->
      <!--            <button class="glow-on-hover">Get Quote</button>-->
      <!--          </div>-->

      <!--        </div>-->
      <!--        <hr>-->
      <!--      </div>-->
      <!--    </a>-->


      <!--    <a class="my_card" href="char-dham-yatra.php" target="_Blank">-->
      <!--      <div style="border: 1px solid #e0e0e0;" class="box">-->
      <!--        <div class="productCard_discountTag__bJQTv">-->
      <!--          <span class="productCard_discountTagIcon__10rS7">-->
      <!--            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">-->
      <!--              <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>-->
      <!--              <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>-->
      <!--            </svg>-->
      <!--          </span>-->
      <!--          20%-->
      <!--          <div class="productCard_discountTagAmount__9R5ID">off</div>-->
      <!--        </div>-->
      <!--        <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>-->
      <!--        <img class="card-img-top" width="355" height="220" src="img/packageImage/char-dham-card.jpg" data-lazy="img/packageImage/char-dham-card.jpg" alt="Chopta Trek">-->
      <!--        <div class="p-2">-->
      <!--          <div class="price-details">-->
      <!--            <div style="padding-top: 5px;">-->
      <!--              <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">-->
      <!--                Char Dham Yatra-->
      <!--              </h5>-->



      <!--            </div>-->

      <!--          </div>-->


      <!--          <div class="ratings">-->
      <!--            <div class="main-grid">-->
                    <!-- Location -->
      <!--              <div class="sub-grid location">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-map-marker fa-lg"></i>-->

      <!--                  <small>Uttarakhand</small>-->
      <!--                </div>-->
      <!--              </div>-->

                    <!-- Difficulty -->
      <!--              <div class="sub-grid difficulty">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-tasks fa-lg"></i>-->
      <!--                  <small>Moderate</small>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->

      <!--            <div class="main-grid">-->
                    <!-- Duration (Days) -->
      <!--              <div class="sub-grid duration">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-calendar-alt fa-lg"></i>-->
      <!--                  <small>9 Days</small>-->
      <!--                </div>-->
      <!--              </div>-->

                    <!-- Altitude -->
      <!--              <div class="sub-grid altitude">-->
      <!--                <div class="icon-container">-->
      <!--                  <i class="fa fa-arrow-up fa-lg"></i>-->
      <!--                  <small>11,755 Ft.</small>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--          </div>-->



      <!--          <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">-->
                  <!-- Price Section -->
      <!--            <span class="tour-price">-->
      <!--              <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>-->
      <!--              <b> &#8377; 3,250</b>-->
      <!--            </span>-->

                  <!-- Get Quote Button -->
      <!--            <button class="glow-on-hover">Get Quote</button>-->
      <!--          </div>-->

      <!--        </div>-->
      <!--        <hr>-->
      <!--      </div>-->
      <!--    </a>-->


          <!-- Add additional cards as needed -->
      <!--  </div>-->
      <!--</div>-->

      <h2>Best Selling Yatras Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
          <a class="my_card" href="kedarnath-yatra.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25C2%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/kedarnath-yatra.jpg" data-lazy="img/packageImage/kedarnath-yatra.jpg" alt="Kedarnath Yatra">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Kedarnath Yatra
                    </h5>




                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>3 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,755 Ft. </small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 11,875 </small></s>
                    <b> &#8377; 9,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="do-dham-yatra.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                25%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/do-dham-card.jpg" data-lazy="img/packageImage/do-dham-card.jpg" alt="Do Dham Yatra">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Do Dham Yatra
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>5 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,755 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 15,625 </small></s>
                    <b> &#8377; 12,500</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <a class="my_card" href="char-dham-yatra.php" target="_Blank">
            <div style="border: 1px solid #e0e0e0;" class="box">
              <div class="productCard_discountTag__bJQTv">
                <span class="productCard_discountTagIcon__10rS7">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M10.705 5.79L6.205 1.29C6.025 1.11 5.775 1 5.5 1H2C1.45 1 1 1.45 1 2V5.5C1 5.775 1.11 6.025 1.295 6.21L5.795 10.71C5.975 10.89 6.225 11 6.5 11C6.775 11 7.025 10.89 7.205 10.705L10.705 7.205C10.89 7.025 11 6.775 11 6.5C11 6.225 10.885 5.97 10.705 5.79ZM6.5 10.005L2 5.5V2H5.5V1.995L10 6.495L6.5 10.005Z" fill="#fff"></path>
                    <path d="M3.25 4C3.66421 4 4 3.66421 4 3.25C4 2.83579 3.66421 2.5 3.25 2.5C2.83579 2.5 2.5 2.83579 2.5 3.25C2.5 3.66421 2.83579 4 3.25 4Z" fill="#fff"></path>
                  </svg>
                </span>
                20%
                <div class="productCard_discountTagAmount__9R5ID">off</div>
              </div>
              <div class="ribbon-review"><i style="color: #ffd604;margin-left: 8px" class="fa fa-star mr-2"></i>4.8 <small>(126 Reviews)</small> </div>
              <img class="card-img-top" width="355" height="220" src="img/packageImage/char-dham-card.jpg" data-lazy="img/packageImage/char-dham-card.jpg" alt="Chopta Trek">
              <div class="p-2">
                <div class="price-details">
                  <div style="padding-top: 5px;">
                    <h5 class="card-trek-name" style="text-align: center; font-size: 1.2em; font-weight: bold;">
                      Char Dham Yatra
                    </h5>



                  </div>

                </div>


                <div class="ratings">
                  <div class="main-grid">
                    <!-- Location -->
                    <div class="sub-grid location">
                      <div class="icon-container">
                        <i class="fa fa-map-marker fa-lg"></i>

                        <small>Uttarakhand</small>
                      </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="sub-grid difficulty">
                      <div class="icon-container">
                        <i class="fa fa-tasks fa-lg"></i>
                        <small>Moderate</small>
                      </div>
                    </div>
                  </div>

                  <div class="main-grid">
                    <!-- Duration (Days) -->
                    <div class="sub-grid duration">
                      <div class="icon-container">
                        <i class="fa fa-calendar-alt fa-lg"></i>
                        <small>9 Days</small>
                      </div>
                    </div>

                    <!-- Altitude -->
                    <div class="sub-grid altitude">
                      <div class="icon-container">
                        <i class="fa fa-arrow-up fa-lg"></i>
                        <small>11,755 Ft.</small>
                      </div>
                    </div>
                  </div>
                </div>



                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                  <!-- Price Section -->
                  <span class="tour-price">
                    <s><small style="margin-left: 5px;">&#8377; 25,000 </small></s>
                    <b> &#8377; 20,000</b>
                  </span>

                  <!-- Get Quote Button -->
                  <button class="glow-on-hover">Get Quote</button>
                </div>

              </div>
              <hr>
            </div>
          </a>


          <!-- Add additional cards as needed -->
        </div>
      </div>
    </section>

    <!-- Food Section -->
    <section id="section-expeditions" class="filter-section active">
      <!--<h2>Recommended Expeditions Uttarakhand</h2>-->
      <!-- Wrap the grid in a slider container -->
      <!--<div class="card-slider">-->
      <!--  <div class="card-grid">-->
          <!-- Example Card -->


          <!-- Add additional cards as needed -->
      <!--  </div>-->
      <!--</div>-->

      <h2>Best Selling Expeditions Uttarakhand</h2>
      <!-- Wrap the grid in a slider container -->
      <div class="card-slider">
        <div class="card-grid">
          <!-- Example Card -->
          


   
          <!-- Add additional cards as needed -->
        </div>
      </div>
    </section>
  </div>

 <?php

  include_once("footer.php"); ?>
</body>

</html>