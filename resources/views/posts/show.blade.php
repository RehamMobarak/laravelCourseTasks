@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Created at</th>
          </tr>
        </thead>
        <tbody>
         
        <tr>
        <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['content']}}</td>
            <td>{{$post['created_at']}}</td>
            </td>
          </tr>
        </tbody>
      </table>
@endsection