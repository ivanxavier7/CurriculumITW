@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Portfolios</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Portfolios</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Sub Title</th>
                    <th scope="col">Big Image</th>
                    <th scope="col">Small Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Client</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{$portfolio->id}}</th>
                                <td>{{$portfolio->title}}</td>
                                <td>{{$portfolio->sub_title}}</td>
                                <td><img src="{{url($portfolio->big_image)}}" alt="Big Image" style="height: 10vh"></td>
                                <td><img src="{{url($portfolio->small_image)}}" alt="Small Image" style="height: 10vh"></td>
                                <td>{{Str::limit(strip_tags($portfolio->description), 40)}}</td>
                                <td>{{$portfolio->client}}</td>
                                <td>{{$portfolio->category}}</td>
                                <td>
                                    <div class="row">
                                        <div>
                                            <a href="{{route('admin.portfolios.edit', $portfolio->id)}}" class="btn btn-primary m-2">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{route('admin.portfolios.destroy', $portfolio->id)}}" method="POST">
                                        </div>
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                    </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>
    </main>
@endsection