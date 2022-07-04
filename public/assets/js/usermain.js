$(function () {
    $("input[type='checkbox'].abc").change(function(){
        var a = $("input[type='checkbox'].abc");
        if(a.length == a.filter(":checked").length){
            alert('all checked');
        }
    });
});