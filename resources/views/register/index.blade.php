@include('layout.resource')
@include('layout.navbar')

<div class="container">
    <div class="row align-items-center align-items-center">
        <div  class="col-md-12"  style="margin-top: 160px;margin-left: 100px">
            <!--添加用户UI-->
            <form action="/register" method="post"  class="col-md-12">
                <fieldset class="w-75">
                     <!--邮件-->
                     <div class="form-group row">
                        <label for="email" class="col-2 col-form-label">邮箱:</label>
                        <div class="col-8">
                            <input type="email" id="email" name="email" placeholder="请输入邮箱" class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div>
                    <!--用户名-->
                    {{-- <div class="form-group row">
                        <label for="username" class="col-2 col-form-label">用户名:</label>
                        <div class="col-8">
                            <input type="text" id="username" name="username" placeholder="请输入用户名" class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div> --}}
                    <!--密码-->
                    <div class="form-group row">
                        <label for="password" class="col-2 col-form-label">密码:</label>
                        <div class="col-8">
                            <input type="password" id="password" name="password" placeholder="请输入密码" class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div>
                    <!--确认密码-->
                    <div class="form-group row">
                        <label for="passwordnot" class="col-2 col-form-label">确认密码:</label>
                        <div class="col-8">
                            <input type="password" id="passwordnot" name="password_confirmation" placeholder="请输入确认密码" class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div>
                    <!--性别-->
                    {{--<div class="form-group row">
                        <label class="col-2 col-form-label">性别:</label>
                        <div class="col-8">
                            <label for="man" class="col-form-label">
                                <input type="radio" id="man" name="gender" value="男" checked>男
                            </label>
                            <label for="women" class="col-form-label">
                                <input type="radio" id="women" name="gender" value="女">女
                            </label>
                        </div>
                    </div>--}}

                    <!--协议-->
                    <div class="form-group row">
                        <label class="col-2 col-form-label"></label>
                        <div class="col-6">
                            <label for="agree" class="col-form-label-sm">
                                <input type="checkbox" id="agree" name="agree">我以同意并阅读许可协议
                            </label>
                        </div>
                        <div class="col-2 text-right">
                            <a href="" class="col-form-label-sm nav-link">返回首页</a>
                        </div>
                    </div>
                   {{-- csrf保护 --}}
                    {{csrf_field()}}
                    {{-- 验证 --}}
                    <div>@include('layout.error')</div>
                     <!--提交按钮-->
                    <div class="form-group row">
                        <label class="col-2 col-form-label"></label>
                        <div class="col-8">
                            <button class="btn btn-success w-100">注册</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
