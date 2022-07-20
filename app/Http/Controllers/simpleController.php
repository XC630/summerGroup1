<?php

namespace App\Http\Controllers;

use App\Models\simple;
use Illuminate\Http\Request;

class simpleController extends Controller
{

    /***
     *
     * controller 示例
     * @return \Illuminate\Http\JsonResponse
     */
    public function all() {
        $res = simple::allball();
        return $res ?
            json_success('查询成功！', $res, 200) :
            json_fail('查询失败', null, 100);
    }
}
