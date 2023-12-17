<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {font-family: "Lato", sans-serif;}

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
    text-align: center;
    color: black;
}

/* Additional styles for the content */
.content {
    padding: 20px;
}
.button {
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 2px;
  cursor: pointer;
}

.button1 {background-color: lightblue;} /* lightblue */

</style>
<div class="bar">
<h3> BEAUTY SALON</h3>
    
</div>

<div class="navbar">
<a href="index.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span>Dashboard
<a href="services.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Services
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="booking_history.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Booking
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>

</div>
</head>
<body>
<div class="main">
    <h2>Booking History</h2>
    <a href="add_booking.php">
        <button class="button button1">Add</button>
    </a>
</div>

<table>
  <tr>
    <th>Id</th>
    <th>Services</th>
     <th>Date</th>
      <th>Time</th>
       <th>Client</th>
       <th>Payment</th>
  </tr>
  <tr>
    <td>01</td>
    <td>Manicure</td>
    <td>2023-09-24</td>
    <td>9:10 AM</td>
    <td>Maria Anders</td>
    <td>100</td>
   
  </tr>
  <tr>
    <td>02</td>
    <td>Bridal Makeup</td>
    <td>2023-11-24</td>
    <td>8:00 AM</td>
    <td>Aya Perez</td>
    <td>500</td>
   
  </tr>
  <tr>
    <td>03</td>
    <td>Hair Coloring</td>
    <td>2023-12-10</td>
    <td>2:00 PM</td>
    <td>Roland Mendek</td>
    <td>150</td>
    
  </tr>
  <tr>
    <td>04</td>
    <td>Massages</td>
    <td>2023-09-27</td>
    <td>8:00 AM</td>
    <td>Helen Bennett</td>
    <td>300</td>
   
  </tr>
  <tr>
    <td>05</td>
    <td>Eyelash Extensions</td>
    <td>2023-11-27</td>
    <td>9:00 AM</td>
    <td>Maria Anders</td>
    <td>100</td>
   
  </tr>

</div>

</table>

</body>
</html>