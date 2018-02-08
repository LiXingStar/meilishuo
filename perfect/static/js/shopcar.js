$(function(){
  let shopcar = $('.shop-car');
  let t , t1;
    getNumber();
    shopcar.on('click','.add',function(){
      let numberObj = $(this).prev(),
          number = numberObj.text()*1+1,
          gid = $(this).closest('.shop-car').data('gid');
          numberObj.text(number);
          clearTimeout(t);
          t = setTimeout(function(){
          $.ajax({
              url:'/perfect/index.php/shop/addnum',
              data:{number,gid},
              success:function(data){
                  console.log(data);
                  getNumber();
              }
          })
      },100)
         /////////////////////总数 总价///////////



  });
  //////////////////////////////////////////////////
    shopcar.on('click','.reduce',function(){
        let numberObj = $(this).next(),
            number = numberObj.text()*1-1,
            gid = $(this).closest('.shop-car').data('gid');
        if(number  < 1){
            let isdel = confirm('是否删掉该商品');
            if(isdel){
                $.ajax({
                    url:'/perfect/index.php/shop/delete',
                    data:{gid},
                    success:function(data){
                        console.log(data);
                    }
                })
            }
            return ;
        }
        numberObj.text(number);
        clearTimeout(t1);
        t1 = setTimeout(function(){
            $.ajax({
                url:'/perfect/index.php/shop/addnum',
                data:{number,gid},
                success:function(data){
                    console.log(data);
                    getNumber();
                }
            })
        },1000)
    });
 /////////////////商品状态/////////////////////////////////
    $('.shop-car .icon-duigou').on('click',function(){
        $(this).toggleClass('hot');
        // 总价  数量
        getNumber();
    });

  /////////////////////////////////////////////////////////////////////
    $('.jiesuan').on('click',function(){
        let duigou  = $('.shop-car-duigou:not(.hot)').closest('.shop-car');
        let arr = [];
        $.each(duigou,function(index,obj){
          let gid = $(obj).data('gid');
          let number = $(this).find('.number').text().trim();
          arr.push({gid,number});
        });
        $.ajax({
            url:'/perfect/index.php/orders/add',
            data:{data: JSON.stringify(arr)},
            success:function(data){
                console.log(data);
            }
        });
    });
//////////////////////getNumber getTotal///////////////////////////////
    function getNumber(){
        let duigou  = $('.shop-car-duigou:not(.hot)').closest('.shop-car');
        let total = 0;
        let totalPri = 0;
        $.each(duigou,function (index,value) {
            let price = $(this).find('.jiaqian')[0].innerText;
            let number = $(this).find('.number').text();
            total += number*1;
            totalPri += price * number;
        });

        $('.total').text(total);
        $('.totalPri').text(totalPri);
    }
});