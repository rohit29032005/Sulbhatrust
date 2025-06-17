// Events Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Initialize event filtering
    initializeFiltering();
    
    // Initialize tab functionality
    initializeTabs();
    
    // Initialize animations
    initializeAnimations();
    
    // Initialize search functionality
    initializeSearch();
});

// Event Filtering Functionality
function initializeFiltering() {
    const categoryFilter = document.getElementById('categoryFilter');
    const monthFilter = document.getElementById('monthFilter');
    const archiveYear = document.getElementById('archiveYear');
    const archiveCategory = document.getElementById('archiveCategory');
    
    if (categoryFilter) {
        categoryFilter.addEventListener('change', filterUpcomingEvents);
    }
    
    if (monthFilter) {
        monthFilter.addEventListener('change', filterUpcomingEvents);
    }
    
    if (archiveYear) {
        archiveYear.addEventListener('change', filterArchiveEvents);
    }
    
    if (archiveCategory) {
        archiveCategory.addEventListener('change', filterArchiveEvents);
    }
}

function filterUpcomingEvents() {
    const categoryFilter = document.getElementById('categoryFilter').value;
    const monthFilter = document.getElementById('monthFilter').value;
    const eventItems = document.querySelectorAll('#upcomingEventsGrid .event-item');
    
    eventItems.forEach(item => {
        const category = item.dataset.category;
        let showItem = true;
        
        // Filter by category
        if (categoryFilter && category !== categoryFilter) {
            showItem = false;
        }
        
        // Filter by month (you can implement date logic here)
        if (monthFilter) {
            // Add your month filtering logic here
        }
        
        // Show/hide item with animation
        if (showItem) {
            item.style.display = 'block';
            item.classList.add('fade-in');
        } else {
            item.style.display = 'none';
            item.classList.remove('fade-in');
        }
    });
}

function filterArchiveEvents() {
    const yearFilter = document.getElementById('archiveYear').value;
    const categoryFilter = document.getElementById('archiveCategory').value;
    const timelineYears = document.querySelectorAll('.timeline-year');
    
    timelineYears.forEach(yearSection => {
        const year = yearSection.querySelector('.year-title').textContent;
        let showYear = true;
        
        if (yearFilter && year !== yearFilter) {
            showYear = false;
        }
        
        if (showYear) {
            yearSection.style.display = 'block';
            yearSection.classList.add('fade-in');
        } else {
            yearSection.style.display = 'none';
            yearSection.classList.remove('fade-in');
        }
    });
}

// Tab Functionality
function initializeTabs() {
    const tabButtons = document.querySelectorAll('[data-bs-toggle="pill"]');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add active class animation
            setTimeout(() => {
                const activeTab = document.querySelector('.tab-pane.active');
                if (activeTab) {
                    activeTab.classList.add('fade-in');
                }
            }, 150);
        });
    });
}

// Animation Initialization
function initializeAnimations() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);
    
    // Observe all event cards and timeline items
    const animatedElements = document.querySelectorAll('.event-card, .timeline-item, .impact-stats');
    animatedElements.forEach(el => observer.observe(el));
}

// Search Functionality
function initializeSearch() {
    const searchInput = document.getElementById('archiveSearch');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const timelineCards = document.querySelectorAll('.timeline-card');
            
            timelineCards.forEach(card => {
                const title = card.querySelector('h5').textContent.toLowerCase();
                const description = card.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.closest('.timeline-item').style.display = 'flex';
                } else {
                    card.closest('.timeline-item').style.display = 'none';
                }
            });
        });
    }
}

// Event Registration Modal (you can expand this)
function openRegistrationModal(eventTitle) {
    // Implementation for event registration modal
    alert(`Registration for "${eventTitle}" - This would open a registration modal`);
}

// Event Details Modal
function openEventDetails(eventId) {
    // Implementation for event details modal
    alert(`Event Details for ID: ${eventId} - This would open a details modal`);
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Back to top functionality
window.addEventListener('scroll', function() {
    const backToTop = document.querySelector('.back-to-top');
    if (backToTop) {
        if (window.scrollY > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    }
});
