$(function () {
    $('.load').on('click', function () {
        let formdata = new FormData($('form')[0]);
        $.ajax({
            url: '/perfect/index.php/my/register',
            type: 'post',
            dataType: 'text',
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
               if(data == 'ok'){
                   location.href = '/perfect/index.php/my/index';
               }else if(data == 'error'){
                   alert('注册失败');
               }
            }
        });
        return false;
    })


});