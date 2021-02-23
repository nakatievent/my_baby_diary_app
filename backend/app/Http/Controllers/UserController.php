<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return $users;//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        // $requestにformからのデータが格納されているので、以下のようにそれぞれ代入する
        $user->title = $request->title;
        $user->body = $request->body;
        // 保存
        $user->save();
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
       $users = User::find($id);
        // viewにデータを渡す
       return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view('users.edit', ['user' => $user]);
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
      // idを元にレコードを検索して$userに代入
      $user = user::find($id);
      // editで編集されたデータを$userにそれぞれ代入する
      $user->title = $request->title;
      $user->body = $request->body;
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
      $user = user::find($id);
      // 削除
      $user->delete();
      // 一覧にリダイレクト
      return redirect('/users');
    }
}