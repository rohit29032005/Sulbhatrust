   // Notice Board Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const noticeItems = document.querySelectorAll('.notice-item');
    const searchInput = document.getElementById('noticeSearch');
    const viewToggleButtons = document.querySelectorAll('.view-toggle .btn');
    const noticesGrid = document.getElementById('noticesGrid');
    const loadMoreBtn = document.querySelector('.load-more-notices');

    // Filter notices by category
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');
            filterNotices(filterValue);
        });
    });
  // Enhanced Hero Section JavaScript - add to your existing notice-board.js

document.addEventListener('DOMContentLoaded', function() {
    // Animated counter for statistics
    function animateCounters() {
        const counters = document.querySelectorAll('[data-count]');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2000; // 2 seconds
            const step = target / (duration / 16); // 60fps
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    counter.textContent = target;
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current);
                }
            }, 16);
        });
    }

    // Intersection Observer for counter animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('.hero-stats-enhanced');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Update timestamp every minute
    function updateTimestamp() {
        const timestampElement = document.getElementById('lastUpdated');
        if (timestampElement) {
            const now = new Date();
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                timeZoneName: 'short'
            };
            timestampElement.textContent = now.toLocaleDateString('en-IN', options);
        }
    }

    // Update every minute
    setInterval(updateTimestamp, 60000);

    // Smooth scroll for "View Latest" button
    const viewLatestBtn = document.getElementById('viewLatestBtn');
    if (viewLatestBtn) {
        viewLatestBtn.addEventListener('click', function() {
            const noticesSection = document.querySelector('.notices-grid-section');
            if (noticesSection) {
                noticesSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }

    // Subscription modal functionality
    const subscribeModal = document.getElementById('subscribeModal');
    if (subscribeModal) {
        const subscribeButtons = subscribeModal.querySelectorAll('.btn-primary');
        
        subscribeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const value = input.value.trim();
                
                if (value) {
                    // Add loading state
                    const originalText = this.textContent;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Subscribing...';
                    this.disabled = true;
                    
                    // Simulate subscription process
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check me-2"></i>Subscribed!';
                        input.value = '';
                        
                        setTimeout(() => {
                            this.textContent = originalText;
                            this.disabled = false;
                            
                            // Close modal
                            const modal = bootstrap.Modal.getInstance(subscribeModal);
                            modal.hide();
                            
                            // Show success toast
                            showSuccessToast('Successfully subscribed to notifications!');
                        }, 2000);
                    }, 1500);
                }
            });
        });
    }

    // Preview notice interactions
    const previewNotices = document.querySelectorAll('.preview-notice');
    previewNotices.forEach(notice => {
        notice.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.zIndex = '10';
        });
        
        notice.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.zIndex = '';
        });
    });

    // Parallax effect for floating shapes
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const shapes = document.querySelectorAll('.floating-shape');
        
        shapes.forEach((shape, index) => {
            const speed = 0.5 + (index * 0.1);
            shape.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
});

