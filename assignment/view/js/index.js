$(function(){
    $(".show-more").click(function(){
        var obj=$(this).parent().prev("img");
        console.log(obj.attr("src"));
        if(obj.attr("src")){
            $("#modal-img").attr("src",obj.attr("src"));
        }
        $("#exampleModal").modal("show");


    })
})

