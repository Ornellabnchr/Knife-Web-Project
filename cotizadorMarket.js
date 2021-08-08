///obtengo datos de cantidad de objetos comprados
var cantRem1= document.getElementById('cant_rem1');
var cantRem2=document.getElementById('cant_rem2');
var cantCST=document.getElementById('cant_cst');
var cantS=document.getElementById('cant_s');

///obtengo datos de precio 
var precioRem1=document.getElementById('p_rem1');
var precioRem2=document.getElementById('p_rem2');
var precioCST=document.getElementById('p_cst');
var precioS=document.getElementById('p_s');


var probandoBoton = document.getElementById('calcular')
///llamada a boton calcular
probandoBoton.addEventListener('click', calcularTodo)


var valorDiv=document.getElementById('suma-total')

///Creo items/ Listas de productos
var items = document.getElementsByClassName('list-group-item')


function calcularTodo(){
    console.log("llamada a boton")
   ///guardo la cantidad comprada
    var cantRem1C=Number(cantRem1.value)
    console.log("Cantidad de Remeras 1: " + cantRem1C)
    var cantRem2C=Number(cantRem2.value)
    console.log("Cantidad de Remeras2 : " + cantRem2C)
    var cantCSTC=Number(cantCST.value)
    console.log("Cantidad de Cassettes: " + cantCSTC)
    var cantSC=Number(cantS.value)
    console.log("Cantidad de Stickers: " + cantSC)

  

    //guardo precios unitarios
    console.log("PRECIOS UNITARIOS")
    var precioRem1U=Number(precioRem1.value)
    console.log("Precio de Remera 1: $" + precioRem1U)
    var precioRem2U=Number(precioRem2.value)
    console.log("Precio de Remera 2: $" + precioRem2U)
    var precioCSTU=Number(precioCST.value)
    console.log("Precio de Casettes: $" + precioCSTU)
    var precioSU=Number(precioS.value)
    console.log("Precio de Stickers: $" + precioSU )

///guardo precios totales de cada unidad segun cantidad comprada
    console.log("Precio Total: ")
    var cantRem1T=(cantRem1C* precioRem1U)
    console.log("Precio Total de Remeras 1: $" + cantRem1T)
    var cantRem2T=(cantRem2C* precioRem2U)
    console.log("Precio Total de Remeras 2: $" + cantRem2T)
    var cantCSTT=(cantCSTC* precioCSTU)
    console.log("Precio Total de Cassettes: $" + cantCSTT)
    var cantST=(cantSC* precioSU)
    console.log("Precio Total de stickers: $" + cantST)
  

   ///sumo toda la compra
    var totalPagar=cantRem1T+cantRem2T+cantCSTT+cantST
    console.log("Precio total a pagar: $"+totalPagar)
    
   
///Agrego contenido a items / lista de productos comprados y el regalo
    items[0].textContent = 'Knife T-Shirt :  ' + cantRem1C + ' * $' + precioRem1U +  ' ------------ $' + cantRem1T
    items[1].textContent ='Knife T-Shirt :  ' + cantRem2C + ' * $' + precioRem2U +  ' ------------ $' + cantRem2T
    items[2].textContent = 'Cassette Kamé-Bleeding Out Shadows Of The Past :  ' + cantCSTC + ' * $' + precioCSTU +  ' ------------ $' + cantCSTT
    items[3].textContent = 'Knife Stickers :  ' + cantSC + ' * $' + precioSU +  ' ------------ $' + cantST
    
    ///muestro por consola el resumen
    console.log("RESUMEN: ")
    for(var i=0;i<items.length;i++){

    console.log(items[i])
    
    
    }

    ///agrego el resultado del total a pagar 
    valorDiv.textContent= "$" +totalPagar
    console.log(valorDiv)

}
