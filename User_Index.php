<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Record Management System</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-image: url('your-background-image.jpg'); /* Replace with actual background */
      background-size: cover;
      background-repeat: no-repeat;
      color: white;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Scrolling bar style */
    .scrolling-message-container {
      width: 100%;
      overflow: hidden;
      background-color: #004466;
      color: white;
      padding: 10px 0;
      font-size: 18px;
      font-weight: bold;
      position: relative;
      z-index: 1000;
    }

    .scrolling-message {
      display: inline-block;
      white-space: nowrap;
      animation: scroll-text 15s linear infinite;
      padding-left: 100%;
    }

    @keyframes scroll-text {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-100%); }
    }

    /* Full-Width Scrolling Photo Gallery */
    .photo-slider {
      width: 100%;
      overflow: hidden;
    }

    .photo-track {
      display: flex;
      transition: transform 1s ease-in-out;
    }

    .photo-track img {
      width: 100vw; /* Full screen width */
      height: auto;
      flex-shrink: 0;
      object-fit: cover;
    }

    /* Principal Section */
    .principal-section {
      background-color: rgba(0, 68, 102, 0.8); /* Slightly transparent background */
      color: white;
      padding: 30px;
      text-align: center;
      border-radius: 10px;
    }

    .principal-section img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
      object-fit: cover;
    }

    .principal-section h2 {
      font-size: 1.8rem;
      margin-bottom: 10px;
    }

    .principal-section h4 {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }

    .principal-section p {
      font-size: 1rem;
      line-height: 1.5;
      text-align: justify;
    }

    /* SCROLLING MESSAGE ABOVE FOOTER */
    .message-section {
      background-color: #004466;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
    }

    /* FOOTER Styling */
    footer {
      background-color: #333;
      padding: 20px;
      color: white;
      text-align: center;
      margin-top: 30px; /* Ensure footer appears after content */
      position: relative;
    }

    /* Ensuring the footer stays at the bottom of the page */
    body > footer {
      margin-top: auto;
    }

    @media (max-width: 768px) {
      .principal-section img {
        width: 120px;
        height: 120px;
      }

      .principal-section h2 {
        font-size: 1.5rem;
      }

      .principal-section p {
        font-size: 0.9rem;
      }

      .message-section {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include 'navbar_user.php'; ?>

  <!-- TOP SCROLLING MESSAGE -->
  <div class="scrolling-message-container">
    <div class="scrolling-message">
      👋 Welcome to the GOVERNMENT   POLYTECHNIC   LOHAGHAT  !
    </div>
  </div>

  <!-- MAIN CONTENT -->
  <main>
    <!-- Full-Width Animated Photo Gallery -->
    <div class="photo-slider">
      <div class="photo-track">
        <img src="img/p3.jpg" alt="Photo 1">
        <img src="img/p2.jpg" alt="Photo 2">
        <img src="img/p1.jpg" alt="Photo 3">
        <img src="img/p4.jpg" alt="Photo 4">
        <img src="img/p5.jpg" alt="Photo 5">
        <img src="img/p7.jpg" alt="Photo 6">
      </div>
    </div>

    <!-- Scrolling Message Section (Second Scrolling Message) -->
    <div class="scrolling-message-container">
      <div class="scrolling-message">
        📢 Stay updated! Check the dashboard for latest notices, grades, and performance analytics.
      </div>
    </div>

    <!-- Principal Section with Photo and Message -->
    <div class="principal-section">
      <img src="img/pri.jpg" alt="Principal Photo"> <!-- Replace with actual photo -->
      <h2>Dharmendra Prakash</h2>
      <h4>Principal</h4>
      <p>It is my great pleasure to welcome you all to Government Polytechnic Lohaghat. We inculcate an attitude amongst our students, which transcends the young minds, from job seekers to service providers. The environment of learning in the campus makes our students, necessary ingredient for building technically strong community, ethically and morally rich and responsible citizen with compassionate human value. Autonomy and self empowerment are the two keywords in this campus. Thanks to all of you to visit this website.</p>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="footer-content">
      <p>&copy; 2025 GOVERNMENT POLYTECHNIC LOHAGHAT. All rights reserved.</p>
    </div>
  </footer>

  <!-- JavaScript for changing images every 3 seconds -->
  <script>
    const photos = document.querySelectorAll('.photo-track img');
    let currentIndex = 0;

    function changeImage() {
      currentIndex = (currentIndex + 1) % photos.length;
      document.querySelector('.photo-track').style.transform = `translateX(-${currentIndex * 100}vw)`;
    }

    // Change image every 3 seconds
    setInterval(changeImage, 3000);
  </script>

</body>
</html>
