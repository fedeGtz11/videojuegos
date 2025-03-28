@extends('layout')
@section('title')
    - Listado
@endsection   
@section('body')
    <div class ="row">
        <div class = "col-12">
            <div class = "table-responsive">
                <table class = "table table-bordered table-hover">
                    <thead>
                        <tr>
                            <tr>#</tr>
                            <tr>NOMBRE</tr>
                            <tr>NIVELES</tr>
                            <tr>LANZAMIENTO</tr>
                            <tr>IMAGEN</tr>
                            <tr></tr>
                            <tr></tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($games as $i => $row)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$row->name }}</td>
                            <td>{{$row->levels }}</td>
                            <td>{{$row->release }}</td>
                            <td>
                                <img class = "img-fluid" src="/storage/{{$row->imagen}}">
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{route('games.edit',$row->id)}}">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form id="frm_{{$row->id}}" method="POST" action="{{route('games.destroy', $row->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection