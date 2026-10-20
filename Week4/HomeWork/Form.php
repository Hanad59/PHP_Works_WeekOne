<?php
session_start();

$nameErr = "";
$pobErr = "";
$dobErr = "";
$addressErr = "";
$genderErr = "";
$telephoneErr = "";
$emailErr = "";
$imageErr = "";

$parentNameErr = "";
$parentTelephoneErr = "";
$relationshipErr = "";

$idErr = "";
$facultyErr = "";
$departmentErr = "";
$classErr = "";
$registrationDateErr = "";

$success = false;

if (isset($_POST["submit"])) {

    $success = true;

    // Personal Information

    if (empty($_POST["name"])) {
        $success = false;
        $nameErr = "* Please fill name field!";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $_POST["name"])) {
        $success = false;
        $nameErr = "* Name must contain letters only!";
    }

    if (empty($_POST["pob"])) {
        $success = false;
        $pobErr = "* Please fill place of birth!";
    }

    if (empty($_POST["dob"])) {
        $success = false;
        $dobErr = "* Please select date of birth!";
    }

    if (empty($_POST["address"])) {
        $success = false;
        $addressErr = "* Please fill address!";
    }

    if (empty($_POST["gender"])) {
        $success = false;
        $genderErr = "* Please select gender!";
    }

    if (empty($_POST["telephone"])) {
        $success = false;
        $telephoneErr = "* Please fill telephone!";
    }

    if (empty($_POST["email"])) {
        $success = false;
        $emailErr = "* Please fill email field!";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $success = false;
        $emailErr = "* Please enter a valid email!";
    }

    // Parent Information

    if (empty($_POST["parent_name"])) {
        $success = false;
        $parentNameErr = "* Please fill parent name!";
    }

    if (empty($_POST["parent_telephone"])) {
        $success = false;
        $parentTelephoneErr = "* Please fill parent telephone!";
    }

    if (empty($_POST["relationship"])) {
        $success = false;
        $relationshipErr = "* Please select relationship!";
    }

    // Academic Information

    if (empty($_POST["student_id"])) {
        $success = false;
        $idErr = "* Please fill student ID!";
    }

    if (empty($_POST["faculty"])) {
        $success = false;
        $facultyErr = "* Please fill faculty!";
    }

    if (empty($_POST["department"])) {
        $success = false;
        $departmentErr = "* Please fill department!";
    }

    if (empty($_POST["class"])) {
        $success = false;
        $classErr = "* Please fill class!";
    }

    if (empty($_POST["registration_date"])) {
        $success = false;
        $registrationDateErr = "* Please select registration date!";
    }

    // Image Validation

    if (!isset($_FILES["image"]) ||
        $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {

        $success = false;
        $imageErr = "* Please select student image!";

    } elseif ($_FILES["image"]["error"] != UPLOAD_ERR_OK) {

        $success = false;
        $imageErr = "* Image upload failed!";

    } else {

        $filename = explode(".", $_FILES["image"]["name"]);
        $extension = strtolower(end($filename));

        $extensions = array("jpg", "jpeg", "png", "gif");

        $fileType = mime_content_type($_FILES["image"]["tmp_name"]);

        $allowedTypes = array(
            "image/jpeg",
            "image/png",
            "image/gif"
        );

        if ($_FILES["image"]["size"] > 2097152) {
            $success = false;
            $imageErr = "* Image size must not exceed 2 MB!";
        } elseif (!in_array($extension, $extensions)) {
            $success = false;
            $imageErr = "* Only JPG, JPEG, PNG and GIF allowed!";
        } elseif (!in_array($fileType, $allowedTypes)) {
            $success = false;
            $imageErr = "* Invalid image file!";
        }
    }

    // Save information and upload image

    if ($success == true) {

        if (!file_exists("Images")) {
            mkdir("Images");
        }

        $imageName = uniqid("student_") . "." . $extension;
        $imagePath = "Images/" . $imageName;

        if (move_uploaded_file(
            $_FILES["image"]["tmp_name"],
            $imagePath
        )) {

            $_SESSION["student"] = array(
                "name" => $_POST["name"],
                "pob" => $_POST["pob"],
                "dob" => $_POST["dob"],
                "address" => $_POST["address"],
                "gender" => $_POST["gender"],
                "telephone" => $_POST["telephone"],
                "email" => $_POST["email"],
                "image" => $imagePath,
                "parent_name" => $_POST["parent_name"],
                "parent_telephone" => $_POST["parent_telephone"],
                "relationship" => $_POST["relationship"],
                "student_id" => $_POST["student_id"],
                "faculty" => $_POST["faculty"],
                "department" => $_POST["department"],
                "class" => $_POST["class"],
                "registration_date" => $_POST["registration_date"]
            );

            header("Location: success.php");
            exit;

        } else {
            $imageErr = "* File has not been uploaded!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f1f5f9;
        }

        .registration-card {
            max-width: 950px;
            margin: 40px auto;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .registration-header {
            background-color: #0d6efd;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .registration-header h1 {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }

        fieldset {
            border: 1px solid #dbe2ea;
            border-radius: 10px;
            padding: 22px;
            margin-bottom: 25px;
            background-color: #ffffff;
        }

        legend {
            float: none;
            width: auto;
            padding: 0 10px;
            font-size: 19px;
            font-weight: bold;
            color: #0d6efd;
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            display: block;
            margin-top: 5px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control,
        .form-select {
            padding: 10px;
            border-radius: 7px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        }

        .btn {
            padding: 10px 25px;
            border-radius: 7px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card shadow registration-card">

        <div class="registration-header">
            <h1>STUDENT REGISTRATION FORM</h1>
            <p class="mb-0 mt-2">Please fill in your information</p>
        </div>

        <div class="card-body p-4 p-md-5">

            <form method="post" enctype="multipart/form-data">

                <!-- Personal Information -->
                <fieldset>
                    <legend>Personal Information</legend>

                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                        <span class="error"><?php echo $nameErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Place of Birth:</label>
                        <input type="text" name="pob" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['pob'] ?? ''); ?>">
                        <span class="error"><?php echo $pobErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['dob'] ?? ''); ?>">
                        <span class="error"><?php echo $dobErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address:</label>
                        <input type="text" name="address" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['address'] ?? ''); ?>">
                        <span class="error"><?php echo $addressErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Gender:</label>

                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" value="Male"
                                   class="form-check-input" id="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" value="Female"
                                   class="form-check-input" id="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>

                        <span class="error"><?php echo $genderErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telephone:</label>
                        <input type="text" name="telephone" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['telephone'] ?? ''); ?>">
                        <span class="error"><?php echo $telephoneErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                        <span class="error"><?php echo $emailErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Student Image:</label>
                        <input type="file" name="image"
                               class="form-control"
                               accept=".jpg,.jpeg,.png,.gif">
                        <span class="error"><?php echo $imageErr; ?></span>
                    </div>

                </fieldset>

                <!-- Parent Information -->
                <fieldset>
                    <legend>Parent Information</legend>

                    <div class="mb-3">
                        <label class="form-label">Parent Name:</label>
                        <input type="text" name="parent_name" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['parent_name'] ?? ''); ?>">
                        <span class="error"><?php echo $parentNameErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Parent Telephone:</label>
                        <input type="text" name="parent_telephone" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['parent_telephone'] ?? ''); ?>">
                        <span class="error"><?php echo $parentTelephoneErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Relationship:</label>
                        <select name="relationship" class="form-select">
                            <option value="">Select Relationship</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Guardian">Guardian</option>
                        </select>
                        <span class="error"><?php echo $relationshipErr; ?></span>
                    </div>

                </fieldset>

                <!-- Academic Information -->
                <fieldset>
                    <legend>Academic Information</legend>

                    <div class="mb-3">
                        <label class="form-label">Student ID:</label>
                        <input type="text" name="student_id" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['student_id'] ?? ''); ?>">
                        <span class="error"><?php echo $idErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Faculty:</label>
                        <input type="text" name="faculty" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['faculty'] ?? ''); ?>">
                        <span class="error"><?php echo $facultyErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Department:</label>
                        <input type="text" name="department" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['department'] ?? ''); ?>">
                        <span class="error"><?php echo $departmentErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Class:</label>
                        <input type="text" name="class" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['class'] ?? ''); ?>">
                        <span class="error"><?php echo $classErr; ?></span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Registration Date:</label>
                        <input type="date" name="registration_date" class="form-control"
                        value="<?php echo htmlspecialchars($_POST['registration_date'] ?? ''); ?>">
                        <span class="error"><?php echo $registrationDateErr; ?></span>
                    </div>

                </fieldset>

                <div class="d-flex justify-content-center gap-3">
                    <input type="submit" name="submit" value="Register"
                           class="btn btn-primary">

                    <input type="reset" value="Clear"
                           class="btn btn-outline-secondary">
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>