@extends('layout.common')
@section('content')
    {{--文章创建页表单开始--}}
    <div class="col-md-12">
        <form action="/" method="post">
            <div class="form-group">
                <label for="title" class="h5">标题:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="请填写字段">
            </div>
            <div class="form-group">
                <label for="content" class="h5">内容:</label>
                <textarea class="form-control" name="content" id="content" rows="10" placeholder="请填写内容" style="resize:none;"></textarea>
            </div>
            {{-- 验证格式开始 --}}
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach()
                </div>
            @endif
            {{-- 验证格式结束 --}}
            {{csrf_field()}}
            <button type="submit" class="btn btn-success btn-md btn-block">提交</button>
        </form>
    </div>
{{--    <script src="js/lib/jquery-1.10.2.min.js"></script>--}}
    <script src="{{ URL::asset('/') }}js/jquery.js"></script>

    <script src="js/wangEditor.min.js"></script>
    <script src="js/larvael.Editor.js"></script>
    {{--文章创建页表单结束--}}
@endsection
