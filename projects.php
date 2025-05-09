<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Damar Tri Rahmadhani</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="projects-header">
        <h2>My Futuristic Projects</h2>
    </div>

    <div class="projects-gallery">
        <?php
        // Assume connection to database is established
        // Fetch project data from MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "portfolio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, description, image_url FROM projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='project-item'>";
                echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "' class='neon-image'>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>" . $row["description"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No projects found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
