<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Darawan Promlak - Information Systems Student, UI/UX Designer and Front-end Developer">
    <meta name="keywords" content="portfolio, web design, UI/UX, front-end development">
    <meta name="author" content="Darawan Promlak">
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/herd.png">
    
    <!-- Social Media Meta Tags -->
    <meta property="og:title" content="Darawan Promlak - Portfolio">
    <meta property="og:description" content=" UI/UX Designer and Front-end Developer">
  
    <title>Portfolio | Darawan Promlak</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer" />
    
    <!-- Your custom CSS should come after Font Awesome -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/skills.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/work.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>
<body>
   

    <header class="header">
        <nav class="nav-container">
            <div class="logo">DP<span>.</span></div>
            <div class="hamburger" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-links">
                <li><a href="#home" class="active" >Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Experience</a></li>
                <li><a href="#contact">Contact</a></li>
                <a href="assets/CV.pdf" download class="cv-download-btn">
                    <i class="fas fa-download"></i>  Resume
                </a>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
    <div class="hero-content">
        <span class="greeting gradient-text">Hi, my name is</span>
        <h1><span class="gradient-text">Darawan Promlak</span></h1>
        <h2 class="fade-in section-title">I build things for the web.</h2>
        <p class="description">I'm a Junior Graphic Designer , UI/UX designer and front-end developer passionate about creating accessible digital experiences.</p>
        
        <div class="social-icons">
            <a href="https://instagram.com/aizu._me" class="social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/jabadkiki" class="social-icon" aria-label="LinkedIn" target="_blank"  rel="noopener noreferrer">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://line.me/ti/p/ja_badkiki" class="social-icon" aria-label="Line" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-line"></i></a>
            <a href="https://github.com/AIZUME2975" class="social-icon" aria-label="GitHub" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-github"></i>
            </a>
            <a href="mailto:darawan.pom@gmail.com" class="social-icon" aria-label="Email"target="_blank" rel="noopener noreferrer">
                <i class="far fa-envelope"></i>
            </a>
        </div>
    </div>
    

</section>


    <a href="mailto:darawan.pom@gmail.com" class="vertical-email">
    darawan.pom@gmail.com
</a>

    <!-- About Section -->
<section id="about">
  <h2 class="fade-in section-title">About Me</h2>
  <div class="about-container fade-in delay-2">
    <div class="about-content fade-in delay-2">
      <h3>Hello! I'm <span class="highlight">Darawan Promlak</span> </h3>
      <p class="about-text">
      "I'm a Junior Graphic Designer UI/UX designer and front-end developer passionate about creating functional yet beautiful digital experiences. Currently studying Information Systems at RMUTI, I've built practical systems like the AC Repair Management System while honing my skills in both design (Figma, Photoshop) and development (JavaScript, React, PHP). I thrive on transforming ideas into intuitive interfaces through thoughtful wireframing and prototyping."
      </p>
      <div class="about-details">
        <div class="detail-item fade-in delay-3">
        <i class="fa-solid fa-laptop"></i>
          <span>Junior Graphic Designer</span>
        </div>
        <div class="detail-item fade-in delay-4">
          <i class="fas fa-palette"></i>
          <span>UI/UX Designer</span>
        </div>
        <div class="detail-item fade-in delay-5">
          <i class="fas fa-code"></i>
          <span>Front-end Developer</span>
        </div>
      </div>
      
    </div>
    <div class="profile-image-container">
        <div class="profile-image-wrapper">
            <img src="img/pp.jpg" alt="Darawan Promlak" class="profile-photo">
            
            <!-- วงกลมสีที่เคลื่อนไหว -->
            <div class="circle-decor circle-1"></div>
            <div class="circle-decor circle-2"></div>
            <div class="circle-decor circle-3"></div>
            
            
        </div>
        </div>
  </div> 
