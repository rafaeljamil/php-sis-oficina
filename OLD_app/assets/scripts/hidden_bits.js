var selector = document.getElementsByTagName("a");
var cad = document.getElementById("cadastrar");
var bus = document.getElementById("buscar");

for (var i = 0; i < selector.length; i++){
    selector[i].addEventListener("click", function(){
        n = this.innerHTML;
        console.log(n);
        if (n=="Cadastrar"){
            cad.classList.remove('hidden');
            bus.classList.add('hidden');
        }else if (n=="Buscar"){
            cad.classList.add('hidden');
            bus.classList.remove('hidden');
        }
    })
}