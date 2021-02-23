<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      return $posts;//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        // $requestにformからのデータが格納されているので、以下のようにそれぞれ代入する
        $post->title = $request->title;
        $post->body = $request->body;
        // 保存
        $post->save();
        // 保存後 一覧ページへリダイレクト
        return redirect('/articles');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // 引数で受け取った$idを元にfindでレコードを取得
       $posts = Post::find($id);
        // viewにデータを渡す
       return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // idを元にレコードを検索して$postに代入
      $post = Post::find($id);
      // editで編集されたデータを$postにそれぞれ代入する
      $post->title = $request->title;
      $post->body = $request->body;
      // 保存
      $user->save();
      // 詳細ページへリダイレクト
      return redirect("/users/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // idを元にレコードを検索
      $post = post::find($id);
      // 削除
      $post->delete();
      // 一覧にリダイレクト
      return redirect('/posts');
    }
}