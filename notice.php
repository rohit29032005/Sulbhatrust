<?php $page = 'notice';include 'header.php';?>
<div class="modal fade" id="subscribeModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <i class="fas fa-bell text-primary me-2"></i>
                    Get Instant Notifications
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-4">Stay updated with the latest notices and announcements. Choose your preferred notification method:</p>
                
                <div class="notification-options">
                    <div class="option-card">
                        <div class="option-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="option-content">
                            <h6>Email Notifications</h6>
                            <p>Receive notices directly in your inbox</p>
                            <div class="input-group mt-2">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <button class="btn btn-primary">Subscribe</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="option-card">
                        <div class="option-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="option-content">
                            <h6>SMS Alerts</h6>
                            <p>Get urgent notices via text message</p>
                            <div class="input-group mt-2">
                                <input type="tel" class="form-control" placeholder="Enter your phone number">
                                <button class="btn btn-primary">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Filter and Search Section -->
    <section class="notice-filter-section py-4 bg-white sticky-top shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="filter-controls d-flex flex-wrap gap-2">
                        <button class="filter-btn active" data-filter="all">
                            <i class="fas fa-list me-2"></i>All Notices
                        </button>
                        <button class="filter-btn" data-filter="urgent">
                            <i class="fas fa-exclamation-triangle me-2"></i>Urgent
                        </button>
                        <button class="filter-btn" data-filter="general">
                            <i class="fas fa-info-circle me-2"></i>General
                        </button>
                        <button class="filter-btn" data-filter="events">
                            <i class="fas fa-calendar me-2"></i>Events
                        </button>
                        <button class="filter-btn" data-filter="policy">
                            <i class="fas fa-gavel me-2"></i>Policy Updates
                        </button>
                        <a href="index.html" class="filter-btn">
                         <i class="fas fa-gavel me-2"></i>Home</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="search-controls d-flex gap-2">
                        <div class="search-box flex-grow-1">
                            <input type="text" class="form-control" placeholder="Search notices..." id="noticeSearch">
                            <i class="fas fa-search search-icon"></i>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-sort me-2"></i>Sort
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-sort="date-desc">Newest First</a></li>
                                <li><a class="dropdown-item" href="#" data-sort="date-asc">Oldest First</a></li>
                                <li><a class="dropdown-item" href="#" data-sort="priority">By Priority</a></li>
                                <li><a class="dropdown-item" href="#" data-sort="title">By Title</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured/Urgent Notices -->
    <section class="featured-notices-section py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title mb-4">
                        <i class="fas fa-star text-warning me-2"></i>
                        Featured & Urgent Notices
                    </h3>
                    <div class="featured-notices-slider">
                        <div class="featured-notice urgent">
                            <div class="notice-priority">
                                <i class="fas fa-exclamation-triangle"></i>
                                URGENT
                            </div>
                            <div class="notice-content">
                                <h5>System Maintenance Schedule - June 15, 2025</h5>
                                <p>Planned system maintenance will occur from 2:00 AM to 6:00 AM IST. Services may be temporarily unavailable.</p>
                                <span class="notice-date">
                                    <i class="fas fa-clock me-1"></i>
                                    Posted: June 13, 2025
                                </span>
                            </div>
                            <div class="notice-actions">
                                <button class="btn btn-sm btn-light">
                                    <i class="fas fa-eye me-1"></i>View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Notices Grid -->
    <section class="notices-grid-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="section-title mb-0">All Notices & Announcements</h3>
                        <div class="view-toggle">
                            <button class="btn btn-sm btn-outline-secondary active" data-view="grid">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-secondary" data-view="list">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="noticesGrid">
                <!-- Notice Card 1 -->
                <div class="col-lg-6 col-xl-4 notice-item" data-category="urgent" data-date="2025-06-13" data-priority="high">
                    <div class="notice-card urgent-notice h-100">
                        <div class="notice-header">
                            <div class="notice-meta">
                                <span class="notice-category urgent">
                                    <i class="fas fa-exclamation-triangle me-1"></i>
                                    Urgent
                                </span>
                                <span class="notice-date-badge" style="background-color: yellow;">June 13, 2025</span> 
                            </div>
                            <div class="notice-id">#NOT-2025-045</div>
                        </div>
                        <div class="notice-body">
                            <h4 class="notice-title">Emergency Contact Information Update</h4>
                            <p class="notice-excerpt">
                                All employees must update their emergency contact information in the HR portal by June 20, 2025. This is mandatory for safety compliance.
                            </p>
                            <div class="notice-details">
                                <div class="detail-item">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span>Deadline: June 20, 2025</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-users me-2"></i>
                                    <span>Target: All Employees</span>
                                </div>
                            </div>
                        </div>
                        <div class="notice-footer">
                            <div class="notice-actions">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#noticeModal">
                                    <i class="fas fa-eye me-1"></i>
                                    Read Full Notice
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-share me-1"></i>
                                    Share
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notice Card 2 -->
                <div class="col-lg-6 col-xl-4 notice-item" data-category="events" data-date="2025-06-12" data-priority="medium">
                    <div class="notice-card event-notice h-100">
                        <div class="notice-header">
                            <div class="notice-meta">
                                <span class="notice-category events">
                                    <i class="fas fa-calendar me-1"></i>
                                    Event
                                </span>
                                <span class="notice-date-badge">June 12, 2025</span>
                            </div>
                            <div class="notice-id">#NOT-2025-044</div>
                        </div>
                        <div class="notice-body">
                            <h4 class="notice-title">Annual General Meeting 2025</h4>
                            <p class="notice-excerpt">
                                Join us for the Annual General Meeting on July 15, 2025, at 10:00 AM in the Main Conference Hall. Registration is now open.
                            </p>
                            <div class="notice-details">
                                <div class="detail-item">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    <span>Main Conference Hall</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-clock me-2"></i>
                                    <span>July 15, 2025 - 10:00 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="notice-footer">
                            <div class="notice-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-calendar-plus me-1"></i>
                                    Register Now
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-download me-1"></i>
                                    Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notice Card 3 -->
                <div class="col-lg-6 col-xl-4 notice-item" data-category="policy" data-date="2025-06-11" data-priority="medium">
                    <div class="notice-card policy-notice h-100">
                        <div class="notice-header">
                            <div class="notice-meta">
                                <span class="notice-category policy">
                                    <i class="fas fa-gavel me-1"></i>
                                    Policy
                                </span>
                                <span class="notice-date-badge">June 11, 2025</span>
                            </div>
                            <div class="notice-id">#NOT-2025-043</div>
                        </div>
                        <div class="notice-body">
                            <h4 class="notice-title">Updated Remote Work Policy</h4>
                            <p class="notice-excerpt">
                                New remote work guidelines effective July 1, 2025. Please review the updated policy document and complete the acknowledgment form.
                            </p>
                            <div class="notice-details">
                                <div class="detail-item">
                                    <i class="fas fa-file-alt me-2"></i>
                                    <span>Policy Document v2.1</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-calendar-check me-2"></i>
                                    <span>Effective: July 1, 2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="notice-footer">
                            <div class="notice-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-file-pdf me-1"></i>
                                    View Policy
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-check me-1"></i>
                                    Acknowledge
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notice Card 4 -->
                <div class="col-lg-6 col-xl-4 notice-item" data-category="general" data-date="2025-06-10" data-priority="low">
                    <div class="notice-card general-notice h-100">
                        <div class="notice-header">
                            <div class="notice-meta">
                                <span class="notice-category general">
                                    <i class="fas fa-info-circle me-1"></i>
                                    General
                                </span>
                                <span class="notice-date-badge">June 10, 2025</span>
                            </div>
                            <div class="notice-id">#NOT-2025-042</div>
                        </div>
                        <div class="notice-body">
                            <h4 class="notice-title">Cafeteria Menu Update</h4>
                            <p class="notice-excerpt">
                                New healthy meal options have been added to the cafeteria menu. Check out the updated menu with nutritional information.
                            </p>
                            <div class="notice-details">
                                <div class="detail-item">
                                    <i class="fas fa-utensils me-2"></i>
                                    <span>15 New Items Added</span>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-leaf me-2"></i>
                                    <span>Healthy Options Available</span>
                                </div>
                            </div>
                        </div>
                        <div class="notice-footer">
                            <div class="notice-actions">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i>
                                    View Menu
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-heart me-1"></i>
                                    Feedback
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-primary btn-lg load-more-notices">
                        <i class="fas fa-plus me-2"></i>
                        Load More Notices
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Notice Modal -->
    <div class="modal fade" id="noticeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Notice Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Notice content will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-download me-2"></i>Download PDF
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>