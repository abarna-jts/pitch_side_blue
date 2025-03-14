<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitch Side Blue</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/img/logo-shortcut.png">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel='stylesheet' id='astra-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato%3A400%7CPrata%3Anormal%2C&amp;display=fallback&amp;ver=4.7.0' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAdamina%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.7.1' media='all' />
</head>

<body>
    <!-- header section start -->
    <header>
        <div class="container-fluid">
            <div class="row">

                <nav class="navbar">
                    <img src="assets/img/logo-img.png" class="logo_img" alt="">
                    <span class="menu-toggle">&#9776;</span>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                        <!-- Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Outlets and Menu <i class="fa-solid fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="indian_special.php">Indian Special</a></li>
                                <li><a class="dropdown-item" href="special_cocktails.php">Special Cocktails</a></li>
                                <li><a class="dropdown-item" href="bar_shooter.php">Bar Bites & Shooters</a></li>
                                <li><a class="dropdown-item" href="beverages.php">Beverages</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Unlimited Packages <i class="fa-solid fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="private_party.php">Private Party Packages</a></li>
                                <li><a class="dropdown-item" href="corporate_party.php">Corporate Party Packages</a></li>
                            </ul>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="privacy_policy.php">Privacy Policy</a></li>
                        <li class="nav-item"><a class="nav-link" href="terms_condition.php">Terms & Condition</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                    <a href="#" class="book-btn btnOpenForm">Book a Table</a>
                </nav>
            </div>
        </div>
    </header>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let links = document.querySelectorAll(".nav-link");
            let currentUrl = window.location.href; // Get full URL

            links.forEach(link => {
                if (currentUrl.endsWith(link.getAttribute("href"))) {
                    link.classList.add("active");
                }
            });
        });
    </script>

    <!-- header section end -->


    <div class="form-popup-bg">
        <div class="form-container">
            <button id="btnCloseForm" class="close-button">X</button>
            <h1>Book a Table</h1>
            <form action="book_table_mail.php" method="post" id="bookingForm">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>
                
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input class="form-control" type="text" name="email" required/>
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input class="form-control" type="text" name="phone" required/>
                </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input class="form-control" type="date" name="date" required/>
                </div>
                <div class="form-group">
                    <label for="">Reservation On</label>
                    <a href="https://www.zomato.com/chennai/pitchside-blue-1-royapettah/book"><img src="assets/img/zomato.png" alt=""></a>
                    <a href="https://www.swiggy.com/restaurants/pitchside-blue-bar-royapettah-annanagar-chennai-844672/dineout?is_retargeting=true&media_source=GoogleReserve&utm_campaign=GoogleMap&utm_source=GoogleReserve"><img src="assets/img/swiggy.png" alt=""></a>
                    <a href="https://www.eazydiner.com/chennai/pitchside-blue-royapettah-chennai-694343"><img src="assets/img/eazydiner.png" alt=""></a>
                </div>
                <button class="btn-submit">Submit</button>
            </form>
        </div>
    </div>


    <!-- popup style start -->

    <style>

        .form-popup-bg {
        position:absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        }
        .form-popup-bg {
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: rgb(0 0 0 / 0%);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
        transition: opacity 0.3s 0s, visibility 0s 0.3s;
        overflow-y: auto;
        z-index: 10000;
        }
        .form-popup-bg.is-visible {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
        -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
        transition: opacity 0.3s 0s, visibility 0s 0s;
        }
        .form-container {
            background-color: #222222;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
            position:relative;
            padding: 40px;
            color: #fff;
        }

        .form-container .form {
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container .form-group {
                margin-bottom: 20px;
            }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
        }

        .form-container .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background: none;
            border-bottom: 1px solid #464646;
            border-left: 1px solid #464646;
            border-top: 1px solid #464646;
            margin-top: 6px;
            border-radius: 5px;
            transition: 0.3s;
            color: #fff;
        }

        .form-container .form-group a img{
            width: 65px;
            height: 65px;
            padding: 5px;
        }

        .form-container .form-control:focus {
            border-color: #007bff;
            box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        .form-container .btn-submit {
            width: 100%;
            background: #e30016;
            color: #fff;
            padding: 12px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-container .btn-submit:hover {
            background: #e30016;
        }


        .form-container h1{
            font-weight: normal;
            margin-bottom: 15px;
            font-weight: normal;
            margin-bottom: 15px;
            font-size: 1.6em;
            text-align: center;
        }
        .close-button {
        background:none;
        color: #fff;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 0;
        right: 0;
        /* border: solid 1px #fff; */
        }

        .form-popup-bg:before{
            content:'';
            background-color: #fff;
        opacity: .25;
        position:absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        }
    </style>

   