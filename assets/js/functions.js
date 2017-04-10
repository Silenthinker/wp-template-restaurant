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
});
var state = {
        id: 2,
        name: "detail"
};
$(document).ready(function(){
    
    $(".detail-event").hide();
    $(".clip").click(function(){
        //$(".past-events").css("display","none");
        //$(".upcoming-events").css("display","none");
        //$(".see-button").css("display","none");
         // do AJAX in DETAIL-EVENT Block
        
        $.ajax({
            type: "post",
            dataType: "html",
            /*url: ajaxmoreposts.ajaxurl,
            data: str,*/
            url:"./test.json",
            success: function(data){
                console.log(data);
                $(".detail-event").css("display","block");
                $(".detail-event").html(data);
            },
            error : function(jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
        window.history.pushState(state, "", "./event-details");
    });
    window.addEventListener("popstate", function(e) {
            var state = window.history.state;
            console.log(state);
            $(".detail-event").css("display","none");
    });
    
});

