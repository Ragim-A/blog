<?php
/**
 * Created by PhpStorm.
 * User: Ragim
 * Date: 11/18/2018
 * Time: 11:01 PM
 */
use App\Models\Category;

function categories(){
    return Category::all();
}