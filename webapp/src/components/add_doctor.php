<?php $table = $_GET['t'];?>
<h1 class='table-title'><?php if(isset($_GET['id'])) echo "Update $table"; else echo "New $table";?></h1>
  <form action="index.php?t=<?php echo $table; ?>" method="post" class="form">
  <input type="hidden" name="id" value="<?php 
    if(isset($_GET['id']))
      echo $_GET['id'];
  ?>"/>
  <?php
    foreach($headers as $i => $head) {
      if(str_contains($types[$i], 'date'))
        $type = 'date';
      elseif (str_contains($types[$i], 'int'))
        $type = 'number';
      else
        $type = 'text';
      echo "<input type='$type' name='$head' placeholder='$head' required/>";
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
