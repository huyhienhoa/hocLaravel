<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 31/08/2017
 * Time: 10:03 AM
 */
require ('header.php');
?>
<div id="main">
    <form method="POST" id="addcategory">
        <div>
            <label for="code">Code</label>
            <input type="text" id="code" name="code">
        </div>
        <br>
        <div>
            <label for="category">Name</label>
            <input type="text" id="category" name="category">
        </div>
          <br>
        <input type="hidden" name="action" value="addcategory">
        <button type="submit">Add Category</button>
    </form>
</div>
<?php require 'footer.php' ?>