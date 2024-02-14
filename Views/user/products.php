<?php
$pageTitle = "Products";
include 'header.php';
?>

<div>
<form action='/createProduct' method='post'>
  <input type='text' name='name' placeholder='product name'/>
  </br>
  </br>
  <input type='text' name='price' placeholder='product price'/>
  </br>
  </br>
  <input type='text' name='description' placeholder='product description'/>
  </br>
  </br>
  <input type='text' name='quantity' placeholder='product quantity'/>
  </br>
  </br>
  <input type='file' name="fileUpload" />
  </br>
  </br>
  <button type='submit'>Create</button>
</form>  

</div>

<?php include 'footer.php'?>