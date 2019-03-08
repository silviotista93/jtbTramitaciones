$(function (){
    $("input[type='number']").keypress(function (e){
        if (isNaN(parseInt(e.key))){
            e.preventDefault();
        }
    });
});