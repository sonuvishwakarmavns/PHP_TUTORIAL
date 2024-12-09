<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Controls Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Form Controls Example</h1>
    <form action="submit_form.php" method="POST">
        <!-- Text Box -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>

        <!-- Radio Buttons -->
        <div class="form-group">
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>

        <!-- Check Boxes -->
        <div class="form-group">
            <label>Hobbies:</label>
            <input type="checkbox" id="reading" name="hobbies" value="reading">
            <label for="reading">Reading</label>
            <input type="checkbox" id="traveling" name="hobbies" value="traveling">
            <label for="traveling">Traveling</label>
            <input type="checkbox" id="cooking" name="hobbies" value="cooking">
            <label for="cooking">Cooking</label>
        </div>

        <!-- Buttons -->
        <div class="form-group">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>
