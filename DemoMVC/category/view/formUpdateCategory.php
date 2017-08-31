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
        <?php
            $category_id = $_POST['category_id'];
            $cate = new CategoryDB();
            $current_category = $cate->getCategory($category_id);
        ?>
        <form method="POST" id="updatecategory">
            <div>
                <label for="code">Code</label>
                <input type="text" id="code" name="code" readonly value="<?=$current_category->getCategoryID();?>">
            </div>
            <br>
            <div>
                <label for="category">Name</label>
                <input type="text" id="category" name="category" value="<?=$current_category->getCategoryName();?>">
            </div>
            <br>
            <input type="hidden" name="action" value="update">
            <button type="submit">Add Category</button>
        </form>
    </div>
<?php require 'footer.php' ?>