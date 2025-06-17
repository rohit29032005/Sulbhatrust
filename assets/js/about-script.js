   // About Page Scripts

document.addEventListener("DOMContentLoaded", () => {
  // Smooth scrolling for navigation links
  document.querySelectorAll(".about-nav-item").forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()

      const targetId = this.getAttribute("href")
      const targetElement = document.querySelector(targetId)

      if (targetElement) {
        // Get the height of the sticky navigation
        const navHeight = document.querySelector(".about-nav-section").offsetHeight

        // Calculate the position to scroll to
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navHeight

        // Smooth scroll to the target
        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        })

        // Update active state in navigation
        document.querySelectorAll(".about-nav-item").forEach((item) => {
          item.classList.remove("active")
        })
        this.classList.add("active")
      }
    })
  })

  // Update active navigation item on scroll
  window.addEventListener("scroll", () => {
    const scrollPosition = window.scrollY
    const navHeight = document.querySelector(".about-nav-section").offsetHeight

    // Get all sections
    const sections = document.querySelectorAll("section[id]")

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - navHeight - 100
      const sectionHeight = section.offsetHeight
      const sectionId = section.getAttribute("id")

      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        document.querySelectorAll(".about-nav-item").forEach((item) => {
          item.classList.remove("active")
          if (item.getAttribute("href") === `#${sectionId}`) {
            item.classList.add("active")
          }
        })
      }
    })
  })

  // Team filtering
  const teamFilters = document.querySelectorAll(".team-filter")
  const teamMembers = document.querySelectorAll(".team-member")

  teamFilters.forEach((filter) => {
    filter.addEventListener("click", () => {
      // Update active filter
      teamFilters.forEach((f) => f.classList.remove("active"))
      filter.classList.add("active")

      const category = filter.getAttribute("data-filter")

      // Filter team members
      teamMembers.forEach((member) => {
        if (category === "all" || member.getAttribute("data-category") === category) {
          member.style.display = "block"
        } else {
          member.style.display = "none"
        }
      })
    })
  })

  // Animation for stats on scroll
  const statElements = document.querySelectorAll(".stat-number")

  const animateStats = () => {
    statElements.forEach((stat) => {
      const value = Number.parseInt(stat.textContent)
      let startValue = 0
      const duration = 2000
      const increment = Math.ceil(value / (duration / 20))

      const counter = setInterval(() => {
        startValue += increment

        if (startValue > value) {
          stat.textContent = value + (stat.textContent.includes("+") ? "+" : "")
          clearInterval(counter)
        } else {
          stat.textContent = startValue + (stat.textContent.includes("+") ? "+" : "")
        }
      }, 20)
    })
  }

  // Use Intersection Observer to trigger animation when stats are in view
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateStats()
          observer.unobserve(entry.target)
        }
      })
    },
    { threshold: 0.5 },
  )

  const impactSummaryCard = document.querySelector(".impact-summary-card")
  if (impactSummaryCard) {
    observer.observe(impactSummaryCard)
  }
})