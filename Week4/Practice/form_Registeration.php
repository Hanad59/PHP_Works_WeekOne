<?php
$nameErr = "";
$EmailErr = "";
$PasswordErr = "";
$success = false;

if (isset($_POST["submit"])) {
    $success = true;

    if (empty($_POST["name"])) {
        $success = false;
        $nameErr = "* Please fill fullname field!";
    }

    if (empty($_POST["email"])) {
        $success = false;
        $EmailErr = "* Please fill email field!";
    }

    if (empty($_POST["password"])) {
        $success = false;
        $PasswordErr = "* Please fill password field!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .error {
            color: red;
        }
        .success-box {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border: 1px solid #c3e6cb;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <?php if ($success): ?>
        <div class="success-box">
            <h1>Student Information Submitted Successfully!</h1>
            <p><strong>Name:</strong> <?php echo $_POST["name"]; ?></p>
            <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
            <p><strong>Password:</strong> <?php echo $_POST["password"]; ?></p>
            <p><strong>Gender:</strong> <?php echo isset($_POST["gender"]) ? $_POST["gender"] : 'Not selected'; ?></p>
            
            <p><strong>Hobbies:</strong></p>
            <?php if (isset($_POST["hobbies"]) && is_array($_POST["hobbies"])): ?>
                <ul>
                    <?php foreach ($_POST["hobbies"] as $hobby): ?>
                        <li><?php echo $hobby; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No hobbies selected</p>
            <?php endif; ?>

            <p><strong>Country:</strong> <?php echo isset($_POST["country"]) ? $_POST["country"] : 'Not selected'; ?></p>
            <p><strong>Bio:</strong> <?php echo $_POST["bio"]; ?></p>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <fieldset>
            <legend>Personal Information</legend>

            <h1>STUDENT REGISTRATION FORM</h1>

            <label for="name">Name: </label>
            <input type="text" name="name" value="<?php if(isset($_POST["name"]) && !$success) echo $_POST["name"]; ?>"><br>
            <span class="error"><?php echo $nameErr; ?></span><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php if(isset($_POST["email"]) && !$success) echo $_POST["email"]; ?>"><br>
            <span class="error"><?php echo $EmailErr; ?></span><br>

            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php if(isset($_POST["password"]) && !$success) echo $_POST["password"]; ?>"><br>
            <span class="error"><?php echo $PasswordErr; ?></span><br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="male" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "male" && !$success) echo "checked"; ?>> Male
            <input type="radio" name="gender" value="female" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "female" && !$success) echo "checked"; ?>> Female<br><br>

            <label for="hobbies">Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="reading" <?php if(isset($_POST["hobbies"]) && in_array("reading", $_POST["hobbies"]) && !$success) echo "checked"; ?>> Reading    
            <input type="checkbox" name="hobbies[]" value="traveling" <?php if(isset($_POST["hobbies"]) && in_array("traveling", $_POST["hobbies"]) && !$success) echo "checked"; ?>> Traveling
            <input type="checkbox" name="hobbies[]" value="sports" <?php if(isset($_POST["hobbies"]) && in_array("sports", $_POST["hobbies"]) && !$success) echo "checked"; ?>> Sports<br><br>
            <input type="checkbox" name="hobbies[]" value="music" <?php if(isset($_POST["hobbies"]) && in_array("music", $_POST["hobbies"]) && !$success) echo "checked"; ?>> Music<br><br> 
            <input type="checkbox" name="hobbies[]" value="gaming" <?php if(isset($_POST["hobbies"]) && in_array("gaming", $_POST["hobbies"]) && !$success) echo "checked"; ?>> Gaming<br><br> 
            
            <label for="country">Country:</label>
            <select name="country">
                <option value="">Select Country</option>
                <option value="USA" <?php if(isset($_POST["country"]) && $_POST["country"] == "USA" && !$success) echo "selected"; ?>>USA</option>
                <option value="Canada" <?php if(isset($_POST["country"]) && $_POST["country"] == "Canada" && !$success) echo "selected"; ?>>Canada</option>
                <option value="UK" <?php if(isset($_POST["country"]) && $_POST["country"] == "UK" && !$success) echo "selected"; ?>>UK</option>
                <option value="Australia" <?php if(isset($_POST["country"]) && $_POST["country"] == "Australia" && !$success) echo "selected"; ?>>Australia</option>
            </select><br><br>

            <label for="bio">Bio:</label><br>
            <textarea name="bio" rows="4" cols="50"><?php if(isset($_POST["bio"]) && !$success) echo $_POST["bio"]; ?></textarea><br><br>

            <input type="submit" name="submit" value="Register">
            <input type="reset" name="reset" value="Clear">

        </fieldset>
    </form>

</body>
</html>