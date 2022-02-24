@extends('layout.common')
@section('content')
    <div class="col-md-12">
        <form action="/user/{{Auth::id()}}/setting" method="post" enctype="multipart/form-data">
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            <div class="form-group">
                <label>用户名：</label>
                    <input class="form-control" type="text" name="name" value="{{$me->name}}">
            </div>
            <div class="form-group">
                <label>电话：</label>
                    <input class="form-control" type="text" name="phone" value="{{$me->phone}}">
            </div>
            <div class="form-group">
                <label>地址：</label>
                    <input class="form-control" type="text" name="address" value="{{$me->address}}">
            </div>
            <div class="form-group">
                <label >头像：</label>
                    <input class="form-control-file" type="file" name="avatar" value="头像">
                    <img src="{{$me->avatar}}" class="rounded-circle" width="50px" height="50px">
            </div>
            {{csrf_field()}}
            <div>@include('layout.error')</div>
            <button class="btn btn-default btn-primary" type="submit">修改</button>
        </form>
    </div>
@endsection
