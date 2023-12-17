<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Customer Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Customer Management</h2>
        <!-- Display customers -->
        <div class="customer-list">
            <!-- PHP code to display customers here -->
        </div>
        
        <!-- Form for adding/editing customer -->
        <form action="add_customer.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <button type="submit">Add Customer</button>
        </form>
    </div>
    <title>Staff Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Staff Login</h2>
        <form action="login_process.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
<meta charset="UTF-8">
    <title>Add/Edit Customer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add/Edit Customer</h2>
        <form action="add_customer.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <!-- Additional fields for other customer details -->
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</body>
</html>
