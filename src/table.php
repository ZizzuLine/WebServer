<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tabella autobus</title>
  <link href="../css/tablestyle.css" rel="stylesheet">
</head>

<body>

  <?php

    include 'db_conn.php';

    $sql = "SELECT id, rfid, posizione_attuale, posizione_iniziale, posizione_finale FROM autobus";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      echo "<div class='wrapper'>";
      
      // Row Title (stampa una sola volta fuori dal ciclo while)
      echo "<main class='row title'>";
      echo "<ul>";
      echo "<li>Autobus</li>";
      echo "<li>Entry $</li>";
      echo "<li><span class='title-hide'>#</span> Entries</li>";
      echo "<li>Max</li>";
      echo "<li>Time</li>";
      echo "</ul>";
      echo "</main>";
  
      // Output dei dati di ogni riga (all'interno del ciclo while)
      while($row = $result->fetch_assoc()) {
          echo "<section class='row-fadeIn-wrapper'>";
          echo "<article class='row fadeIn nfl'>";
          echo "<ul>";          
          echo "<li style='color: #1c616c;' onmouseover='this.style.color=\"#4fc0d2\"'>" . $row["id"] . "</li>"; 
          echo "<li>" . $row["rfid"] . "</li>"; 
          echo "<li>" . $row["posizione_attuale"] . "</li>"; 
          echo "<li>" . $row["posizione_iniziale"] . "</li>"; 
          echo "<li>" . $row["posizione_finale"] . "</li>"; 
          echo "</ul>";
          echo "<ul class='more-content'>";
          echo "<li>This 1665-player contest boasts a $300,000.00 prize pool and pays out the top 300 finishing positions. First place wins $100,000.00. Good luck!</li>";
          echo "</ul>";
          echo "</article>";
          echo "</section>";
      }
      echo "</div>"; 
  } else {
      echo "0 risultati";
  }
    $conn->close();
  ?>

</body>
</html>
