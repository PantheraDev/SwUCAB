
(function(){
    "use strict";
    
    document.addEventListener('DOMContentLoaded', function(){
        
        let pag = window.location;
        console.log(pag)
        //Registro de personas
        if(pag.href ==="http://localhost/SwUCAB/index.php?sw=prod"){

            //PRODUCTO
            
            let btn = document.getElementById("btn-añadir2");
            let ped = document.getElementById("pedido");
            
            ped.style.display = "none";

            btn.addEventListener('click',function(){
                
                ped.style.display = 'block';
                btn.innerText="Añadir al Carrito";
            });
        }
        else if(pag.href ==="http://localhost/SwUCAB/cuenta.php"){

            
            let datosMostrados = document.getElementById("datos-mostrados");
            let btnModDatos = document.getElementById("modificar-datos");
            let formDatos = document.getElementById("act-datos-contac");

            let valorPJ = document.getElementById('persona-j')
            let valorPN = document.getElementById('persona-n')
            let datosPJ = document.getElementById('datos-pj');
            let datosPN = document.getElementById('datos-pcn');
            let legendPN = document.getElementById('pn');
            
            formDatos.style.display = "none";

            btnModDatos.addEventListener('click', function(){
                if(datosMostrados.style.display !== "none"){
                    datosMostrados.style.display = "none";
                    formDatos.style.display = "block";
                    btnModDatos.innerText = "Guardar";  
                }
            });

            if(!valorPJ.checked && !valorPN.checked){
                datosPJ.style.display = 'none';
                datosPN.style.display = 'none';
            }

            valorPJ.addEventListener('click', function(){
                if(valorPN.checked){

                    valorPN.checked = false;

                    datosPJ.style.display = 'grid';
                    datosPN.style.display = 'grid';
                }
                else{
                    datosPJ.style.display = 'grid';
                    datosPN.style.display = 'grid';
                }

                legendPN.innerText = 'Persona de Contacto';

            });

            valorPN.addEventListener('click', function(){
                if(valorPJ.checked){

                    valorPJ.checked = false;

                    datosPJ.style.display = 'none';
                    datosPN.style.display = 'grid';
                }
                else{
                    datosPJ.style.display = 'none';
                    datosPN.style.display = 'grid';
                }
                let xs = document.createElement('?php');
                legendPN.insertAdjacentHTML('afterbegin',);
                legendPN.innerText = 'Persona Natural';

            });
            
            let btnModMP = document.getElementById("modificar-MP");
            let formMD = document.getElementById("act-MD");
            let mostrarMP = document.getElementById("mostrar-mp");

            formMD.style.display = "none";

            btnModMP.addEventListener('click', function(){
                
                if(mostrarMP.style.display !== "none"){
                    formMD.style.display = "block";
                    mostrarMP.style.display = "none";
                    btnModMP.innerText = "Guardar";
                }
            });

            
        }
        else if(pag.href ==="http://localhost/SwUCAB/god.php"){
            
            //GOD
            //AÑADIR/ELIMINAR/VER/ACTUALIZAR PRODUCTOS

            let verP = document.getElementById("ver-god1");
            let eliminarP = document.getElementById("elim-god1");
            let agregarP = document.getElementById("agg-god1");
            let actualizarP = document.getElementById("actu-god1");

            let aggPF = document.getElementById("agg-producto");
            let elimPF = document.getElementById("elim-producto");
            let actuPF = document.getElementById("actu-producto");
            let verPF = document.getElementById("ver-producto");
            
            verPF.style.display = 'none';
            aggPF.style.display = 'none';
            elimPF.style.display = 'none';
            actuPF.style.display = 'none';

            eliminarP.addEventListener('click',function(){
                aggPF.style.display = 'none';
                elimPF.style.display = 'block';
                actuPF.style.display = 'none';
                verPF.style.display = 'none';
            });

            agregarP.addEventListener('click',function(){
                aggPF.style.display = 'block';
                elimPF.style.display = 'none';
                actuPF.style.display = 'none';
                verPF.style.display = 'none';
            });

            actualizarP.addEventListener('click',function(){
                aggPF.style.display = 'none';
                elimPF.style.display = 'none';
                actuPF.style.display = 'block';
                verPF.style.display = 'none';
            });

            verP.addEventListener('click',function(){
                verPF.style.display = 'block';
                aggPF.style.display = 'none';
                elimPF.style.display = 'none';
                actuPF.style.display = 'none';
            });

             //AÑADIR/ELIMINAR/VER/ACTUALIZAR USUARIOS

            let verU = document.getElementById("ver-god2");
            let eliminarU = document.getElementById("elim-god2");
            let agregarU = document.getElementById("agg-god2");

            let verFU = document.getElementById("ver-user");
            let aggFU = document.getElementById("agg-user");
            let elimFU = document.getElementById("elim-user");

            verFU.style.display = 'none';
            elimFU.style.display = 'none';
            aggFU.style.display = 'none';

            verU.addEventListener('click',function(){
                verFU.style.display = 'block';
                elimFU.style.display = 'none';
                aggFU.style.display = 'none';
            });

            eliminarU.addEventListener('click',function(){
                elimFU.style.display = 'block';
                aggFU.style.display = 'none';
            });

            agregarU.addEventListener('click',function(){
                elimFU.style.display = 'none';
                aggFU.style.display = 'block';
            });
            
             //AÑADIR/ELIMINAR/VER/ACTUALIZAR EMPLEADOS

            let verE = document.getElementById("ver-god3");
            let eliminarE = document.getElementById("elim-god3");
            let agregarE = document.getElementById("agg-god3");

            let verFE = document.getElementById("ver-empleado");
            let aggFE = document.getElementById("agg-empleado");
            let elimFE = document.getElementById("elim-empleado");

            verFE.style.display = "none";
            aggFE.style.display = "none";
            elimFE.style.display = "none";

            verE.addEventListener('click', function(){
                verFE.style.display = "block";
                aggFE.style.display = "none";
                elimFE.style.display = "none";
            });

            eliminarE.addEventListener('click', function(){
                aggFE.style.display = "none";
                elimFE.style.display = "block";
            });

            agregarE.addEventListener('click', function(){
                aggFE.style.display = "block";
                elimFE.style.display = "none";
            });

            ///clientes

            let verC = document.getElementById("ver-god4");
            let eliminarC = document.getElementById("elim-god4");
            let agregarC = document.getElementById("agg-god4");
            let elimC = document.getElementById("elim-cliente");
            let verClien = document.getElementById("ver-cliente");

            let selecP = document.getElementById("select-p2");

            let datosPJ2 = document.getElementById('datos-pj2');
            let datosPN2 = document.getElementById('datos-pcn2');

            selecP.style.display = "none";
            datosPJ2.style.display = "none";
            datosPN2.style.display = "none";
            elimC.style.display = "none";
            verClien.style.display = "none";

            verC.addEventListener('click', function(){
                selecP.style.display = "none";
                datosPJ2.style.display = "none";
                datosPN2.style.display = "none";
                elimC.style.display = "none";
                verClien.style.display = "block";
            });

            eliminarC.addEventListener('click', function(){
                selecP.style.display = "none";
                datosPJ2.style.display = "none";
                datosPN2.style.display = "none";
                elimC.style.display = "block";
                verClien.style.display = "none";
            });

            agregarC.addEventListener('click', function(){
                selecP.style.display = "block";
                datosPJ2.style.display = "none";
                datosPN2.style.display = "none";
                elimC.style.display = "none";
                verClien.style.display = "none";
            });

            //let datosMostrados2 = document.getElementById("ver-god4");
            //let btnModDatos2 = document.getElementById("modificar-datos");
            //let formDatos2 = document.getElementById("act-datos-contac");

            let valorPJ2 = document.getElementById('persona-j2');
            let valorPN2 = document.getElementById('persona-n2');
            
            let legendPN2 = document.getElementById('pn2');
            
            

            /*btnModDatos.addEventListener('click', function(){
                if(datosMostrados.style.display !== "none"){
                    datosMostrados.style.display = "none";
                    formDatos.style.display = "block";
                    btnModDatos.innerText = "Guardar";  
                }
            });*/

            if(!valorPJ2.checked && !valorPN2.checked){
                datosPJ2.style.display = 'none';
                datosPN2.style.display = 'none';
            }

            valorPJ2.addEventListener('click', function(){
                if(valorPN2.checked){

                    valorPN2.checked = false;

                    datosPJ2.style.display = 'grid';
                    datosPN2.style.display = 'grid';
                }
                else{
                    datosPJ2.style.display = 'grid';
                    datosPN2.style.display = 'grid';
                }

                legendPN2.innerText = 'Persona de Contacto';

            });

            valorPN2.addEventListener('click', function(){
                if(valorPJ2.checked){

                    valorPJ2.checked = false;

                    datosPJ2.style.display = 'none';
                    datosPN2.style.display = 'grid';
                }
                else{
                    datosPJ2.style.display = 'none';
                    datosPN2.style.display = 'grid';
                }

                legendPN2.innerText = 'Persona Natural';

            });

            

            
        
        }
        else if(pag.href === "http://localhost/SwUCAB/empleado.php"){
            //EMPLEADO
            //

            let verP2 = document.getElementById("ver-emp1");
            let eliminarP2 = document.getElementById("elim-emp1");
            let agregarP2 = document.getElementById("agg-emp1");
            let actualizarP2 = document.getElementById("actu-emp1");

            let aggPF2 = document.getElementById("agg-empleado2");
            let elimPF2 = document.getElementById("elim-producto2");
            let actuPF2 = document.getElementById("actu-producto2");
            let verPF2 = document.getElementById("ver-producto2");

            verPF2.style.display = 'none';
            aggPF2.style.display = 'none';
            elimPF2.style.display = 'none';
            actuPF2.style.display = 'none';

            eliminarP2.addEventListener('click',function(){
                aggPF2.style.display = 'none';
                elimPF2.style.display = 'block';
                actuPF2.style.display = 'none';
                verPF2.style.display = 'none';
            });

            agregarP2.addEventListener('click',function(){
                aggPF2.style.display = 'block';
                elimPF2.style.display = 'none';
                actuPF2.style.display = 'none';
                verPF2.style.display = 'none';
            });

            actualizarP2.addEventListener('click',function(){
                aggPF2.style.display = 'none';
                elimPF2.style.display = 'none';
                actuPF2.style.display = 'block';
                verPF2.style.display = 'none';
            });

            verP2.addEventListener('click',function(){
                verPF2.style.display = 'block';
                aggPF2.style.display = 'none';
                elimPF2.style.display = 'none';
                actuPF2.style.display = 'none';
            });

            //MODIFICACION DE USUARIOS

            let verU2 = document.getElementById("ver-emp2");
            let eliminarU2 = document.getElementById("elim-emp2");
            let agregarU2 = document.getElementById("agg-emp2");

            let verFU2 = document.getElementById("ver-user2");
            let aggFU2 = document.getElementById("agg-user2");
            let elimFU2 = document.getElementById("elim-user2");

            verFU2.style.display = 'none';
            elimFU2.style.display = 'none';
            aggFU2.style.display = 'none';

            verU2.addEventListener('click',function(){
                verFU2.style.display = 'block';
                elimFU2.style.display = 'none';
                aggFU2.style.display = 'none';
            });

            eliminarU2.addEventListener('click',function(){
                elimFU2.style.display = 'block';
                aggFU2.style.display = 'none';
                verFU2.style.display = 'none';
            });

            agregarU2.addEventListener('click',function(){
                elimFU2.style.display = 'none';
                aggFU2.style.display = 'block';
                verFU2.style.display = 'none';
            });

            //VENTAS

            /*let btnV = document.getElementById("btn-venta");
            let btnBC = document.getElementById("buscar-cliente");
            let ven = document.getElementById('vender');
            let datosCli = document.getElementById("datos-cli");
            let busCliente = document.getElementById("b-cliente");

            ven.style.display = "none";
            datosCli.style.display = "none";
            busCliente.style.display = "none";

            /*btnV.addEventListener("click", function(){
                busCliente.style.display = "flex";
                btnV.style.display = "none";
            });
            /*btnBC.addEventListener("click",function(){
                ven.style.display = "flex";
                datosCli.style.display = "block";
            })*/

            let btnPC1 = document.getElementById("p1");
            let btnPC2 = document.getElementById("p2");
            let btnPC3 = document.getElementById("p3");
            let btnPC4 = document.getElementById("p4");
            let btnPC5 = document.getElementById("p5");
            let btnPC6 = document.getElementById("p6");
            let btnPC7 = document.getElementById("p7");
            let btnPC8 = document.getElementById("p8");
            let btnPC9 = document.getElementById("p9");
            let btnPC10 = document.getElementById("p10");

            let canPC1 = document.getElementById("cp1");
            let canPC2 = document.getElementById("cp2");
            let canPC3 = document.getElementById("cp3");
            let canPC4 = document.getElementById("cp4");
            let canPC5 = document.getElementById("cp5");
            let canPC6 = document.getElementById("cp6");
            let canPC7 = document.getElementById("cp7");
            let canPC8 = document.getElementById("cp8");
            let canPC9 = document.getElementById("cp9");
            let canPC10 = document.getElementById("cp10");

            canPC1.disabled = true;
            canPC2.disabled = true;
            canPC3.disabled = true;
            canPC4.disabled = true;
            canPC5.disabled = true;
            canPC6.disabled = true;
            canPC7.disabled = true;
            canPC8.disabled = true;
            canPC9.disabled = true;
            canPC10.disabled = true;

            canPC1.style.backgroundColor = '#c4c4c4';
            canPC2.style.backgroundColor = '#c4c4c4';
            canPC3.style.backgroundColor = '#c4c4c4';
            canPC4.style.backgroundColor = '#c4c4c4';
            canPC5.style.backgroundColor = '#c4c4c4';
            canPC6.style.backgroundColor = '#c4c4c4';
            canPC7.style.backgroundColor = '#c4c4c4';
            canPC8.style.backgroundColor = '#c4c4c4';
            canPC9.style.backgroundColor = '#c4c4c4';
            canPC10.style.backgroundColor = '#c4c4c4';

            btnPC1.addEventListener("click",function(){
                if(btnPC1.checked == true){
                    canPC1.disabled = false;
                    canPC1.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC1.disabled = true;
                    canPC1.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC2.addEventListener("click",function(){
                if(btnPC2.checked == true){
                    canPC2.disabled = false;
                    canPC2.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC2.disabled = true;
                    canPC2.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC3.addEventListener("click",function(){
                if(btnPC3.checked == true){
                    canPC3.disabled = false;
                    canPC3.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC3.disabled = true;
                    canPC3.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC4.addEventListener("click",function(){
                if(btnPC4.checked == true){
                    canPC4.disabled = false;
                    canPC4.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC4.disabled = true;
                    canPC4.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC5.addEventListener("click",function(){
                if(btnPC5.checked == true){
                    canPC5.disabled = false;
                    canPC5.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC5.disabled = true;
                    canPC5.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC6.addEventListener("click",function(){
                if(btnPC6.checked == true){
                    canPC6.disabled = false;
                    canPC6.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC6.disabled = true;
                    canPC6.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC7.addEventListener("click",function(){
                if(btnPC7.checked == true){
                    canPC7.disabled = false;
                    canPC7.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC7.disabled = true;
                    canPC7.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC8.addEventListener("click",function(){
                if(btnPC8.checked == true){
                    canPC8.disabled = false;
                    canPC8.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC8.disabled = true;
                    canPC8.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC9.addEventListener("click",function(){
                if(btnPC9.checked == true){
                    canPC9.disabled = false;
                    canPC9.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC9.disabled = true;
                    canPC9.style.backgroundColor = '#c4c4c4';
                }
            });
            btnPC10.addEventListener("click",function(){
                if(btnPC10.checked == true){
                    canPC10.disabled = false;
                    canPC10.style.backgroundColor = '#ffffff';
                }
                else{
                    canPC10.disabled = true;
                    canPC10.style.backgroundColor = '#c4c4c4';
                }
            });



        }
        else if(pag.href ==="http://localhost/SwUCAB/pago.php"){

            let mp1 = document.getElementById("mp1");
            let mp2 = document.getElementById("mp2");
            let mp3 = document.getElementById("mp3");
            let mp4 = document.getElementById("mp4");
            let mp5 = document.getElementById("mp5");
            let mp6 = document.getElementById("mp6");
            let mp7 = document.getElementById("mp7");

            let mpT = document.getElementById("mp-tarjeta");
            let mpPM = document.getElementById("mp-pago-movil");
            let mpP = document.getElementById("mp-paypal");
            let mpZN = document.getElementById("mp-zinli");
            let mpZL = document.getElementById("mp-zelle");
            let mpC = document.getElementById("mp-cheque");
            let mpE = document.getElementById("mp-efectivo");


            if(!mp1.checked && !mp2.checked && !mp3.checked && !mp4.checked && !mp5.checked && !mp6.checked && !mp7.checked){
                
                mpT.style.display = "none";
                mpPM.style.display = "none";
                mpP.style.display = "none";
                mpZN.style.display = "none";
                mpZL.style.display = "none";
                mpC.style.display = "none";
                mpE.style.display = "none";

            }

            mp1.addEventListener('click',function(){

                mpT.style.display = "block";
                mpPM.style.display = "none";
                mpP.style.display = "none";
                mpZN.style.display = "none";
                mpZL.style.display = "none";
                mpC.style.display = "none";
                mpE.style.display = "none";
                
                mp2.checked = false;
                mp3.checked = false;
                mp4.checked = false;
                mp5.checked = false;
                mp6.checked = false;
                mp7.checked = false;
            });

            mp2.addEventListener('click',function(){

                mpT.style.display = "none";
                mpPM.style.display = "block";
                mpP.style.display = "none";
                mpZN.style.display = "none";
                mpZL.style.display = "none";
                mpC.style.display = "none";
                mpE.style.display = "none";
                
                mp1.checked = false;
                mp3.checked = false;
                mp4.checked = false;
                mp5.checked = false;
                mp6.checked = false;
                mp7.checked = false;
            });

            mp3.addEventListener('click',function(){

                mpT.style.display = "none";
                mpPM.style.display = "none";
                mpP.style.display = "block";
                mpZN.style.display = "none";
                mpZL.style.display = "none";
                mpC.style.display = "none";
                mpE.style.display = "none";
                
                mp2.checked = false;
                mp1.checked = false;
                mp4.checked = false;
                mp5.checked = false;
                mp6.checked = false;
                mp7.checked = false;
            });

            mp4.addEventListener('click',function(){

                mpT.style.display = "none";
                mpPM.style.display = "none";
                mpP.style.display = "none";
                mpZN.style.display = "block";
                mpZL.style.display = "none";
                mpC.style.display = "none";
                mpE.style.display = "none";
                
                mp2.checked = false;
                mp3.checked = false;
                mp1.checked = false;
                mp5.checked = false;
                mp6.checked = false;
                mp7.checked = false;
            });

            mp5.addEventListener('click',function(){

                mpT.style.display = "none";
                mpPM.style.display = "none";
                mpP.style.display = "none";
                mpZN.style.display = "none";
                mpZL.style.display = "block";
                mpC.style.display = "none";
                mpE.style.display = "none";
                
                mp2.checked = false;
                mp3.checked = false;
                mp4.checked = false;
                mp1.checked = false;
                mp6.checked = false;
                mp7.checked = false;
            });

            mp6.addEventListener('click',function(){

                mpT.style.display = "none";
                mpPM.style.display = "none";
                mpP.style.display = "none";
                mpZN.style.display = "none";
                mpZL.style.display = "none";
                mpC.style.display = "block";
                mpE.style.display = "none";
                
                mp2.checked = false;
                mp3.checked = false;
                mp4.checked = false;
                mp5.checked = false;
                mp1.checked = false;
                mp7.checked = false;
            });

            mp7.addEventListener('click',function(){

                mpT.style.display = "none";
                mpPM.style.display = "none";
                mpP.style.display = "none";
                mpZN.style.display = "none";
                mpZL.style.display = "none";
                mpC.style.display = "none";
                mpE.style.display = "block";
                
                mp2.checked = false;
                mp3.checked = false;
                mp4.checked = false;
                mp5.checked = false;
                mp6.checked = false;
                mp1.checked = false;
            });

            /* MANEJO DE SWEETPOINTS */ 
            let verSP1 = document.getElementById("ver-sp1");
            let verSP2 = document.getElementById("ver-sp2");
            let verSP3 = document.getElementById("ver-sp3");
            let verSP4 = document.getElementById("ver-sp4");
            let verSP5 = document.getElementById("ver-sp5");
            let verSP6 = document.getElementById("ver-sp6");
            let verSP7 = document.getElementById("ver-sp7");

            let cantSP1 = document.getElementById("cant-sp1");
            let cantSP2 = document.getElementById("cant-sp2");
            let cantSP3 = document.getElementById("cant-sp3");
            let cantSP4 = document.getElementById("cant-sp4");
            let cantSP5 = document.getElementById("cant-sp5");
            let cantSP6 = document.getElementById("cant-sp6");
            let cantSP7 = document.getElementById("cant-sp7");

            let pt1 = document.getElementById("pto1");
            let pt2 = document.getElementById("pto2");
            let pt3 = document.getElementById("pto3");
            let pt4 = document.getElementById("pto4");
            let pt5 = document.getElementById("pto5");
            let pt6 = document.getElementById("pto6");
            let pt7 = document.getElementById("pto7");

            verSP1.style.display = "none";
            verSP2.style.display = "none";
            verSP3.style.display = "none";
            verSP4.style.display = "none";
            verSP5.style.display = "none";
            verSP6.style.display = "none";
            verSP7.style.display = "none";

            cantSP1.style.display = "none";
            cantSP2.style.display = "none";
            cantSP3.style.display = "none";
            cantSP4.style.display = "none";
            cantSP5.style.display = "none";
            cantSP6.style.display = "none";
            cantSP7.style.display = "none";

            pt1.addEventListener('click', function(){
                if(pt1.checked){
                    pt1.checked = true;
                    verSP1.style.display = "block";
                    cantSP1.style.display = "block";
                }
                else if(!pt1.checked){
                    pt1.checked = false;
                    verSP1.style.display = "none";
                    cantSP1.style.display = "none";
                }

            });

            pt2.addEventListener('click', function(){
                if(pt2.checked){
                    pt2.checked = true;
                    verSP2.style.display = "block";
                    cantSP2.style.display = "block";
                }
                else if(!pt2.checked){
                    pt2.checked = false;
                    verSP2.style.display = "none";
                    cantSP2.style.display = "none";
                }

            });

            pt3.addEventListener('click', function(){
                if(pt3.checked){
                    pt3.checked = true;
                    verSP3.style.display = "block";
                    cantSP3.style.display = "block";
                }
                else if(!pt3.checked){
                    pt3.checked = false;
                    verSP3.style.display = "none";
                    cantSP3.style.display = "none";
                }

            }); 

            pt4.addEventListener('click', function(){
                if(pt4.checked){
                    pt4.checked = true;
                    verSP4.style.display = "block";
                    cantSP4.style.display = "block";
                }
                else if(!pt4.checked){
                    pt4.checked = false;
                    verSP4.style.display = "none";
                    cantSP4.style.display = "none";
                }

            });

            pt5.addEventListener('click', function(){
                if(pt5.checked){
                    pt5.checked = true;
                    verSP5.style.display = "block";
                    cantSP5.style.display = "block";
                }
                else if(!pt5.checked){
                    pt5.checked = false;
                    verSP5.style.display = "none";
                    cantSP5.style.display = "none";
                }

            });

            pt6.addEventListener('click', function(){
                if(pt6.checked){
                    pt6.checked = true;
                    verSP6.style.display = "block";
                    cantSP6.style.display = "block";
                }
                else if(!pt6.checked){
                    pt6.checked = false;
                    verSP6.style.display = "none";
                    cantSP6.style.display = "none";
                }

            });

            pt7.addEventListener('click', function(){
                if(pt7.checked){
                    pt7.checked = true;
                    verSP7.style.display = "block";
                    cantSP7.style.display = "block";
                }
                else if(!pt7.checked){
                    pt7.checked = false;
                    verSP7.style.display = "none";
                    cantSP7.style.display = "none";
                }

            });

        }
        else if((pag.href ==="http://localhost/SwUCAB/asistencia.php")||(pag.href ==="http://localhost/SwUCAB/asistencia.php?idEmpleado=11234567&Mostrar=Mostrar+Asistencia")){

            let file = document.getElementById("asis");
            let arch = document.getElementById("arch");
            let btn2 = document.getElementById("btn-file");

            arch.style.display = "none";

            file.addEventListener('change', (event) => {
                const fileList = event.target.files;
                btn2.style.display = "none";
                arch.style.display = "block";
                arch.innerText = fileList[0].name;
            });

        }
        else if(pag.href ==="http://localhost/SwUCAB/inventario.php"){

            let btn12 = document.getElementById("buscar-inv");
            let btn13 = document.getElementById("agg-inv");
            let btn14 = document.getElementById("elim-inv");

            let btns = document.getElementById("btns");
            let elimI = document.getElementById("elim-inventario");
            let aggI = document.getElementById("agg-inventario");

            elimI.style.display = "none";
            aggI.style.display = "none";

            btn13.addEventListener('click',function(){

                elimI.style.display = "none";
                aggI.style.display = "block";

            });

            btn14.addEventListener('click',function(){

                elimI.style.display = "block";
                aggI.style.display = "none";

            });

        }
        

    }); //DOM CONTENT LOADED

    

})();
