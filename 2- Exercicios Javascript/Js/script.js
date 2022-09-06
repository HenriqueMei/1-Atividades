//Exercicio 1
var  inputExercicio1 = document.getElementById("inputExercicio1");
inputExercicio1.addEventListener("keyup", function(e){
        var key = e.which || e.keyCode;
        if (key == 13) {
          calc();
        }
      });

function calc(){
        var numero = +inputExercicio1.value;
      var listTabuada = [];
      
      for(var i = 0; i <=10; i++ ){
          var tabuada = 0;
          tabuada = numero * i;
          listTabuada.push(numero +" * " +i + "= " + tabuada);
      }
      alert(listTabuada);
      console.table(listTabuada);
    }
function validAndReturn()
{
return event.charCode >= 48 && event.charCode <= 57
}

//Exercicio 2 
document.querySelector("#inputExercirio2Nota2").addEventListener("keypress", function(e){
    if(e.which == 13){
        calcularMedia();
     }
},false);
function calcularMedia(){
    const nome = document.querySelector("#inputExercirio2Nome").value;
    const nota1 = document.querySelector("#inputExercirio2Nota1").value;
    const nota2 = document.querySelector("#inputExercirio2Nota2").value;
    if(nome =="" || nota1 =="" || nota2==""){
        alert("preencha todos os campos")
    }
    if(nota1 >10 || nota2 >10) {
        alert("Notas devem ser no maximo 10 ou maior ou igual a zero")
    if(nota1 >10) return document.querySelector("#inputExercirio2Nota1").focus();
    else return  document.querySelector("#inputExercirio2Nota2").focus();
    }
    var media = (+nota1 + +nota2) / 2 ;
    alert(`A média do aluno ${nome} é ` + media);
}


//Exercicio 3 
const paragrafo = document.querySelector("#demo");
const buttonEsconderExercicio3 = document.querySelector("#buttonEsconderExercicio3");
function esconderParagrafoExercicio3(){
    if(buttonEsconderExercicio3.textContent =="Esconder"){
    paragrafo.style.display='none';
    buttonEsconderExercicio3.textContent ="Exibir"    
}
    else {
        paragrafo.style.display='block';
        buttonEsconderExercicio3.textContent ="Esconder"  
    }
}

//exericio 4;
var elementos = document.getElementsByClassName("teste");
var paragrafo1 = elementos[0];



function mudarParagrafo1(){
    paragrafo1.textContent ="Este Paragrafo foi alterado";
}









