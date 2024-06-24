<?php
ob_start();
session_start();

//Database
require_once "config/connection.php";

//Model
require_once "models/Bill.php";
require_once "models/Category.php";
require_once "models/Combo.php";
require_once "models/Comment.php";
require_once "models/Discount.php";
require_once "models/Order.php";
require_once "models/Product.php";
require_once "models/Review.php";
require_once "models/User.php";

//controller
require_once "controllers/BillControllers.php";
require_once "controllers/CategoryControllers.php";
require_once "controllers/ComboControllers.php";
require_once "controllers/ComboControllers.php";
require_once "controllers/DiscountControllers.php";
require_once "controllers/OrderControllers.php";
require_once "controllers/ProductControllers.php";
require_once "controllers/ReviewControllers.php";
require_once "controllers/UserControllers.php";

//view
include "views/home.php";

$act = $_GET['act'] ?? ""; 

switch($act) {
    case "" :
        break;

    default :
    echo "404 not found";    
}