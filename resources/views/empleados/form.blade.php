<div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $empleado->nombres ?? '') }}">
</div>
<div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos', $empleado->apellidos ?? '') }}">
</div>
<div class="form-group">
    <label for="identificacion">Identificación</label>
    <input type="text" name="identificacion" class="form-control" value="{{ old('identificacion', $empleado->identificacion ?? '') }}">
</div>
<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $empleado->direccion ?? '') }}">
</div>
<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $empleado->telefono ?? '') }}">
</div>
<div class="form-group">
    <label for="pais_id">País</label>
    <select name="pais_id" id="pais_id" class="form-control">
        <option value="">Seleccionar País</option>
        @foreach($paises as $pais)
            <option value="{{ $pais->id }}" {{ old('pais_id', $empleado->ciudad->pais_id ?? '') == $pais->id ? 'selected' : '' }}>{{ $pais->nombre }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="ciudad_id">Ciudad</label>
    <select name="ciudad_id" id="ciudad_id" class="form-control">
        <option value="">Seleccionar Ciudad</option>
        @foreach($ciudades as $ciudad)
            <option value="{{ $ciudad->id }}" {{ old('ciudad_id', $empleado->ciudad_id ?? '') == $ciudad->id ? 'selected' : '' }}>{{ $ciudad->nombre }}</option>
        @endforeach
    </select>
</div>