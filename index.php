
<!DOCTYPE html>
<html>
<head>
    <title>Navigation Bar</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <style>
/* Basic styling for the navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}
.bar {
    overflow: hidden;
    background-color: pink;
}

.bar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.bar a:hover {
    background-color: #ddd;
    color: black;
}

/* Additional styles for the content */
.content {
    padding: 20px;
}
</style>
<div class="bar">
<h3> BEAUTY SALON</h2>
    
</div>
<div class="navbar">
<a href="home2.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Dashboard
<a href="services.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Services
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="booking_history.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Booking
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>

</div>

<!-- Your content goes here -->
<div class="content">
    <h1>Dashboard</h1>
    <!-- Other content -->
</div>

</body>
</html>
