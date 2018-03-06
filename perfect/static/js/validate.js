$(function(){
    $('input , textarea , select').on('blur',function(){
        if($(this).data('validate')){
            let _this = $(this);
            let values = _this.val().trim();
            let validate = _this.data('validate');
            let status = true;
            let validateText = '';
            if(validate.indexOf('required') >=0 ){
                let arr = validate.split(';');
                for(let i=0;i<arr.length;i++){
                    let types = arr[i].split(':')[0];
                    let info = arr[i].split(':')[1];
                    if(!isTrue(values,types)){
                        status = false;
                        validateText +="<li>" + info + "</li>";
                    }
                }
            }
            if(status){
                _this.nextAll('.info').remove();
                _this.closest('.form-group').removeClass('error').addClass('success');
            }else{
                _this.nextAll('.info').remove();
                _this.closest('.form-group').addClass('error').removeClass('success').append("<ul class='info'>"+validateText+"</ul>");
            }


        }


    });


    function isTrue(values,type){
        switch (type){
            case 'required':
                return  values.length;
            case 'chinese':
                return /^[\u4e00-\u9fa5]+$/.test(values);
            case 'username':
                return /^\w{3,6}$/.test(values);
            case 'password':
                return /^\w{6,8}$/.test(values);
            case 'qq':
                return /[1-9]\d{4,10}/.test(values);
            case 'int':
                return /-?[1-9]\d*/.test(values);
            case 'url':
                return /(http|https|ftp)?([a-zA-Z]+)(\.[A-Za-z]+)+(:\d{1,4})?/.test(values);

        }
    }
});

