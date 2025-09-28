<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link rel="stylesheet" href="css/app.css">
  <title>NeoCare</title>
</head>
<style>

.hero-carousel .carousel-item {
  height: 90vh;
  min-height: 500px;
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
}

.hero-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}
.hero-text h1 {
  font-size: 3rem;
  font-weight: bold;
  margin-bottom: 1rem;
}
.hero-text p {
  font-size: 1.25rem;
  margin-bottom: 1.5rem;
}
.hero-text a.btn {
  font-size: 1rem;
  padding: 0.75rem 1.5rem;
}

/* text animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate(-50%, -40%);
  }
  to {
    opacity: 1;
    transform: translate(-50%, -50%);
  }
}
.carousel-item.active .hero-text {
  animation: fadeInUp 1s ease-in-out both;
}

@media (max-width: 768px) {
  .hero-text h1 {
    font-size: 2rem;
  }
  .hero-text p {
    font-size: 1rem;
  }
}

.product-card {
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  overflow: hidden;
  background-color: #fff;
  transition: transform .3s ease, box-shadow .3s ease;
}

.product-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,.1);
}

.product-img-wrapper img {
  width: 100%;
  height: auto;
  object-fit: cover;
  transition: transform .4s ease;
}

.product-card:hover .product-img-wrapper img {
  transform: scale(1.05);
}

</style>

<body>
  @include('components.header')
  <main>
   <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="4000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('/images/Main_bn_2.jpg');">
      <div class="hero-overlay"></div>
      <div class="hero-text">
        <h1>Premium Ceiling Suspended System</h1>
        <p>GXR Series</p>
        <a href="#" class="btn btn-primary">Learn more</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('/images/Main_bn_4-2.jpg');">
      <div class="hero-overlay"></div>
      <div class="hero-text">
         <h1>Auto Positioning System</h1>
        <p>Premium Digital X-ray System</p>        <a href="#" class="btn btn-primary">Learn more</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('/images/Main_bn_3.jpg');">
      <div class="hero-overlay"></div>
      <div class="hero-text">
        <h1>Topaz</h1>
        <p>Mobile Digital X-Ray System</p>
        <a href="#" class="btn btn-primary">Learn more</a>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     <section class="container py-5">
  <div class="text-center mb-4">
    <h1 class="fw-bold text-dark ">Our Products</h1>
    <p class="text-muted">
      DRGEM delivers a diverse product line of stationary and mobile X-ray systems designed
      for medical and veterinary use. Our solutions combine cutting-edge technology and intuitive
      software to ensure reliable performance and superior imaging quality in any clinical environment.
    </p>
  </div>

  <div class="row g-4">
    <!-- Product 1 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0">
        <a href="https://drgemhealthcare.com/stationary-system/" target="_blank">
          <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/06/Sub1_bn_1.jpg"
               class="card-img-top img-fluid" alt="Stationary Systems">
        </a>
        <div class="card-body">
          <h5 class="card-title">Stationary Systems</h5>
          <p class="card-text">
            Built for fixed use, these systems deliver high quality imaging, smooth workflow,
            and reliable performance for hospitals and clinics.
          </p>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0">
        <a href="https://drgemhealthcare.com/mobile-system/" target="_blank">
          <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/06/Sub1_bn_2.jpg"
               class="card-img-top img-fluid" alt="Mobile Systems">
        </a>
        <div class="card-body">
          <h5 class="card-title">Mobile Systems</h5>
          <p class="card-text">
            Perfect for bedside and patient room use, these systems deliver smooth on-site
            imaging and fast setup for better workflow.
          </p>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0">
        <a href="https://drgemhealthcare.com/vet-system-vxr-e-ec/" target="_blank">
          <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/06/Sub1_bn_3.jpg"
               class="card-img-top img-fluid" alt="Veterinary System">
        </a>
        <div class="card-body">
          <h5 class="card-title">Veterinary System</h5>
          <p class="card-text">
            Designed for veterinary use, the system deliver precise animal imaging,
            easy operation, and a compact design with tools for various exams.
          </p>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0">
        <a href="https://drgemhealthcare.com/dr-upgrade-acquidr/" target="_blank">
          <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Sub1_bn_4-1.png"
               class="card-img-top img-fluid" alt="Digital Imaging System">
        </a>
        <div class="card-body">
          <h5 class="card-title">Digital Imaging System</h5>
          <p class="card-text">
            AcquiDR provides accurate diagnostic images using a flat panel detector
            and imaging workstation powered by RADMAX software.
          </p>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100 shadow-sm border-0">
        <a href="https://drgemhealthcare.com/software-radmax/" target="_blank">
          <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Sub1_bn_5.png"
               class="card-img-top img-fluid" alt="Imaging Software">
        </a>
        <div class="card-body">
          <h5 class="card-title">Imaging Software</h5>
          <p class="card-text">
            Enhances diagnostics with advanced processing, AI tools, stitching,
            and dose management for improved imaging and workflow.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="https://drgemhealthcare.com/products/" target="_blank" class="btn btn-primary px-4">
      Explore Complete Lineup
    </a>
  </div>
</section>
  <section class="container my-5">
    <h2 class="text-center mb-4">Latest News</h2>
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 news-card">
                <img src="https://www.alpinion.com/uploadImage/news/202508/1755358392000000001.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h6 class="card-title">ALPINION and Chung-Ang University Hospital Partner…</h6>
                  <p class="card-text"><small class="text-muted">2025.08.22</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 news-card">
                <img src="https://www.alpinion.com/uploadImage/news/202302/1671360474000000015.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h6 class="card-title">Entering the Global Market…</h6>
                  <p class="card-text"><small class="text-muted">2022.06.24</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 news-card">
                <img src="https://www.alpinion.com/uploadImage/news/202203/1645289743000000000.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h6 class="card-title">Iljin Group’s ALPINION Strengthens…</h6>
                  <p class="card-text"><small class="text-muted">2022.03.23</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 (empty initially, JS will fill if needed) -->
        <div class="carousel-item">
          <div class="row g-4">
            <!-- Next news cards -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left side: Map -->
      <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center">
        <div class="map-wrapper">
          <img src="https://www.alpinion.com/images/main/main_map_img.png" alt="World Map" class="img-fluid">

          <!-- Country markers -->
          <div class="position-absolute translate-middle marker bg-white shadow"
               style="left:75%; top:45%;" data-bs-toggle="tooltip" title="KOREA"></div>
          <div class="position-absolute translate-middle marker bg-primary shadow"
               style="left:60%; top:50%;" data-bs-toggle="tooltip" title="CHINA"></div>
          <div class="position-absolute translate-middle marker bg-danger shadow"
               style="left:25%; top:35%;" data-bs-toggle="tooltip" title="GERMANY"></div>
          <div class="position-absolute translate-middle marker bg-info shadow"
               style="left:10%; top:45%;" data-bs-toggle="tooltip" title="USA"></div>
        </div>
      </div>

      <!-- Right side: Counters -->
      <div class="col-12 col-lg-6">
        <div class="row g-4">
          <div class="col-12">
            <div class="p-4 bg-white shadow rounded text-center h-100">
              <h2 class="fw-bold mb-1">03</h2>
              <p class="mb-0">Branch Offices in</p>
              <small class="text-muted">USA, Germany, China</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 bg-white shadow rounded text-center h-100">
              <h2 class="fw-bold mb-1">80</h2>
              <p class="mb-0">Global Distributors in</p>
              <small class="text-muted">80 Countries</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 bg-white shadow rounded text-center h-100">
              <h2 class="fw-bold mb-1">37%</h2>
              <p class="mb-0">R&amp;D Employees</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <!-- Full width image -->
      <div class="col-12">
        <img src="img/Neo Care X-Ray-6_page-0002.jpg" 
             alt="About Us" 
             class="img-fluid w-100" 
             style="height:auto; object-fit:cover;">
      </div>
    </div>
  </div>
</section>


<section class="contact-section">
  <div class="container">
    <h2>Get in Touch with NewCare</h2>
    <h3>Interested in our products? Let us help you find the perfect solution for your needs.<br>Connect with us today!</h3>
    <a href="#" target="_blank" class="btn-contact">Contact Us</a>
  </div>
</section>
    @include('components.footer')
  </main>
  
  <script>
     document.addEventListener('DOMContentLoaded', () => {
     const slides = document.querySelectorAll('#newsCarousel .carousel-item');
     const firstCards = slides[0].querySelectorAll('.col-12');
     slides.forEach(slide => {
    const row = slide.querySelector('.row');
    const cards = row.querySelectorAll('.col-12');
    if (cards.length < 3) {
      for (let i = 0; i < 3 - cards.length; i++) {
        row.appendChild(firstCards[i].cloneNode(true));
      }
    }
  });
});
</script>
<script>
  // Initialize Bootstrap tooltips
  document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });
</script>
 
</body>
</html>