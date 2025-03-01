<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:5rem !important;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="student_view.php">Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="faculty_view.php">Faculty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dept_view.php">Department</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="course_view.php">Courses</a>
              </li>
            </ul>
          </div>
          <div>
            <a class="nav-link" href="index.php" style="color:#fff !important;">Logout</a>
          </div>
        </div>
      </nav>

    <div class="container-fluid mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            include_once 'db.php';
            $sql = "SELECT * FROM course c JOIN faculty f ON c.Faculty_ID=f.FACULTY_ID";
            $result = $conn->query($sql);
            if ($result == TRUE) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="col">
                        <div class="card h-100" style="height: 50vh;">
                            <img class="card-img-top" src="bg2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Course Title: <?php echo $row["Course_Name"] ?> <br>
                                <p class="card-text">Faculty: <?php echo $row["Faculty_Name"] ?> <br>
                                <p class="card-text">L-T-P: <?php echo $row["LTP"] ?> <br>
                                <p class="card-text">Credits: <?php echo $row["Credits"] ?> <br>
                                <p class="card-text">Course Duration: <?php echo $row["Course_Start_Date"] . " to " . $row["Course_End_Date"] ?> <br>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>

</body>

</html>

<style>
    .card {
        display: flex;
        flex-direction: column;
    }

    .card-body {
        flex-grow: 1;
    }
</style>