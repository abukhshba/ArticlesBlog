@extends('layout')
@section('body-content')
    <form action="{{url('admin/user/update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name" placeholder="name">
            <label for="name">email</label>
            <input type="text" class="form-control" value="{{$user->email}}" name="email" id="email" placeholder="email">
            
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>
@endsection
