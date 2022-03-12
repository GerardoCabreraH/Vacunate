<div class="form-group">
    <label for="city">Ciudad del modulo</label>
    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
        placeholder="Ciudad" value="{{ old('city', $modulo->city) }}">
    @error('city')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="state">Entidad federativa del modulo</label>
    <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state"
        placeholder="Entidad federativa" value="{{ old('state', $modulo->state) }}">
    @error('state')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="date_module">Fecha de vacunación</label>
    <input type="date" class="form-control @error('date_module') is-invalid @enderror" id="date_module" name="date_module"
        placeholder="Fecha de vacunación" value="{{ old('date_module', $modulo->date_module) }}" min="2022-01-01" max="2022-12-31">
    @error('date_module')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="brand">Marca de la vacuna</label>
    <select class="form-control" type="text" id="brand" name="brand" value="{{ old('brand', $modulo->brand) }}">
        <option value="">Seleccionar marca de la vacuna</option>
        <option {{ old('brand', $modulo->brand)=="Astrazeneca" ? 'selected' :''}} value="Astrazeneca">Astrazeneca</option>
        <option {{ old('brand', $modulo->brand)=="Sinovac" ? 'selected' :''}} value="Sinovac">Sinovac</option>
        <option {{ old('brand', $modulo->brand)=="Pfizer" ? 'selected' :''}} value="Pfizer">Pfizer</option>
        <option {{ old('brand', $modulo->brand)=="Moderna" ? 'selected' :''}} value="Moderna">Moderna</option>
    </select>
</div>
