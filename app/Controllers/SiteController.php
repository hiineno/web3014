<?php
namespace App\Controllers;
use App\Models\ProductModel;
class SiteController extends Controller {
    public function index(){
        $products = ProductModel::getThree();
        $this->view("index", ['products' => $products]);
    }
    public function product(){
        $products = ProductModel::getAll();
        $this->view("product", ['products' => $products]);
    }
    public function detail(){
        $products = ProductModel::getOne();
        $this->view("detail", ['products' => $products]);
    }
}
?>