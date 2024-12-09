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
        <!-- List Box -->
        <div class="form-group">
            <label for="fruits">Select your favorite fruits (Ctrl+Click to select multiple):</label>
            <select id="fruits" name="fruits[]" multiple size="4">
                <option value="apple">Apple</option>
                <option value="banana">Banana</option>
                <option value="orange">Orange</option>
                <option value="grapes">Grapes</option>
            </select>
        </div>

        <!-- Combo Box (Drop-down Menu) -->
        <div class="form-group">
            <label for="country">Select your country:</label>
            <select id="country" name="country">
                <option value="india">India</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="canada">Canada</option>
            </select>
        </div>

        <!-- Hidden Field -->
        <input type="hidden" name="hidden_value" value="secret_info">

        <!-- Buttons -->
        <div class="form-group">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>
