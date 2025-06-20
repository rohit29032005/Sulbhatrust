<?php $page = 'event';include 'header.php';?>
    <!-- Events Navigation -->
    <section class="events-nav ">
        <div class="container ">
           <div class="nav-pills-container d-flex justify-content-center">
    <ul class="nav nav-pills" id="eventTabs">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#upcoming">
                <i class="fas fa-calendar-plus"></i>
                Upcoming Events
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#archive">
                <i class="fas fa-archive"></i>
                Past Events
            </button>
        </li>
    </ul>
</div>

        </div>
    </section>

    <!-- Events Content -->
    <section class="events-content">
        <div class="container">
            <div class="tab-content" id="eventTabsContent">
                <!-- Upcoming Events -->
                <div class="tab-pane fade show active" id="upcoming">
                    <div class="section-header text-center mb-5">
                        <h2 class="section-title">Upcoming Events</h2>
                        <p class="section-subtitle">Join us in our upcoming initiatives and be part of the change</p>
                    </div>
                    
                    <!-- Filter Options -->
                    <div class="filter-container mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-select filter-select" id="categoryFilter">
                                    <option value="">Fy Years</option>
                                    <option value="workshop">2024-25</option>
                                    <option value="fundraiser">2023-24</option>
                                    <option value="awareness">2022-23</option>
                                    <option value="community">2021-22</option>
                                </select>
                            </div>
                            <!-- <div class="col-md-6">
                                <input type="month" class="form-control filter-select" id="monthFilter">
                            </div> -->
                        </div>
                    </div>

                    <!-- Upcoming Events Grid -->
                    <div class="row g-4" id="upcomingEventsGrid">
                        <!-- Event Card 1 -->
                        <div class="col-lg-4 col-md-6 event-item" data-category="workshop">
                            <div class="event-card upcoming-card">
                                <div class="event-image">
                                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2022/11/sulabha180.jpg" alt="Digital Literacy Workshop">
                                    <!-- <div class="event-badge workshop">Workshop</div> -->
                                    <div class="event-date">
                                        <span class="day">25</span>
                                        <span class="month">JUN</span>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <h4>Digital Literacy Workshop</h4>
                                    <p>Empowering community members with essential digital skills for the modern world.</p>
                                    <div class="event-meta">
                                        <div class="meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>10:00 AM - 4:00 PM</span>
                                        </div>
                                        <div class="meta-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Community Center, Delhi</span>
                                        </div>
                                        <div class="meta-item">
                                            <i class="fas fa-users"></i>
                                            <span>50 participants</span>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                      <!-- <a href="view-detail.php" class="btn btn-primary">View</a> -->
                                      <a href="event-details.php?id=1" class="btn btn-danger">View</a> <!-- Digital Literacy -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 2 -->
                        <div class="col-lg-4 col-md-6 event-item" data-category="fundraiser">
                            <div class="event-card upcoming-card">
                                <div class="event-image">
                                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2022/09/VTC_(5).jpeg" alt="Charity Marathon">
                                    <!-- <div class="event-badge fundraiser">Fundraiser</div> -->
                                    <div class="event-date">
                                        <span class="day">02</span>
                                        <span class="month">JUL</span>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <h4>Craft Making</h4>
                                    <p>Run for a cause! Join our annual marathon to raise funds for education initiatives.</p>
                                    <div class="event-meta">
                                        <div class="meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>6:00 AM - 12:00 PM</span>
                                        </div>
                                        <div class="meta-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>India Gate, New Delhi</span>
                                        </div>
                                        <div class="meta-item">
                                            <i class="fas fa-user-md"></i>
                                            <span>₹5,00,000 Goal</span>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                        <!-- <button class="btn btn-primary">View</button> -->
                                        <a href="event-details.php?id=2" class="btn btn-danger">View</a> <!-- Charity Marathon -->
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 3 -->
                        <div class="col-lg-4 col-md-6 event-item" data-category="awareness">
                            <div class="event-card upcoming-card">
                                <div class="event-image">
                                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2023/04/Autism_7.jpeg" alt="Health Awareness Camp">
                                    <!-- <div class="event-badge awareness">Awareness</div> -->
                                    <div class="event-date">
                                        <span class="day">15</span>
                                        <span class="month">JUL</span>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <h4>Health Awareness Camp</h4>
                                    <p>Free health checkups and awareness sessions on preventive healthcare measures.</p>
                                    <div class="event-meta">
                                        <div class="meta-item">
                                            <i class="fas fa-clock"></i>
                                            <span>9:00 AM - 5:00 PM</span>
                                        </div>
                                        <div class="meta-item">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Rural Health Center</span>
                                        </div>
                                        <div class="meta-item">
                                            <i class="fas fa-user-md"></i>
                                            <span>Free Checkups</span>
                                        </div>
                                    </div>
                                    <div class="event-actions">
                                        <!-- <button class="btn btn-primary">View</button> -->
                                        <a href="event-details.php?id=3" class="btn btn-danger">View</a> <!-- Health Awareness Camp -->
                                        <!-- <button class="btn btn-outline-secondary">Learn More</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Archive Events -->
                <div class="tab-pane fade" id="archive">
                    <div class="section-header text-center mb-5">
                        <h2 class="section-title">Event Archive</h2>
                        <p class="section-subtitle">Explore our past events and their impact on communities</p>
                    </div>

                    <!-- Archive Filter -->
                    <div class="archive-filter mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-select filter-select" id="archiveYear">
                                    <option value="">All Years</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                            <!-- <div class="col-md-4">
                                <select class="form-select filter-select" id="archiveCategory">
                                    <option value="">All Categories</option>
                                    <option value="workshop">Workshops</option>
                                    <option value="fundraiser">Fundraisers</option>
                                    <option value="awareness">Awareness</option>
                                </select>
                            </div> -->
                            <div class="col-md-4">
                                <input type="text" class="form-control filter-select" placeholder="Search events..." id="archiveSearch">
                            </div>
                        </div>
                    </div>

                    <!-- Archive Timeline -->
                    <!-- Archive Events Grid (2 columns) -->
