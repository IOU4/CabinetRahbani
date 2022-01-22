<h1 class='table-title'>Add Doctor</h1>
<form action="index.php" method="post" class="form">
<!-- TODO: make condition on $_GET['id'] -->
  <input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
  <input type="text" name='nom' placeholder="nom" required/>
  <input type="text" name='prenom' placeholder="prenom" required/>
  <input type="text" name="speciality" placeholder="speciality" required/>
  <input type="date" name="naissance" required/>
  <input type="submit" value="<?php
    if (isset($_GET['id'])) {
        echo 'Update';
    } else {
        echo 'Submit';
    }
  ?>" class="btn"/>
  <input type="button" value="cancel" class="btn-alt" placeholder="birthday"/>
</form>

<!-- <script type="text/javascript"> -->
<!--   let age = 12 -->
<!--   const getCurrentDate = () => { -->
<!--     let date =  new Date() -->
<!--     const day = date.getDate() -->
<!--     let month = date.getMonth()+1 -->
<!--     if(month<10) month = '0'+month -->
<!--     const year = date.getFullYear() -->
<!--     document.querySelector('input[type="date"]').min = `${year}-${month}-${day}` -->
<!--   } -->
<!--   getCurrentDate(); -->
<!-- </script> -->
