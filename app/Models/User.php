<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   // 对应的表明 必须
   protected $table = 'user';

   // 禁用时间戳
   public $timestamps = false;

   public function modelInsert() {
       return $this->insert([
           'username'=>'韩信',
           'sex'=>1
       ]);
   }

   public function modelSelect() {
       return $this->get();
   }
}
