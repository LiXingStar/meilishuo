$(function(){
    ////////////////////update////////////////////////////
    $('tbody').on('blur','input',function(){
     let type = this.dataset.type;
     // let cid = $(this).closest('tr').data('id');
      let cid = $(this).closest('tr')[0].dataset.id;
      let value = $(this).val();
      /*
          let formdata = new FormData();
          formdata.append('cid',cid);
          formdata.append('type',type);
          formdata.append('value',value);
      */
      $.ajax({
          url:'/perfect/index.php/catemanage/update',
          type:'post',
          data:{cid,type,value},
          success:function(data){
             if(data == 'ok'){
                 alert('success');
             }else if(data == 'error'){
                 alert('error');
             }
          }
      });
  })
    ////////////////////delete///////////////////////////
    $('.del').click(function(){
        let tr = $(this).closest('tr');
        let cid = $(this).closest('tr').data('id');
        $.ajax({
            url:'/perfect/index.php/catemanage/delete',
            data:{cid},
            // context:this,
            success:function(data){
                if(data =='ok'){
                    alert('success');
                    // $(this).closest('tr').remove();
                }else if(data == 'error'){
                    alert('error');
                }
            }
        })
    })

});