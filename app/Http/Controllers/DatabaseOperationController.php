<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DatabaseOperationController extends Controller
{
    public function doAdd() {
        return DB::table('user')->insert([
            'username'=>'兰陵王',
            'sex'=>1
        ]);
    }

    public function doDelete() {
      return DB::table('user')->where('id', 18)->delete();
    }

    public function doUpdate() {
        return DB::table('user')->where('id',1)->update([
            'username'=>'李白'
        ]);
    }

    public function doSelect() {
        return DB::table('user')->get();
    }

    // 调用模型示例
    public function testModel() {
        $model = new User();
        $ret = $model->modelInsert();
        if($ret) {
            return '调用模型添加数据成功';
        }
        return '调用模型添加数据失败';
    }

    public function testModelSelect() {
        $model = new User();
        return $model->modelSelect();
    }
}
