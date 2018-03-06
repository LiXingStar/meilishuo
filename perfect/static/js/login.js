$(function () {
    let submit = $(':submit');
    let form = $('form');

     // 提交
     submit.on('click',function(e){
         $('input').trigger('blur');
         if($('.error').length){
             return false;
         }
         let arr = form.serializeArray();
         let formdata = {};
         arr.forEach(ele=>{
            formdata[ele.name] = ele.value;
         });
         $.ajax({
             url:'/perfect/index.php/login/check',
             type:'post',
             data:formdata,
             success:function(data){
                 if(data == 'ok'){
                     location.href = '/perfect/index.php/catemanage';
                 }else if(data == 'error'){
                     alert('密码错误');
                 }else{
                     alert('用户名不存在');
                 }
             }
         });
         return false;
     })
});
