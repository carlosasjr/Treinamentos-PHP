function Criar(){
    var container = document.getElementsByClassName('container');


    if (container.length == 0) {
        var container = document.createElement('div');
        container.setAttribute("class", 'container');
        document.body.appendChild(container);

        var element = document.createElement('div');
        element.setAttribute("class", "bola");

        container.appendChild(element);
    } else {
        var container1 = document.getElementsByClassName('container');
        var element = document.createElement('div');
        element.setAttribute("class", "bola");
        container1.appendChild(element);
    }

}