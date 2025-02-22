<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-Side Validation</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Client-Side Form Validation</h2>
    <form id="myForm" onsubmit="return validateForm()">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="emailError" class="error"></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="passwordError" class="error"></span>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <script>
        function validateForm() {
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let emailError = document.getElementById("emailError");
            let passwordError = document.getElementById("passwordError");

            emailError.textContent = "";
            passwordError.textContent = "";

            
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            
            let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

            let isValid = true;

            if (!emailPattern.test(email)) {
                emailError.textContent = "Invalid email format";
                isValid = false;
            }

            if (!passwordPattern.test(password)) {
                passwordError.textContent = "Password must be at least 8 characters and include a letter and a number";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>
</html>
