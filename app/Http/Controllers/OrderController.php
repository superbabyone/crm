<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Goods;

class OrderController extends Controller
{
    public function add()
    {
        $goods_id = \request()->goods_id;
        $goodsinfo = Goods::where('goods_id',$goods_id)->first();
        $order['order_no'] = $this->getOrderNo();
        $order['order_amount'] = $goodsinfo['goods_price'];
        $order['user_id'] = session('user_id');
        $res = Order::create($order);
        if($res){
            echo '下单成功';
            return redirect('/order/index');
        }else{
            echo '下单失败';
        }
    }
    public function getOrderNo()
    {
        return $time = date('Ymd').rand(10000,99999);
    }
    public function index()
    {
        $info = Order::get();
        return view('/order/index',compact('info'));
    }
}
