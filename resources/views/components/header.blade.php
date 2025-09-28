<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
     <!-- <link rel="icon" type="image/png" href="\logo\Neocare_Logo_Upscaled(2).png"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="img/Neo Care X-Ray-6_page-0002.jpg">
  <!-- Optional icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
  
  <link rel="stylesheet" href="css/app.css">
  <style>
    /* Header styles */
    .navbar-nav .nav-link {
      font-weight: 500;
      /* color: white !important; */
      position: relative;
    }

    /* Remove down arrow added by Bootstrap */
    .navbar-nav .dropdown-toggle::after {
      display: none;
    }

    .navbar-nav .dropdown-menu {
      opacity: 0;
      visibility: hidden;
      display: block; /* Needed for transition */
      transform: translateY(10px);
      transition: all 0.3s ease;
      margin-top: 0;
      border: none;   
         background-color: #343a40; 

    }

    .navbar-nav .nav-item:hover > .dropdown-menu,
    .navbar-nav .dropdown-submenu:hover > .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .dropdown-item {
      color: white;
      transition: background 0.3s ease;
    }

    .dropdown-item:hover {
      background-color: #495057;
    }

    /* Submenu styling */
    .dropdown-submenu {
      position: relative;
    }
    .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-left: 0.1rem;
    }

    .header-contact-btn {
      margin-left: 10px;
    }
    .logo img {
      height: 80px;
    }
.navbar-nav .dropdown-toggle::after { display: none; }

    @media (max-width: 991px) {
      .navbar-nav .dropdown-menu {
        position: static !important;
        transform: translateY(0);
        opacity: 1 !important;
        visibility: visible !important;
      }
      .dropdown-submenu > .dropdown-menu {
        left: 0;
      }
    }
  </style>
</head>
<body>

<header class="header text-dark border-bottom ">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand logo" href="/">
          <img src="\logo\Neocare_Logo_Upscaled(2).png" alt="NeoCare">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler bg-dark text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon text-light"></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse mx-5" id="navbarContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <!-- Product Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark mx-3" href="/products" >Product</a>
              <ul class="dropdown-menu bg-dark">
                <li class="dropdown-submenu bg-dark">
                  <a class="dropdown-item dropdown-toggle" href="#">Stationary Systems</a>
                  <!-- <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item" href="#">X-CUBE 90 with Elite</a></li>
                    <li><a class="dropdown-item" href="#">X-CUBE 70 with Elite</a></li>
                    <li><a class="dropdown-item" href="#">X-CUBE 60</a></li>
                  </ul> -->
                </li>
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">Mobile Systems</a>
                  <!-- <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item" href="#">ALPIUS 900</a></li>
                    <li><a class="dropdown-item" href="#">VIFU 2000</a></li>
                  </ul> -->
                </li>
                <li><a class="dropdown-item" href="#">Veterinary System</a></li>
                <li><a class="dropdown-item" href="#">Digital Imaging System</a></li>
                <li><a class="dropdown-item" href="#">Imaging Software</a></li>
              </ul>
            </li>

            <!-- Support -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark mx-3" href="/tachnicalSupport">Support</a>
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item" href="/tachnicalSupport">Technical Support</a></li>
                <li><a class="dropdown-item" href="/ClinicalSupport">Clinical Support</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark mx-3" href="/news" >News</a>
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item" href="/productUpdate">Product Updates</a></li>
              </ul>
            </li>

            <!-- Event -->
            <li class="nav-item text-dark"><a class="nav-link text-dark" href="/UpcomingEvents">Event</a></li>

            <!-- About Us -->
            <li class="nav-item dropdown">
               <a class="nav-link text-dark mx-3" href="/about">About Us</a>
              <ul class="dropdown-menu bg-dark">
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="/comitment">Our Commitment</a>
                  <!-- <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item" href="#">Overview</a></li>
                    <li><a class="dropdown-item" href="#">CI Story</a></li>
                    <li><a class="dropdown-item" href="#">Core Values</a></li>
                  </ul> -->
                </li>
              </ul>
            </li>
          </ul>

          <!-- Right buttons -->
          <div class="d-flex align-items-center">
          
            <a href="#" class="">  <button class="header-contact-btn">Contact Us </button></a>

            <!-- Language Selector -->
            <div class="dropdown ms-3">
              <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                English
              </button>
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item" href="#">Korean</a></li>
                <li><a class="dropdown-item" href="#">Spanish</a></li>
                <li><a class="dropdown-item" href="#">German</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Nested submenu hover for desktop only
  document.querySelectorAll('.dropdown-submenu').forEach(item => {
    item.addEventListener('mouseenter', function(){
      this.querySelector('.dropdown-menu').classList.add('show');
    });
    item.addEventListener('mouseleave', function(){
      this.querySelector('.dropdown-menu').classList.remove('show');
    });
  });
</script>

</body>
</html> 