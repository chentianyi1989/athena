@extends('web.m3.layouts.main')
@section('after.js')

@endsection 
@section('content')
    @include('web.m3.common.login') 
    <div class="body">
        <div class="by-bg">
            <div class="container by-nr">
                <div class="pullLeft ag-by-bg">
                    <a class="pullLeft  " href="javascript:;"
                                               onclick="return layer.msg('请先登录!',{icon:6})"                             ></a>
                </div>
                <div class="pullLeft pt-by-bg">
                    <a class="pullLeft  " href="javascript:;"
                                               onclick="return layer.msg('请先登录!',{icon:6})"                             ></a>
                </div>
                <div class="pullLeft mw-by-bg">
                    <a class="pullLeft  " href="javascript:;"
                                               onclick="return layer.msg('请先登录!',{icon:6})"                             ></a>
                </div>
            </div>
        </div>
    </div>
@endsection