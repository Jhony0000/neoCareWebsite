<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
</head>
<body>
    @include('components.header')
    <main>
        <div class="container-fluid bg-dark text-white py-5 blog-bg" style="background: url('https://www.drgemhealthcare.com/wp-content/uploads/2025/02/Page_News.jpg') center/cover no-repeat ;">
  <div class="row justify-content-center text-left">
    <div class="col-lg-8 col-md-10">
      <!-- Small heading -->
      <h2 class="h5 text-light mb-2">Catch up on the latest news from neoCare.</h2>
      <!-- Main heading -->
      <h1 class="display-5 fw-bold">neoCare News</h1>
    </div>
  </div>
</div>
<section>
    <div class="container my-4">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    <!-- Post 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/09/image-20.png" class="card-img-top" alt="Post Image">
        <div class="card-body">
          <h5 class="card-title">Clinical Expertise Ensuring Superior X-ray Quality</h5>
          <p class="card-text"><small class="text-muted">September 22, 2025</small></p>
          <p class="card-text">At NeoCare, we understand that imaging quality lies at the heart of diagnostic excellence. To ensure our systems consistently deliver...</p>
              <a href="" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

    <!-- Post 2 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/09/Social_김천대시뮬레이터개발_1.jpg" class="card-img-top" alt="Post Image">
        <div class="card-body">
          <h5 class="card-title">NeoCare Initiates Development of South Korea’s First Non-Radiation X-Ray Education Simulator</h5>
          <p class="card-text"><small class="text-muted">September 18, 2025</small></p>
          <p class="card-text">Advancing Next-Generation Education Solutions in Collaboration with Gimcheon University NeoCare has launched the development of South Korea’s first non-radiation X-ray...</p>
            <a href="" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

    <!-- Post 3 -->
    <div class="col">
      <div class="card h-100">
        <img src="https://www.drgemhealthcare.com/wp-content/uploads/2025/09/Social_태국의료기기전시회_2025_4-2.jpg" class="card-img-top" alt="Post Image">
        <div class="card-body">
          <h5 class="card-title">NeoCare Shines at Medical Fair Thailand 2025</h5>
          <p class="card-text"><small class="text-muted">September 16, 2025</small></p>
          <p class="card-text">Bangkok, Thailand – NeoCare showcased its advanced diagnostic X-ray innovations at Medical Fair Thailand 2025, held at the Bangkok International...</p>
          <a href="" class="btn btn-primary">Read more</a>
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