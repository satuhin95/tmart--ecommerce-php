$(document).ready(function(){
   $("body").on("change","select[name='cntid']",function(){
      var cntid = $(this).val();
      cntid = parseInt(cntid);
      if (cntid) {
         $.ajax({
            type: 'POST',
            data: {
               'cntid': cntid
            },
            url: $("meta[name='url']").attr('content') + '/library/ajax-load-city.php',
            success: function(data){
               var html = "";
               for(var index in data){
                 console.log(data[index]);
                 html +="<option value='"+data[index]['id']+"'>"+data[index]['name']+"</option>";
                 $("select[name='citid']").html(html);
              }

           }
        });

      }
      else{
         $("select[name='citid']").html("<option value='0'>Choose Country First</option>");
      }
   });








});