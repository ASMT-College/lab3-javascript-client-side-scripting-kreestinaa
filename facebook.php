<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom styles for better layout */
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        
        }
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>



<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
           Facebook
        </a>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Login Form -->
<div class="login-container">
    <h4 class="text-center mb-4">Login</h4>
    <form>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
    </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <p class="mt-3">Didn't have an account? <a href="signup.php">Sign up</a></p>
    
</div>
<footer class="text-center mt-5 p-3 bg-light">
    <span> Copyright@Project <span id="myYear"></span></span>
</footer>

<script>
    document.getElementById("myYear").textContent = new Date().getFullYear();
</script>


</body>
</html>

