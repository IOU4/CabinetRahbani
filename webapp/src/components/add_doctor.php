<?php $table = $_GET['t'];?>
<h1 class='table-title'><?php if(isset($_GET['id'])) echo "Update $table"; else echo "New $table";?></h1>
  <form action="index.php?t=<?php echo $table; ?>" method="post" class="form">
  <input type="hidden" name="id" value="<?php 
    if(isset($_GET['id']))
      echo $_GET['id'];
  ?>"/>
  <?php
    foreach($headers as $i => $head) {
      if($keys[$i] == 'MUL') {
        
        $tname = $conn->query("SELECT REFERENCED_TABLE_NAME FROM `information_schema`.`KEY_COLUMN_USAGE` WHERE TABLE_NAME = '$table' AND COLUMN_NAME = '$head'");
        $t = $tname->fetch_array(MYSQLI_NUM)[0];
        $res = $conn->query("select * from $t");
        echo "
          <select name='$head' required>
            <option disabled>$head</option>
        ";
        while($id = $res->fetch_array(MYSQLI_NUM)):
          echo "<option  value=".$id[0].">".$id[1]."</option>";
        endwhile;
        echo "</select>";
      } else {
        if(str_contains($types[$i], 'date'))
          $type = 'date';
        elseif (str_contains($types[$i], 'int'))
          $type = 'number';
        else
          $type = 'text';
        echo "<input type='$type' name='$head' placeholder='$head' required/>";
      }
    }
  ?>
  <input type="submit" value="<?php
    if (isset($_GET['id'])) {
        echo 'Update';
    } else {
        echo 'Submit';
    }
  ?>" class="btn"/>
  <input type="button" value="cancel" class="btn-alt" placeholder="birthday"/>
</form>
