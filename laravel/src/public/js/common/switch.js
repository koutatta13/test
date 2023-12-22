

// $(function() {
//     $("input.switch_button").forEach(element => {
//         element.checked&&$(this).parent().parent().parent().children(".switch_ON").hide();
//         element.checked||$(this).parent().parent().parent().children(".switch_ON").show();
//         element.checked||$(this).parent().parent().parent().children(".switch_OFF").hide();
//         element.checked&&$(this).parent().parent().parent().children(".switch_OFF").show();
//     });
//     $("input.switch_button").on("change" ,function(e){
//         // $(ele).parent('.switch_ON').display=ele.checked?"block":"none";
//         // console.log($(ele).nextAll('.switch_ON'))
//         e.target.checked&&$(this).parent().parent().parent().children(".switch_ON").hide();
//         e.target.checked||$(this).parent().parent().parent().children(".switch_ON").show();
//         e.target.checked||$(this).parent().parent().parent().children(".switch_OFF").hide();
//         e.target.checked&&$(this).parent().parent().parent().children(".switch_OFF").show();
//     })
//     $("input.switch_button").each(function(i,ele){
//         ele.checked&&$(this).parent().parent().parent().children(".switch_ON").hide();
//         ele.checked||$(this).parent().parent().parent().children(".switch_ON").show();
//         ele.checked||$(this).parent().parent().parent().children(".switch_OFF").hide();
//         ele.checked&&$(this).parent().parent().parent().children(".switch_OFF").show();
//     })
// });
(function() {
    const ele=document.querySelectorAll(".switch");

    ele==null||initialSwitch(ele);
    function initialSwitch(elements){
        elements.forEach(ele => {
            initSwitch(ele)
            ele.addEventListener("change",(e)=>toggleSwitch(e));
            //ele.parentNode.querySelector("#switch_"+ele.dataset+"_ON");
        });
    }

    function initSwitch(ele){
        if(ele.checked){
            ele.parentNode.parentNode.querySelector("#switch_"+ele.dataset.switchId+"_ON").style.display="";
            ele.parentNode.parentNode.querySelector("#switch_"+ele.dataset.switchId+"_OFF").style.display="none";
        }else{
            ele.parentNode.parentNode.querySelector("#switch_"+ele.dataset.switchId+"_ON").style.display="none";
            ele.parentNode.parentNode.querySelector("#switch_"+ele.dataset.switchId+"_OFF").style.display="";
        }
    }
    function toggleSwitch(e){
        console.log(e.target.parentNode.parentNode.parentNode);
        if(e.target.checked){
            e.target.parentNode.parentNode.parentNode.querySelector("#switch_"+e.target.dataset.switchId+"_OFF").style.display="none";
            e.target.parentNode.parentNode.parentNode.querySelector("#switch_"+e.target.dataset.switchId+"_ON").style.display="";
        }else{
            e.target.parentNode.parentNode.parentNode.querySelector("#switch_"+e.target.dataset.switchId+"_ON").style.display="none";
            e.target.parentNode.parentNode.parentNode.querySelector("#switch_"+e.target.dataset.switchId+"_OFF").style.display="";
        }
    }
}())