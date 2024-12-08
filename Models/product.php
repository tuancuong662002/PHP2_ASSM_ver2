<?php
require_once("model.php");
class Product extends Model
{
    var $table = 'products';
    var $contents = 'product_id';

    function findById($id) {
        $sql = "SELECT p.product_id, p.product_name, p.product_img, p.product_price, p.product_cat, p.product_discount, p.product_count,p.product_status, c.category_name
                FROM products p
                JOIN categories c ON p.product_cat = c.category_id 
                WHERE p.product_id = ? AND c.parent_id != 0";
        return pdo_query_one($sql, $id);
    }

}