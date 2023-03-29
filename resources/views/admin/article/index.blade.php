@extends('layout')
@section('body-content')
<table style="text-align: center" class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>name</th>
        <th>short description</th>
        <th>cover</th>
        <th>user</th>
        <th>category</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($articles as $article)

      <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->short_description}}</td>
        <td><img width="100px" height="100px" src="{{asset("uploads/$article->cover")}}" alt="{{$article->title}}"></td>
        <td>{{$article->user->name}}</td>
        <td>{{$article->category->name}}</td>
        <td><a class="btn btn-danger" href="{{url("admin/article/delete/$article->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="8">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
@endsection
