<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller {
    //
    public function addPostBlog( Request $request ) {
        if($request->isMethod( 'POST' )) {
            var_dump($_POST);
            die();
        }
        return view('admin/add-post-blog');
    }
}