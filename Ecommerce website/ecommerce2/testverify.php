<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Hashing</title>
</head>

<body>

<?php

   $input = "ca8f0a0c2878b439896b329d7b8f1214c1be4917ad6c4f8c52ca1560c33dd9d7e20a3dbaba7b7eb6d9dfcfae81d2c783";

   $hashedvaluesinDB = password_hash("b6b2a4c9f0241025c8e2769ee6703033874a17eb464917bf1f90d2fb045c8f8a809e4d407a516fdb9775139275240ad4", PASSWORD_DEFAULT);

   if (password_verify ($input, $hashedvaluesinDB ))

   {
    echo "SUCCESS";
   }
   else
   {
    echo"FAILED";
   }

   

   
?>
</body>
</html>