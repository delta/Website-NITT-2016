function sch_slide(){
    //$(".search_top").onClick(function(){
    $(".search_top").animate({
        width:'200px'
    }, 400);
    // });
    $(".search_top").blur(function(){
        $(this).animate({
            width:'120px'
        }, 400);
    });
}


function onKeyPress(e, id) {
    var unicode = e.charCode ? e.charCode : e.keyCode;

$('#srch_load1').show();

    if (unicode != 13) {
        var srch = $("#"+id).val();
        if (srch.trim() == "") {
            $("#ajax_search").hide();
        } else {
            $("#ajax_search").show();
        }
    }
}

function goForSearch(e,click) {
  
}