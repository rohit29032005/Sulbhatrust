<?php $page = 'contact';include 'header.php';?>
<!-- Contact Section -->
<section class="contact-section py-5">
  <div class="container">
    <div class="row align-items-start">
      <!-- Left: Contact Info -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="mb-2 text-danger fw-bold small">CONTACT US</div>
        <h2 class="fw-bold mb-3">Get In Touch</h2>
        <p class="text-muted mb-4">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea lorem ipsum dolor sit amet, consetetur sadipscing elitr.
        </p>
        <div class="row g-4">
          <div class="col-12 col-md-4 text-center">
            <div class="icon-circle mb-2">
              <i class="fas fa-home fa-2x"></i>
            </div>
            <h6 class="fw-bold mb-1">Address</h6>
            <div class="small text-muted">Po.Box no 32531, Mosque Road, Makeni.</div>
          </div>
          <div class="col-12 col-md-4 text-center">
            <div class="icon-circle mb-2">
              <i class="fas fa-phone fa-2x"></i>
            </div>
            <h6 class="fw-bold mb-1">Our Phone</h6>
            <div class="small text-muted">
              <span class="fw-bold">Call:</span> +260 979 680131<br>
              <span class="fw-bold">Call:</span> +260 962 974898
            </div>
          </div>
          <div class="col-12 col-md-4 text-center">
            <div class="icon-circle mb-2 ">
              <i class="fas fa-paper-plane fa-2x"></i>
            </div>
            <h6 class="fw-bold mb-1">Email Address</h6>
            <div class="small text-muted">mist.zambia@yahoo.com</div>
          </div>
        </div>
      </div>
      <!-- Right: Contact Form -->
      <div class="col-lg-6">
        <div class="mb-2 text-danger fw-bold small">SEND MESSAGE</div>
        <h2 class="fw-bold mb-3">Reach Out With Your Message</h2>
        <p class="text-muted mb-4">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
        </p>
        <form id="contactForm" novalidate>
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Mobile no." required>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-12">
              <textarea class="form-control" rows="4" placeholder="Message..." required></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
            Send Message
            <span class="ms-2"><i class="fas fa-paper-plane"></i></span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<div class="map-container">
  <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=28.266%2C-15.416%2C28.317%2C-15.383&amp;layer=mapnik" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<?php include 'footer.php'; ?>