// Mobile Menu Toggle
function toggleMenu() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
}

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
        document.body.classList.remove('no-scroll');
    });
});

// Scroll reveal animation
function animateOnScroll() {
  const elements = document.querySelectorAll('.fade-in');
  
  elements.forEach(element => {
      const elementPosition = element.getBoundingClientRect().top;
      const screenPosition = window.innerHeight / 1.2;
      
      if (elementPosition < screenPosition) {
          element.style.opacity = '1';
          element.style.transform = 'translateY(0)';
      }
  });
}

// Initialize scroll animation
window.addEventListener('load', () => {
  animateOnScroll();
});

// Add scroll event listener
window.addEventListener('scroll', animateOnScroll);

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
          window.scrollTo({
              top: targetElement.offsetTop - 80,
              behavior: 'smooth'
          });
      }
  });
});

// Image Modal functionality
function openModal(imgSrc) {
  const modal = document.getElementById('imageModal');
  const modalImg = document.getElementById('modalImg');
  
  modal.style.display = 'flex';
  modalImg.src = imgSrc;
}

function closeModal() {
  document.getElementById('imageModal').style.display = 'none';
}

// Close modal when clicking outside the image
window.addEventListener('click', function(event) {
  const modal = document.getElementById('imageModal');
  if (event.target === modal) {
      closeModal();
  }
});

// Project Slides Modal functionality
let currentSlide = 0;
let currentProjectSlides = [];

function showProjectSlides(projectName) {
  // Define slides for each project
  const projects = {
      'WasteWise': [
          { src: 'img/projects/wastewise1.jpg', caption: 'Wireframe Design' },
          { src: 'img/projects/wastewise2.jpg', caption: 'User Flow Diagram' },
          { src: 'img/projects/wastewise3.jpg', caption: 'Final UI Design' }
      ],
      'MedicalGrading': [
          { src: 'img/projects/medical1.jpg', caption: 'Login Screen' },
          { src: 'img/projects/medical2.jpg', caption: 'Dashboard View' },
          { src: 'img/projects/medical3.jpg', caption: 'Grade Input Form' }
      ]
  };
  
  if (projects[projectName]) {
      currentProjectSlides = projects[projectName];
      currentSlide = 0;
      updateSlideModal();
      document.getElementById('slideModal').style.display = 'flex';
  }
}

function updateSlideModal() {
  const slideImg = document.getElementById('slideImg');
  const slideCaption = document.getElementById('slideCaption');
  const slideCounter = document.getElementById('slideCounter');
  
  if (currentProjectSlides.length > 0) {
      slideImg.src = currentProjectSlides[currentSlide].src;
      slideCaption.textContent = currentProjectSlides[currentSlide].caption;
      slideCounter.textContent = `${currentSlide + 1}/${currentProjectSlides.length}`;
  }
}

function changeSlide(n) {
  currentSlide += n;
  
  if (currentSlide >= currentProjectSlides.length) {
      currentSlide = 0;
  } else if (currentSlide < 0) {
      currentSlide = currentProjectSlides.length - 1;
  }
  
  updateSlideModal();
}

function closeSlideModal() {
  document.getElementById('slideModal').style.display = 'none';
}

// Close slide modal when clicking outside
window.addEventListener('click', function(event) {
  const modal = document.getElementById('slideModal');
  if (event.target === modal) {
      closeSlideModal();
  }
});

// Form submission handling
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form values
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;
      
      // Simple validation
      if (!name || !email || !message) {
          alert('Please fill in all fields');
          return;
      }
      
      // Here you would typically send the form data to a server
      console.log('Form submitted:', { name, email, message });
      
      // Show success message
      alert('Thank you for your message! I will get back to you soon.');
      contactForm.reset();
  });
}

// Active link highlighting on scroll
window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY + 100;
    const sections = document.querySelectorAll('section[id]');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');
        const navLink = document.querySelector(`.nav-links a[href="#${sectionId}"]`);
        
        // Add null check before accessing classList
        if (navLink) {
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLink.classList.add('active');
            } else {
                navLink.classList.remove('active');
            }
        }
    });
});

// Download CV button animation
const downloadBtn = document.querySelector('.cta-button');
if (downloadBtn) {
  downloadBtn.addEventListener('click', function() {
      // Add animation class
      this.classList.add('downloading');
      
      // Remove animation class after animation completes
      setTimeout(() => {
          this.classList.remove('downloading');
      }, 1000);
  });
}

// Add scroll effect to header
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 50) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.1)';
    }
});
// ในไฟล์ script.js
document.addEventListener('DOMContentLoaded', function() {
  // เก็บตำแหน่งปัจจุบันก่อนรีเฟรช
  if (performance.navigation.type === 1) {
      // ถ้าเป็นรีเฟรช ให้เลื่อนไปที่ Hero Section
      const heroSection = document.getElementById('home');
      if (heroSection) {
          setTimeout(() => {
              heroSection.scrollIntoView({ behavior: 'smooth' });
          }, 100);
      }
  }
  
  // หรือใช้วิธีนี้เพื่อป้องกันการ scroll to top เมื่อรีเฟรช
  window.onbeforeunload = function() {
      window.scrollTo(0, 0);
  }
});

 const workData = {
      intern: {
        title: "Intern",
        company: "Center for Innovation and Educational Technology",
        date: "November 2023 – February 2024",
        items: [
          "Developed frontend (HTML, CSS, JavaScript) and backend (PHP, MySQL) features",
          "Improved UI/UX and enhanced system performance",
          "Wrote clean, maintainable code and collaborated via Git",
          "Gained real-world experience working in an organizational environment"
        ]
      },
      sales: {
        title: "Sales Administrative Officer",
        company: "Kubota Anantapur",
        date: "September 2020 – April 2021",
        items: [
          "Managed accurate inventory and product data records",
          "Issued invoices and recorded customer sales data",
          "Supported document handling and customer coordination",
          "Coordinated with logistics for timely product deliveries"
        ]
      }
    };

    function showWork(company) {
      const details = document.getElementById('workDetails');
      const data = workData[company];

      document.querySelectorAll('.company-list div').forEach(div => {
        div.classList.remove('active');
      });
      event.target.classList.add('active');

      let html = `
        <h3>${data.title} <a href="${data.link}"> ${data.company}</a></h3>
        <p class="date">${data.date}</p>
        <ul>
          ${data.items.map(item => `<li>${item}</li>`).join('')}
        </ul>
      `;
      details.innerHTML = html;
    }
