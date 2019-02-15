var dt = new Date();


//pegando o dia
dt.getDate();

//pegando o dia da semana 0 a 6
dt.getDay();

//pegando o ano
dt.getFullYear();

//pegando mês 0 a 11
dt.getMonth();

//pegando hora atual
dt.getHours();

//pegando minutos
dt.getMinutes();

//pegando segundos
dt.getSeconds();

dt.getDate() + "/" + (dt.getMonth() + 1) + "/" + dt.getFullYear();


var diasemana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

diasemana[dt.getDay()];

//adicionar 60 dias a data
dt.setDate(dt.getDate() + 60);

//adicionando horas
dt.setHours(dt.getHours() + 25);
