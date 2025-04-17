<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="images/sci-bono-logo.png" alt="Sci-Bono Logo">
                </div>
                <p>Sci-Bono Discovery Centre is a world-class science centre that supports education in South Africa through innovative and dynamic learning experiences.</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About the Project</a></li>
                    <li><a href="#goals">Goals & Objectives</a></li>
                    <li><a href="#team">Team & Stakeholders</a></li>
                    <li><a href="#progress">Progress & Updates</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt"></i> Corner of Miriam Makeba & Helen Joseph Streets, Newtown, Johannesburg</li>
                    <li><i class="fas fa-phone"></i> +27 (0)11 639 8400</li>
                    <li><i class="fas fa-envelope"></i> info@sci-bono.co.za</li>
                </ul>
                
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> Sci-Bono Discovery Centre. All Rights Reserved.</p>
            <p>Powered by <span class="clubhouse-credit">Clubhouse</span></p>
        </div>
    </div>
</footer>

<script>
    // Mobile Navigation Toggle
    document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
        document.querySelector('#main-nav').classList.toggle('show');
    });
    
    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
            
            // Hide mobile menu after clicking a link
            if (window.innerWidth <= 768) {
                document.querySelector('#main-nav').classList.remove('show');
            }
        });
    });
</script>