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

$(".detail-event").hide();
jQuery( document ).on( 'click', '.thumbnail', function() {
    var height = $("section.event").css("height");
    $(".past-events").css("display","none");
    $(".upcoming-events").css("display","none");
    $(".see-button").css("display","none");
     // do AJAX in DETAIL-EVENT Block
    var post_id = this.id;
    var call_type = 2;
    var str = '&post_id='+post_id+"&call_type="+call_type+'&action=ajax_more_posts'; //'&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=ajax_more_posts';
    $.ajax({
        type: "post",
        dataType: "html",
        url: ajaxmoreposts.ajaxurl,
        data: str,
        success: function(data){
            $(".detail-event").css({"display":"block", "height":height});
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
        
        $(".detail-event").css("display","none");
        $(".past-events").show();
        $(".upcoming-events").show();
        $(".see-button").show();
});

