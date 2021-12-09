
function equalHeight(group) {
    tallest = 0;
    group.each(function() {
        thisHeight = $(this).height();
        if(thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.height(tallest);
}
$(document).ready(function(){
    //Igualamos la altura de los elementos
    if(screen.width >= 990){
        equalHeight($(".igualarAltura"));

    }
});