<div class="row g-4">
    <!-- Archive Event 1 -->
    <div class="col-md-6">
        <div class="timeline-card h-100">
            <div class="card-header">
                <h5>Women Empowerment Summit</h5>
                <!-- <span class="event-badge community">20 May</span> -->
            </div>
            <div class="card-body">
                <p>A successful summit that brought together 200+ women entrepreneurs and activists.</p>
                <div class="impact-stats">
                    <div class="stat">
                        <span class="number">200+</span>
                        <span class="label">Participants</span>
                    </div>
                    <div class="stat">
                        <span class="number">15</span>
                        <span class="label">Speakers</span>
                    </div>
                    <div class="stat">
                        <span class="number">50+</span>
                        <span class="label">New Connections</span>
                    </div>
                </div>
                <div class="event-gallery">
                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2023/04/Autism_4.jpeg" alt="Event Photo 1">
                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2022/11/sulabha178.jpg" alt="Event Photo 2">
                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2022/05/Ashok_Mody_(3).jpeg" alt="Event Photo 3">
                    <span class="more-photos">+12 more</span>
                </div>
            </div>
            <div class="card-footer">
                <a href="archieve-detail.php?id=1" class="btn btn-danger">View Details</a>
                <!-- <button class="btn btn-outline-secondary btn-sm">Download Report</button> -->
            </div>
        </div>
    </div>
    <!-- Archive Event 2 -->
    <div class="col-md-6">
        <div class="timeline-card h-100">
            <div class="card-header">
                <h5>Inclusive Craft Making Programme</h5>
                <!-- <span class="event-badge awareness">15 April</span> -->
            </div>
            <div class="card-body">
                <p>Community-wide cleanup initiative that removed 2 tons of waste from local areas in the village.</p>
                <div class="impact-stats">
                    <div class="stat">
                        <span class="number">300+</span>
                        <span class="label">Volunteers</span>
                    </div>
                    <div class="stat">
                        <span class="number">2T</span>
                        <span class="label">Waste Removed</span>
                    </div>
                    <div class="stat">
                        <span class="number">5</span>
                        <span class="label">Areas Cleaned</span>
                    </div>
                </div>
                <div class="event-gallery">
                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2023/04/Autism_4.jpeg" alt="Event Photo 1">
                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2022/11/sulabha178.jpg" alt="Event Photo 2">
                    <img src="https://sulabha.s3.ap-south-1.amazonaws.com/web/2022/05/Ashok_Mody_(3).jpeg" alt="Event Photo 3">
                    <span class="more-photos">+25 more</span>
                </div>
            </div>
            <div class="card-footer">
               <a href="archieve-detail.php?id=2" class="btn btn-danger">View Details</a>
                <!-- <button class="btn btn-outline-secondary btn-sm">Download Report</button> -->
            </div>
        </div>
    </div>
</div>
                            </div>
                        </div>

                        <!-- 2024 Events -->
                         <div class="timeline-year">
                            <!--<h3 class="year-title">2024</h3>
                            <div class="timeline-events">
                                <div class="timeline-item">
                                    <div class="timeline-date">
                                        <span class="month">DEC</span>
                                        <span class="day">10</span>
                                    </div> -->
                                    <!-- <div class="timeline-content">
                                        <div class="timeline-card">
                                            <div class="card-header">
                                                <h5>Annual Fundraising Gala</h5>
                                                <span class="event-badge fundraiser">10 Dec</span>
                                            </div>
                                            <div class="card-body">
                                                <p>Our biggest fundraising event of the year, raising significant funds for education.</p>
                                                <div class="impact-stats">
                                                    <div class="stat">
                                                        <span class="number">₹15L</span>
                                                        <span class="label">Funds Raised</span>
                                                    </div>
                                                    <div class="stat">
                                                        <span class="number">500+</span>
                                                        <span class="label">Attendees</span>
                                                    </div>
                                                    <div class="stat">
                                                        <span class="number">100+</span>
                                                        <span class="label">Students Benefited</span>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="event-gallery">
                                                    <img src="https://via.placeholder.com/100x80" alt="Gala Photo 1">
                                                    <img src="https://via.placeholder.com/100x80" alt="Gala Photo 2">
                                                    <img src="https://via.placeholder.com/100x80" alt="Gala Photo 3">
                                                    <span class="more-photos">+40 more</span>
                                                </div> -->
                                            </div>
                                            <!-- <div class="card-footer">
                                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                                <button class="btn btn-outline-secondary btn-sm">Download Report</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <!-- <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center">
                <h2>Ready to Make a Difference?</h2>
                <p>Join our upcoming events or volunteer to help organize future initiatives</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary btn-lg">View All Events</a>
                    <a href="#" class="btn btn-outline-light btn-lg">Become a Volunteer</a>
                </div>
            </div>
        </div>
    </section> -->
    <?php include 'footer.php'; ?>