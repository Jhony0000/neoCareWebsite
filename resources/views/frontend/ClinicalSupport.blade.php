<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clinical support</title>
</head>
<style>
   
</style>
<body>
    @include('components.header')
    <main>
        <section>
            <div class="container my-5">
  <!-- Section Title -->
  <div class="row mb-4">
    <div class="col">
      <h3 class="text-center">Clinical Support</h3>
    </div>
  </div>

  <!-- Search and Filter -->
  <form class="row g-3 mb-4 align-items-end">
    <div class="col-md-4">
      <label for="productSelect" class="form-label">Product</label>
      <select id="productSelect" class="form-select">
        <option value="">All</option>
        <option value="Stationary Systems">Stationary Systems</option>
        <option value="SC1-4H">Mobile Systems</option>
        <option value="X-CUBE 90 with Elite">AcquiDR</option>
        <option value="X-CUBE 70 with Elite">RADMAX</option>
      
       
      </select>
    </div>
    <div class="col-md-6">
      <label for="searchKeyword" class="form-label">Search</label>
      <input type="text" class="form-control" id="searchKeyword" placeholder="Please enter a search term.">
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100"><i class="bi bi-search"></i> Search</button>
    </div>
  </form>

  <!-- Support Items -->
  <div class="row g-4">
    <!-- Repeat for each support item -->
    <div class="col-md-6 col-lg-4">
      <div class="card h-100">
        <img src="http://img.youtube.com/vi/D-wbqna2PDA/hqdefault.jpg" class="card-img-top" alt="X-CUBE i9">
        <div class="card-body">
          <span class="badge bg-secondary mb-2">V1.0</span>
          <h5 class="card-title">X-CUBE i9 Getting started</h5>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <a href="/en/support/support_video_popup.do?supportUrl=D-wbqna2PDA&amp;productName=" class="btn btn-outline-primary btn-sm"><i class="bi bi-camera-video"></i> Video</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card h-100">
        <img src="http://img.youtube.com/vi/VXzCAF6brVM/hqdefault.jpg" class="card-img-top" alt="X-CUBE 90">
        <div class="card-body">
          <span class="badge bg-secondary mb-2">V1.0</span>
          <h5 class="card-title">X-CUBE 90 Getting started</h5>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <a href="/en/support/support_video_popup.do?supportUrl=VXzCAF6brVM&amp;productName=" class="btn btn-outline-primary btn-sm"><i class="bi bi-camera-video"></i> Video</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card h-100">
        <img src="/uploadImage/clinical.support/202011/1606295536000000011.png" class="card-img-top" alt="Lung ultrasound protocol">
        <div class="card-body">
          <span class="badge bg-secondary mb-2">COVID-19</span>
          <h5 class="card-title">Lung ultrasound protocol for COVID-19 Pneumonia</h5>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <a href="javascript:void(0)" class="btn btn-outline-secondary btn-sm"><i class="bi bi-file-earmark-text"></i> PDF</a>
        </div>
      </div>
    </div>

    <!-- Add more items similarly -->
  </div>

  <!-- Pagination -->
  <nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1"><i class="bi bi-chevron-double-left"></i></a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item">
        <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#"><i class="bi bi-chevron-double-right"></i></a>
      </li>
    </ul>
  </nav>
</div>

        </section>
    </main>
    @include('components.footer')
</body>
</html>