<?php
/**
 * Created by PhpStorm.
 * User: wz
 * Date: 2018/9/12
 * Time: 上午9:36
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    function index(){
        return view("index");
    }
}
