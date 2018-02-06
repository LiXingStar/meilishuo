$(function () {
   let btn = $($('.bankuai21')[0]);
   let search = location.search.split('=')[1];
   btn.on('click',function(e){
       e.preventDefault();
       $.ajax({
           url:'/perfect/index.php/shop/add',
           data:{gid:search},
           success:function(data){
               console.log(data);
           }
       })
   })
});