<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 30/08/2017
 * Time: 4:48 PM
 */
try{
    class CategoryDB
    {
        public function getCategories(){
            $db = Database::connect();
            $query = "SELECT * FROM loaisach";
            $result = $db->query($query);
            $categories = array();
            foreach ($result as $row) {
                $category = new Category($row['maloaisach'], $row['tenloaisach']);
                $categories[] = $category;
            }
            return $categories;
        }

        public function getCategory($id){
            $db = Database::connect();
            $query = "SELECT * FROM loaisach WHERE maloaisach = '$id'";
            return $db->query($query)->fetch();
        }

        public function addCategory($category){
            $db = Database::connect();
            $code = $category->getCategoryID();
            $name = $category->getCategoryName();

            $query = "INSERT INTO loaisach(maloaisach,tenloaisach) VALUES ('$code','$name')";
            $db->exec($query);
        }

        public function deleteCategory($id){
            $db = Database::connect();
            $query = "DELETE FROM loaisach WHERE maloaisach = '$id'";
            $db->exec($query);
        }
        public function updateCategory($category){
            $db = Database::connect();
            $code = $category->getCagegoryID();
            $name = $category->getCategoryName();
            $query = "UPDATE loaisach SET tenloaisach = '$name' WHERE maloaisach = '$code'";
            $db->exec($query);
        }
    }
}catch (PDOException $e){
    $error = $e->getMessage();
    die($error);
}
