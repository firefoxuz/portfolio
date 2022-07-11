@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-md-12">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <div class="col-md-6"><h6 class="header-title pl-3 redial-relative">Social Networks</h6></div>
                            <div class="col-md-6 text-right"><a href="{{route('admin.social-networks.create')}}" class="btn btn-primary">Add</a></div>
                            <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                <thead class="redial-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($networks as $network)
                                    <tr>
                                        <th scope="row">{{$network->id}}</th>
                                        <td>{{$network->name}}</td>
                                        <td>{{$network->link}}</td>
                                        <td>{{$network->icon}}</td>
                                        <td>{{$network->created_at}}</td>
                                        <td>{{$network->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admin.social-networks.edit',['social_network' => $network->id])}}" class="btn btn-primary mb-2">
                                                <i class="icofont icofont-pencil"></i>
                                            </a>
                                            <form action="{{route('admin.social-networks.destroy',['social_network' => $network->id])}}" method="post">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="icofont icofont-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <div class="text-center col-md-12">
                                    {{ $networks->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
