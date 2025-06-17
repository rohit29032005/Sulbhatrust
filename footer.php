<!-- Footer Section -->
<footer class="main-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">
                        <div class="footer-logo mb-4">
                            <h3 class="text-white fw-bold"><img src="assets/images/logo.png"></h3>
                            <p class="text-white opacity-75 small">Building Tomorrow Together</p>
                        </div>
                        <p class="footer-description">
                            Committed to transparency, innovation, and sustainable growth. Our annual reports showcase our journey towards excellence and community impact.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul class="footer-links">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#annual-reports">Annual Reports</a></li>
                            <li><a href="#news">News & Updates</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Resources -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h5 class="footer-title">Resources</h5>
                        <ul class="footer-links">
                            <li><a href="#financial-reports">Financial Reports</a></li>
                            <li><a href="#governance">Governance</a></li>
                            <li><a href="#policies">Policies</a></li>
                            <li><a href="#sustainability">Sustainability</a></li>
                            <li><a href="#investor-relations">Investor Relations</a></li>
                            <li><a href="#media-kit">Media Kit</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">
                        <h5 class="footer-title">Get In Touch</h5>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <p>123 Business Avenue<br>Corporate District, City 12345</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <p>+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <p>info@yourorganization.com</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Newsletter Signup -->
                        <!-- <div class="footer-newsletter mt-4">
                            <h6 class="text-white mb-3">Stay Updated</h6>
                            <div class="newsletter-input-group">
                                <input type="email" class="form-control" placeholder="Your email address">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="footer-copyright">
                        <p>&copy;2025 Sulabha Trust For Special Education. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-legal">
                        <a href="#privacy">Desgined & Developed By Solution Cone</a>
                        <!-- <a href="#terms">By</a>
                        <a href="#cookies">Solution Cone</a> -->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>
</footer>

<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<?php if (isset($page) && $page == 'about'): ?>
    <script src="assets/js/about-script.js"></script>
<?php endif; ?>
<?php if (isset($page) && $page == 'report'): ?>
    <script src="assets/js/report-script.js"></script>
<?php endif; ?>
<?php if (isset($page) && $page == 'notice'): ?>
    <script src="assets/js/notice.js"></script>
<?php endif; ?>
<?php if (isset($page) && $page == 'contact'): ?>
    <script src="assets/js/contact.js"></script>
<?php endif; ?>
<?php if (isset($page) && $page == 'event'): ?>
    <script src="assets/js/contact.js"></script>
<?php endif; ?>
</body>
</html>
