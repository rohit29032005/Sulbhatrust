// Enhanced JavaScript
      document.addEventListener("DOMContentLoaded", function () {
        // Animated counter for statistics
        function animateCounters() {
          const counters = document.querySelectorAll("[data-count]");

          counters.forEach((counter) => {
            const target = parseInt(counter.getAttribute("data-count"));
            const duration = 2000;
            const step = target / (duration / 16);
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

        // Animate progress bars
        function animateProgressBars() {
          const progressBars = document.querySelectorAll(".progress-bar");

          progressBars.forEach((bar) => {
            const progress = bar.getAttribute("data-progress");
            setTimeout(() => {
              bar.style.width = progress + "%";
            }, 500);
          });
        }

        // Intersection Observer for animations
        const statsObserver = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              animateCounters();
              animateProgressBars();
              statsObserver.unobserve(entry.target);
            }
          });
        });

        const statsSection = document.querySelector(".hero-stats-enhanced");
        if (statsSection) {
          statsObserver.observe(statsSection);
        }

        // Smooth scroll for "View Reports" button
        const viewReportsBtn = document.getElementById("viewReportsBtn");
        if (viewReportsBtn) {
          viewReportsBtn.addEventListener("click", function () {
            const reportsSection = document.querySelector(
              ".reports-grid-section"
            );
            if (reportsSection) {
              reportsSection.scrollIntoView({
                behavior: "smooth",
                block: "start",
              });
            }
          });
        }

        // Report preview interactions
        const previewReports = document.querySelectorAll(".preview-report");
        previewReports.forEach((report, index) => {
          report.addEventListener("mouseenter", function () {
            this.style.transform = `translateY(-15px) scale(1.05) rotate(${
              index % 2 === 0 ? "2deg" : "-2deg"
            })`;
            this.style.zIndex = "10";
          });

          report.addEventListener("mouseleave", function () {
            this.style.transform = "";
            this.style.zIndex = "";
          });
        });

        // Download simulation for action buttons
        const downloadButtons = document.querySelectorAll(".btn-download");
        downloadButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const originalText = this.innerHTML;
            this.innerHTML =
              '<i class="fas fa-spinner fa-spin me-2"></i>Downloading...';
            this.disabled = true;

            setTimeout(() => {
              this.innerHTML = '<i class="fas fa-check me-2"></i>Downloaded!';

              setTimeout(() => {
                this.innerHTML = originalText;
                this.disabled = false;
              }, 2000);
            }, 1500);
          });
        });

        // Load more functionality
        const loadMoreBtn = document.getElementById("loadMoreReports");
        const hiddenReports = document.querySelectorAll(
          '.report-item[style*="display: none"]'
        );
        let currentlyShown = 6;

        if (hiddenReports.length === 0) {
          loadMoreBtn.style.display = "none";
        }

        loadMoreBtn.addEventListener("click", function () {
          const reportsToShow = Array.from(hiddenReports).slice(0, 3);

          reportsToShow.forEach((report, index) => {
            setTimeout(() => {
              report.style.display = "block";
              report.style.animation = "fadeInUp 0.5s ease forwards";
            }, index * 100);
          });

          currentlyShown += reportsToShow.length;

          if (
            currentlyShown >= document.querySelectorAll(".report-item").length
          ) {
            this.style.display = "none";
          }
        });

        // Auto-rotate featured reports
        let currentReport = 0;
        const reports = document.querySelectorAll(".preview-report");

        setInterval(() => {
          reports.forEach((report) => (report.style.zIndex = "1"));

          currentReport = (currentReport + 1) % reports.length;
          reports[currentReport].style.zIndex = "10";
          reports[currentReport].style.transform =
            "translateY(-20px) scale(1.05)";

          setTimeout(() => {
            reports[currentReport].style.transform = "";
          }, 2000);
        }, 5000);
      });

      // Add fade in animation CSS
      const style = document.createElement("style");
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