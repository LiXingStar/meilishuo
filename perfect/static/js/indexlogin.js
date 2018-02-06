$(function () {
    $('.load').on('click', function () {
        let formdata = new FormData($('form')[0]);
        $.ajax({
            url: '/perfect/index.php/my/check',
            type: 'post',
            dataType: 'text',
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
               if(data == 1){
                   alert('用户名不存在')
               }else if(data == 2){
                   alert('登陆成功');
                   location.href = '/perfect/index.php/my/index';
               }else if(data == 3){
                   alert('密码错误');
               }
            }
        });
        return false;
    })


});