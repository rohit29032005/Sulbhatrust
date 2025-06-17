//   Counter Animation for Impact Numbers
function animateCounters() {
 const counters = document.querySelectorAll(".impact-number")

  counters.forEach((counter) => {
   const target = Number.parseInt(counter.getAttribute("data-target"))
   const increment = target / 100
    let current = 0

     const updateCounter = () => {
       if (current < target) {
        current += increment
      counter.textContent = Math.floor(current) + "+"
       setTimeout(updateCounter, 20)
      } else {
         counter.textContent = target + "+";
    }
     }

    updateCounter()
   })
}

// Intersection Observer for Counter Animation
const observerOptions = {
  threshold: 0.5,
  rootMargin: "0px 0px -100px 0px",
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      animateCounters()
      observer.unobserve(entry.target)
    }
  })
}, observerOptions)

// Start observing when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  const impactSection = document.querySelector(".impact-section")
  if (impactSection) {
    observer.observe(impactSection)
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })
})
// Enhanced Banner Scripts

// Initialize AOS (Animate On Scroll)
document.addEventListener("DOMContentLoaded", () => {
  // Load AOS library
  const aosScript = document.createElement("script")
  aosScript.src = "https://unpkg.com/aos@2.3.1/dist/aos.js"
  aosScript.onload = () => {
    window.AOS.init({
      duration: 1000,
      once: true,
      offset: 100,
    })
  }
  document.head.appendChild(aosScript)

  // Load AOS CSS
  const aosCSS = document.createElement("link")
  aosCSS.rel = "stylesheet"
  aosCSS.href = "https://unpkg.com/aos@2.3.1/dist/aos.css"
  document.head.appendChild(aosCSS)
})

// Enhanced Carousel Controls
document.addEventListener("DOMContentLoaded", () => {
  const carousel = document.querySelector("#heroCarousel")
  if (carousel) {
    // Pause on hover
    carousel.addEventListener("mouseenter", () => {
      window.bootstrap.Carousel.getInstance(carousel).pause()
    })

    // Resume on mouse leave
    carousel.addEventListener("mouseleave", () => {
      window.bootstrap.Carousel.getInstance(carousel).cycle()
    })

    // Add keyboard navigation
    document.addEventListener("keydown", (e) => {
      const carouselInstance = window.bootstrap.Carousel.getInstance(carousel)
      if (e.key === "ArrowLeft") {
        carouselInstance.prev()
      } else if (e.key === "ArrowRight") {
        carouselInstance.next()
      }
    })
  }
})

// Parallax Effect for Floating Shapes
window.addEventListener("scroll", () => {
  const scrolled = window.pageYOffset
  const shapes = document.querySelectorAll(".shape")

  shapes.forEach((shape, index) => {
    const speed = 0.5 + index * 0.1
    const yPos = -(scrolled * speed)
    shape.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`
  })
})

// Dynamic Progress Ring Animation
function animateProgressRing() {
  const progressCircle = document.querySelector(".progress-circle")
  if (progressCircle) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          progressCircle.style.animation = "progress-animation 2s ease-in-out forwards"
        }
      })
    })

    observer.observe(progressCircle)
  }
}

// Initialize progress ring animation
document.addEventListener("DOMContentLoaded", animateProgressRing)

// Smooth scroll for scroll indicator
document.querySelector(".scroll-indicator")?.addEventListener("click", () => {
  const nextSection = document.querySelector(".impact-section")
  if (nextSection) {
    nextSection.scrollIntoView({ behavior: "smooth" })
  }
})

// Add touch swipe support for mobile
let startX = 0
let endX = 0

document.addEventListener("touchstart", (e) => {
  startX = e.changedTouches[0].screenX
})

document.addEventListener("touchend", (e) => {
  endX = e.changedTouches[0].screenX
  handleSwipe()
})

function handleSwipe() {
  const carousel = document.querySelector("#heroCarousel")
  if (!carousel) return

  const carouselInstance = window.bootstrap.Carousel.getInstance(carousel)
  const threshold = 50

  if (endX < startX - threshold) {
    // Swipe left - next slide
    carouselInstance.next()
  } else if (endX > startX + threshold) {
    // Swipe right - previous slide
    carouselInstance.prev()
  }
}

// Enhanced particle animation
function createParticle() {
  const particle = document.createElement("div")
  particle.className = "particle"
  particle.style.left = Math.random() * 100 + "%"
  particle.style.width = particle.style.height = Math.random() * 5 + 3 + "px"
  particle.style.animationDuration = Math.random() * 10 + 15 + "s"
  particle.style.animationDelay = Math.random() * 5 + "s"

  document.querySelector(".particles-container").appendChild(particle)

  // Remove particle after animation
  setTimeout(() => {
    particle.remove()
  }, 25000)
}

// Create particles periodically
setInterval(createParticle, 3000)
