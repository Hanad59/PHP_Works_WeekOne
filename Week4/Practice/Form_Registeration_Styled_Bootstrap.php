<?php
// Define error variables and success flag at the top
$nameErr = "";
$EmailErr = "";
$PasswordErr = "";
$errMsg = "";
$success = false;

if (isset($_POST["submit"])) {
    $hasError = false;

    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Please fill fullname field!";
        $hasError = true;
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $EmailErr = "Please fill email field!";
        $hasError = true;
    }

    // Validate Password
    if (empty($_POST["password"])) {
        $PasswordErr = "Please fill password field!";
        $hasError = true;
    }

    // If no errors, set success to true
    if (!$hasError) {
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <!-- Success Alert Message & Submitted Data -->
                <?php if ($success): ?>
                    <div class="alert alert-success shadow-sm mb-4" role="alert">
                        <h4 class="alert-heading fw-bold">Registration Successful!</h4>
                        <hr>
                        <p class="mb-1"><strong>Name:</strong> <?php echo htmlspecialchars($_POST["name"]); ?></p>
                        <p class="mb-1"><strong>Email:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></p>
                        <p class="mb-1"><strong>Password:</strong> <?php echo htmlspecialchars($_POST["password"]); ?></p>
                        <p class="mb-1"><strong>Gender:</strong> <?php echo isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : 'Not selected'; ?></p>
                        <p class="mb-1"><strong>Hobbies:</strong> 
                            <?php 
                            if (isset($_POST["hobbies"]) && is_array($_POST["hobbies"])) {
                                echo implode(", ", array_map('htmlspecialchars', $_POST["hobbies"]));
                            } else {
                                echo "No hobbies selected";
                            }
                            ?>
                        </p>
                        <p class="mb-1"><strong>Country:</strong> <?php echo isset($_POST["country"]) ? htmlspecialchars($_POST["country"]) : 'Not selected'; ?></p>
                        <p class="mb-0"><strong>Bio:</strong> <?php echo htmlspecialchars($_POST["bio"]); ?></p>
                    </div>
                <?php endif; ?>

                <!-- Registration Card Form -->
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4 fw-bold text-primary">Student Registration</h2>
                        
                        <form method="post" action="">
                            
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control <?php echo (!empty($nameErr)) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?php if(isset($_POST["name"]) && !$success) echo htmlspecialchars($_POST["name"]); ?>">
                                <div class="invalid-feedback"><?php echo $nameErr; ?></div>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control <?php echo (!empty($EmailErr)) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php if(isset($_POST["email"]) && !$success) echo htmlspecialchars($_POST["email"]); ?>">
                                <div class="invalid-feedback"><?php echo $EmailErr; ?></div>
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" class="form-control <?php echo (!empty($PasswordErr)) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?php if(isset($_POST["password"]) && !$success) echo htmlspecialchars($_POST["password"]); ?>">
                                <div class="invalid-feedback"><?php echo $PasswordErr; ?></div>
                            </div>

                            <!-- Gender Radio Buttons -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold d-block">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "Male" && !$success) echo "checked"; ?>>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "Female" && !$success) echo "checked"; ?>>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>

                            <!-- Hobbies Checkboxes -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold d-block">Hobbies</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Reading" id="reading" <?php if(isset($_POST["hobbies"]) && in_array("Reading", $_POST["hobbies"]) && !$success) echo "checked"; ?>>
                                            <label class="form-check-label" for="reading">Reading</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Traveling" id="traveling" <?php if(isset($_POST["hobbies"]) && in_array("Traveling", $_POST["hobbies"]) && !$success) echo "checked"; ?>>
                                            <label class="form-check-label" for="traveling">Traveling</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Sports" id="sports" <?php if(isset($_POST["hobbies"]) && in_array("Sports", $_POST["hobbies"]) && !$success) echo "checked"; ?>>
                                            <label class="form-check-label" for="sports">Sports</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Music" id="music" <?php if(isset($_POST["hobbies"]) && in_array("Music", $_POST["hobbies"]) && !$success) echo "checked"; ?>>
                                            <label class="form-check-label" for="music">Music</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Gaming" id="gaming" <?php if(isset($_POST["hobbies"]) && in_array("Gaming", $_POST["hobbies"]) && !$success) echo "checked"; ?>>
                                            <label class="form-check-label" for="gaming">Gaming</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Country Select Dropdown -->
                            <div class="mb-3">
                                <label for="country" class="form-label fw-semibold">Country</label>
                                <select class="form-select" id="country" name="country">
                                    <option value="">Select Country</option>
                                    <option value="USA" <?php if(isset($_POST["country"]) && $_POST["country"] == "USA" && !$success) echo "selected"; ?>>USA</option>
                                    <option value="Canada" <?php if(isset($_POST["country"]) && $_POST["country"] == "Canada" && !$success) echo "selected"; ?>>Canada</option>
                                    <option value="UK" <?php if(isset($_POST["country"]) && $_POST["country"] == "UK" && !$success) echo "selected"; ?>>UK</option>
                                    <option value="Australia" <?php if(isset($_POST["country"]) && $_POST["country"] == "Australia" && !$success) echo "selected"; ?>>Australia</option>
                                </select>
                            </div>

                            <!-- Bio Textarea -->
                            <div class="mb-4">
                                <label for="bio" class="form-label fw-semibold">Short Bio</label>
                                <textarea class="form-control" id="bio" name="bio" rows="3"><?php if(isset($_POST["bio"]) && !$success) echo htmlspecialchars($_POST["bio"]); ?></textarea>
                            </div>

                            <!-- Buttons -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="reset" name="reset" class="btn btn-secondary me-md-2 px-4">Clear</button>
                                <button type="submit" name="submit" class="btn btn-primary px-4">Register</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>