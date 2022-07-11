@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-md-12">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <div class="col-md-6"><h6 class="header-title pl-3 redial-relative">Experiences</h6>
                            </div>
                            <div class="col-md-6 text-right"><a href="{{route('admin.experiences.create')}}"
                                                                class="btn btn-primary">Add</a></div>
                            <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                <thead class="redial-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Sub name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($experiences as $experience)
                                    <tr>
                                        <th scope="row">{{$experience->id}}</th>
                                        <td>{{$experience->name}}</td>
                                        <td>{{$experience->sub_name}}</td>
                                        <td>{{$experience->description}}</td>
                                        <td>{{$experience->from}}</td>
                                        <td>{{$experience->to}}</td>
                                        <td>{{$experience->created_at}}</td>
                                        <td>{{$experience->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admin.experiences.edit',['experience' => $experience->id])}}"
                                               class="btn btn-primary mb-2">
                                                <i class="icofont icofont-pencil"></i>
                                            </a>
                                            <form
                                                action="{{route('admin.experiences.destroy',['experience' => $experience->id])}}"
                                                method="post">
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
                                    {{ $experiences->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
