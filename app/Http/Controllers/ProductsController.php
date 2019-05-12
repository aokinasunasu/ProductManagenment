<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('Product.index');
    }

    public function new() {
        return view('Product.new');
    }

    public function edit() {
        return view('Product.edit');
    }

    public function update() {
        // return view('Product.index');
    }

    public function delete() {
        return view('Product.index');
    }
}
