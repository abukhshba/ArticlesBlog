@extends('layout')
@section('body-content')
<table class="table table-bordered">
    <thead style="text-align: center">
      <tr>
        <th style="width: 10px">#</th>
        <th>name</th>
        <th>email</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody style="text-align: center">
        @forelse($users as $user)

      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><a class="btn btn-info" href="{{url("admin/user/edit/$user->id")}}">update</a>
            <a class="btn btn-danger" href="{{url("admin/user/delete/$user->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="4">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
@endsection
