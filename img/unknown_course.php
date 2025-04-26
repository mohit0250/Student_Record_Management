<?php  
include 'navbar_unknown.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Branches</title>
    <style>
       
       

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
            color:rgb(61, 189, 239);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #ffffff;
            margin: 15px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        li:hover {
            background-color:rgb(95, 191, 243);
            transform: scale(1.03);
        }

        li a {
            text-decoration: none;
            font-size: 1.2rem;
            color: #333;
            display: block;
            transition: color 0.3s ease;
        }

        li a:hover {
            color: white;
        }

        .download-links {
            display: none;
            margin-top: 10px;
            padding-left: 20px;
        }

        .download-links a {
            text-decoration: none;
            font-size: 1rem;
            color: #333;
            margin: 5px 0;
            display: block;
            transition: color 0.3s ease;
        }

        .download-links a:hover {
            color:white;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            h2 {
                font-size: 1.8rem;
            }

            li {
                padding: 12px;
            }

            li a {
                font-size: 1rem;
            }
        }
    </style>
    <script>

function toggleDownloadLinks(branchId) {
            var downloadLinks = document.getElementById(branchId);
            if (downloadLinks.style.display === "block") {
                downloadLinks.style.display = "none";
            } else {
                downloadLinks.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        
        <ul>
            <li>
                <a href="javascript:void(0);" onclick="toggleDownloadLinks('itDownloads')">Information Technology</a>
                <div id="itDownloads" class="download-links">
                <P>  Syllabus</P>

                <a href="https://gpbarkot.org.in/download/file/jFtnOhauRu.pdf"> Sem 1</a>
                <a href="https://gpbarkot.org.in/download/file/3OMuYXi7bq.pdf"> Sem 2</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/IT%20(Information%20Technology)%20%20-III%20Sem%20New%20Syllabus.pdf"> Sem 3</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/Information%20Technology%20(12)-IV%20SEM.pdf"> Sem 4</a>
                    <a href="https://www.irdtuttarakhand.org.in/Upload/Information%20Technology%20-V%20Sem%20New%20Syllabus.pdf"> Sem 5</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/Information%20Technology%20-V%20Sem%20New%20Syllabus.pdf"> Sem 6</a>
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="toggleDownloadLinks('electronicsDownloads')">Electronics</a>
                <div id="electronicsDownloads" class="download-links">
                <P>  Syllabus</P>
                <a href="https://gpbarkot.org.in/download/file/jFtnOhauRu.pdf"> Sem 1</a>
                <a href="https://gpbarkot.org.in/download/file/3OMuYXi7bq.pdf"> Sem 2</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/Electronics%20Engineering%20%20-III%20Sem%20New%20Syllabus.pdf"> Sem 3</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/ELECTRICAL%20AND%20ELECTRONICS%20%20ENGINEERING%20(31)%20-%20IV%20SEM.pdf"> Sem 4</a>
                    <a href="https://www.irdtuttarakhand.org.in/Upload/Electronics%20and%20Communication%20Engineering%20(Industry%20Integrated)-V%20Sem%20New%20Syllabus.pdf"> Sem 5</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/Electronics%20Engineering%20VI%20Sem-%20New%20Syllabus.pdf"> Sem 6</a>
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="toggleDownloadLinks('civilDownloads')">Civil Engineering</a>
                <div id="civilDownloads" class="download-links">
                <P>  Syllabus</P>

                <a href="https://gpbarkot.org.in/download/file/jFtnOhauRu.pdf"> Sem 1</a>
                <a href="https://gpbarkot.org.in/download/file/3OMuYXi7bq.pdf"> Sem 2</a>
                    <a href="https://gpbarkot.org.in/download/file/e8FLSDEfhD.pdf"> Sem 3</a>
                    <a href="https://gpbarkot.org.in/download/file/0brgvIHMWm.pdf"> Sem 4</a>
                    <a href="https://gpbarkot.org.in/download/file/dS4CbFeAc2.pdf"> Sem 5</a>
                    <a href="https://gpbarkot.org.in/download/file/VhLt5MhKNv.pdf"> Sem 6</a>
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="toggleDownloadLinks('pharmacyDownloads')">Pharmacy</a>
                <div id="pharmacyDownloads" class="download-links">
                <P>  Syllabus</P>    
                <a href="https://bteup.ac.in/Syllabus/ANNUAL/214.pdf"> Download</a>
                    
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="toggleDownloadLinks('mechanicalDownloads')">Mechanical Engineering</a>
                <div id="mechanicalDownloads" class="download-links">
                    <P>  Sylabus</P>
                    <a href="https://gpbarkot.org.in/download/file/jFtnOhauRu.pdf"> Sem 1</a>
                    <a href="https://gpbarkot.org.in/download/file/3OMuYXi7bq.pdf"> Sem 2</a>
                    <a href="https://www.irdtuttarakhand.org.in/Upload/Mechanical%20Engineering%20(Production)-III%20Sem%20(New%20Syllabus).pdf"> Sem 3</a>
                    <a href="https://www.irdtuttarakhand.org.in/Upload/MECHANICAL%20ENGINEERING%20(14)%20IV%20SEM.pdf"> Sem 4</a>
                    <a href="https://www.irdtuttarakhand.org.in/Upload/MECHANICAL%20ENGINEERING%20-V%20Sem%20New%20Syllabus.pdf"> Sem 5</a>
                    <a href="https://irdtuttarakhand.org.in/Upload/Mechanical%20Engineering%20VI%20Sem-%20New%20Syllabus.pdf"> Sem 6</a>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>

<?php
include 'footer.php';
?>
