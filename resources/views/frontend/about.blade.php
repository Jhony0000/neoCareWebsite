<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      about
    </title>
  </head>
  <style>
    .about-section { padding: 60px 15px; text-align: center; background-color:
    #fff; } .about-section h2 { font-weight: 700; margin-bottom: 20px; } .about-section
    p { font-size: 1.2rem; color: #555; margin-bottom: 40px; } .about-image
    img { width: 100%; max-width: 790px; height: auto; border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1); }

      .drgem-section {
      padding: 60px 15px;
      background: url('/images/Main_bn_4-2.jpg') no-repeat center center;
      background-size: cover;
      color: white;
      position: relative;
    }
    .drgem-section::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0,0,0,0.6); /* overlay */
      z-index: 1;
    }
    .drgem-section .content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }
    .drgem-section h2 {
      font-weight: 700;
      font-size: 2rem;
      margin-bottom: 20px;
    }
    .drgem-section p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    @media (max-width: 767px) {
      .about-section h2,
      .drgem-section h2 {
        font-size: 1.5rem;
      }
      .about-section p,
      .drgem-section p {
        font-size: 1rem;
      }
      .about-section,
      .drgem-section {
        padding: 40px 10px;
      }
    }
       .customer-section {
      padding: 60px 15px;
      background-color: #fff;
    }

    .customer-section h2 {
      font-weight: 700;
      margin-bottom: 20px;
      font-size: 2rem;
      color: #222;
    }

    .customer-section p {
      font-size: 1.1rem;
      color: #555;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .customer-image img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 767px) {
      .customer-section {
        padding: 40px 10px;
      }
      .customer-section h2 {
        font-size: 1.5rem;
      }
      .customer-section p {
        font-size: 1rem;
      }
    }

       .global-section {
      padding: 60px 15px;
      background-color: #fff;
    }
    .global-section h2 {
      font-weight: 700;
      margin-bottom: 20px;
    }
    .global-section p {
      font-size: 1.1rem;
      color: #555;
      line-height: 1.6;
      margin-bottom: 30px;
    }
    .video-wrapper {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
      cursor: pointer;
      border-radius: 8px;
      overflow: hidden;
    }
    .video-wrapper img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      top: 0;
      left: 0;
      border-radius: 8px;
    }
    .video-wrapper .play-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80px;
      height: 80px;
      background-color: rgba(0,0,0,0.6);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .video-wrapper .play-btn svg {
      width: 40px;
      height: 40px;
      fill: #fff;
    }
        .contact-section {
      padding: 80px 15px;
      background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
      color: #fff;
      text-align: center;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      margin: 30px auto;
      max-width: 900px;
    }
    .contact-section h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 15px;
    }
    .contact-section h3 {
      font-size: 1.25rem;
      font-weight: 400;
      margin-bottom: 30px;
      line-height: 1.5;
    }
    .contact-section .btn-contact {
      background-color: #ff5a5f;
      color: #fff;
      font-size: 1.1rem;
      padding: 12px 30px;
      border-radius: 50px;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }
    .contact-section .btn-contact:hover {
      background-color: #ff8085;
      transform: translateY(-3px);
      text-decoration: none;
    }
  </style>
  
  <body>
    @include('components.header')
    <main>
      <section class="about-section">
        <div class="container">
          <div class="row align-items-center">
            <!-- Text Column -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
              <h2>
                About Us
              </h2>
              <p>
                Delivering quality, value, and support in medical imaging worldwide.
              </p>
            </div>
            <!-- Image Column -->
            <div class="col-12 col-lg-6 about-image text-center">
              <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/09/Page_About-Us_1.png"
              alt="About Us">
            </div>
          </div>
        </div>
      </section>
        <section class="drgem-section">
    <div class="container">
      <div class="content">
        <h2>NewCare is a company specializing in X-ray technology</h2>
        <p>Since its establishment in September 2003, NewCare has been dedicated exclusively to the field of X-ray imaging, offering a comprehensive range of solutions for general diagnostic X-ray systems. Through continuous research, development, and product innovation, we deliver exceptional X-ray equipment while fulfilling our responsibilities and commitments to our customers, ensuring their utmost satisfaction.</p>
      </div>
    </div>
  </section>
  <section class="customer-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image Column -->
      <div class="col-12 col-lg-6 customer-image mb-4 mb-lg-0">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Page_About-Us_3.jpg" alt="Customer Satisfaction">
      </div>

      <!-- Text Column -->
      <div class="col-12 col-lg-6">
        <h2>Dedicated to Customer Satisfaction</h2>
        <p>At NewCare, we prioritize customer satisfaction by providing reliable, real-time support and service solutions.</p>
        <p>Our goal is to ensure that your experience with us is smooth, efficient, and hassle-free, no matter where you are in the world.</p>
      </div>
    </div>
  </div>
</section>
<section class="history-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Column -->
      <div class="col-12 col-lg-6 mb-4 mb-lg-0">
        <h2>NeoCare History</h2>
        <p>NewCare’s journey is marked by continuous innovation, global expansion, and a commitment to delivering reliable medical imaging solutions. From our early beginnings to our current global presence, each milestone reflects our dedication to quality, growth, and advancing diagnostic excellence.</p>
        <p>Explore our timeline to see how DRGEM has evolved into a trusted name in medical imaging worldwide.</p>
      </div>

      <!-- Carousel Column -->
      <div class="col-12 col-lg-6">
        <div id="historyCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Page_About-Us_3.jpg" class="d-block w-100" alt="DRGEM History 1">
            </div>
            <div class="carousel-item">
              <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Page_About-Us_3.jpg" class="d-block w-100" alt="DRGEM History 2">
            </div>
            <div class="carousel-item">
              <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Page_About-Us_3.jpg" class="d-block w-100" alt="DRGEM History 2">
            </div>
            <div class="carousel-item">
              <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Page_About-Us_3.jpg" class="d-block w-100" alt="DRGEM History 2">
            </div>
            <!-- Add more slides as needed -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#historyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#historyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="carousel-indicators mt-3">
            <button type="button" data-bs-target="#historyCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#historyCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="global-section">
  <div class="container text-center text-lg-start">
    <div class="row align-items-center">
      <!-- Text Column -->
      <div class="col-12 col-lg-6 mb-4 mb-lg-0">
        <h2>NewCare is a global company</h2>
        <p>NewCare’s X-ray systems are used for diagnosis and treatment in over 120 countries worldwide, in collaboration with more than 200 global partners.</p>
      </div>

      <!-- Video Column -->
      <div class="col-12 col-lg-6">
        <div class="video-wrapper" onclick="playVideo(this)">
          <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/06/Video_About-Us.jpg" alt="DRGEM Video">
          <div class="play-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><path d="M438 392V642L642 517 438 392Z"/></svg>
          </div>
        </div>
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
    </main>
    @include('components.footer')
  </body>

</html>