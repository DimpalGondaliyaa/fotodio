$(function()
{
    var baseurl=$('#base_url').val();
     $('.add_zone').on('click',function()
    {
  
      var dataid = $(this).data("id");
      alert(dataid);
                $.post(baseurl+"Add_zone/insertt/"+dataid,function(dataid){
            window.location.reload();
            });
     
    });
   });