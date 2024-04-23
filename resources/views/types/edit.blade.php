@extends('layouts.admin')

@section('title')
    Cambia Tipologia
@endsection

@section('content')

    <div class="container mt-5">
        <div class="col-3">
            <div class="text-white">
              <h1>
                <strong>Nome tipologia:</strong>{{$type->name}}
              </h1>
              
            </div>
        </div>
    </div>


    <div class="container py-5">
        <h1>Cambia progetto</h1>

        <div class="col-lg-12 col-md-12 mb-4">

          <form action="{{route('admin.types.update')}}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                  <label for="name" class="form-label">Nome tipologia</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>

              <button type="submit" class="btn btn-danger mt-5 mb-5">Salva</button>

          </form>
 
      </div>


    </div>
@endsection