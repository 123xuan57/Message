<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Msg;
use Auth;
use DB;


class MsgController extends Controller
{


    //显示所有留言
    public function index() {
    	//获取所有留言内容，并显示首页
    	//$msgs = Msg::all();
    	//var_dump($msgs);
        $msgs = DB::table('msgs')->paginate(10);
        return view('index', ['msgs' => $msgs]);
    	//return view('index')->withMsgs($msgs);
    }

    public function details($id) {
    	//获取当前id的留言信息，并显示试图
    	return view('details')->withMsg(Msg::find($id));
    }

    //添加一条留言
    public function postAdd() {
        //获取表单数据
        $msg = new Msg();
        $msg->author = Request::input('author');
        $msg->title = Request::input('title');
        $msg->content = Request::input('content');

        //将数据插入到数据表中
        $msg->save();

        //重定向到首页
        return redirect('/');
    }

    //留言管理
    public function manage() {
        //判断管理员是否已经登陆，是则可以管理留言，否则不具有权限，跳转到管理员登录页
        if (Auth::check()) {
            $msgs = DB::table('msgs')->paginate(10);
             return view('manage', ['msgs' => $msgs]);
            /*$msgs = Msg::all();
            return view('manage')->withMsgs($msgs);*/
        } else{
            echo '<script type="text/javascript">';
            echo 'alert("需要管理员登陆才可以管理留言！");';
            echo '</script>';
            $msgs = Msg::all();
            return view('auth/login')->withMsgs($msgs);
        }
           
    }

    //删除某条留言
    public function delete($id) {
        Msg::destroy($id);
        return redirect('/manage');
    }

    //显示修改页
    public function edit($id) {
        return view('edit')->withMsg(Msg::find($id));
    }

    //修改某条留言
    public function postEdit($id) {
        //获取表单数据
        $msg = Msg::find($id);
        $msg->author = Request::input('author');
        $msg->title = Request::input('title');
        $msg->content = Request::input('content');

        //将数据插入到数据表中
        $msg->save();

        //重定向到首页
        return redirect('/manage');
    }


    //模糊搜索标题，显示留言具体信息
    public function search() {
        $m = Request::input('search');
        $msgs = DB::table('msgs')->where('title', 'like', "%$m%" )->orWhere('content', 'like', "%$m%")->get();
        // return var_dump($msgs);
        //显示查询结果
        return view('search')->withMsg($msgs);
    }



}