</section>
<section id="work">
  <h2 class="fade-in section-title"> Work Experience</h2>
  <div class="container">
    <div class="company-list">
      <div class="active" onclick="showWork('intern')">Internship</div>
      <div onclick="showWork('sales')">Sales Admin</div>
    </div>

    <div class="details" id="workDetails">
      <!-- Default: Internship info -->
      <h3>Intern <a>@ Center for Innovation and Educational Technology</a></h3>
      <p class="date">November 2023 – February 2024</p>
      <ul>
        <li>Developed frontend (HTML, CSS, JavaScript) and backend (PHP, MySQL) features</li>
        <li>Improved UI/UX and enhanced system performance</li>
        <li>Wrote clean, maintainable code and collaborated via Git</li>
        <li>Gained real-world experience working in an organizational environment</li>
      </ul>
    </div>
  </div>
</section>

    

    <!-- Skills Section -->
    <section id="skills">
        <h2 class="fade-in section-title">My Skills</h2>
        <div class="skills-container fade-in">
            <div class="skills-category">
                <!-- แก้ส่วน Soft Skills -->
<div class="skills-category">
    <h3 style="text-align: center;">Soft Skills</h3><br>
    <div class="soft-skills-grid">
        <div class="soft-skill-item">
            <i class="fas fa-comments"></i>
            <h4>Communication & Teamwork</h4>
            <p>Effective communication and collaboration with teams to achieve goals.</p>
        </div>
        <div class="soft-skill-item">
            <i class="fas fa-lightbulb"></i>
            <h4>Problem Solving & Adaptability</h4>
            <p>Creative problem-solving and adaptability to new challenges.</p>
        </div>
        <div class="soft-skill-item">
            <i class="fas fa-tasks"></i>
            <h4>Leadership & Time Management</h4>
            <p>Leadership skills and the ability to prioritize tasks effectively.</p>
        </div>
    </div>
</div>

                <h3 style="text-align: center;">Hard Skills</h3><br>
                <div class="skills-grid">
                    <div class="skill-item">
                        <i class="fas fa-paint-brush"></i>
                        <h4>Graphic Design</h4>
                        <div class="skill-details">
                            <span class="skill-tag">Adobe Photoshop</span>
                            <span class="skill-tag">Adobe Illustrator</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <i class="fas fa-palette"></i>
                        <h4>UI/UX Design</h4>
                        <div class="skill-details">
                            <span class="skill-tag">Figma</span>
                            <span class="skill-tag">Sketch</span>
                            <span class="skill-tag">Wireframing</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <i class="fas fa-code"></i>
                        <h4>Front-end Developer</h4>
                        <div class="skill-details">
                            <span class="skill-tag">HTML</span>
                            <span class="skill-tag">CSS</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Responsive Design</span>
                            <span class="skill-tag">React.js</span>
                            
                        </div>
                        <div class="progress-bar">
                            <div class="progress" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
<section id="portfolio">
  <h2 class="fade-in section-title"> Some Things I’ve Built</h2>

  <div class="project-card">
    <div class="project-image">
    <img src="img/wastewise/test.png" alt="Waste Exchange System Preview">
    
</div>
    <div class="project-content">
      <p class="featured-label">Featured Project</p>
      <h3 class="project-title">Waste Exchange Points System</h3>
      <p class="project-description">
        A conceptual system for exchanging waste, focusing on UI/UX design and functionality design using Figma and data analysis tools.
      </p>
      <p class="tech-used">Figma • Data Analysis Tools</p>
        <div class="project-links">
        <a href="https://github.com/aizume/album.git" target="_blank"><i class="fa-brands fa-github"></i></a>
      </div>



        
    </div>
  </div>

  <div class="project-card reverse">
    <div class="project-image">
      <img src="img/repair.png" alt="Air Conditioning Repair System">
    </div>
    <div class="project-content">
      <p class="featured-label">Featured Project</p>
      <h3 class="project-title">Air Conditioning Repair Notification System</h3>
      <p class="project-description">
        Built a web application for managing air conditioning repair requests and maintenance schedules.
      </p>
      <p class="tech-used">HTML • CSS • PHP • JavaScript • MySQL  • Vue.js • Angular</p>
      <div class="project-links">
        <a href="https://ict.fet.rmuti.ac.th/repair/" target="_blank"><i class="fas fa-external-link-alt"></i></a>
        <a href="https://github.com/aizume/repair2.git" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
      
    </div>
  </div>

  <div class="project-card">
    <div class="project-image">
      <img src="img/index.png" alt="Exam Proctoring System">
    </div>
    <div class="project-content">
      <p class="featured-label">Featured Project</p>
      <h3 class="project-title">Exam Proctoring System</h3>
      <p class="project-description">
        Developed a web-based system for managing proctoring schedules and assignments during exam periods.
      </p>
      <p class="tech-used">PHP • HTML • JavaScript • Bootstrap 5 • MySQL</p>
      <div class="project-links">
        <a href="https://github.com/aizume/exam_proctorr.git" target="_blank"><i class="fa-brands fa-github"></i></a>
      </div>
    </div>
  </div>


