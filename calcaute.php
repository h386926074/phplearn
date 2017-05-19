<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>计算器</title>
  </head>
  <body>
<?php

 ?>
 <table border="1" align = "center" width = "400">
   <form class="" action="" method="post">
     <caption><h1>计算器</h1></caption>
     <tr>
       <td>
         <input type="text" size="4" name = "num1" value="<?php echo
       $_POST["num1"] ?>" />
        </td>
        <td>
            <select class="" name="opt">
              <option value="+" <?php echo $_POST["opt"]=="+"?"selected":"" ?>>+</option>
            </select>
        </td>
        <td><input type="text" size = "4"  name="num2" value="<?php echo $_POST["num2"] ?>"/></td>
        <td><input type="submit" name="sub" value="计算" /></td>
     </tr>
   </form>
   <?php
        if (isset($_POST["sub"])) {
          echo '<tr><td colspan="4">';
        }
    ?>
 </table>
 <?php
    for ($i=9; $i>=1 ; $i--) {
      if ($i<5) {
        break;
      }
      for ($j=$i; $j>=1 ; $j--) {
        if ($j<5)
          break 1;
          echo "$j x $i = ".$j*$i."&nbsp;&nbsp;";
      }
        echo "<br>";
    }
    ?>
  </body>
</html>
