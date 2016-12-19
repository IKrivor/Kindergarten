$(document).ready(function () {
    $("select").change(function(){
        if($(this).val() == "Представитель детского сада"){
            $('#kinder-choice').removeClass("hidden");
            $('#parent-choice').addClass("hidden");
        } else if($(this).val() == "Родитель"){
            $('#kinder-choice').addClass("hidden");
            $('#parent-choice').removeClass("hidden");
        }else{
            $('#kinder-choice').addClass("hidden");
            $('#parent-choice').addClass("hidden");
        }
    });

    $('body').on('click', '#sad-reg', function(e){
        e.preventDefault();
        alert("!");
    });
});