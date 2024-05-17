<?php
include('Database_Connection.php');

// Check if CategoryID is set
if(isset($_REQUEST['CategoryID'])) {
    $catid = $_REQUEST['CategoryID'];
    //
//WITH TABLE  categories(CategoryID, Name, Description)
    // Prepare and execute SELECT statement
    $stmt = $connection->prepare("SELECT * FROM categories WHERE CategoryID=?");
    $stmt->bind_param("i", $catid);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $catid = $row['CategoryID'];
        $name = $row['Name'];
        $description = $row['Description'];

    } else {
        echo "categories not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Record in categories Table</title>
    <!-- JavaScript validation and content load for update or modify data-->
    <script>
        function confirmUpdate() {
            return confirm('Are you sure you want to update this record?');
        }
    </script>
</head>
<body>
    <center>
        <!-- Update listings form -->
        <h2><u>Update Form for categories</u></h2>
        <form method="POST" onsubmit="return confirmUpdate();">

            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
            <br><br>

            <label for="Description">Description:</label>
            <input type="text" name="description" value="<?php echo isset($description) ? $description : ''; ?>">
            <br><br>

            <input type="submit" name="update" value="Update">
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    // Retrieve updated values from form
    
    $name = $_POST['name'];
    $description = $_POST['description'];
//WITH TABLE  categories(CategoryID, Name, Description)
    // Update the listing in the database
   $stmt = $connection->prepare("UPDATE categories SET Name=?, Description=? WHERE CategoryID=?");

    $stmt->bind_param("ssi", $name, $description, $catid);
    $stmt->execute();
    
    // Redirect to categories.php
    header('Location: view_categories.php');
    exit(); // Ensure that no other content is sent after the header redirection
}
?>

