$(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})

$(".ul").click(function(j){
    j.stopPropagation();
})
