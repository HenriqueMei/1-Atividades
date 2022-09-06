function getFormvalue(event){
        
        if(event.target.id != null){
            const formData = new FormData(event.target);
            const formProps = Object.fromEntries(formData);
            const nome = formProps.nome;
            const sobrenome= formProps.sobrenome
            console.log(sobrenome)
                alert(`${nome}  ${sobrenome}`);
        }
}


function exericio2(){
var numero1 = prompt("numero 1").toString();
var numero2 = prompt("numero 2").toString();
var numero3 = prompt('numero 3').toString();

listNumeros = [];
listanumerosComCaractere = [];

listNumeros.push(numero1,numero2,numero3)


for(var z = 0 ; z < listNumeros.length; z++){	
    
for (let c of listNumeros[z]) {
	if (!isLetter(c) && !isDigit(c)) {
		listanumerosComCaractere.push(listNumeros[z])
	}
}
}
function isLetter(str) {
	return str.length === 1 && str.match(/[a-zA-Z]/i);
}

function isDigit(str) {
	return str.length === 1 && str.match(/[0-9]/i);
}

console.log(listanumerosComCaractere);
var contem = listanumerosComCaractere.length ==0 ? "Nenhum caractere encontrado" : listanumerosComCaractere;
alert("Numeros com caracteres especiais\n\n\n" +  contem);

}


var listNumerosImparPar = [];

function verificarParImpar(){
    listNumerosImparPar =[];
    
    for(var i = 0; i<=15; i++ ){
         if(i%2 == 0){
            listNumerosImparPar.push(i + " é Par");
         }
         else{
            listNumerosImparPar.push(i + " é Impar");
         }
    }

    var list = document.querySelector('#ulLista');

    for(var i = 0; i < listNumerosImparPar.length; i++) {
        var item = document.createElement('li');
        item.appendChild(document.createTextNode(listNumerosImparPar[i]));
        list.appendChild(item);
       
    }
    console.log(listNumerosImparPar)
    alert(listNumerosImparPar);
    

   
 
}



