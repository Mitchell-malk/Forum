$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".btn-sm").click(function (event){
    target = $(event.target);
    let current_like = target.attr('like-value');
    let article_id = target.attr('article_id');
    // 已经点赞
    if(current_like === 1){
        // 取消赞
        $.ajax({
            url:"/" + article_id + "/unzan",
            type:"POST",
            data:{_token:'{{csrf-token()}}'},
            dataType:"json",
            success:function success(data){
                if (data.error !== 0){
                    alert(data.msg);
                    return;
                }
                target.attr("like-value",0);
                target.text("赞");
            }
        });
    }else{
        // 点赞
        $.ajax({
            url:"/" + article_id + "/zan",
            type:"POST",
            data:{_token:'{{csrf-token()}}'},
            dataType:"json",
            success:function success(data){
                if (data.error !== 0){
                    alert(data.msg);
                    return;
                }
                target.attr("like-value",1);
                target.text("取消赞");
            }
        })
    }
})
