<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 4:24 PM
 */

require('../database/Database.php');
require ('model/category.php');
require ('model/categoryDB.php');

class ControllerCategory
{
    public function listCategory(){
        $cate = new CategoryDB();
        $categories = $cate->getCategories();
        include ('view/ListCategory.php');
    }
    
    public function addCategory(){
        require ('view/formAddCategory.php');
    }

    public function formUpdateCategory(){
        require ('view/formUpdateCategory.php');
    }
    public function addNewCategory(){
        $cate = new CategoryDB();
        $code = $_POST['code'];
        $name = $_POST['category'];
        if(empty($code)||empty($name)){
            echo "Invalid product data. Check all fields and try again.";
        }else{
            $category = new Category($code,$name);
            $cate->addCategory($category);
            header("Location:index.php");
        }
    }
    public function deleteCategory(){
        $id = $_POST['category_id'];
        $cate = new CategoryDB();
        $cate->deleteCategory($id);
        header('Location:index.php');
    }


    public function updateCategory(){
        $id = $_POST['code'];
        $name = $_POST['category'];
        $cate = new CategoryDB();
        if(empty($name)){
            echo "Invalid product data. Check all fields and try again.";
        }else{
            $category = new Category($id,$name);
            $cate->updateCategory($category);
            header("Location:index.php");

        }
    }

    public function handleRequest(){
        if(isset($_POST['action'])){
            $action = $_POST['action'];
        }else if(isset($_GET['action'])){
            $action = $_GET['action'];
        }else{
            $action = 'ListCategory';
        }
        if($action == 'ListCategory')
            $this->listCategory();
        else if($action == 'showAddForm')
            $this->addCategory();
        else if($action == 'addcategory')
            $this->addNewCategory();
        else if($action == 'delete_category')
            $this->deleteCategory();
        else if($action == 'update_category')
            $this->formUpdateCategory();
        else if($action == 'update')
            $this->updateCategory();
    }
}