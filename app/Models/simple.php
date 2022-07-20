<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;


class simple extends Model
{
    use Notifiable ;

    protected $table="user";  //操作的数据库
    public $timestamps = true;   //是否开启时间戳
    protected $primaryKey = "id";   //主键
    protected $guarded = [];


    /**
     *
     * model 示例
     * @return false
     */
    public static function allball(){
        try {
            $res = self::select('name','allnum','num1','num2')->get();
            return $res;
        }catch (\Exception $e){
            logError('查看失败',[$e->getMessage()]);
            return false;
        }
    }




}