// Success toast function
function showSuccessToast(message) {
    // Create toast element
    const toast = document.createElement('div');
    toast.className = 'toast-notification success';
    toast.innerHTML = `
        <div class="toast-content">
            <i class="fas fa-check-circle me-2"></i>
            ${message}
        </div>
    `;
    
    // Add toast styles
    toast.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--emerald);
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 9999;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        toast.style.transform = 'translateX(100%)';
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}


    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        searchNotices(searchTerm);
    });

    // View toggle functionality
    viewToggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            viewToggleButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const viewType = this.getAttribute('data-view');
            toggleView(viewType);
        });
    });

    // Sort functionality
    const sortDropdownItems = document.querySelectorAll('.dropdown-item[data-sort]');
    sortDropdownItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const sortType = this.getAttribute('data-sort');
            sortNotices(sortType);
        });
    });

    // Filter notices function
    function filterNotices(category) {
        noticeItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            
            if (category === 'all' || itemCategory === category) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                }, 10);
            } else {
                item.style.opacity = '0';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    }

    // Search notices function
    function searchNotices(searchTerm) {
        noticeItems.forEach(item => {
            const title = item.querySelector('.notice-title').textContent.toLowerCase();
            const excerpt = item.querySelector('.notice-excerpt').textContent.toLowerCase();
            const category = item.querySelector('.notice-category').textContent.toLowerCase();

            if (title.includes(searchTerm) || excerpt.includes(searchTerm) || category.includes(searchTerm)) {
                item.style.display = 'block';
                item.style.opacity = '1';
            } else {
                item.style.opacity = '0';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    }

    // Toggle view function
    function toggleView(viewType) {
        if (viewType === 'list') {
            noticesGrid.classList.add('list-view');
            noticesGrid.classList.remove('row');
            noticeItems.forEach(item => {
                item.classList.remove('col-lg-6', 'col-xl-4');
                item.classList.add('col-12');
            });
        } else {
            noticesGrid.classList.remove('list-view');
            noticesGrid.classList.add('row');
            noticeItems.forEach(item => {
                item.classList.add('col-lg-6', 'col-xl-4');
                item.classList.remove('col-12');
            });
        }
    }

    // Sort notices function
    function sortNotices(sortType) {
        const noticesArray = Array.from(noticeItems);
        
        noticesArray.sort((a, b) => {
            switch(sortType) {
                case 'date-desc':
                    return new Date(b.getAttribute('data-date')) - new Date(a.getAttribute('data-date'));
                case 'date-asc':
                    return new Date(a.getAttribute('data-date')) - new Date(b.getAttribute('data-date'));
                case 'priority':
                    const priorityOrder = { 'high': 3, 'medium': 2, 'low': 1 };
                    return priorityOrder[b.getAttribute('data-priority')] - priorityOrder[a.getAttribute('data-priority')];
                case 'title':
                    const titleA = a.querySelector('.notice-title').textContent;
                    const titleB = b.querySelector('.notice-title').textContent;
                    return titleA.localeCompare(titleB);
                default:
                    return 0;
            }
        });

        // Re-append sorted items
        noticesArray.forEach(item => {
            noticesGrid.appendChild(item);
        });
    }

    // Notice modal functionality
    const noticeModal = document.getElementById('noticeModal');
    const readFullNoticeButtons = document.querySelectorAll('[data-bs-target="#noticeModal"]');

    readFullNoticeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const noticeCard = this.closest('.notice-card');
            const title = noticeCard.querySelector('.notice-title').textContent;
            const excerpt = noticeCard.querySelector('.notice-excerpt').textContent;
            const category = noticeCard.querySelector('.notice-category').textContent;
            const date = noticeCard.querySelector('.notice-date-badge').textContent;

            // Populate modal content
            const modalTitle = noticeModal.querySelector('.modal-title');
            const modalBody = noticeModal.querySelector('.modal-body');

            modalTitle.textContent = title;
            modalBody.innerHTML = `
                <div class="notice-modal-header mb-3">
                    <span class="badge bg-primary me-2">${category}</span>
                    <small class="text-muted">${date}</small>
                </div>
                <div class="notice-modal-content">
                    <p>${excerpt}</p>
                    <p>This is the full content of the notice. In a real implementation, this would contain the complete notice details, attachments, and any relevant information for stakeholders.</p>
                    <h6>Important Points:</h6>
                    <ul>
                        <li>Action required by specified deadline</li>
                        <li>Contact information for queries</li>
                        <li>Reference documents and links</li>
                    </ul>
                </div>
            `;
        });
    });

    // Load more functionality
    let currentlyShown = 4;
    const totalNotices = noticeItems.length;

    // Initially hide notices beyond the first 4
    noticeItems.forEach((item, index) => {
        if (index >= currentlyShown) {
            item.style.display = 'none';
        }
    });

    loadMoreBtn.addEventListener('click', function() {
        const hiddenNotices = Array.from(noticeItems).slice(currentlyShown, currentlyShown + 4);
        
        hiddenNotices.forEach((item, index) => {
            setTimeout(() => {
                item.style.display = 'block';
                item.style.animation = 'fadeInUp 0.5s ease forwards';
            }, index * 100);
        });

        currentlyShown += 4;

        if (currentlyShown >= totalNotices) {
            this.style.display = 'none';
        }
    });

    // Auto-refresh for urgent notices (simulate real-time updates)
    setInterval(() => {
        const urgentNotices = document.querySelectorAll('.urgent-notice');
        urgentNotices.forEach(notice => {
            notice.style.animation = 'none';
            setTimeout(() => {
                notice.style.animation = 'urgentPulse 2s ease-in-out infinite';
            }, 10);
        });
    }, 30000); // Refresh every 30 seconds

    // Share functionality
    const shareButtons = document.querySelectorAll('.btn-outline-secondary');
    shareButtons.forEach(button => {
        if (button.textContent.includes('Share')) {
            button.addEventListener('click', function() {
                const noticeCard = this.closest('.notice-card');
                const title = noticeCard.querySelector('.notice-title').textContent;
                
                if (navigator.share) {
                    navigator.share({
                        title: title,
                        text: 'Check out this important notice',
                        url: window.location.href
                    });
                } else {
                    // Fallback: copy to clipboard
                    navigator.clipboard.writeText(window.location.href);
                    
                    // Show feedback
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check me-1"></i>Copied!';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                }
            });
        }
    });
});

// Add fade in animation CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);