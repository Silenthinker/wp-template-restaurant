var ppp = 4; // Post per page
var pageNumber = 1;


function load_posts(){
    pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=ajax_more_posts';
    $.ajax({
        type: "post",
        dataType: "html",
        url: ajaxmoreposts.ajaxurl,
        data: str,
        success: function(data){
            var $data = $(data);
            if($data.length){
                $("#ajax-posts").append($data);
                $("#more_posts").attr("disabled",false);
            } else{
                $("#more_posts").attr("disabled",true);
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            
            // alert(data);
        }

    });
    return false;
}

jQuery( document ).on( 'click', '#more_posts', function() {
    $("#more_posts").attr("disabled",true); // Disable the button, temp.
    load_posts();
    
})