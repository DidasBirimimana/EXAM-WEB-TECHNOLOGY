<html>
<head>
  <!-- Linking to external stylesheet -->
  <link rel="stylesheet" type="text/css" href="styles.css" title="style 1" media="screen, tv, projection, handheld, print"/>
  <!-- Defining character encoding -->
  <meta charset="utf-8">
  <!-- Setting viewport for responsive design -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All categories</title>
  <link rel="stylesheet" type="text/css" href="styles.css" title="style 1" media="screen, tv, projection, handheld, print">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* Normal link */
        .nav-link {
            padding: 10px;
            color: white;
            background-color: greenyellow;
            text-decoration: none;
            margin-right: 30px;
            text-align: center;
        }

        /* Visited link */
        .nav-link:visited {
            color: purple;
        }

        /* Unvisited link */
        .nav-link:link {
            color: brown; /* Changed to lowercase */
        }

        /* Hover effect */
        .nav-link:hover {
            background-color: deeppink;
        }

        /* Active link */
        .nav-link:active {
            background-color: red;
        }

        /* Extend margin left for search button */
        button.btn {
            margin-left: 1px; /* Adjust this value as needed */
            margin-top: 4px;
        }

        /* Extend margin left for search button */
        input.form-control {
            margin-left: 1200px; /* Adjust this value as needed */
            padding: 8px;
        }
        /* Updated CSS for social media links without background color */
        .social-link {
            display: inline-block;
            padding: 10px;
            margin-right: 5px;
            text-align: center;
        }

        /* Header */
header {
    background-color: burlywood;
    padding: 10px;
}
        /* Extend dropdown menu item styling */
.dropdown-menu .dropdown-item {
    background-color: black;
    color: white;
}

/* Hover effect for dropdown menu items */
.dropdown-menu .dropdown-item:hover {
    background-color: brown; /* Change background color on hover */
    color: white;
}

    </style>
</head>
<body style="background-color: skyblue;">


<header>
    <!-- Search form -->
    <form class="d-flex" role="search" action="search.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <!-- Logo and navigation links -->
    <ul style="list-style-type: none; padding: 0;">
        <li style="display: inline; margin-right: 10px;">
           <a href="home.html"> 
            <img src="./Images/th.jpeg" width="100" height="70" alt="Logo"> </a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="box">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="home.html">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">ABOUT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.html">SERVICES</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" aria-expanded="false">FORMS</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="ads.php">ADS</a></li>
                                            <li><a class="dropdown-item" href="categories.php">Categories</a></li>
                                            <li><a class="dropdown-item" href="favorities.php">Favorities</a></li>
                                            <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
                                            <li><a class="dropdown-item" href="images.php">Images</a></li>
                                            <li><a class="dropdown-item" href="instructors.php">Instructors</a></li>
                                            <li><a class="dropdown-item" href="listings.php">Listings</a></li>
                                            <li><a class="dropdown-item" href="payments.php">payments</a></li>
                                            <li><a class="dropdown-item" href="messages.php">Messages</a></li>
                                            <li><a class="dropdown-item" href="reports.php">reports</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">VIEW-TABLES</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="view_ads.php">Ads table</a></li>
                                            <li><a class="dropdown-item" href="view_categories.php">Categories table</a></li>
                                            <li><a class="dropdown-item" href="view_favorities.php">Favorities table</a></li>
                                            <li><a class="dropdown-item" href="view_feedback.php">Feedback table</a></li>
                                            <li><a class="dropdown-item" href="view_images.php">Images table</a></li>
                                            <li><a class="dropdown-item" href="view_instructors.php">Instructors table</a></li>
                                            <li><a class="dropdown-item" href="view_listings.php">Listings table</a></li>
                                            <li><a class="dropdown-item" href="view_messages.php">Messages table</a></li>
                                            <li><a class="dropdown-item" href="view_payments.php">Payments table</a></li>
                                            <li><a class="dropdown-item" href="view_reports.php">Reports table</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="dropdown" style="display: inline; margin-right: 10px;">
                                        <a href="#" class="nav-link dropdown-toggle" style="padding: 10px; color: white; background-color: skyblue; text-decoration: none; margin-right: 15px;">Settings</a>
                                        <div class="dropdown-contents">
                                            <!-- Links inside the dropdown menu -->
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="login.html">Change Other Account</a>
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <!--the following codes are called VIEW OR READ codes-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail information Of Documents</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <center><h2>Table of categories</h2></center>
    <table border="5">
        <tr>
            <th>CategoryID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
       include('Database_Connection.php');

        // Prepare SQL query to retrieve all categories
        $sql = "SELECT * FROM categories";
        $result = $connection->query($sql);

        // Check if there are any categories
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $instId = $row['CategoryID']; // Fetch the CategoryID
                echo "<tr>
                    <td>" . $row['CategoryID'] . "</td>
                    <td>" . $row['Name'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td><a style='padding:4px' href='delete_categories.php?FeedbackID=$instId'>Delete</a></td> 
                    <td><a style='padding:4px' href='update_categories.php?FeedbackID=$instId'>Update</a></td> 
                </tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No data found</td></tr>";
        }
        // Close the database connection
        $connection->close();
        ?>
    </table>
</body>


    </section>
<footer>
 <marquee behavior='alternate'> 
<b><h2>UR CBE BIT &copy, 2024 &reg, Designer by: @Didas Birimimana</h2></b>
</marquee>
<center><b style="color: white;"><i>&copy Copyright 2024 All Rights Reserved</i></b></center>
</footer>

</body>
</html>