<?php
include 'navbar_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Government Polytechnic Lohaghat</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
   
        a {
            text-decoration: none;
            color: inherit;
        }

        header {
            background-color: #4CAF50;
            padding: 20px 0;
            color: white;
            text-align: center;
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        header p {
            font-size: 1.1rem;
        }

        .container {
            width: 85%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section-heading {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 2px solid #4CAF50;
            display: inline-block;
            padding-bottom: 5px;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .about-content .image {
            flex: 1;
            min-width: 300px;
        }

        .about-content img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            flex: 2;
            min-width: 300px;
        }

        .about-text p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .mission-vision {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-top: 40px;
        }

        .mission-vision .card {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .mission-vision .card:hover {
            transform: translateY(-10px);
        }

        .card h3 {
            font-size: 1.5rem;
            color: #4CAF50;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 1rem;
            color: #555;
        }

        .contact-info {
            margin-top: 40px;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

       
    </style>
</head>
<body>

<header>
    <h1>Government Polytechnic Lohaghat</h1>
    <p>Excellence in Technical Education</p>
</header>

<div class="container">

<section class="about-content">
        <div class="image">
            <img src="img/about.jpg" alt="Government Polytechnic Lohaghat">
        </div>
        <div class="about-text">
            <h2 class="section-heading">About Us</h2>
            <p>
                Government Polytechnic Lohaghat, established in 2000, is one of the premier institutions in the region. The college is known for its strong foundation in technical education and producing industry-ready graduates. We offer a wide range of diploma courses in various technical fields including engineering, Information technology, and pharmacy.
            </p>
            <p>
                Our college is equipped with state-of-the-art facilities, highly qualified faculty, and a diverse student body. The institution focuses on holistic development, ensuring students are not only technically proficient but also possess the skills to excel in their professional careers.
            </p>
        </div>
    </section>

    <section class="mission-vision">
        <div class="card">
            <h3>Mission</h3>
            <p>
                To provide world-class education and training in technical fields, empowering students to become skilled professionals and contribute to the advancement of society and industry.
            </p>
        </div>
        <div class="card">
            <h3>Vision</h3>
            <p>
                To become a leading institution in technical education by fostering innovation, research, and academic excellence, preparing students for the global challenges of tomorrow.
            </p>
        </div>
    </section>

    <section class="contact-info">
        <h2>Contact Us</h2>
        <p><strong>Address:</strong> Government Polytechnic Lohaghat, Champawat, Uttarakhand, India.</p>
        <p><strong>Phone:</strong> +91 123-4567890</p>
        <p><strong>Email:</strong><a href="contact_user.php">    &#128231;</a></p>
    </section>
</div>

<?php
include'footer.php';

?>


</body>
</html>
