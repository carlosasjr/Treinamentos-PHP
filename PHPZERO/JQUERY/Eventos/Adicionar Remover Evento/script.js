$(document).ready(function () {


 //adicionando evento

 $('button').click(function () {
     //evento de click
 })

 //ou

 $('button').bind('click',function () {
     //evento de click
 })

 //ou

 ('button').on('click', function () {
     //evento de click
 })

 //remover evento
 $('button').unbind('click');

 //ou
 $('button').off('click');



})


