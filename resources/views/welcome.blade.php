<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PASTOR CAFE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" bikrel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">PASTOR CAFE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/service" class="nav-item nav-link">Service</a>
                    <a href="/viewMenu" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/reservation" class="dropdown-item">Reservation</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE & EATERY</h1>
                        <h2 class="text-white m-0">SINCE 2020</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE & EATERY</h1>
                        <h2 class="text-white m-0">SINCE 2020</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container ">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 2020</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center p-2 border">
                @foreach ($renungan as $renungans)
                    <div class="card mr-4" style="width: 18rem; height:20rem;">
                        <div class="img-container">
                            <img src="{{ asset('/storage/images/' . $renungans->gambar) }}" class="card-img-top"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $renungans->judul }}</h5>
                            <p class="card-text">{{ $renungans->isi_renungan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <!-- About End -->


    <!-- Service Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Fresh & Organic Food</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Online Table Booking</h4>
                            <p class="m-0">Book your table and get up to 30% shopping discount at Commodus Cafe!
                                Promotion Period: Now until 31 Dec 2022.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Fresh Coffee Beans</h4>
                            <p class="m-0">Fresh coffee is whole bean coffee within 2 weeks of the roast date.
                                Ex. A bag of coffee roasted on 12/14 is still “fresh” on 12/27.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpeg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Best Quality Coffee</h4>
                            <p class="m-0">Good coffee will have a strong, pleasant aroma that smells fresh.
                                The beans should not feel too greasy or dry. Whole beans should not be rock
                                hard or crumble easily between your fingers.</p>
                        </div>
                    </div>
                </div> -->
    <!-- <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Online Table Booking</h4>
                            <p class="m-0">Book your table and get up to 30% shopping discount at Commodus Cafe!
                                Promotion Period: Now until 31 Dec 2022.</p>
                        </div>
                    </div>
                </div> -->
    <!-- </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- Offer Start -->
    <!-- <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">50% OFF</h1>
            <h1 class="text-white mb-3">Sunday Special Offer</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2045</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
    <!-- Offer End -->


    <!-- Menu Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container"> -->

    <!-- Drink -->
    <!-- <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Drink</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                            <h7 class="menu-price">20.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Americano Hot</h4>
                            <p class="m-0">An americano is just water and espresso. It'll either be served 1/2 and 1/2
                                or 1/3 espresso to 2/3 water, depending on the coffee shop in question or how you've
                                chosen to brew it.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-2.jpg" alt="">
                            <h7 class="menu-price">26.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cafe Latte Hot</h4>
                            <p class="m-0">A latte or caffè latte is a milk coffee that is a made up of one or two shots
                                of espresso, steamed milk and a final, thin layer of frothed milk on top.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                            <h7 class="menu-price">28.8K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolate Hot</h4>
                            <p class="m-0">Hot chocolate, also known as hot cocoa or drinking chocolate, is a heated
                                drink consisting of shaved chocolate, melted chocolate or cocoa powder, heated milk or
                                water, and usually a sweetener like whipped cream or marshmallows.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/black-coffee-cold.jpg" alt="">
                            <h7 class="menu-price">21.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Black coffee is usually prepared in hot, iced, or cold versions. It is
                                traditionally brewed with fresh coffee bean powder or instant powder without creamer or
                                milk.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/iced-latte.jpg" alt="">
                            <h7 class="menu-price">26.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cafe Latte Ice</h4>
                            <p class="m-0">A latte or caffè latte is a milk coffee that is a made up of one or two shots
                                of espresso, steamed milk and a final, thin layer of frothed milk on top.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/cappucino ice.jpeg" alt="">
                            <h7 class="menu-price">28.8K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cappucino Ice</h4>
                            <p class="m-0">An iced cappuccino is a coffee drink with espresso, milk, ice, and optional
                                sweetener. It's very similar to an iced latte, which makes sense since a cappuccino vs
                                latte are incredibly similar.</p>
                        </div>
                    </div>
                </div>
            </div> -->

    <!-- Food -->
    <!-- <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Food</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Eatery</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/chicken-salted.jpg" alt="">
                            <h7 class="menu-price">20.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chicken Salted Egg Bowl</h4>
                            <p class="m-0">Chicken Meat Coated with Salted Egg Sauce + Coleslaw Salad + Half Boiled Egg.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/chicken-cheese.jpg" alt="">
                            <h7 class="menu-price">26.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chicken Cheese Bowl</h4>
                            <p class="m-0">Chicken Meat Coated With Special Cheese Sauce + Coleslaw Salad + Half Boiled
                                Egg.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/dorry salt.jpeg" alt="">
                            <h7 class="menu-price">28.8K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Dory Salted Egg Bowl</h4>
                            <p class="m-0">Dori Meat Coated with Salted Egg Special Sauce + Coleslaw Salad + Half Boiled
                                Egg.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Pasta</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/carbonara.jpeg" alt="">
                            <h7 class="menu-price">21.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Carbonara Sauce</h4>
                            <p class="m-0">Spaghetti Served With Carbonara Sauce.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/tuna-pasta.jfif" alt="">
                            <h7 class="menu-price">26.4K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Tuna Spicy Pasta</h4>
                            <p class="m-0">Spaghetti With Tuna And Spicy Seasoning.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/seafood.webp" alt="">
                            <h7 class="menu-price">28.8K</h7>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Seafood Aglio Olio</h4>
                            <p class="m-0">Spaghetti Served With Garlic Nuances And The Aroma Of Italian Spices + Squid
                                And Shrimp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Menu End -->


    <!-- Reservation Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">30% OFF</h1>
                                <h1 class="text-white">For Online Reservation</h1>
                            </div>
                            <p class="text-white">A table reservation is an arrangement made in advance to have a table
                                available at a restaurant.</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Free welcome drink</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Charge booking free</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Time saving</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                            <form class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent border-primary p-4"
                                        placeholder="Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent border-primary p-4"
                                        placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4"
                                        style="height: 49px;">
                                        <option selected>Person</option>
                                        <option value="1">Person 1</option>
                                        <option value="2">Person 2</option>
                                        <option value="3">Person 3</option>
                                        <option value="3">Person 4</option>
                                    </select>
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Reservation End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" style="border-radius: 90%; width: 100px;" src="img/foto-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem.
                        Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" style="border-radius: 90%; width: 100px;" src="img/foto-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem.
                        Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" style="border-radius: 90%; width: 100px;" src="img/foto-4.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem.
                        Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" style="border-radius: 90%; width: 100px;" src="img/foto-3.jpg" alt="">
                        <div class="ml-3">
                            <h4>Client Name</h4>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem.
                        Dolor tempor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Arif Rahman Hakim No.100, Sukolilo. Surabaya</p>
                <p><i class="fa fa-phone-alt mr-2"></i>0821-1994-2219</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square"
                        href="https://www.instagram.com/commodus.cafe/?hl=en"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Open Daily</h6>
                    <p>11.00 AM - 11.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Subscribe</h4>
                <p>Subscribe us for further information</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; ITATS.</a></p>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
