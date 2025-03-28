@extends('layout')
@section('title')
    -@yield('formName')
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">@yield('formName')</div>
                <div class="card-body">
                    <form @yield('action') method="POST">
                        @yield('method')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-gamepad"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-trophy"></i></span>
                            <input type="text" name="levels" class="form-control" placeholder="Niveles" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                            <input type="text" name="release" class="form-control" placeholder="Lanzamiento" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <button class="btn button-success" type="submit"> Guardar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>