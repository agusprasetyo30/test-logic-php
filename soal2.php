<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Soal 2</title>
</head>
<body>
   <h3>Soal 2</h3>

   <form action="" method="post">
      <label for="">Masukan Angka</label>
      <input type="text" name="angka" value="<?= $_POST['angka'] == NULL ? '' : $_POST['angka'] ?>">

      <input type="submit" value="Generate" name="generate">
   </form>
</body>
</html>

<?php
   // Keadaan ketika ditekan tombol generate
   if (isset($_POST['generate'])) {      

      $input = $_POST['angka'];

      // Piramid bagian atas
      for ($i=$input; $i > 0; $i--) { 
         for ($j=0; $j < $i - 1; $j++) { 
            echo "&nbsp;";
         }

         for ($k=$input; $k >= $i ; $k--) { 
            echo "*";
         }

         echo "<br>";
      }

      // Piramid bagian bawah
      for ($i2=0; $i2 < $input; $i2++) { 
         for ($j2=0; $j2 <= $i2; $j2++) { 
            echo "&nbsp;";
         }

         for ($k2=$i2; $k2 < $input - 1 ; $k2++) { 
            echo "*";
         }

         echo "<br>";

      }
   }
?>