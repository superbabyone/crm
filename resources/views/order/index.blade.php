@extends('layouts/crm')
@section('title','订单页')
@section('content')
    <table class="layui-table">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th>订单号</th>
            <th>订单金额</th>
            <th>订单状态</th>
            <th>创建时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($info as $v)
        <tr>
            <td>{{$v->order_no}}</td>
            <td>{{$v->order_amount}}</td>
            <td>{{$v->order_status}}</td>
            <td>{{$v->created_at}}</td>
            <td>
                <a class="layui-icon layui-icon-edit" href="javascript"></a>
                <a class="layui-icon layui-icon-delete" href="javascript"></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection