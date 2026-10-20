
<?php
session_start();

if (!isset($_SESSION["student"])) {
    header("Location: Form.php");
    exit;
}

$student = $_SESSION["student"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f1f5f9;
        }

        .result-card {
            max-width: 950px;
            margin: 40px auto;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .page-header {
            background-color: #198754;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .student-image {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #198754;
            padding: 3px;
            background-color: white;
        }

        .section-title {
            color: #0d6efd;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .table th {
            width: 35%;
            background-color: #eaf2ff;
        }

        .table td,
        .table th {
            padding: 12px;
            vertical-align: middle;
        }

        .table {
            margin-bottom: 30px;
        }

        .back-button {
            padding: 11px 25px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card shadow result-card">

        <div class="page-header">
            <h1 class="h3 mb-2">
                Student Information Submitted Successfully!
            </h1>
            <p class="mb-0">Student Registration Details</p>
        </div>

        <div class="card-body p-4 p-md-5">

            <!-- Student Image -->
            <div class="text-center mb-5">
                <h2 class="h4 section-title">Student Image</h2>

                <img
                    src="<?php echo htmlspecialchars($student["image"]); ?>"
                    alt="Student Image"
                    class="student-image"
                >
            </div>

            <!-- Personal Information -->
            <h2 class="h4 section-title">Personal Information</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Field</th>
                            <th>Information</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><?php echo htmlspecialchars($student["name"]); ?></td>
                        </tr>

                        <tr>
                            <td>Place of Birth</td>
                            <td><?php echo htmlspecialchars($student["pob"]); ?></td>
                        </tr>

                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo htmlspecialchars($student["dob"]); ?></td>
                        </tr>

                        <tr>
                            <td>Address</td>
                            <td><?php echo htmlspecialchars($student["address"]); ?></td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td><?php echo htmlspecialchars($student["gender"]); ?></td>
                        </tr>

                        <tr>
                            <td>Telephone</td>
                            <td><?php echo htmlspecialchars($student["telephone"]); ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><?php echo htmlspecialchars($student["email"]); ?></td>
                        </tr>

                        <tr>
                            <td>Parent Name</td>
                            <td><?php echo htmlspecialchars($student["parent_name"]); ?></td>
                        </tr>

                        <tr>
                            <td>Parent Telephone</td>
                            <td><?php echo htmlspecialchars($student["parent_telephone"]); ?></td>
                        </tr>

                        <tr>
                            <td>Relationship</td>
                            <td><?php echo htmlspecialchars($student["relationship"]); ?></td>
                        </tr>

                        <tr>
                            <td>Student ID</td>
                            <td><?php echo htmlspecialchars($student["student_id"]); ?></td>
                        </tr>

                        <tr>
                            <td>Faculty</td>
                            <td><?php echo htmlspecialchars($student["faculty"]); ?></td>
                        </tr>

                        <tr>
                            <td>Department</td>
                            <td><?php echo htmlspecialchars($student["department"]); ?></td>
                        </tr>

                        <tr>
                            <td>Class</td>
                            <td><?php echo htmlspecialchars($student["class"]); ?></td>
                        </tr>

                        <tr>
                            <td>Registration Date</td>
                            <td><?php echo htmlspecialchars($student["registration_date"]); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Register Another Student -->
            <div class="text-center">
                <a href="Form.php" class="btn btn-primary back-button">
                    Register Another Student
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
