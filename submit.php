<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];

    if (!empty($data)) {
        $stmt = $conn->prepare("INSERT INTO entries (data) VALUES (?)");
        $stmt->bind_param("s", $data);
        if ($stmt->execute()) {
            echo json_encode(["message" => "Data saved successfully"]);
        } else {
            echo json_encode(["message" => "Failed to save data"]);
        }
        $stmt->close();
    } else {
        echo json_encode(["message" => "Input is empty"]);
    }
}

$conn->close();
?>
