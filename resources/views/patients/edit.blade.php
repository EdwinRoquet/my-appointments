@extends('layouts.panel')

@section('content')

    <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar paciente</h3>
            </div>
            <div class="col text-right">
            <a href="{{ url('patients') }}" class="btn btn-sm btn-default">
              Cancelar y volver
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          @if($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          <li>{{$error}}</li>
          </div>
          @endforeach
          
           @endif
          <!-- Form -->
        <form action="{{ url('/patients/'.$patient->id)}}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre del paciente</label>
                <input type="text" name="name" value="{{old('name', $patient->name)}}"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email"value="{{old('email', $patient->email)}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" name="dni"value="{{old('dni', $patient->dni)}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address"value="{{old('address', $patient->address)}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="phone">Télefono/Móvil</label>
                    <input type="text" name="phone"value="{{old('phone', $patient->phone)}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="text" name="password"value="" class="form-control" >
                    <p>Ingrese una nueva contraseña solo si desea cambiarla</p>
                </div>
                      <button type="submit" class="btn btn-primary">
                          Guardar
                      </button>

            </form>
        </div>
      </div>
    
    </div>

</div>
@endsection
