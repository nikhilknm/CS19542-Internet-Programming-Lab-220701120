<?php
// Start the session
session_start();

// Check for success message
$successMessage = '';
if (isset($_GET['success'])) {
    $successMessage = "Your message has been submitted successfully.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Interior Designing</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Interior Design Hub</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#designs">Designs</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero">
            <h1>Welcome to Your Dream Space</h1>
            <p>Explore our designs and find inspiration for your interior space.</p>
        </section>

        <!-- New Banner Image Section -->
        <section id="banner">
            <img src="banner.jpeg" style="display: block; margin: 0 auto; width: 100%; height: auto;">
        </section>

        <section id="designs">
            <h2>Our Design Options</h2>
            <div class="design-gallery">
                <div class="design-item">
                    <img src="modern.jpeg" alt="Modern Living Room">
                    <h3>Modern Living Room</h3>
                    <p>A stylish and contemporary living room design.</p>
                </div>
                <div class="design-item">
                    <img src="bedroom.jpeg" alt="Cozy Bedroom">
                    <h3>Cozy Bedroom</h3>
                    <p>A warm and inviting bedroom design.</p>
                </div>
                <div class="design-item">
                    <img src="kitchen.jpeg" alt="Stylish Kitchen">
                    <h3>Stylish Kitchen</h3>
                    <p>A functional and beautiful kitchen layout.</p>
                </div>
                <div class="design-item">
                    <img src="bathroom.jpeg" alt="Elegant Bathroom">
                    <h3>Elegant Bathroom</h3>
                    <p>A luxurious and relaxing bathroom design.</p>
                </div>
                <div class="design-item">
                    <img src="modernoffice.jpeg" alt="Modern Home Office">
                    <h3>Modern Home Office</h3>
                    <p>A productive and stylish workspace at home.</p>
                </div>
                <div class="design-item">
                    <img src="diningroom.jpeg" alt="Chic Dining Room">
                    <h3>Chic Dining Room</h3>
                    <p>An elegant dining space for family gatherings.</p>
                </div>
            </div>
        </section>

        <section id="services">
            <h2>Our Services</h2>
            <ul>
                <li><a href="">Interior Design Consultation</a></li>
                <li><a href="">Space Planning and Layout</a></li>
                <li><a href="">3D Design Renderings</a></li>
                <li><a href="">Project Management</a></li>
                <li><a href="">Furniture Selection</a></li>
            </ul>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>We are a team of passionate interior designers committed to creating beautiful and functional spaces. Our expertise lies in understanding your needs and turning them into reality.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <div class="contact-container">
                <form id="contact-form" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
                
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Interior Design Hub. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Create a FormData object to send the form data
            const formData = new FormData(this);

            // Use fetch to send the form data to backend.php
            fetch('backend.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Check if the response is OK
                if (response.ok) {
                    // Update the response message on successful submission
                    document.getElementById('response-message').innerText = "Your response has been submitted. Thank you!";
                    this.reset(); // Optionally reset the form
                } else {
                    document.getElementById('response-message').innerText = "There was an error submitting your response.";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('response-message').innerText = "There was an error submitting your response.";
            });
        });
    </script>
</body>
</html>
