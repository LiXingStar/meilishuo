$(function(){
    let  ue = UE.getEditor('editor');
    let button = $('button:submit');
    button.on('click',function () {
        let html = ue.getContent();
    })
});