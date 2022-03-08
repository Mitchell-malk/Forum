@include('layout.resource')
<div class="container">
    @include('layout.navbar')
    <div class="row align-items-center align-items-center">
        <div class="col-md-12" style="margin-top: 160px;margin-left: 100px">
            <!--添加用户UI-->
            <form action="/login" method="post" class="col-md-12">
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
                            <input type="password" id="password" name="password" placeholder="请输入密码"
                                   class="form-control">
                        </div>
                        <span class="col-2 text-danger col-form-label">*</span>
                    </div>
                    {{-- 验证码 --}}
                    <div class="form-group row">
                        <label for="captcha" class="col-2 col-form-label">验证码：</label>
                        <div class="col-8">
                            <input id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}"
                                   name="captcha" required placeholder="请输入验证码">
                            <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('default') }}"
                                 onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
                            @if ($errors->has('captcha'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('captcha') }}</strong>
                                </span>
                            @endif
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
