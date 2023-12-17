
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.php">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    background: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
}

.log-in-card h1{
  font-family: Verdana, sans-serif;
  text-align:center;
  font-size: 25px;
}
.log-in-card form{
    width: 300px;
    background: white;
    padding: 4rem;
    border-radius: 10px;
    position: relative;
    margin-left: 10%;
    color: #FF00FF;
    font-family: Verdana, sans-serif;
}
.log-in-form input{
    border: none;
    outline: 1px;
    background: #eee;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    width: 80%;
    transition:.5s;
    margin: 7px;   
}
.log-in-form input:focus{
  background: white;
}
.button_login button {
    background: #FF00FF;
    color: white;
    padding: 1rem;
    border-radius: 100px;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: .5s;
    width: 80%;
    border: none;
    margin: 20px;
    margin-left: 10%;
}
.button_login button:hover{
  background-color: #FF00FF;
  cursor: pointer;
}
.log-in-form h2{
  text-align: center;
  height: 50px;
}
.log-in-card a{
  margin-left: 10px;
  margin-top: 10px;
  font-size:13px;
  text-decoration: none;
  color:  #FF00FF;
}
.log-in-card a:hover {
    text-decoration: underline;
}
.log-in-card input[type="checkbox"] {
    width: 13px;
    height: 10px;
    accent-color: black;
}
.log-in-card label{
  font-size: 13px;
  color:pink;
}
</style>
<body>
<div class="log-in-card">

<h1> </h1>
  <form class="log-in-form" method="post"> 
      
      <h3>REGISTRATION</h3>
      <div><input type="text" placeholder="user_id " name="user_id" required></div>
      <div><input type="text" placeholder="email" name="email" required></div>
      <div class="log_in"><input type="password" placeholder="Enter Password" name="password" required></div>
      <div class="button_login">
        <button type="submit" name="Registration">Registration</button> 
      </div>
      <div class="form-item-other">
      </div>
  </form>


 
</div>
</script>
</body>
</html>