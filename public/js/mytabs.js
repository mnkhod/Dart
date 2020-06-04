var hoes = document.querySelectorAll('.hoes');
var hoes2 = document.querySelectorAll('.hoes2');

for(i=0; i<hoes.length; i++){
    hoes[i].addEventListener('click', function(){
        $(hoes).removeClass("active");
        $(hoes2).removeClass("active");
        hoes[i].classList.add("active");
        hoes2[i].classList.add("active");
    });
}