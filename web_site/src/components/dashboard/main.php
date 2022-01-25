<?php
     $rows = $conn->query("SELECT * FROM $table") or die($conn->error);
 ?>
   <h1 class="table-title"><?php echo $table; ?> :</h1>
<section class="table-container">
  <div class = 'table-row table-head'>
    <?php
      foreach($headers as $thead)
        echo "<div>$thead</div>";
      echo "<div>Operations</div>";
    ?>
  </div>
  <?php
      while ($row = $rows->fetch_array(MYSQLI_NUM)):
         echo "<div class='table-row'>";
         for ($i = 1; $i<count($row); $i++) {
             echo "<div>$row[$i]</div>";
         }
         echo "  <div>
                     <a href='?update&id=".$row[0]."&t=$table"."'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' width='1em' height='1em' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'><g fill='none'><path d='M16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621z' stroke='#5ae4a8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/><path d='M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3' stroke='#5ae4a8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/></g></svg></a>
                     <a href='?delete&id=".$row[0]."&t=$table"."'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' role='img' width='1em' height='1em' preserveAspectRatio='xMidYMid meet' viewBox='0 0 24 24'><g fill='none'><path d='M15 15L9 9m6 0l-6 6' stroke='#5ae4a8' stroke-width='2' stroke-linecap='round'/><circle cx='12' cy='12' r='10' stroke='#5ae4a8' stroke-width='2'/></g></svg></a>
                 </div>
               </div>";
      endwhile;
  ?>
</section>
<section class="page-navigation-container">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    aria-hidden="true"
    role="img"
    width="1em"
    height="1em"
    preserveAspectRatio="xMidYMid meet"
    viewBox="0 0 1024 1024"
  >
    <path
      d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 0 0 0 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281l360-281.1c3.8-3 6.1-7.7 6.1-12.6z"
      fill="#5ae4a8"
    />
  </svg>
  <span class="current-page">1</span>
  <span>2</span>
  <span>..</span>
  <span>22</span>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    aria-hidden="true"
    role="img"
    width="1em"
    height="1em"
    preserveAspectRatio="xMidYMid meet"
    viewBox="0 0 1024 1024"
  >
    <path
      d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1l-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"
      fill="#5ae4a8"
    />
  </svg>
  <a href="<?php echo "?add&t=$table";?>"><div class="add-button">New</div></a>
</section>
