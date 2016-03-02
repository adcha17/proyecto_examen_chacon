
<div class="panel-form">
    <div class="box">
        <div class="box-header">

            <div class="pull-left">
                <h2 class="u-top-0">Actualizar Curriculum</h2>
            </div>
            <div class="pull-right">
                <a href="<?php echo base_url($controller . '/show') ?>" class="btn btn-info">
                    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                </a>
            </div>
        </div>

    </div>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Datos del Curriculum</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url($controller . '/update') ?>" method="POST">
            <div class="box-body">
                <div class="form-group">

                    <input type="hidden" id="id" name="id" value="<?php echo $id ?>">

                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-4">

                        <input value="<?php echo $item->nombre; ?>" type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">

                    </div>
                </div>

                <div class="form-group">
                    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-4">

                        <input value="<?php echo $item->apellidos; ?>" type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">

                    </div>
                </div>

                <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-4">
                        <input value="<?php echo $item->dni; ?>" type="text" class="form-control" id="dni" name="dni" placeholder="DNI">

                    </div>
                </div>

                <div class="form-group">

                    <label for="fecha_nac" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-sm-4">
                        <input value="<?php echo $item->fecha_nac; ?>" type="text" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Año-Mes-Dia">


                    </div>
                </div>

                <div class="form-group">

                    <label for="distrito" class="col-sm-2 control-label">Distrito</label>
                    <div class="col-sm-4">
                        <select name="distrito" id="distrito" class="form-control" required="">
                            <option value="0">[Seleccione un distrito]</option>
                            <option value="Santa Anita">Santa Anita</option>
                            <option value="SJL">SJL</option>
                            <option value="Puente Piedra">Puente Piedra</option>
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $item->direccion; ?>" type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">

                    </div>
                </div>

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Experiencia Laboral</h3>
                    </div><!-- /.box-header -->          
                </div>

                <div class="form-group">
                    <label for="empresa" class="col-sm-2 control-label">Empresa</label>
                    <div class="col-sm-4">
                        <input value="<?php echo $item2->empresa; ?>" type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa">

                    </div>
                </div>

                <div class="form-group">
                    <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-2">
                        <input value="<?php echo $item2->telefono; ?>" type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">

                    </div>
                </div>


                <div class="form-group">

                    <label for="year_ini" class="col-sm-2 control-label">Año Inicio</label>
                    <div class="col-sm-2">
                        <input value="<?php echo $item2->year_ini; ?>" type="text" class="form-control" id="year_ini" name="year_ini" placeholder="Año Inicio">


                    </div>
                </div>


                <div class="form-group">

                    <label for="year_fin" class="col-sm-2 control-label">Año Fin</label>
                    <div class="col-sm-2">
                        <input value="<?php echo $item2->year_fin; ?>" type="text" class="form-control" id="year_fin" name="year_fin" placeholder="Año Fin">

                    </div>
                </div>



            </div><!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url($controller . '/show') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-left" aria-hidden="true"></span> Cancelar</a>
                <button type="submit" class="btn btn-info pull-right btnUpdate redirect"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Actualizar</button>
            </div><!-- /.box-footer -->
        </form>
    </div>


</div>

<script src="<?php echo base_url('public/master/' . $controller . '.js') ?>"></script>