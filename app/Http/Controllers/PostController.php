<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // ppstsテーブルから全てのデータを取得し、変数$postsに代入
        $posts = DB::table('posts')->get();

        // 変数$postsをposts/inde.blade.phpファイルに渡す
        return view('posts.index',compact('posts'));
    }

    public function show($id) {
        // /posts/{id}の{id}部分と主キー(idカラム)の値が一致するデータをpostsテーブルから取得し、変数$postに代入
        $post = post::find($id);

        // 変数$postをpost/show.blade.phpに渡す
        return view('posts.show',compact('post'));
    }
}
