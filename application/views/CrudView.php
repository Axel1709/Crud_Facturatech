
<?php $this->load->view('includes/header'); ?>
    <div class="container">
    <br>
    <br>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar
      </button>
        <br>
        <br>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar datos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!---Aqui empieza el formulario-->
                   <form method="post" action="<?php echo site_url('CrudController/create')?>">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Matricula</label>
                          <input type="number" class="form-control" name="matricula" aria-describedby="emailHelp" placeholder="Ingrese su matricula">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Contraseña</label>
                          <input type="text" class="form-control" name="contraseña" aria-describedby="emailHelp" placeholder="Ingrese una contraseña">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Estado</label>
                          <input type="text" class="form-control" name="estado" aria-describedby="emailHelp" placeholder="Ingrese su estado">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Facultad</label>
                          <input type="text" class="form-control" name="facultad" aria-describedby="emailHelp" placeholder="Ingrese su facultad de procedencia">
                      </div>
                      <div class="form-group">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="text" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Ingrese su correo">
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
                            <input type="text" class="form-control" name="ocupacion" aria-describedby="emailHelp" placeholder="Ingrese su ocupacion">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" aria-describedby="emailHelp" placeholder="Ingrese su fecha de nacimiento">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha de creacion</label>
                            <input type="date" class="form-control" name="fecha_creacion" aria-describedby="emailHelp" placeholder="Ingrese su fecha de creacion">
                        </div>


                      <button type="submit" class="btn btn-primary" value="save">Submit</button>
                 </form>
                   <!---Aqui termina el formulario-->
            </div>
          </div>
        </div>
      </div>
  <!---Termina el Modal-->

  <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">matricula</th>
            <th scope="col">contraseña</th>
            <th scope="col">estado</th>
            <th scope="col">nombre</th>
            <th scope="col">facultad</th>
            <th scope="col">correo</th>
            <th scope="col">ocupacion</th>
            <th scope="col">fecha de Nacimiento</th>
            <th scope="col">fecha de Creacion</th>
            <th scope="col">opciones</th>

           </tr>
        </thead>
        <tbody>
          <?php foreach($result as $row){?>
            <tr>
            <th scope="row"><?php echo $row->id; ?></th>
            <td><?php echo $row->matricula; ?></td>
            <td><?php echo $row->contraseña; ?></td>
            <td><?php echo $row->estado; ?></td>
            <td><?php echo $row->nombre; ?></td>
            <td><?php echo $row->facultad; ?></td>
            <td><?php echo $row->correo; ?></td>
            <td><?php echo $row->ocupacion; ?></td>
            <td><?php echo $row->fecha_nacimiento; ?></td>
            <td><?php echo $row->fecha_creacion; ?></td>
            <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>|
            <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
