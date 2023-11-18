<!-- Arquivo escrito por Bianca Veroneze, João Vitor Piovezan e Maria Eduarda Augusto de Moura! -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conjectura de Collatz</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <div>
    <h1>Conjectura de Collatz</h1>
    <small>Até o 5000!</small>
  </div>
  
  <table id="tabela">
    <thead>
      <tr>
        <th>Número</th>
        <th># de Passos</th>
        <th>Maior Número</th>
      </tr>
    </thead>
    <tbody>
      <?php
        function collatz($number) {
          $current = $number;
          $steps = 1;
          $greater = $number;

          while ($current != 1) {
            if ($current % 2 == 1) {
              $current *= 3;
              $current += 1;
            } else {
              $current /= 2;
            }

            $steps += 1;

            if ($current > $greater) {
              $greater = $current;
            }        
          }

          return [$steps, $greater];
        }

        for ($i = 1; $i <= 5000; $i++) {
          $result = collatz($i);

          echo "<tr>";

          echo "<td>$i</td>";
          echo "<td>$result[0]</td>";
          echo "<td>$result[1]</td>";

          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>