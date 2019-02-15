var init;
var interval = 1000;
var countEst = 0;
$( function () {

    $('.jLimpar').click(function () {
        $('.bola').remove();
        countEst = 0;
        document.getElementById('contador').innerHTML = 0;
    });


    $('.jParar').click(function () {
        window.location.href = window.location.href;
    });

});

function addBola(){
    var bola = document.createElement('div');
    bola.setAttribute('class', 'bola');
    var p1 = Math.floor(Math.random() * 900) + 100;
    var p2 = Math.floor(Math.random() * 400) + 100;

    var bg = Math.floor(Math.random() * 0xFFFFFF);
    bg = "#" + ("000000" + bg.toString(16)).substr(-6);

    bola.setAttribute('style', "left:" + p1 + 'px; top:' + p2 +'px; background-color: ' + bg );
    bola.setAttribute('onclick', 'EstourarBola(this)');

    document.body.appendChild(bola);

}
function EstourarBola(obj){
    document.body.removeChild(obj);
    countEst++;
    document.getElementById('contador').innerHTML = countEst;

    var resto = countEst % 10;
    if(resto==0){
        interval -= 0010;
        init = setInterval(addBola, interval);
    }
}
function Inicializar(){
    init = setInterval(addBola, 1000);
}
