<?php
require 'db_connection.php';
require 'insert.php';

if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], 
$_POST['email'], $_POST['phone'], $_POST['adults'], $_POST['children'], $_POST['table_pref'])) {
    $insert_data = insertData($conn, $_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['adults'], $_POST['children'], $_POST['table_pref']);
    if ($insert_data === true) {
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pwani Dishes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/res.png" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/form/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span><a href="tel:+254704035632">+254704035632</a></span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 8:00 AM - 8:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Pwani Dishes</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Orders</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#reserve-a-table" class="book-a-table-btn scrollto">Book a table</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Pwani</span> Dishes</h2>
                <p class="animate__animated animate__fadeInUp">We believe in the commitment to our community and in fostering long term relationships 
                  with local farmers and fishermen. Our menus reflect these connections, 
                  featuring local, seasonal produce and sustainably sourced seafood and meats.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Wide Variety to choose from</h2>
                <p class="animate__animated animate__fadeInUp"> All of our menu items are inspired by Swahili cuisine and have been created by our head chef, Stanley Johnson, after studying authentic Swahili cuisine in Pwani Hospitality Institute. Not only do we have fresh flown-in seafood from the coast, 
                  but we also have a variety of handcrafted cocktails, wine, and beer to choose from.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Our Speciality</h2>
                <p class="animate__animated animate__fadeInUp">Pwani Dishes offers menus for Lunch and Dinner. The restaurant has a Swahili atmosphere with Swahili ornaments and music. 
                  Within a year of its opening, Pwani Dishes has been recognised for its quality of food and excellent service.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3> We’re excited to bring something new to our community and can’t wait to share our unique recipes.</strong></h3>
              <p>
              The restaurant is the hue of the summer sky, yet here and there are colours of the sweetest of meadow blooms.
              </p>
              <p class="fst-italic">
              In moments the restaurant becomes the stage of my sweetest romantic memories, such an unexpected journey of my heart and soul.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> A dimly lit space filled with two-seater tables, a piano bar, and an entire wall that was a fish tank, with Angelfish curiously swimming back and forth.</li>
                <li><i class="bx bx-check-double"></i> Our menus reflect these connections, featuring local, seasonal produce and sustainably sourced seafood and meats.</li>
                <li><i class="bx bx-check-double"></i> The interior is rich with original architectural details, gleaming hardwood floors, soaring columns, mahogany paneling and antique mirrors.</li>
              </ul>
              <p>
                Do you always enjoy entering a clean well-rounded atmosphere to eat, but in some cases it is not always a well a rounded 
                atmosphere that attracts you, it is just the plain and simple environment. A place where great home-cooked meals are served, 
                Pwani Dishes is the ultimate destination for you.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Are you looking for delicious food, a relaxed environment and good value? Pwani Dishes is the perfect place for your next meal, either dine in or take away.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Superior Value</h4>
              <p>If you are looking for value for money, Pwani Dishes delivers. 
                You will receive a fresh 100% home  made dish in a portion size that won’t leave you scrapping your plate.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Open 7 days</h4>
              <p>Open 7 days – Hungry on a Sunday or a Monday? That’s no problem Pwani Dishes is open 7 days a week.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Flexible Menu</h4>
              <p>Whether you’re looking to dine with three people or 20 people,  
                we can mix and match food combinations without a hassle. No one has to fight over the last piece of Nyama Choma!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Kenyan Beef Samosas</a><span>Ksh 50</span>
            </div>
            <div class="menu-ingredients">
              Flour, Minced beef, Spring onions 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Mukimo and Meat Stew</a><span>Ksh 480</span>
            </div>
            <div class="menu-ingredients">
              Meat, Potatoes, peas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Guacamole1</a><span>Ksh 100</span>
            </div>
            <div class="menu-ingredients">
              Ovacado, diced onion, cilantro
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Lettuce and tomato vegetable salad</a><span>Ksh 120</span>
            </div>
            <div class="menu-ingredients">
              Lettuce, Capsicum, tomatoes, Onions
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>Ksh 950</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Chai</a><span>Ksh 150</span>
            </div>
            <div class="menu-ingredients">
              Fresh Milk, tea leaves, Sugar, Cinnamon
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>Ksh 300</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>Ksh 200</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushtables, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Matoke (Plantain Banana Stew)</a><span>Ksh 600</span>
            </div>
            <div class="menu-ingredients">
            Plantain bananas, Meat, tomatoes, garlic
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Have you longed to get a special meal of Kenyan origin and taste? Try out our variety of special meals exclusive to you. </p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Pilau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Biryani</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Bhajia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Mshikaki</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Nyama choma</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Made from pure rice grown in Kenya.</h3>
                    <p class="fst-italic">East African Pilau is a traditional, beautiful fragrant rice dish made with many aromatic spices that adds an amazing depth of flavor to the rice.</p>
                    <p>Pilau is delicious on its own and can be served as a stand-alone meal, however, if you want a full Kenyan experience simply pair with Kachumbari – a cool and refreshing salad made with tomatoes, red onions, cilantro and a spicy pepper like serrano chili pepper.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials.webp" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Retaining the traditional layered approach to assembling it.</h3>
                    <p class="fst-italic">Chicken Biryani is a delicious savory rice dish that is loaded with spicy marinated chicken, caramelized onions, and flavorful saffron rice.</p>
                    <p>Long-grained rice (like basmati) flavored with fragrant spices such as saffron and layered with lamb, chicken, fish, or vegetables and a thick gravy. The dish is then covered, its lid secured with dough, and then the biryani is cooked over a low flame. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials2.webp" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bhajias are a trendy African snack and an excellent choice for any event.</h3>
                    <p class="fst-italic">They are loved all over the continent because they are tasty, easy to make, and very affordable. Kenya Bhajias can be enjoyed as a snack or a side dish with kachumbari or chutney. </p>
                    <p>This traditional African snack is made of spicy potatoes, and it’s a favorite among people all over the continent. Bhajias are usually served as a side dish at special occasions like weddings and parties, but they’re also great for snacking on any day of the week.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/Kenyan-Bhajias.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                    <p class="fst-italic">They are usually spiced with chili, ginger, masala or other local spices.</p>
                    <p>Skewered pieces of marinated meat such as beef, goat, or mutton that is slowly cooked over hot coals. The meat is marinated in a combination of various herbs and spices</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/mshikaki.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Made from local sheep and goats, Nyama choma is one of Kenya’s all-time favourite dishes</h3>
                    <p class="fst-italic">Here at- Pwani Dishes we guarantee the best Nyama Choma</p>
                    <p> If you want to try the most traditional kind of nyama choma, go for local roasted goat served with rice and tangy kachumbari, the classic Kenyan relish made with diced tomatoes, chili peppers, onions, cilantro, lime juice and sometimes avocado.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/nyamachoma.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>Ksh 15,000</span></p>
                  </div>
                  <p class="fst-italic">
                    Your Birthday coming up? Why stress yourself with all the hustle that comes with arranging for the party? Let us 
                    handle all your needs.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i>We will arrange the venue according to your specifications and needs.</li>
                    <li><i class="bi bi-check-circle"></i>All the catering needs will be taken care of depending on your requirements.</li>
                    <li><i class="bi bi-check-circle"></i>Our staff we be available for all you need during the party and after it.</li>
                  </ul>
                  <p>
                    We are always committed to ensuring our clients receive value for their money and also have a good time when 
                    they are within our premises. Try Us and you won't regret.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>Ksh 29,000</span></p>
                  </div>
                  <p class="fst-italic">
                    Want to have a fun time with a group of your friends or family? Pwani Dishes is the ideal place to go for the 
                    outing.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> We provide quality food for groups of individuals at a friendly price.</li>
                    <li><i class="bi bi-check-circle"></i> Get to enjoy foun moments with your friends at our restaurant.</li>
                    <li><i class="bi bi-check-circle"></i> The experience with your friends will leave you yearning for more.</li>
                  </ul>
                  <p>
                    Given the friendly environment that Pwani Dishes is located, its ideal for team bulding activities with your peers,
                    such as bike riding and other team activities.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>Ksh 99,000</span></p>
                  </div>
                  <p class="fst-italic">
                    Already into the weekend and you have no plan with your friends? Get to hang out at Pwani Dishes for a custom party,
                    with our in-house DJ.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> A customized playlist to suit your mood and taste of music.</li>
                    <li><i class="bi bi-check-circle"></i> Awesome food and drinks from our team of dedicated Chefs.</li>
                    <li><i class="bi bi-check-circle"></i> A large indoror Hall decorated to fit into your ideal event.</li>
                  </ul>
                  <p>
                    Have an exciting weekend at our restaurant that will be value for both your time and money. We guarantee an 
                    evening of great experiences and moments.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
<section>
    <form id="reserve-a-table" class="table-reservation-form" method="post" action="">
			<h1><i class="far fa-calendar-alt"></i>Reserve a table</h1>
			<div class="fields">
				<!-- Input Elements -->
                <div class="wrapper">
	                <div>
		                <label for="arrival">Arrival</label>
		                <div class="field">
			                <input id="arrival" type="date" name="arrival" required>
		                </div>
	                </div>

	                <div class="gap"></div>
	            
                    <div>
		                <label for="departure">Departure</label>
		                <div class="field">
			                <input id="departure" type="date" name="departure" required>
		                </div>
	                </div>
                </div>
			</div>
              <div class="fields">
                <div class="wrapper">
	                <div>
		                <label for="first_name">First Name</label>
		                <div class="field">
			                <i class="fas fa-user"></i>
			                <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
		                </div>
	                 </div>

	                <div class="gap"></div>

	                <div>
		                <label for="last_name">Last Name</label>
		                <div class="field">
			                <i class="fas fa-user"></i>
			                <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
		                </div>
	                </div>
                </div>
              </div>

                <label for="email">Email</label>
                <div class="field">
                	<i class="fas fa-envelope"></i>
                	<input id="email" type="email" name="email" placeholder="Your Email" required>
                </div>

                <label for="phone">Phone</label>
                <div class="field">
                	<i class="fas fa-phone"></i>
                	<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
                </div>

              <div class="fields">
                <div class="wrapper">
	                <div>
	                	<label for="adults">Adults</label>
	                	<div class="field">
	                		<select id="adults" name="adults" required>
	                			<option disabled selected value="">--</option>
	                			<option value="1">1</option>
	                			<option value="2">2</option>
	                			<option value="3">3</option>
	                			<option value="4">4</option>
	                		</select>
	                	</div>
	                </div>

	                <div class="gap"></div>

	                <div>
	                	<label for="children">Children</label>
	                	<div class="field">
	                		<select id="children" name="children" required>
	                			<option disabled selected value="">--</option>
	                			<option value="0">0</option>
	                			<option value="1">1</option>
	                			<option value="2">2</option>
	                			<option value="3">3</option>
	                			<option value="4">4</option>
	                		</select>
	                	</div>
	                </div>
                </div>
</div>
                <label for="table_pref">Table Preference</label>
                <div class="field">
                	<select id="table_pref" name="table_pref" required>
                		<option disabled selected value="">--</option>
                		<option value="Family Dining">Family Dining</option>
                		<option value="Bar Height">Bar Height</option>
                		<option value="Outdoor">Outdoor</option>
                    <option value="Booth">Booth</option>
                	</select>
                </div>
                <input type="submit" value="Reserve">
		</form>
</section>
   <!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Enjoy a breathtaking view of the ocean from the restaurant with a fine touch art and impressive decor in the interior</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div><
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Committed to bring the tastiest food to your table, our team of Proffesional Chefs is keen to ensure the best food is what you receive</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pwani Dishes is a founders dream of a restaurant. We as the management are dedicated to ensure that the restaurant continues offering the best services in the region and grow to establish other branches.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  When my friends ask me of which restaurant in town that I would recommend to them, Pwani Dishes is the only one that comes to my mind due its serine environment and outstanding services that it offers to its customers. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ever since I discovered this restaurant, there isn't any other place that I would want to go. It gives me a new experience each and every time I dine here.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  When am planning to have a meeting with my fellow freelancers, Pwani Dishes is the only place I can think of due to its accomadating management that always customize their services depending on our needs.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  When mapping out new ideas for a restaurant, Pwani Dishes would be the benchmark for the standards that are to be met. It has established itself to be a hub for great food and other catering services.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Get in touch with us for any queries you may have concerning our restaurant and our team will be glad to be of help to you.</p>
        </div>
      </div>

      <div class="map">
      <iframe  width="100%" height="350px" style="border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.1804653180047!2d36.81732610161977!3d-1.2847853941679088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d6657fa981%3A0xa892b9267f5b9a40!2sSarova%20Stanley%20Nairobi!5e0!3m2!1sen!2ske!4v1646796758090!5m2!1sen!2ske" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Kenyatta Avenue<br>Nairobi, NBO 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>8:00 AM - 8:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>pwanidishes@gmail.com<br>pwanidsupport@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+254704035632<br>+25477466196</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Pwani Dishes</h3>
      <p>Dedicated to make the best dishes that will make you crave for more</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Pwani Dishes</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://twitter.com/jkg_prs" target="_blank">Patrick Rimomo</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>