</section>

      <!-- Tech Stack -->
<section>
    <h2 class="fade-in section-title">Tech Stack</h2>
    <div class="tech-stack fade-in">
        <img src="img/react-logo.png" alt="React" title="React - ใช้สร้าง UI แบบ Dynamic">
        <img src="img/html-logo.png" alt="HTML" title="HTML - ภาษามาร์กอัปสำหรับสร้างโครงสร้างเว็บเพจ">
        <img src="img/css-logo.png" alt="CSS" title="CSS - ใช้สำหรับกำหนดสไตล์และเลย์เอาต์ของเว็บเพจ">
        <img src="img/js-logo.png" alt="JavaScript" title="JavaScript - ใช้พัฒนา Frontend และ Backend">
        <img src="img/nodejs-logo.png" alt="Node.js" title="Node.js - ใช้สร้าง Backend APIs">
        <img src="img/php-logo.jpeg" alt="PHP" title="PHP - ภาษาสคริปต์สำหรับการพัฒนาเว็บฝั่งเซิร์ฟเวอร์">
        <img src="img/mysql-logo.jpeg" alt="MySQL" title="MySQL - ระบบจัดการฐานข้อมูลเชิงสัมพันธ์">
        <img src="img/figma-logo.jpeg" alt="Figma" title="Figma - เครื่องมือออกแบบ UI/UX ออนไลน์">
        <img src="img/adobexd-logo.jpeg" alt="Adobe XD" title="Adobe XD - เครื่องมือออกแบบและต้นแบบ UI/UX">
        <img src="img/git-logo.jpeg" alt="Git" title="Git - ระบบควบคุมเวอร์ชันสำหรับการจัดการโค้ด">
        <img src="img/docker-logo.jpeg" alt="Docker" title="Docker - แพลตฟอร์มสำหรับการจัดการคอนเทนเนอร์">
        <img src="img/firebase-logo.jpeg" alt="Firebase" title="Firebase - แพลตฟอร์มสำหรับการพัฒนาแอปพลิเคชันบนคลาวด์">
    </div>
</section>

    
    

    <!-- Contact Section -->
    <section id="contact">
         <h2 class="fade-in section-title">Contact Me</h2>
        <div class="contact-container fade-in">
            <div class="contact-card">
                <div class="contact-info">
                    <div style="text-align: center;">
                        <h3>Let's Connect!</h3>
                        <p>Please feel free to reach out for collaborations or a friendly conversation.</p>
                        <p> I would be delighted to hear from you.</p>
                    </div>
                    <div class="contact-details">
                        <a href="mailto:darawan.pom@gmail.com" class="contact-item">
                            <i class="far fa-envelope"></i>
                            <span>darawan.pom@gmail.com</span>
                        </a>
                        <a href="tel:0953521519" class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>095-352-1519</span>
                        </a>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Nakhon Ratchasima, Thailand</span>
                        </div>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://instagram.com/aizu._me" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/jabadkiki" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="https://line.me/ti/p/ja_badkiki" class="social-link"><i class="fab fa-line"></i></a>
                    <a href="https://github.com/AIZUME2975" class="social-link"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </section>
 <button onclick="scrollToTop()" class="back-to-top" title="กลับขึ้นบนสุด">
    <i class="fas fa-arrow-up"></i>
</button>
    <footer class="footer">
    <p>&copy; 2025 Darawan Promlak. All rights reserved.</p>
</footer>


    <script src="script.js"></script>
      
 <script>
  window.onscroll = function () {
    const btn = document.querySelector(".back-to-top");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

   
</body>
</html>
