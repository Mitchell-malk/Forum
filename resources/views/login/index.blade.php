@include('layout.resource')
@include('layout.navbar')

<div class="container">
    <div class="row align-items-center align-items-center">
        <div  class="col-md-12"  style="margin-top: 160px;margin-left: 100px">
            <!--添加用户UI-->
            <form action="/login" method="post"  class="col-md-12">
                <fieldset class="w-75">
                    <!--邮件-->
                    <div class="form-group row">
                        <label for="email" class="col-2 col-form-label">邮箱:</label>
                        <div class="col-8">
                            <input type="email" id="email" name="email" placeholder="请输入邮箱" class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-2 col-form-label">密码:</label>
                        <div class="col-8">
                            <input type="password" id="password" name="password" placeholder="请输入密码" class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div>
                    <!--协议-->
                    <div class="form-group row">
                        <label class="col-2 col-form-label"></label>
                        <div class="col-6">
                            <label for="is_remember" class="col-form-label-sm">
                                <input type="checkbox" id="is_remember" name="is_remember">记住我
                            </label>
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
                            <button class="btn btn-success w-100">登录</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
