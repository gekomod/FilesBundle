$(function() {
      $.get("/admin/files/filesfolders/*", function( data ) {
        $( "#foldersFiles" ).html( data );
      });
});

$(function() {
      $.get("/admin/files/filesfoldersf/*", function( data ) {
        $( "#file_list" ).html( data );
      });
});

$(document).on('click', '#folder', function() { 
      $.get("/admin/files/filesfolders/"+$(this).attr('data-href'), function( data ) {
        $( "#foldersFiles" ).html( data );
      });
      
      $.get("/admin/files/filesfoldersf/"+$(this).attr('data-href'), function( data ) {
        $( "#demo-mail-list" ).html( data );
      });
});

(function ($) {
    $(document).ready(function () {
        
        function download(file, text) { 
  
                    //creating an invisible element 
                    var element = document.createElement('a'); 
                    element.setAttribute('href', 'data:text/plain;charset=utf-8, ' 
                                         + encodeURIComponent(text)); 
                    element.setAttribute('download', file); 
  
                    //the above code is equivalent to 
                    // <a href="path of file" download="file name"> 
  
                    document.body.appendChild(element); 
  
                    //onClick property 
                    element.click(); 
  
                    document.body.removeChild(element); 
                } 
        
        $("#download").on('click', function () {
            if($('#file-list-2').is(':checked')){
  download($(this).attr("value"),'TEST');
}
       
        });
    });
})(jQuery);

