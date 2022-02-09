@extends('layout.common2')
@section('content')
{{--文章创建页表单开始--}}
    <div class="col-md-12">
        <form action="/{{$article -> id}}" method="post">
            {{method_field("put")}}
            {{csrf_field()}}
            <div class="form-group mt-4">
                <label for="title" class="h5">标题:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="请填写文章标题" value="{{$article -> title}}">
            </div>

            <div id="div1">
                {{-- <p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p> --}}
                <p>{!!$article ->  content!!}</p>
            </div>

            <textarea class="form-control " name="content" id="laravelEditor" rows="10" style="display:none;"></textarea>
            {{--富文本编辑器--}}
            @include('layout.wangEditor')
            {{--富文本编辑器结束--}}

            {{-- 验证格式开始 --}}
            @include('layout.error')
            {{-- 验证格式结束 --}}
            <button type="submit" class="btn btn-success btn-md btn-block mt-3">提交</button>
        </form>
    </div>
    {{--文章创建页表单结束--}}
@endsection
