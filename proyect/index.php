<!doctype html>
<html lang="en">
  <head>
    <title>form - incidentes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
  <body>
   
    <header>
      <nav class="bg-info">
          <div class="card-header">
              <h3 class="text-center col-sm-12 text-dark">Formulario de notificación de incidentes</h3>
          </div>
      </nav>
    </header>

    <main >

    <section class="formulario ">
        <div class="container bg-light">
            <form method="post" autocomplete="off"  id="formulario" action="">
              <h5 class="text-center princ">Datos del remitente</h5>
              <div class="b"></div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="nombre">Nombre</label><span class="obligatorio"> *</span>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" title="Debe tener entre 5 y 20 caracteres" pattern="[A-Za-z]{5,20}" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="ubicacion">Dirección</label><span class="obligatorio"> *</span>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación" title="Debe tener en 5 a 20 caracteres" pattern="[A-Za-z]{5,20}" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="telefono">Teléfono</label><span class="obligatorio"> *</span>
                      <input type="text" class="form-control" id="telefono" name="tel" placeholder="Ejmp: +34xxxxxxx" title="Debe tener entre 8 a 20 caracteres" pattern="[A-Za-z0-9]{6,20}" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="correo">Correo electrónico</label><span class="obligatorio"> *</span>
                    <input type="email" class="form-control" id="correo" placeholder="Correo electrónico" name="correo" title="Debe tener entre 4 a 20 caracteres" pattern="[A-Za-z0-9@.]{4,20}" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="empresa">Nombre de la empresa</label>
                    <input type="text" class="form-control" id="empresa" name="n_empresa" placeholder="Nombre de la empresa a quien representa">
                  </div>
                </div>
                
                <h5 class="text-center princ">Fecha y hora del incidente</h5>
                <div class="b"></div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="correo">Fecha</label><span class="obligatorio"> *</span>
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha de lo ocurrido" title="8 caracteres como minimo" pattern="[A-Za-z0-9]{8,8}"  required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="empresa">Hora</label><span class="obligatorio"> *</span>
                    <input type="time" class="form-control" id="hora" name="hora" placeholder="Hora de lo ocurrido" title="9 caracter como minimo" pattern="[A-Za-z0-9@.]{9,9}" required="">
                  </div>
                </div>

               
                <h5 class="text-center princ tipos_i">Tipos de incidentes<span class="obligatorio"> *</span></h5>
                <div class="b"></div>

                <div class="form-check form-check-inline">
                   <input class="form-check-input" type="checkbox" id="tipo"  name="t_incidentes" value="1. Cambio en la configuracion de los equipos">
                   <label class="form-check-label" for="cambio">Cambio en la configuración de los equipos. </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="tipo" name="t_incidentes" value="2. Ataque o infección de malware o código malicioso (gusano, virus, troyano, etc.)">
                  <label class="form-check-label" for="ataque_c">Ataque o infección de malware o código malicioso (gusano, virus, troyano, etc.).</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="tipo" name="t_incidentes" value="3. Acceso o intento no autorizado al sistema.">
                  <label class="form-check-label" for="acceso_sistema">Acceso o intento no autorizado al sistema.</label>
                </div>


                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="tipo" name="t_incidentes" value="4. Divulgación de datos confidenciales.">
                  <label class="form-check-label" for="d_confi">Divulgación de datos confidenciales.</label>
                </div>


                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="tipo" name="t_incidentes" value="5. Robo o destrucción de los datos confidenciales.">
                  <label class="form-check-label" for="robo_confi">Robo o destrucción de los datos confidenciales.</label>
                </div>


                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="tipo" name="t_incidentes" value="6. Alteración o modificación de la lógica de la aplicación.">
                  <label class="form-check-label" for="alteracion_mod">Alteración o modificación de la lógica de la aplicación.</label>
                </div>


                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="t_incidentes" id="tipo" value="7. Denegación de los servidores web.">
                  <label class="form-check-label" for="denegacion">Denegación de los servidores web.</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="tipo" name="ps" value="8. Amenaza de phishing por correo electrónico.">
                  <label class="form-check-label" for="amenaza_phishing">Amenaza de phishing por correo electrónico.</label>
                </div>
                  <div class="form-group">
                    <label for="otro_no">Otro no contemplado</label>
                    <textarea class="form-control" id="tipo" rows="3" name="t_incidentes" placeholder="Escribir aqui otro no contemplado..."></textarea>
                  </div>
                
           
                <h5 class="text-center princ">Descripción del incidente</h5>
               <div class="b"></div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="detecto">¿Como se detecto el incidente?</label>
                    <textarea class="form-control" id="detecto" rows="3" name="detecto" placeholder="¿Como fue que se detecto el incidente?"></textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="breve_descip">Descipción del incidente </label><span class="obligatorio"> *</span>
                    <textarea class="form-control" id="breve_descip" name="breve_descip" rows="3" title="Descricón clara, precisa y consisa, minimo 8 maximo 255 caracteres" pattern="[A-Za-z0-9]{0,255}" placeholder="Breve descipción del incidente" required></textarea>
                  </div>
                </div>

                <div class="row">   
                  <div class="form-group col-md-6">
                    <label for="">Está aún en ejecución o activo el incidente?</label><span class="obligatorio"> *</span>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ejecucion" title="Seleccionar una de las dos opciones" pattern="[A-Za-z]" id="si" value="Si" required>
                      <label class="form-check-label" for="si">
                        Si
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="ejecucion" id="si" value="No" required title="Seleccionar una de las dos opciones" pattern="[A-Za-z]">
                      <label class="form-check-label" for="no">
                        No
                      </label>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="duracion_aprox">Duración aproximada del incidente</label>
                    <textarea class="form-control" id="duracion_aprox" name="duracion_aprox" rows="3" placeholder="Duración aproximada del incidente"></textarea>
                  </div>
                </div>

                
                <h5 class="text-center princ">Activos afectados</h5>
              <div class="b"></div>
                
                <div class="row">
                  <div class="col-md-4">
                    <label for="cant_act">Cantidad de activos afectados</label><span class="obligatorio"> *</span>
                    <input type="number" class="form-control" name="cantidad_activos" id="cant_act" placeholder="Cantidad de activos afectados" title="Cantidad de activos afectados, solo se permite numeros"  pattern="[0-9]{0,9}"  required>
                  </div>

                  <div class="col-md-4">
                    <label for="nombre">Criticidad</label><span class="obligatorio"> *</span>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="criticidad" id="criti" value="Baja" title="Seleccionar alguna de las opciones" pattern="[A-Za-z]" required>
                      <label class="form-check-label" for="criti">
                        Baja
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="criticidad" id="criti" value="Alta" title="Seleccionar alguna de las opciones" pattern="[A-Za-z]" required>
                      <label class="form-check-label" for="criti">
                        Alta
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="criticidad" id="criti" value="Muy alta" title="Seleccionar alguna de las opciones" pattern="[A-Za-z]" required>
                      <label class="form-check-label" for="criti">
                        Muy alta
                      </label>
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="f_activo">Función del activo</label><span class="obligatorio"> *</span>
                    <textarea class="form-control" id="f_activo" rows="3" title="Función del activo afectado, 10 - 255 caracteres" placeholder="Función del activo" pattern="[A-Za-z0-9]{0,255}" name="funci_act" required></textarea>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="tipo_sistema">Tipo de sistema operativo</label>
                    <input type="text" class="form-control" id="t_sistema" name="t_operativo" placeholder="Sistema operativo" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="coment">Comentario</label>
                    <textarea class="form-control" name="coment" value="nnnn" id="coment" placeholder="Comentario" rows="3"></textarea>
                  </div>


                </div>

                <button class="btn btn-primary" type="submit">Registrar</button>
            </form>
          
          <div class="alerta row">
            <div class="alert alert-primary text-center col-sm-12" role="alert">
              Todos los campos marcado con <span class="obligatorio"> * </span> son obligatorios, favor de verificar antes de registar.
            </div>
          </div>
        </div>
      </section>
      </main>

    <footer class="card-footer bg-info">
      <div class="text-center bg-info ">
        <span class="text-dark ">&copy; Elaborado por g.valdes - 2018</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <script>
       $(document).ready(function(){
                $("#formulario").submit(function(e){
                e.preventDefault();

                let nom= $("#nombre").val();
                let ub= $("#ubicacion").val();
                let tl= $("#telefono").val();
                let em= $("#correo").val();
                let n_e= $("#empresa").val();
                let f = $("#fecha").val();
                let h= $("#hora").val();
                let t_incidentes= $("#tipo").val();
                let c_d= $("#cant_act").val();
                let b_d= $("#breve_descip").val();
                let ejecu= $("#si").val();
                let d_i= $("#duracion_aprox").val();
                let c_a= $("#cant_act").val();
                let ctidad= $("#criti").val();
                let f_a= $("#f_activo").val();
                let so= $("#t_sistema").val();
                let com= $("#coment").val();
                
                $.ajax({
                    url:'datos/conex.php',
                    type:'POST',
                    data:{a:nom, b:ub, c:tl, d:em, e:n_e, fg:f, hi:h, j:t_incidentes, k:c_d, l:b_d, m:ejecu, n:d_i,
                      o:c_a, p:ctidad, q:f_a, r:so, s:com},
                    success:function(data){
                        $("#formulario").trigger('reset');
                        $(".alert").html("Tus datos se han sido registrado, pronto nos pondremos en contacto con usted. gracias");
                    }
                });   
            })    
        
      });


    </script>  
  
  </body>
</html>