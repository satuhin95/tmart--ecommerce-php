$(document).ready(function(){
   $("body").on("change","select[name='catid']",function(){
      var catid = $(this).val();
      catid = parseInt(catid);
      if (catid) {
            $.ajax({
               type: 'POST',
               data: {
                  'catid': catid
               },
               //url:  $("meta[name='url']").attr('content') + "/ajax-load-subcategory.php",
               //url: $("meta[name='url']").attr('content') + 'js/ajax-load-subcategory.php',
               success: function(data){
                  var html = "";
                  for(var index in data){

                     html +="<option value='"+data[index]['id']+"'>"+data[index]['name']+"</option>";
                       $("select[name='scatid']").html(html);
                  }

               }
            });

      }
      else{
         $("select[name='scatid']").html("<option value='0'>Choose Country First</option>");
      }
   });

});
