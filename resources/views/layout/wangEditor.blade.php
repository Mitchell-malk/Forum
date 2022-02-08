{{--    <script src="js/lib/jquery-1.10.2.min.js"></script>--}}
<script src="js/jquery.js"></script>
<script src="js/wangEditor.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"></script>
<script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<script src="js/highlight.min.js"></script>
{{--2版本--}}
{{--<script>
    let editor = new wangEditor('content');
    // 上传图片
    editor.config.uploadImgUrl = '/image/upload';

    // 设置 headers
    editor.config.uploadHeaders = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    };
    editor.create();
</script>--}}

<script>
    const E = window.wangEditor
    const editor = new E('#div1')
    // 设置编辑区高度为600px
    editor.config.height = 450
    editor.config.placeholder = '自定义 placeholder 提示文字'
    editor.config.uploadHeaders = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    };
    // 代码高亮
    editor.highlight = hljs
    // 设置文件的Name值
    editor.config.uploadName = 'wangEditorH5File'
    // 配置服务端地址
    editor.config.uploadImgServer = '/image/upload'
    // 限制图片上传大小(3M)
    editor.config.uploadImgMaxSize = 3 * 1024 * 1024
    // 限制上传图片类型
    editor.config.uploadImgAccept = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp']
    // 限制一次上传五张图片
    editor.config.uploadImgMaxLength = 5

    // 默认颜色
    // editor.config.colors = [
    //     '#000000',
    //     '#FFFFFF'
    // ]

    // 自定义配置菜单栏
    editor.config.menus = [
        'head',
        'bold',
        'fontSize',
        'fontName',
        'italic',
        'underline',
        'strikeThrough',
        'indent',
        'lineHeight',
        'foreColor',
        'backColor',
        'link',
        'list',
        'todo',
        'justify',
        'quote',
        'emoticon',
        'table',
        'splitLine',
        'undo',
        'redo',
    ]
    editor.config.uploadHeaders = {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    };

    // 定义上传视频名
    editor.config.uploadVideoName = 'videofileName'
    // 上传视频
    editor.config.uploadVideoServer = '/video/upload'

    editor.config.uploadVideoHooks = {
        // 上传视频之前
        success:function (xhr,editor,result){
            console.log("上传成功");
        },
        // 视频上传并返回结果
        fail:function (xhr,editor,result){
            console.log("上传失败，原因是"+result);
        },
        error:function (xhr,editor){
            console.log("上传出错");
        },
        timeout:function (xhr,editor){
            console.log("上传超时");
        },
        customInsert:function (inserVideoFn,result,editor){
            let url = result.url
            inserVideoFn(url)
        }
    }

    // 配置debug模式
    editor.config.debug = true
    // 自定义处理
    editor.config.uploadImgHooks = {
        success:function (xhr,editor,result){
            console.log("上传成功");
        },
        fail:function (xhr,editor,result){
            console.log("上传失败，原因是"+result);
        },
        error:function (xhr,editor){
            console.log("上传出错");
        },
        timeout:function (xhr,editor){
            console.log("上传超时");
        },
        customInsert:function (inserVideoFn,result,editor){
            let url = result.url
            inserVideoFn(url)
        }
    };
    let $laravelEditor = $('#laravelEditor');
    editor.config.onchange = function (html){
        $laravelEditor.val(html)
    };
    editor.create()
    $laravelEditor.val(editor.txt.html())
</script>
