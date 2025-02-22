<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Navbar -->
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
</nav>zzz

<!-- Signup Form -->
<div class="signup-container">
    <h4 class="mb-4">Signup</h4>
    <form>
        <div class="mb-3 text-start">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3 text-start">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob">
        </div>
        <div class="mb-3 text-start">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender">
                <option selected disabled>Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="mb-3 text-start">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
            <small class="form-text text-muted">Must be 8-20 characters long.</small>
        </div>
        <div class="mb-3 text-start">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Re-enter your password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
    </form>
</div>

<footer class="text-center mt-5 p-3 bg-light">
    <span> Copyright@Project <span id="myYear"></span></span>
</footer>

<script>
    document.getElementById("myYear").textContent = new Date().getFullYear();
</script>


    
</body>
</html>

