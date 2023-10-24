<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./form.php" method="post">
        <label> First Name:
            <input type="text" name="fname" placeholder="F-Name">
        </label>
        <input type="text" name="lname" placeholder="L-Name">
        <input type="number" name="number" placeholder="Your Phone">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">Registarion</button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            background-color: #ffffff;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin: 10px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        select {
            width: -webkit-fill-available;
            padding: 10px;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
            color: #ffffff;
            cursor: pointer;
            padding: 10px 15px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="./form.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" required>
            </div>
            <div class="form-group">
                <label for="birthdate_month">Date</label>
                <input type="date" name="birthdate" id="birthdate" required>
            </div>
        
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
