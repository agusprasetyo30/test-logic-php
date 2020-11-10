<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Soal 3</title>
</head>
<body>
   <h3>Soal 3</h3>
   
   <form action="" method="post">
      <label>Masukan Angka</label>
      <input type="text" name="angka" value="<?= $_POST['angka'] == NULL ? '' : $_POST['angka'] ?>">

      <input type="submit" value="Generate" name="generate">

   </form>
</body>
</html>

<?php
   // Keadaan ketika ditekan tombol generate
   if (isset($_POST['generate'])) {      
      $input = $_POST['angka'];
      // $input = 3;

      for ($i=$input; $i > 0; $i--) {

         // Segitiga siku-siku bagian kiri
         for ($j=$i; $j <= $input; $j++) {
            echo "*";
         }

         // Segitiga siku-siku bagian kanan
         for ($j2=1; $j2 <= $input; $j2++) { 

            if (($i <= $j2) && ($i <= $input + 1) || ($j2 >= $i && $j2 + $i > $input)) {
            echo "*";

               
            } else {
               echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
         }

         echo "<br>";
      }
   }

   // for ($i=1; $i <= $input - 1 ; $i++) { 
   //    for ($j=1; $j <= $input ; $j++) { 
   //       if (($j <= $a && $j + $i <= $input + 1) || ($j >= $i && $j + $i > $input)) {
   //          echo "*";

   //       } else {
   //          echo "&nbsp;";
   //       }
   //    }

   //    echo "<br>";
   // }
?>