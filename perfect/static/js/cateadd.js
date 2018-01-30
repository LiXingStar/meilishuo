$(function(){
    let fileBtn = $('#exampleInputFile');
    let imgHidden = $('input:hidden'),
        submit = $('button[type=submit]');
    ////////////////////upload/////////////////////////////////
    fileBtn.on('change',function(){
        let file = this.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(e){
            $('<img>').attr('src',e.currentTarget.result).addClass('img-thumbnail').css({'display':'block',width:150}).insertAfter('div.form-group:last-of-type')
        };
        let formdata = new FormData();
        formdata.append('file',file);
        $.ajax({
            url:'/perfect/index.php/upload/index',
            type:'post',
            data:formdata,
            processData:false,
            contentType:false,
            success:function(data){
              imgHidden.attr('value',data);
            }
        })

    });
   ////////////////////////////数据提交///////////////////////////////////
    submit.on('click',function(){
        let data = $('form').serialize();
        $.ajax({
           url:'/perfect/index.php/catemanage/add',
           data:data,
           success:function(data){
               if(data =='ok'){
                   // location.href = '/perfect/index.php/catemanage/show';
               }else{
                   alert('插入失败');
               }
           }
        });
        return false;
    })

});