@extends('layout')
@section('body-content')
<table style="text-align: center" class="table table-bordered">
    <thead >
      <tr>
        <th style="width: 10px">#</th>
        <th>name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)

      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><a class="btn btn-info" href="{{url("admin/category/edit/$category->id")}}">update</a>
            <a class="btn btn-danger" href="{{url("admin/category/delete/$category->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="4">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
@endsection
