<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HealSpace - Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="logo.jpeg" alt="Logo">
            </div>
            <div class="tabs">
                <a href="webhome.php" class="tab active">Home</a>
                <a href="about.php" class="tab">About</a>
                <a href="ourroom.php" class="tab">Our Rooms</a>
                <button class="login-button" onclick="navigatetologin()">Log in</button>
            </div>
        </header>
   
        <div class="background">
            <img src="lounge.jpeg" alt="Background">
            <div class="overlay">
                <h1>Care That <span>Truly</span> Understands You</h1>
                <p>At HealSpace, we offer more than just services—we provide a safe space where you feel seen, heard, and understood.</p>
            </div>
        </div>
   
        <h1>Welcome to HealSpace</h1>
        <p>HealSpace Psychological Clinic strongly values emotional and psychological development. </p>
        <p>The clinic is driven to uplift people back to general well-being by providing therapies and counseling sessions.</p>
   
        <section class="features icons-section">
            <div class="feature">
                <img src="confidentiality-icon.jpeg" alt="Confidentiality Icon">
                <h2>CONFIDENTIALITY</h2>
                <p>We value your privacy and we assure that every information you provide is treated as confidential.</p>
            </div>
            <div class="feature">
                <img src="competence-icon.jpeg" alt="Competence Icon">
                <h2>COMPETENCE</h2>
                <p>We only work with mental health professionals who can provide the positive impact needed for your well-being.</p>
            </div>
            <div class="feature">
                <img src="compassion-icon.jpeg" alt="Compassion Icon">
                <h2>COMPASSION</h2>
                <p>Mental health professionals will listen to your concerns without judgment.</p>
            </div>
        </section>
   
        <h3>Tips and advices</h3>
   
        <section class="carousel-container">
            <div class="carousel">
                <div class="carousel-slide active">
                    <h2>Tip #1: Practice Mindfulness</h2>
                    <p>Take a few minutes each day to focus on your breathing and stay present. It helps reduce stress and improve mental clarity.</p>
                </div>
                <div class="carousel-slide">
                    <h2>Tip #2: Stay Connected</h2>
                    <p>Reach out to friends or family. Social connections are vital for emotional support and resilience.</p>
                </div>
                <div class="carousel-slide">
                    <h2>Tip #3: Maintain a Routine</h2>
                    <p>Set a daily schedule, including time for work, relaxation, and self-care. Consistency can provide a sense of stability.</p>
                </div>
                <div class="carousel-slide">
                    <h2>Tip #4: Get Enough Sleep</h2>
                    <p>Aim for 7-9 hours of quality sleep each night. Sleep is crucial for emotional and mental well-being.</p>
                </div>
                <div class="carousel-slide">
                    <h2>Tip #5: Seek Help When Needed</h2>
                    <p>Don't hesitate to talk to a mental health professional if you're feeling overwhelmed or anxious.</p>
                </div>
            </div>
            <div class="carousel-buttons">
                <button class="carousel-button left" onclick="moveCarousel(-1)">&#10094;</button>
                <button class="carousel-button right" onclick="moveCarousel(1)">&#10095;</button>
            </div>
        </section>
       
   
         <!-- Consultants Section -->
         <h3>Meet our consultants</h3>
         <div class="slider-container">
             <div class="slider">
                 <div class="slide">
                     <img src="cons1.jpeg" alt="Angelica M. Maunahan">
                     <h2>Angelica M. Maunahan, Msc, RPsy</h2>
                     <p>Psychologist || License Number: 1053</p>
                     
   
                 </div>
                 <div class="slide">
                     <img src="cons2.jpeg" alt="Jessica Kristel Toledo">
                     <h2>Jessica Kristel Toledo, MSc, RPsy</h2>
                     <p>Psychologist ||License Number: 1314</p>
                   
   
                 </div>
                 <div class="slide">
                     <img src="cons3.jpeg" alt="Nino B. Galacgac">
                     <h2>Nino B. Galacgac, MSc, RPsy</h2>
                     <p>Psychologist || License Number: 1095</p>
                     
                 </div>
   
                 <div class="slide">
                     <img src="cons4.jpeg" alt="Eunica A. Dee">
                     <h2>Eunica A. Dee, MSc, RPsy </h2>
                     <p>Psychologist || License Number: 1699</p>
                   
                 </div>
   
                 <div class="slide">
                     <img src="cons5.jpeg" alt="Novee Mae Pabon">
                     <h2>Novee Mae Pabon, MA, RPsy</h2>
                     <p>Psychologist ||License Number: 0951</p>
                     
                 </div>
   
                 <div class="slide">
                     <img src="cons6.jpeg" alt="Lorraine Jessica L. Baclig">
                     <h2>Lorraine Jessica L. Baclig, MSc, RPsy</h2>
                     <p>Psychologist || License Number: 1244</p>
                     
                 </div>
             </div>
         
             <!-- Navigation buttons -->
             <button class="nav-button left" onclick="moveSlider(-1)">&#10094;</button>
             <button class="nav-button right" onclick="moveSlider(1)">&#10095;</button>
         
             <!-- Dots navigation -->
             <div class="dots">
                 <div class="dot active" onclick="moveToSlide(0)"></div>
                 <div class="dot" onclick="moveToSlide(1)"></div>
                 <div class="dot" onclick="moveToSlide(2)"></div>
                 <div class="dot" onclick="moveToSlide(3)"></div>
                 <div class="dot" onclick="moveToSlide(4)"></div>
                 <div class="dot" onclick="moveToSlide(5)"></div>
             </div>
             <div class="view-more-container">
        <button onclick="navigateToConsultant()" class="view-more-button">View More</button>
    </div>
         </div>

