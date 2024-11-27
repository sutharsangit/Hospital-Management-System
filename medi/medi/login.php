<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>DWU Login page</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up">
        <form id="signupform" action="signup.php" method="post">
            <h1>WELCOME YOU</h1>
            <span>Enter your details to signup</span>
            <input type="text" name="name" id="name" class="form-control" placeholder="Username" required>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            <input type="text" name="conum" id="conum" class="form-control" placeholder="Contact Number (10 digits)" pattern="[0-9]{10}" required>
            <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>
            <div class="form-group">
                <input type="text" name="gender" id="gender" class="form-control" placeholder="Gender" required readonly onfocus="this.removeAttribute('readonly');">
                <select class="form-control" style="display: none;">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in">
        <form id="signinform" action="signin.php" method="post">
            <h1>WELCOME BACK!!</h1>
            <br>
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button id="signInBtn">Sign In</button>
        </form>
    </div>
    
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Dr.WithUs</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Dr.WithUs</h1>
                <p>If you are new, register with your personal details here!!</p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="scriptT.js"></script>
</body>
</html>
