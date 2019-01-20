@extends('admin.layouts.app')
@section('other-css')
  <link rel="stylesheet" href="{{asset('admin/common/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection
@section('content-header')
  <h1>
    系统管理
    <small>管理员</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('/admin/index')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
    <li><a href="{{url('/admin/user')}}">管理员</a></li>
    <li class="active">添加管理员</li>
  </ol>
@stop

@section('content')
  <h2 class="page-header">添加管理员</h2>
  <div class="box box-primary">
    <form method="POST" action="#" accept-charset="utf-8">
      {!! csrf_field() !!}
      <div class="nav-tabs-custom">
        <div class="tab-content">

          <div class="tab-pane active">
            <div class="form-group">
              <label>用户名
                <small class="text-red">*</small>
              </label>
              <input required="required" type="text" class="form-control" name="title" autocomplete="off"
                     placeholder="用户名" maxlength="80">
            </div>
            <div class="form-group">
              <label>登录账号
                <small class="text-red">*</small>
              </label>
              <input required="required" type="text" class="form-control" name="author" autocomplete="off"
                     placeholder="登录账号" maxlength="80">
            </div>
            <div class="form-group">
              <label>是否置顶
                <small class="text-red">*</small>
              </label>
              <select class="js-example-placeholder-single form-control">
                <option value=""></option>
                <option value="1">是</option>
                <option value="2">否</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">添加</button>

        </div>
      </div>
    </form>
  </div>
@stop

@section('other-js')
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <script src="{{asset('admin/common/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <script>
      $(function () {
          //bootstrap WYSIHTML5 - text editor
          $(".textarea").wysihtml5();
      });
  </script>
@endsection
