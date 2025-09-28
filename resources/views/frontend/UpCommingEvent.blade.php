<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upcoming Events</title>
</head>
<body>
  @include('components.header')
    <main>
        <section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- Text Content -->
      <div class="col-12 col-lg-6">
        <h2 class="fw-bold mb-3">Upcoming Events</h2>
        <h4 class="fw-normal">
          Join us at major international events to explore our latest innovations in digital radiography.
        </h4>
      </div>

      <!-- Image Content -->
      <div class="col-12 col-lg-6 text-center">
        <img 
          src="https://www.drgemhealthcare.com/wp-content/uploads/2025/05/Page_Upcoming_1.png" 
          class="img-fluid rounded shadow-sm" 
          alt="Upcoming Events">
      </div>
    </div>
  </div>
</section>
 <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4 align-items-center">
        <!-- Text Content -->
        <div class="col-12  text-center my-4">
          <h2 class="fw-bold mb-3">Upcoming Events &amp; Key Dates</h2>
          <p class="lead mb-0">
            Stay updated with our latest Trade Shows. Discover opportunities to connect, learn, and grow with us.
          </p>
        </div>

        <!-- Calendar Content -->
        <div class="col-12  calendar-wrapper">
          <iframe 
            src="https://calendar.google.com/calendar/embed?src=1bc7140124fc097c2ff0b2a358501d171bc953db8e9279d8bd44f3c4092ecab0%40group.calendar.google.com&amp;ctz=Asia%2FSeoul" 
            frameborder="0" 
            scrolling="no"
            allowfullscreen>
          </iframe>
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