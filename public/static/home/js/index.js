$(function(){
    //获取图片长度
    var img = $('.lb ul li').length-1
    //设置图片索引号为0
    var index=0
    $('.l').click(function(){
        index++
        if(img==index){
            index=1
        }
        $('.lb ul').animate({
            left:-index*910
        },200)
        $('.lb ul li img').css({
            opacity:.5,
            height:300
        })
        $('.lb ul li img').eq(index).css({
            opacity: 100,
            height:400
        })
        $('.lb ul li img').animate({
            top:0,
        },'fast')
        $('.lb ul li img').eq(index).animate({
            top:-40,
        },200)
    })
    var index2 = 2
    $('.r').click(function(){
        index2++
         if(index2==img){
             index2=1
         }
        $('.lb ul').animate({
            left:-index2*910
        },200)
        $('.lb ul li img').css({
            opacity:.5,
            height:300
        })
        $('.lb ul li img').eq(index2).css({
            opacity: 100,
            height:400
        })
        $('.lb ul li img').animate({
            top:0,
        },'fast')
        $('.lb ul li img').eq(index2).animate({
            top:-40,
        },200)
    })
    // 鼠标经过改变样式
    $('.l').mouseover(function(){
        $(this).css({
            backgroundColor:'gainsboro',
            color:'black'
        })
    })
    $('.l').mouseout(function(){
        $(this).css({
            backgroundColor:'black',
            color:'white'
        })
    })
    $('.r').mouseover(function(){
        $(this).css({
            backgroundColor:'gainsboro',
            color:'black'
        })
    })
    $('.r').mouseout(function(){
        $(this).css({
            backgroundColor:'black',
            color:'white'
        })
    })
    // //自动播放
    // var dhq = setInterval(function(){
    //     $('.l').click()
    // },2000)
    // //停止播放
    // $('.lb').on('mouseover',function(){
    //     clearInterval(dhq)
    // })
    // //从新播放
    // $('.lb').on('mouseout',function(){
    //     dhq = setInterval(function(){
    //         $('.l').click()
    //     },1000)
    // })
})
