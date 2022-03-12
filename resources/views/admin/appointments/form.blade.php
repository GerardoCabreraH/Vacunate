<div class="form-group row">
    <label for="name" class="col-12 col-sm-2 col-form-label">Nombre completo</label>
    <div class="col-12 col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre" value="{{ old('name', $cita->name) }}">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-12 col-sm-2 col-form-label">Email</label>
    <div class="col-12 col-sm-10">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
            placeholder="Email" value="{{ old('email', $cita->email) }}">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="phone" class="col-12 col-sm-2 col-form-label">Teléfono</label>
    <div class="col-12 col-sm-10">
        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
            placeholder="Teléfono" value="{{ old('phone', $cita->phone) }}" maxlength="10">
        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="folio" class="col-12 col-sm-2 col-form-label">Folio MiVacuna</label>
    <div class="col-12 col-sm-10">
        <input type="text" class="form-control @error('folio') is-invalid @enderror" id="folio" name="folio"
            placeholder="Folio MiVacuna" value="{{ old('folio', $cita->folio) }}">
        @error('folio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="city" class="col-12 col-sm-2 col-form-label">Ciudad</label>
    <div class="col-12 col-sm-10">
        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
            placeholder="Ciudad" value="{{ old('city', $cita->city) }}">
        @error('city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="state" class="col-12 col-sm-2 col-form-label">Entidad federativa</label>
    <div class="col-12 col-sm-10">
        <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state"
            placeholder="Entidad federativa" value="{{ old('state', $cita->state) }}">
        @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="observations" class="col-12 col-sm-2 col-form-label">Observaciones</label>
    <div class="col-12 col-sm-10">
        <textarea class="form-control @error('observations') is-invalid @enderror" id="observations" name="observations" rows="3" placeholder="Observaciones">{{ old('observations', $cita->observations) }}</textarea>
        @error('observations')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <input type="hidden" id="module_id" name="module_id" value="{{$modulo->id}}">
</div>
