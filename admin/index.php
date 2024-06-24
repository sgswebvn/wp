<?php

ob_start();
session_start();

// spl_autoload_register(function ($class_name) {
//     if (file_exists("../config/$class_name.php")) {
//         require_once "../config/$class_name.php";
//     } elseif (file_exists("model/$class_name.php")) {
//         require_once "model/$class_name.php";
//     } elseif (file_exists("controller/$class_name.php")) {
//         require_once "controller/$class_name.php";
//     }
// });
//Database
require_once "../config/connections.php";

//Model
require_once "model/Bill.php";
require_once "model/Category.php";
require_once "model/Combo.php";
require_once "model/Comment.php";
require_once "model/Discount.php";
require_once "model/Home.php";
require_once "model/Order.php";
require_once "model/Product.php";
require_once "model/Review.php";
require_once "model/User.php";

//controller

require_once "controller/BillController.php";
require_once "controller/CategoryController.php";
require_once "controller/ComboController.php";
require_once "controller/ComboController.php";
require_once "controller/DiscountController.php";
require_once "controller/HomeController.php";
require_once "controller/OrderController.php";
require_once "controller/ProductController.php";
require_once "controller/ReviewController.php";
require_once "controller/UserController.php";

//view
include "view/home.php";

$act = $_GET['act'] ?? "";

switch($act) {
   //HOME
    case "":
        $home = new HomeController();
        break;
    // CUSTUMERS
    case "user" :  
        break;
    case "insert_user":
        break;   
    case "add_user":
        break;
    case "edit_user":
        break;
    case "update_user":
        break;
    case "delete_user";
        break;    
    // CATEGORY
    case "category":
        $category = new CategoryController();
        $category -> category();
        break;
    case "add_category":
        $add_category = new CategoryController();
        $add_category -> add_category();
        break;
    case "insert_category":
        $add_category = new CategoryController();
        $add_category -> insert_category();
        header('Location: ?act=category');
        break;   
    case "edit_category":
        $edit_category = new CategoryController();
        $edit_category -> edit_category();
        break;
    case "update_category":
        $update_category = new CategoryController();
        $update_category -> update_category();
        echo "<script> 
        window.location.href=' ?act=category';  </script>";
        break;
    case "delete_category";
        $delete_category = new CategoryController();
        $delete_category->delete_category();
        echo "<script> alert('Xóa thành công');
        window.location.href='  ?act=category';  </script>";
        break;
    // PRODUCT    
    case "product":
        break;
    case "insert_product":
        break;   
    case "add_product":
        break;
    case "edit_product":
        break;
    case "update_product":
        break;
    case "delete_product";
        break; 
    // ORDER 
    case "order":
        break;
    case "insert_order":
        break;   
    case "add_order":
        break;
    case "edit_order":
        break;
    case "update_order":
        break;
    case "delete_order";
        break;   
    // COMBO          
    case "combo":
        break;
    case "insert_combo":
        break;   
    case "add_combo":
        break;
    case "edit_combo":
        break;
    case "update_combo":
        break;
    case "delete_combo";
        break; 
    // COMMENT
    case "comment":
        break;
    case "insert_comment":
        break;   
    case "add_comment":
        break;
    case "edit_comment":
        break;
    case "update_comment":
        break;
    case "delete_comment";
        break;    
    // DISCOUNT
    case "discount":
        break;
    case "insert_discount":
        break;   
    case "add_discount":
        break;
    case "edit_discount":
        break;
    case "update_discount":
        break;
    case "delete_discount";
        break;  
    //  BILL 
    case "bill";
        break;
    //  REVIEW        
    case "review":
        break;
    case "doanhthu" :
        break;    


    default :
    echo "404 not found";    
                                 
}
