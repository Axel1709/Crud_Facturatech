<?php $this->load->view('includes/header'); ?>

  <div class="container">
      <br>
      <br>
      <!---Aqui empieza el formulario-->
           <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
              <div class="form-group">
                  <label for="exampleInputEmail1">Matricula</label>
                  <input type="number" class="form-control" name="matricula" value="<?php echo $row->matricula; ?>" aria-describedby="emailHelp" placeholder="Ingrese su matricula">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Contraseña</label>
                  <input type="text" class="form-control" name="contraseña" value="<?php echo $row->contraseña; ?>" aria-describedby="emailHelp" placeholder="Ingrese una contraseña">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Estado</label>
                  <input type="text" class="form-control" name="estado" value="<?php echo $row->estado; ?>" aria-describedby="emailHelp" placeholder="Ingrese su estado">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="<?php echo $row->nombre; ?>" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Facultad</label>
                  <input type="text" class="form-control" name="facultad" value="<?php echo $row->facultad; ?>" aria-describedby="emailHelp" placeholder="Ingrese su facultad de procedencia">
              </div>
              <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" name="correo" value="<?php echo $row->correo; ?>"  aria-describedby="emailHelp" placeholder="Ingrese su correo">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <!---
              <div class="form-group">
                  <label for="exampleInputEmail1">Rol</label>
                  <input type="text" class="form-control" name="rol" aria-describedby="emailHelp" placeholder="Ingrese su facultad de procedencia">
              </div>--->

                <!--Falta la foto-->
                <!---<div class="form-group">
                    <label for="exampleInputEmail1">Foto</label>
                    <input type="text" class="form-control" name="rol" aria-describedby="emailHelp" placeholder="Ingrese su facultad de procedencia">

                </div> --->
<!---
                <div class="form-group form-check">
                  <label for="exampleInputEmail1">Genero</label>
                      <br>
                        <input type="radio" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mujer</label>
                      <br>
                      <input type="radio" class="form-check-input" id="exampleCheck2">
                  <label class="form-check-label" for="exampleCheck2">Hombre</label>
                </div> --->

                <div class="form-group">
                    <label for="exampleInputEmail1">Ocupacion</label>
                    <input type="text" class="form-control" name="ocupacion" value="<?php echo $row->ocupacion; ?>" aria-describedby="emailHelp" placeholder="Ingrese su ocupacion">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $row->fecha_nacimiento; ?>" aria-describedby="emailHelp" placeholder="Ingrese su fecha de nacimiento">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de creacion</label>
                    <input type="date" class="form-control" name="fecha_creacion" value="<?php echo $row->fecha_creacion; ?>" aria-describedby="emailHelp" placeholder="Ingrese su fecha de creacion">
                </div>


              <button type="submit" class="btn btn-primary" value="save">Enviar</button>
              <button type="button" class="btn btn-danger">Cancelar</button></a>
         </form>
           <!---Aqui termina el formulario-->
       </div>

  </body>
</html>
