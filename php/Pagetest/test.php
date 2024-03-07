<?php
// Connect to the database
$servername = "mysql_8.1.0_container";
$username = "root";
$password = "password";
$dbname = "zoodb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    // Retrieve data from the CLIENT table
    $sql = "SELECT * FROM CLIENT WHERE nom = :name";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':name' => $name]);

    if ($stmt->rowCount() > 0) {
        // Display the data
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "Name: " . $row["nom"] . "<br>";
            echo "Surname: " . $row["prenom"] . "<br>";
           
            
           
        }
    } else {
        echo "No data found for the given name.";
    }

    // Close the database connection
    $conn = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Client Information hello </title>
</head>
<body>
    <h1>Client Information</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Enter a name:</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>