<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Dashboard</title>
   <link rel="icon" type="image/png" href="img/Neo Care X-Ray-6_page-0002.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
      padding: 20px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      margin: 10px 0;
      cursor: pointer;
    }
    .sidebar a:hover {
      text-decoration: underline;
    }
    .product-card {
      border: 1px solid #dee2e6;
      border-radius: .5rem;
      overflow: hidden;
      box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
    }
    .product-card img {
      height: 150px;
      object-fit: cover;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <h3>Dashboard</h3>
        <a id="uploadLink">Upload Product</a>
        <a id="manageLink">Manage Products</a>
        <a href="#">Logout</a>
      </div>

      <!-- Main Content -->
      <div class="col-md-10" id="mainContent">
        <!-- Default Content (Manage Products) -->
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <div class="mb-3">
              <label class="form-label">Heading</label>
              <input type="text" class="form-control" id="editHeading">
            </div>
            <div class="mb-3">
              <label class="form-label">Content</label>
              <textarea class="form-control" id="editContent" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Product Image</label>
              <input class="form-control" type="file" id="editImage">
              <img id="editPreview" class="mt-2" src="" alt="" style="width:100px;height:80px;object-fit:cover;">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script>
    // Elements
    const mainContent = document.getElementById('mainContent');
    const uploadLink = document.getElementById('uploadLink');
    const manageLink = document.getElementById('manageLink');

    // Upload Content HTML
    const uploadContent = `
      <div class="dashboard-header d-flex justify-content-between align-items-center mt-3">
        <h2>Upload Product</h2>
      </div>
      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="mb-3">
          <label class="form-label">Heading</label>
          <input type="text" name='heading' class="form-control" id="productHeading">
        </div>
        <div class="mb-3">
          <label class="form-label">Content</label>
          <textarea class="form-control" name='content' id="productContent" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Product Image</label>
          <input class="form-control" type="file" name='image' id="productImage">
        </div>
        <button type="button" class="btn btn-primary">Upload</button>
      </form>
    `;

    // Manage Content HTML (Cards)
    const manageContent = `
      <div class="dashboard-header d-flex justify-content-between align-items-center mt-3">
        <h2>Manage Products</h2>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="product-card">
            <img src="https://via.placeholder.com/300x150" alt="Product 1">
            <div class="p-3">
              <h5>Product 1</h5>
              <p class="mb-2">High quality product</p>
              <button 
                class="btn btn-sm btn-warning edit-btn" 
                data-bs-toggle="modal" data-bs-target="#editModal"
                data-heading="Product 1"
                data-content="High quality product"
                data-img="https://via.placeholder.com/300x150"
              >Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-card">
            <img src="https://via.placeholder.com/300x150" alt="Product 2">
            <div class="p-3">
              <h5>Product 2</h5>
              <p class="mb-2">Another product</p>
              <button 
                class="btn btn-sm btn-warning edit-btn"
                data-bs-toggle="modal" data-bs-target="#editModal"
                data-heading="Product 2"
                data-content="Another product"
                data-img="https://via.placeholder.com/300x150"
              >Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
    `;

    // Default show Manage Products
    mainContent.innerHTML = manageContent;

    // Event Listeners for switching content
    uploadLink.addEventListener('click', () => {
      mainContent.innerHTML = uploadContent;
    });

    manageLink.addEventListener('click', () => {
      mainContent.innerHTML = manageContent;
      attachEditListeners(); // reattach edit button events
    });

    // Function to attach edit button event
    function attachEditListeners() {
      document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', e => {
          const heading = btn.getAttribute('data-heading');
          const content = btn.getAttribute('data-content');
          const img = btn.getAttribute('data-img');

          document.getElementById('editHeading').value = heading;
          document.getElementById('editContent').value = content;
          document.getElementById('editPreview').src = img;
        });
      });
    }

    // initial attach for default content
    attachEditListeners();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
