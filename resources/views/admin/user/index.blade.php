@extends('admin.layouts.app')
@section('content-header')
  <h1>
    系统管理
    <small>管理员</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('/admin/index')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
    <li class="active">系统管理 -  管理员</li>
  </ol>
@endsection

@section('content')
  <p style="height: 30px;"><a href="{{url('admin/addUser')}}" class="btn btn-primary margin-bottom pull-right">
    <i class="fa fa-plus" style="margin-right: 6px"></i>添加管理员</a>
  </p>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">管理员列表</h3>
      <div class="box-tools">
        <form action="" method="get">
          <div class="input-group">
            <input type="text" class="form-control input-sm pull-right" name="s_title"
                   style="width: 150px;" placeholder="搜索">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="box-body table-responsive">
      <table class="table table-hover table-bordered">
        <tbody>
        <!--tr-th start-->
        <thead>
        <tr>
          <th>ID</th>
          <th>用户名</th>
          <th>登录账号</th>
          <th>角色</th>
          <th>操作</th>
        </tr>
        </thead>
        <!--tr-th end-->

        <tbody>
        <tr>
          <td class="text-green">1</td>
          <td class="text-muted">admin</td>
          <td class="text-navy">admin@test.com</td>
          <td class="text-navy">管理员</td>
          <td>
            <a style="font-size: 16px" href="#"><i class="fa fa-fw fa-pencil" title="修改"></i></a>
            <a style="font-size: 16px;color: #dd4b39;" href="#"><i class="fa fa-fw fa-trash-o" title="删除"></i></a>
          </td>
        </tr>

        </tbody>
      </table>
    </div>
  </div>
@stop
