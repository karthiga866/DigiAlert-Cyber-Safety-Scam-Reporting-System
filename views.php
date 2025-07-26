<?php
include 'connect.php';

$sql = "SELECT * FROM reports ORDER BY reported_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin – View Scam Reports</title>
  <style>
    body {
      font-family: Arial;
      background: #121212;
      color: white;
      padding: 20px;
    }
    h1 {
      color: #00ffcc;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #1e1e1e;
      box-shadow: 0 0 10px #00ffff;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #333;
    }
    th {
      background-color: #00ffcc;
      color: black;
    }
    tr:hover {
      background-color: #333;
    }
    .download-links {
      margin: 15px 0;
    }
    .download-links a {
      color: #00f7ff;
      margin-right: 20px;
      text-decoration: none;
      background: #000;
      padding: 8px 16px;
      border-radius: 8px;
      border: 1px solid #00f7ff;
    }
    .download-links a:hover {
      background: #00f7ff;
      color: black;
    }
  </style>
</head>
<body>
  <h1>All Scam Reports</h1>

  <div class="download-links">
    <a href="download_csv.php" target="_blank">📥 Download CSV</a>
    <a href="download_pdf.php" target="_blank">📥 Download PDF</a>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Scam Type</th>
      <th>Description</th>
      <th>Reported At</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['scam_type'] ?></td>
      <td><?= $row['description'] ?></td>
      <td><?= $row['reported_at'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
