<?Php
require "config.php"; // Database connection details 
//////////////////////////////// Main Code starts /////////////////////////////////////////////
// Set appropriate headers for CORS and JSON response
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Assuming you have established a database connection
    $query = "SELECT * FROM results";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $data = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        echo json_encode($data);
    } else {
        $response = array("error" => "Error fetching data: " . mysqli_error($conn));
        echo json_encode($response);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    $response = array("error" => "Invalid request method.");
    echo json_encode($response);
}
?>