</div>










   
        <footer>
            <p>&copy; 2024 HealSpace. All rights reserved.</p>
        </footer>
        <script>
                let currentIndex = 0;
   
            function showSlide(index) {
                const slides = document.querySelectorAll('.carousel-slide');
                slides.forEach((slide, i) => {
                    slide.classList.remove('active');
                    if (i === index) {
                        slide.classList.add('active');
                    }
                });
            }
   
            function moveSlide(direction) {
                const slides = document.querySelectorAll('.carousel-slide');
                currentIndex = (currentIndex + direction + slides.length) % slides.length;
                showSlide(currentIndex);
            }
   
            // Auto slide
            setInterval(() => {
                moveSlide(1);
            }, 5000);
   
            // Event Listeners
            document.querySelector('.carousel-button.left').addEventListener('click', () => moveSlide(-1));
            document.querySelector('.carousel-button.right').addEventListener('click', () => moveSlide(1));
   
       
       
        let currentSlide = 0;
       
            function moveSlider(direction) {
                const slider = document.querySelector('.slider');
                const slides = document.querySelectorAll('.slide');
                const totalSlides = slides.length;
       
                // Update the current slide index
                currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
       
                // Move the slider
                slider.style.transform = `translateX(-${currentSlide * (100 / 3)}%)`;
                updateDots();
            }
       
            function moveToSlide(slideIndex) {
                currentSlide = slideIndex;
                const slider = document.querySelector('.slider');
       
                // Move the slider to the specific slide
                slider.style.transform = `translateX(-${currentSlide * (100 / 3)}%)`;
                updateDots();
            }
       
            function updateDots() {
                const dots = document.querySelectorAll('.dot');
       
                // Update active dot
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentSlide);
                });
            }
       
            // Auto-slide functionality
            setInterval(() => {
                moveSlider(1);
            }, 5000);


            // Function to navigate to the appointment page
            function navigateToConsultant() {
            window.location.href = "consultant.php"; // Replace with your target page
        }


        function navigatetologin() {
            // Redirect to the appointment booking page
            window.location.href = 'login.php'; // Replace with your appointment page URL
        }




       
    </script>
    </body>
    </html>
   









