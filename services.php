<!DOCTYPE html>
<html>
<head>
<style>

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

</style>
<div class="bar">
<h3> BEAUTY SALON</h3>

<div class="navbar">
<a href="index.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Dashboard
<a href="services.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Services
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="booking_history.php?page=home" class="nav-item nav-home active">
        <span class='icon-field'><i class="fa-solid fa-desktop"></i></span> Booking
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>

</div>
</div>

<div class="main">
  <h2>OUR SERVICES</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Services Name</th>
     <th>Description</th>
      <th>Price</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Hair</td>
    <td>Haircut<br>Styling<br>Hair Coloring<br>Highlights/Lowlights<br>Hair Extensions<br>Hair Treatments (e.g., deep conditioning, keratin treatment)</td>
    <td>50-1500</td>
    
   
  </tr>
  <tr>
    <td>2</td>
    <td>Nail</td>
    <td>Manicure <br>Pedicure<br>Nail Art<br>Gel Nails</td>
    <td>100</td>
    
   
  </tr>
  <tr>
    <td>3</td>
    <td>Spa and Body Treatments</td>
    <td>Massages (e.g., Swedish, Deep Tissue, Hot Stone)<br>Body Wraps<br>Body Scrubs</td>
    <td>1000</td>
    
    
  </tr>
  <tr>
    <td>04</td>
    <td>Skincare</td>
    <td>Facials<br>Skin Cleansing<br>Chemical Peels<br>Microdermabrasion<br>Laser Hair Removal<br>Waxing</td>
    <td>500</td>
    
   
  </tr>
  <tr>
    <td>5</td>
    <td>Makeup Services</td>
    <td>Bridal Makeup<br>Special Occasion Makeup<br>Everyday Makeup Application<br>Makeup Consultation</td>
    <td>1500</td>
    
   
  </tr>
    <tr>
    <td>6</td>
    <td>Other Services</td>
    <td>Eyebrow Shaping<br>Eyelash Extensions<br>Beard Trimming/Shaping (for men)<br>Scalp Treatments<br>Ear Piercing</td>
    <td>100</td>
    
   
  </tr>

</div>

</table>

</body>
</html>