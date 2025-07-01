<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LourdeBella - Precision. Power. Brilliance.</title>
    <link rel="icon" type="image/jpeg" href="../img/LourdebellaLogo.jpeg">
    <link rel="stylesheet" href="../styles/Packages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="../img/LourdebellaLogo.jpeg" alt="LourdeBella Logo" id="logo">
                    </a>
                    <div class="logo-text">LOURDEBELLA</div>
                </div>
                <div class="nav-toggle" id="navToggle">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="../../index.php" class="active">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="services" class="services section">
        <div class="container">
            <div class="section-header">
                <h2>Pricing That Fits Your Goals and Budget</h2>
                <p>We help founders transition from scattered to streamlined with branded documents, clean workflows, and reliable backend coordination.</p>
            </div>

            <!-- Service Boxes Container -->
            <div class="service-boxes">
                <!-- Dynamic Service Box Content is Included -->
                <?php include('services.php'); ?>
            </div>

            <!-- New Bottom Box with Introduction Text and Core Services -->
            <div class="bottom-box">
                <div class="bottom-box-content">
                    <!-- Dynamically load Core Services and Why Lourdebella -->
                    <?php include('core_services.php'); ?>
                </div>

                <!-- Claim Offer Button -->
                <div class="bottom-box-actions">
                    <a href="https://calendly.com/lourdebella/30min" target="_blank" class="btn btn-outline">Claim Your Offer</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-header">
                <h2>Let's Work Together</h2>
                <p class="contact-lead">Have questions or ready to build your backend brilliance?</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:contact@LourdeBella.com">contact@LourdeBella.com</a></p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <p><a href="tel:4044622993">404-462-2993</a></p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Mailing Address</h3>
                        <p>2959 Chapel Hill Road, Suite D-1097<br>Douglasville, GA 30134</p>
                    </div>
                    <div class="info-cta">
                        <a href="https://calendly.com/lourdebella/30min" target="_blank" class="btn btn-primary">Book Your Discovery Call</a>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="your@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell us about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="../img/LourdebellaLogo.jpeg" alt="LourdeBella Logo" class="footer-logo-img">
                </div>
                <div class="footer-tagline">
                    LourdeBella | Precision. Power. Brilliance.
                </div>
                <div class="social-links" style="margin: 20px 0; display: flex; justify-content: center; gap: 20px;">
                    <a href="https://www.youtube.com/@lourdebella" target="_blank" style="color: #fff; font-size: 24px; transition: color 0.3s ease;">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/lourdebella/" target="_blank" style="color: #fff; font-size: 24px; transition: color 0.3s ease;">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/share/1AisG3ived/" target="_blank" style="color: #fff; font-size: 24px; transition: color 0.3s ease;">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/lourdebella_co?igsh=MWhlbXBpbTlqejZleQ==" target="_blank" style="color: #fff; font-size: 24px; transition: color 0.3s ease;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="copyright">
                    &copy; <span id="year"></span> LourdeBella LLC. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/Lourdebella.js"></script>
</body>
</html>