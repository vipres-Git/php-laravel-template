<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class DatabaseOperationController extends Controller
{
    public function doAdd() {
        echo 'add';

        $ret = DB::insert('insert into user (username, sex) values(?,?)',['Bob', 1]);
        var_dump($ret);
        if($ret) {
            echo '插入数据成功';
        }else {
            echo '插入数据失败';
        }
    }

    public function doDelete() {
        echo 'delete';

        $ret = DB::delete('delete from user where id = 5');
        var_dump($ret);
    }

    public function doUpdate() {
        echo 'update';

        $ret = DB::update('update user set username = ? where id = ?', ['李白', 1]);
        var_dump($ret);
    }

    public function doSelect() {
        echo 'select';

        $all = DB::select('select * from user');
        dd($all);

        // 使用查询构造器
//        $allByConstructor = DB::table('user')->get();
//        dd($allByConstructor);
    }

}
