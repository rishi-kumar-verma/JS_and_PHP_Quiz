<?Php
require "config.php"; // Database connection details 
//////////////////////////////// Main Code starts /////////////////////////////////////////////
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the raw JSON data from the request body
    $json_data = file_get_contents("php://input");

    // Decode the JSON data
    $data = json_decode($json_data, true);

    // Assuming you have extracted these variables from your API request
    $name = mysqli_real_escape_string($conn, $data['name']);
    $number = mysqli_real_escape_string($conn, $data['number']);
    $unit = mysqli_real_escape_string($conn, $data['unit']);
    $date = mysqli_real_escape_string($conn, $data['date']);
    $result = mysqli_real_escape_string($conn, $data['result']);
    $total = mysqli_real_escape_string($conn, $data['total']);

    $query = "INSERT INTO results (name, number, unit, date, result, total) VALUES ('$name', '$number', '$unit', '$date', '$result', '$total')";

    if (mysqli_query($conn, $query)) {
        $response = array("message" => "Data inserted successfully.");
        echo json_encode($response);
    } else {
        $response = array("error" => "Error inserting data: " . mysqli_error($conn));
        echo json_encode($response);
    }

    // Close the database connection
    mysqli_close($conn);
}

///////////////////////////////////////////////
