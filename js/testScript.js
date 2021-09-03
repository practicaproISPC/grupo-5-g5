function ocultarDiv(idDelDiv) {
    /*toma el id de un div, y alterna la propiedad display entre none y
    block, dejandolo en el estado contrario en el que se encontraba
    (visible si estaba oculto, oculto si estaba visible)*/
    window.location.href = '#';
    var x = document.getElementById(idDelDiv);
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}
/*
function ocultarTarjeta(){
    if (document.getElementById("usaTarjeta").checked){
        ocultarDiv("minimoTarjeta")
    } else {
        ocultarDiv("minimoTarjeta")
    }
} */

function ocultarTarjeta(){
        ocultarDiv("minimoTarjeta")
}


function ocultarSegunSeleccion1(){
    var datosDinero = document.getElementsByName("rDatosDinero").forEach(radio => {
        if (radio.checked){
            //console.log(radio.value);
            seleccion = radio.value;
            ocultarDiv("divHablarDeDinero");
            if (seleccion === "n"){
                location.href='PagRecomendaciones.php';
            } else {
                //console.log("seguir con el test")
                ocultarDiv("ultimoMes")
            }
        }
    } )
};

function deshabConCheckbox(check, deshabilitar){
    /*Recibe el id de un textbox y el de un checkbox. Si el checkbox está seleccionado
    limpia el valor del textbox y lo deshabilita.*/
    var check = document.getElementById(check)
    if (check.checked){
        document.getElementById(deshabilitar).value = ""
        document.getElementById(deshabilitar).disabled = true;
    } else {
        document.getElementById(deshabilitar).disabled = false;
    }
}


function conoceGastos(){
    /*Valida si se ingresaron datos en montos o se seleccionó que no sabe
    En caso contrario lanza alert pidiendo datos minimos
    Si todo es correcto oculta la parte del formulario y muestra 
    la siguiente sección correspondiente*/
    var check1 = document.getElementById("noSabe")
    var check2 = document.getElementById("noSabe1")
    var monto0 = document.getElementById("ingreso")
    var monto1 = document.getElementById("consumoBasico")
    var monto2 = document.getElementById("consumoPersonal")
    if ((monto0.value=="") || (monto1.value == "" && check1.checked==false) || (monto2.value == "" && check2.checked==false)){
        window.alert("Debe indicar un monto o indicar que no está seguro");
        return
    } else if ((Number(monto0.value)<(Number(monto1.value)+Number(monto2.value)))){
        window.alert("La suma de los gastos deben ser menores o iguales a los ingresos. Recuerde que le consultamos sólo lo que gastó de lo que percibió en el último mes.");
        return
    }
    ocultarDiv("ultimoMes");
    if (check1.checked || check2.checked){
            //console.log("True");
            location.href='Resultado1.php';
        } else{
            //console.log("False")
            ocultarDiv("deudas");
        }
    };

function estaEndeudado(){
    var r1 = document.getElementById("si1")
    var r2 = document.getElementById("si2")
    var r3 = document.getElementById("si4")
    ocultarDiv("deudas");
    if (r1.checked || r2.checked || r3.checked){
        console.log("tiene deudad");
        location.href='Resultado2.php';
    }else {
          //console.log("no tiene deuda"); 
         /*  ocultarDiv("ahorros"); */
          calcularAhorros("ingreso","consumoBasico","consumoPersonal","xAhorros");
        }
};

function calcularAhorros(idIngresos,idConsumoBas, idConsumoPers, idSalida){
    /*Calcula los ahorros que podría tener la persona, recibiendo el id de los boxs en donde introdujo
	sus ingrsos, id del box donde introdujo su consumo básico e id del box donde introdujo su consumo personal. 
	Segun las circunstancias le envía a la carrera de la rata o devuelve en id saluda (de un elemento h3) 
	el texto 'A razón de lo expuesto podría tener ahorrados $x' con el resultado del cálculo */
    ingresos = document.getElementById(idIngresos).value
    consumoBasico = document.getElementById(idConsumoBas).value
    consumoPersonal = document.getElementById(idConsumoPers).value
    ahorros = ingresos * 20 / 100
	stringRes = "A razón de lo expuesto, podrías tener ahorrados $ "
    sobrante = ingresos - consumoBasico - consumoPersonal
    if (sobrante < ahorros){
        console.log("Esta en la Carrera de la Rata");
        location.href='Resultado4.php';

    }else {
       document.getElementById(idSalida).innerHTML = stringRes + ahorros
       ocultarDiv("ahorros");
       
    }
    
}


function tieneAhorros(){
    var r1 = document.getElementById("si5")
    var r2 = document.getElementById("no5")
    ocultarDiv("ahorros")
    if (r1.checked){
        location.href='Resultado3.php';
    }else{
        location.href='Resultado4.php';
    }
}
