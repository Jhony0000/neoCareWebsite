<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Updates</title>
</head>
  <style>
    .update-section {
      padding: 120px 15px;
      text-align: center;
      color: #fff;
      background: url('https://www.drgemhealthcare.com/wp-content/uploads/2025/02/Page_Product.jpg') no-repeat center center;
      background-size: cover;
      position: relative;
    }
    /* Optional overlay for better text visibility */
    .update-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: 0;
    }
    .update-section .content {
      position: relative;
      z-index: 1;
    }
    .update-section h2 {
      font-size: 1.5rem;
      color: #f1f1f1;
      margin-bottom: 10px;
    }
    .update-section h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 0;
    }
    @media (max-width: 768px) {
      .update-section h1 {
        font-size: 2rem;
      }
      .update-section h2 {
        font-size: 1.25rem;
      }
    }
  </style>
<body>
    @include('components.header')
    <main>
           <section class="update-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 content">
        <h2>Stay updated with new functions and enhancements</h2>
        <h1>Product Updates</h1>
      </div>
    </div>
  </div>
</section>
<section>
<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    <!-- Card 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/09/Social_FloorWallMounted_1.jpg" class="card-img-top" alt="Floor-Wall Mounted System">
        <div class="card-body">
          <h5 class="card-title">DRGEM Introduces Floor-Wall Mounted System</h5>
          <p class="card-text"><small class="text-muted">September 24, 2025</small></p>
          <p class="card-text">Practical, Stable, and Cost-Effective Solution for Diagnostic Imaging DRGEM, a global leader in diagnostic X-ray systems...</p>
              <a href="" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/08/Newsletter_2508_img_3.jpg" class="card-img-top" alt="PROMO Mobile X-ray System">
        <div class="card-body">
          <h5 class="card-title">DRGEM’s PROMO Mobile X-ray System Achieves U.S. FDA 510(k) Clearance</h5>
          <p class="card-text"><small class="text-muted">August 26, 2025</small></p>
          <p class="card-text">DRGEM announced that its PROMO Mobile X-ray System has received Traditional 510(k) Clearance from the U.S. Food and Drug Administration...</p>
             <a href="" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/04/Social_TOPAZ-Tablet.jpg" class="card-img-top" alt="TOPAZ Smart Control">
        <div class="card-body">
          <h5 class="card-title">TOPAZ Gets Smarter: Introducing “Smart Control” Features</h5>
          <p class="card-text"><small class="text-muted">April 24, 2025</small></p>
          <p class="card-text">DRGEM’s TOPAZ has taken a step forward with Smart Control functions using a tablet, offering greater safety, efficiency, and convenience...</p>
          <a href="" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

    <!-- Add more cards here following the same structure -->

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
    </main>
    @include('components.footer')
</body>
</html>