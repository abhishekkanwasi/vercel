<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>Trekking Packages in India - The Mountain Trekker</title>
    <!-- External CSS and slider libraries -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="src/icons/Favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="src/icons/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/icons/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/icons/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/icons/apple-touch-icon-144x144-precomposed.png" />

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/Main.css" type="text/css" />
    <link rel="stylesheet" href="css/footer.css" type="text/css" />
    <link rel="stylesheet" href="css/header.css" type="text/css" />
    <link rel="stylesheet" href="css/new-Main.css" type="text/css" />

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
            text-align: center;
            /* centers inline content inside the container */

        }



        * {
            box-sizing: border-box;
        }


        /* Filter Navigation Styles */
        .filter-nav {
            text-align: center;
            margin-bottom: 30px;
        }

        .filter-nav button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            background: #333;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .filter-nav button.active {
            background: #ff6600;
        }

        /* Section header */
        .filter-section h2 {
            background: #fff8e1;
            /* Light Yellow */
            color: #d32f2f;
            /* Bold Red Text */
            padding: 10px;
            margin: 0 0 10px;
            border-left: 8px solid #ff8c00;
            /* Orange Accent */
            border-radius: 0 5px 5px 0;
            font-family: 'Helvetica Neue', sans-serif;
        }

        @media (max-width: 768px) {
            .filter-section h2 {
                font-size: 18px;
                /* Adjust as needed */
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            .filter-section h2 {
                font-size: 16px;
                padding: 6px;
            }
        }



        /* Base Card Grid Styling */
        .card-grid {
            display: flex;
            flex-wrap: nowrap;
            gap: 10px;
        }

        .my_card {
            flex: 0 0 100%;
            box-sizing: border-box;
            padding: 10px;
        }

        .card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            box-sizing: border-box;
        }

        .card img {
            width: 100%;
            display: block;
        }

        .card-content {
            padding: 10px;
            text-align: center;
        }

        .card-content h5 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px 10px;
        }

        .card-footer .tour-price s {
            color: #888;
            margin-right: 5px;
        }

        .card-footer .glow-on-hover {
            background-color: #333;
            border: none;
            color: #fff;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card-footer .glow-on-hover:hover {
            background-color: #ff6600;
        }

        /* Hide all filter sections by default */
        .filter-section {
            display: none;
        }

        /* Show active section */
        .filter-section.active {
            display: block;
        }

        /* Mobile styles: using Slick Slider with buttons */
        @media (max-width: 767px) {
            .card-grid {
                display: block;
            }

            .my_card {
                padding: 10px;
            }

            .container {
                max-width: 400px;
                margin: auto;


            }


        }

        /* For larger screens: disable slider and show grid with 4 items per row */
        @media (min-width: 768px) {
            .card-slider {
                overflow: visible;
            }

            .card-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .my_card {
                padding: 0;
            }
        }

        .slick-prev:before,
        .slick-next:before {
            display: none;
            font-family: 'slick';
            font-size: 20px;
            line-height: 1;
            opacity: .75;
            color: #c1c1c1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body>

    <?php

    include_once("header.php"); ?>
    <div class="container">
        <!-- Filter Navigation -->
        <style>
            .filter-container {
                display: flex;
                justify-content: center;
                gap: 15px;
                padding: 20px;
                background: #f8f8f8;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
                margin-top: 50px;

                flex-wrap: wrap;
            }

            .filter-card {
                position: relative;
                width: 200px;
                height: 220px;
                border-radius: 12px;
                background-size: cover;
                background-position: center;
                color: white;
                font-size: 16px;
                font-weight: bold;
                text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
                cursor: pointer;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                padding: 10px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            }

            .filter-card:hover {
                transform: scale(1.05);
                box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            }

            .filter-card.active {
                border: 2px solid white;
                box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.6);
            }

            .filter-card .overlay {
                background: rgba(0, 0, 0, 0.4);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 12px;
            }

            .filter-card .content {
                position: relative;
                z-index: 2;
                text-align: center;
            }

            .filter-card .title {
                font-size: 20px;
                margin-bottom: 5px;
            }

            .filter-card .description {
                font-size: 14px;
                opacity: 0.8;
            }

            .filter-card .details {
                font-size: 12px;
                opacity: 0.9;
                margin-top: 10px;
                background: rgba(255, 255, 255, 0.2);
                padding: 5px;
                border-radius: 8px;
                text-align: center;
                width: 100%;
            }

            .filter-section {
                display: none;
                padding: 20px;

                margin: 10px 0;
                border-radius: 8px;
                background: #fff;
            }

            .filter-section.active {
                display: block;
            }

            @media (max-width: 600px) {
                .filter-container {
                    gap: 10px;
                    padding: 15px;
                }

                .filter-card {
                    width: 160px;
                    height: 180px;
                    font-size: 14px;
                    padding: 8px;
                }

                .filter-card .title {
                    font-size: 16px;
                }

                .filter-card .description {
                    font-size: 12px;
                }

                .filter-card .details {
                    font-size: 10px;
                    padding: 4px;
                }
            }
        </style>

        <style>
            .custom-dropdown {
                position: relative;
                width: 220px;
                margin: 20px auto;
                font-family: Arial, sans-serif;
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
                padding: 10px 14px;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
                color: #333;
            }

            /* Add an arrow indicator using a pseudo-element or directly as text. */
            .dropdown-select::after {
                content: '▾';
                /* Or ▼ */
                margin-left: 10px;
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
        </style>



        <div class="custom-dropdown" id="filterDropdown">
            <div class="dropdown-select">CHOOSE TREK </div>
            <ul class="dropdown-list">
                <li data-value="all">All</li>
                <li data-value="uttarakhand">Uttarakhand</li>
                <li data-value="himachal">Himachal</li>
                <li data-value="kashmir">Kashmir</li>
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
            filterSections('all');
        </script>

        <!-- Filter Sections -->
        <!-- "All" Section -->
        <section id="section-all" class="filter-section active">
            <h2>Recommended Treks</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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

            <h2>Summer Treks</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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

        <!-- Nature Section -->
        <section id="section-uttarakhand" class="filter-section active ">
            <h2>Recommended Treks Uttarakhand</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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

            <h2>Summer Treks</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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
        <section id="section-himachal" class="filter-section active">
            <h2>Recommended Treks Himachal</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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

            <h2>Summer Treks</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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
        <section id="section-kashmir" class="filter-section active">
            <h2>Recommended Treks J&K</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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

            <h2>Summer Treks</h2>
            <!-- Wrap the grid in a slider container -->
            <div class="card-slider">
                <div class="card-grid">
                    <!-- Example Card -->
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
                                    </span>

                                    <!-- Get Quote Button -->
                                    <button class="glow-on-hover">Get Quote</button>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </a>
                    <a class="my_card" href="#" target="_Blank">
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
                            <img class="card-img-top" width="355" height="220" src="img/test/kedarnath-yatra-card.png" data-lazy="img/test/kedarnath-yatra-card.png" alt="Chopta Trek">
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
                                                <small>5 Days</small>
                                            </div>
                                        </div>

                                        <!-- Altitude -->
                                        <div class="sub-grid altitude">
                                            <div class="icon-container">
                                                <i class="fa fa-arrow-up fa-lg"></i>
                                                <small>3,000 m</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                                    <!-- Price Section -->
                                    <span class="tour-price">
                                        <s><small style="margin-left: 5px;">&#8377; 6,133 </small></s>
                                        <b> &#8377; 3,250</b>
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
    </div>


</body>

</html>