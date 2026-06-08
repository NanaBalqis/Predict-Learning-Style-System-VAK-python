<?php
// Collect inputs
$data = [];
$data[] = $_POST['gender'];
$data[] = $_POST['age'];

for ($i = 1; $i <= 15; $i++) {
    $data[] = $_POST["q$i"];
}

// Full paths (IMPORTANT)
$python = "C:\\Python312\\python.exe";
$script = "C:\\laragon\\www\\learning-style-system\\python\\predict.py";

// Build command
$command = $python . " " . $script . " " . implode(" ", $data);

// Execute Python script
$result = shell_exec($command);

// Redirect to result page
header("Location: result.php?style=" . urlencode(trim($result)));
exit;
