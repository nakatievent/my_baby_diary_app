<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
      // $posts変数にPostモデルから全てのレコードを取得して代入する
      $posts = Post::paginate(10);
      return view('posts.index', ['posts' => $posts]);
    }


    public function create()
    {
      return view('posts.create');
    }


    public function store(Request $request)
    {
      // インスタンス作成
      $post = new Post;

      // ユーザーid取得
      $post->user_id = $request->user()->id;

      // $requestにformからのデータが格納されているので、以下のようにそれぞれ代入する
      $inputs = request()->validate([
        'picture'=>'image',
        'title'=>'required|max:255',
        'diary'=>'required|max:255',
      ]);

      // 画像ファイルの保存場所指定
      if(request('picture')) {
        $filename = request()->file('picture')->getClientOriginalName();
        $inputs['picture'] = request('picture')->storeAs('public/image', $filename);
      }

      // 保存
      $post->fill($inputs)->save();

      // 保存後に一覧ページへリダイレクト
      return redirect()->route('posts.index');
    }


    public function show($id)
    {
      // 引数で受け取った$idを元にfindでレコードを取得
       $post = Post::find($id);
        // viewにデータを渡す
       return view('posts.show', ['post' => $post]);
    }


    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, $id)
    {
      // idを元にレコードを検索して$postに代入
      $post = Post::find($id);
      // editで編集されたデータを$postにそれぞれ代入する
      $post->title = $request->title;
      $post->diary = $request->diary;
      // 保存
      $post->save();
      // 一覧ページへリダイレクト
      return redirect()->route('posts.index');
    }


    public function destroy($id)
    {
      // idを元にレコードを検索
      $post = Post::find($id);
      // 削除
      $post->delete();
      // 一覧ページへリダイレクト
      return redirect()->route('posts.index');
    }

}