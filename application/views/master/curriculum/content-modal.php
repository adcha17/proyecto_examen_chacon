<div class="container">
<div class="row">
    <div class="form-group">
        <label for="empresa" class="col-sm-2 control-label">Empresa</label>
        <div class="col-sm-3">
            <input value="<?php echo $item->empresa ?>" type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa">

        </div>
    </div>
</div>

<div class="row">
    <div class="form-group">
        <label for="telefono" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-2">
            <input value="<?php echo $item->telefono ?>" type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">

        </div>
    </div>
</div>

<div class="row">
    <div class="form-group">

        <label for="year_ini" class="col-sm-2 control-label">Año Inicio</label>
        <div class="col-sm-2">
            <input value="<?php echo $item->year_ini ?>"type="text" class="form-control" id="year_ini" name="year_ini" placeholder="Año Inicio">


        </div>
    </div>
</div>

<div class="row">
    <div class="form-group">

        <label for="year_fin" class="col-sm-2 control-label">Año Fin</label>
        <div class="col-sm-2">
            <input value="<?php echo $item->year_fin ?>"type="text" class="form-control" id="year_fin" name="year_fin" placeholder="Año Fin">


        </div>
    </div>
</div>
</div>