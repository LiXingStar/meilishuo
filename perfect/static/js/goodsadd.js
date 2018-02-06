$(function () {
    let ue = UE.getEditor('editor', {
        toolbars: [
            ['fullscreen', 'source', 'undo', 'redo', 'simpleupload', 'insertimage'
            ]
        ],
        autoHeightEnabled: true,
        autoFloatEnabled: true

    });

    let imgaes = $('#exampleInputImages');
    let gimages = $(':hidden[name=gimages]');
    let thumb = $('#exampleInputThumb');
    let gthumb = $(':hidden[name=gthumb]');
    let size = $('#exampleInputSize');
    let gsize = $(':hidden[name=gsize]');
    let submit = $('button[type=submit]');
    imgaes.on('change', function () {
        let files = this.files;
        for (let i = 0; i < files.length; i++) {
            let reader = new FileReader();
            reader.readAsDataURL(files[i]);
            reader.onload = function () {

            };
            let formdata = new FormData();
            formdata.append('file', files[i]);
            $.ajax({
                url: '/perfect/index.php/upload',
                data: formdata,
                type: 'post',
                processData: false,
                contentType: false,
                success: function (data) {
                    let str = gimages.val() + data + ','
                    gimages.val(str);
                }
            })
        }
    });
    thumb.on('change', function () {
        let files = this.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(files);
        reader.onload = function () {

        };
        let formdata = new FormData();
        formdata.append('file', files);
        $.ajax({
            url: '/perfect/index.php/upload',
            data: formdata,
            type: 'post',
            processData: false,
            contentType: false,
            success: function (data) {
                gthumb.attr('value', data);
            }
        })
    });
    size.on('change', function () {
        let files = this.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(files);
        reader.onload = function () {
        };
        let formdata = new FormData();
        formdata.append('file', files);
        $.ajax({
            url: '/perfect/index.php/upload',
            data: formdata,
            type: 'post',
            processData: false,
            contentType: false,
            success: function (data) {
                gsize.attr('value', data);
            }
        })
    });

    submit.on('click',function(){
        let data = new FormData($('form')[0]);
        console.dir(data);
        // data.append('gcontent',ue.getContent());
        $.ajax({
            url:'/perfect/index.php/goodsmanage/add',
            type:'post',
            data:data,
            processData:false,
            contentType:false,
            success:function(data){
                data = data.trim();
                if(data == 'ok'){
                    location.href = '/perfect/index.php/goodsmanage/show';
                }else if(data == 'error'){
                    alert('fail');
                }
            }
        });
        return false;
    })


});