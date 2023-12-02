

$(function() {
    $("input.switch_button").on("change" ,function(e){
        // $(ele).parent('.switch_ON').display=ele.checked?"block":"none";
        // console.log($(ele).nextAll('.switch_ON'))
        e.target.checked&&$(this).parent().parent().parent().children(".switch_ON").hide();
        e.target.checked||$(this).parent().parent().parent().children(".switch_ON").show();
        e.target.checked||$(this).parent().parent().parent().children(".switch_OFF").hide();
        e.target.checked&&$(this).parent().parent().parent().children(".switch_OFF").show();
    })
    $("input.switch_button").each(function(i,ele){
        ele.checked&&$(this).parent().parent().parent().children(".switch_ON").hide();
        ele.checked||$(this).parent().parent().parent().children(".switch_ON").show();
        ele.checked||$(this).parent().parent().parent().children(".switch_OFF").hide();
        ele.checked&&$(this).parent().parent().parent().children(".switch_OFF").show();
    })
});