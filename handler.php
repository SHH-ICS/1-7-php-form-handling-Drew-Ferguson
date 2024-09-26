<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>

  <!-- Material Design Lite CSS and JS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>

<body>

  <?php
  $userName = "";

  // Check if the form is submitted and the userName field exists
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userName'])) {
    // Sanitize user input to avoid XSS attacks
    $userName = htmlspecialchars($_POST['userName']);
  }

  // Output the welcome message
  if (!empty($userName)) {
    echo "<h1>Welcome, " . $userName . "!</h1>\n";
  } else {
    echo "<h1>No name provided!</h1>\n";
  }
  ?>

</body>

</html>