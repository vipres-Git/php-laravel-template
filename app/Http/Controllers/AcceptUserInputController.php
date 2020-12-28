<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceptUserInputController extends Controller
{
    public function getAll() {
        $all = DB::select('select * from user');
        if($all) {
           return  $this->success($all);
        }
    }

    // 通过id查询数据
    public function getUserName($id) {
        $ret = DB::select('select * from user where id = ?', [$id]);
        var_dump($ret);
    }

    // 添加新用户
    public function addNewUser(Request $request) {
        $username = $request->post('username');
        $sex = $request->post('sex');
        $ret = DB::insert('insert into user (username, sex) values (?,?)',[$username,$sex]);
        if($ret) {
            return $this->success();
        }else {
           return this.$this->fail(1);
        }
    }

    // 更新用户
    public function updateUser(Request $request) {
        $id = $request->post('id');
        $sex = $request->post('sex');
        $ret = DB::update('update user set sex = ? where id = ?', [$sex, $id]);
        if($ret) {
            return $this->success(['msg' => '更新成功']);
        }else {
            return $this->fail(1,['msg' => '更新失败']);
        }
    }

    public function deleteUser($id) {
        $ret = DB::delete('delete from user where id = ?', [$id]);
        if($ret) {
            return $this->success(['msg'=> '删除成功']);
        }else {
            return $this->fail(1,['msg'=>'删除失败']);
        }
    }
}
