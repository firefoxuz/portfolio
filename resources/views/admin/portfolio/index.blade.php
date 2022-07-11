@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-md-12">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <div class="col-md-6"><h6 class="header-title pl-3 redial-relative">Portfolios</h6></div>
                            <div class="col-md-6 text-right"><a href="{{route('admin.portfolios.create')}}"
                                                                class="btn btn-primary">Add</a></div>
                            <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                <thead class="redial-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Project name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Site</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <th scope="row">{{$portfolio->id}}</th>
                                        <td>{{$portfolio->type}}</td>
                                        <td>{{$portfolio->project_name}}</td>
                                        <td>{{$portfolio->description}}</td>
                                        <td>{{$portfolio->site}}</td>
                                        <td>{{$portfolio->date}}</td>
                                        <td>{{$portfolio->priority}}</td>
                                        <td>{{$portfolio->created_at}}</td>
                                        <td>{{$portfolio->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admin.portfolios.show',['portfolio' => $portfolio->id])}}"
                                               class="btn btn-success mb-2">
                                                <i class="icofont icofont-open-eye"></i>
                                            </a>
                                            <a href="{{route('admin.portfolios.edit',['portfolio' => $portfolio->id])}}"
                                               class="btn btn-primary mb-2">
                                                <i class="icofont icofont-pencil"></i>
                                            </a>
                                            <form
                                                action="{{route('admin.portfolios.destroy',['portfolio' => $portfolio->id])}}"
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
                                    {{ $portfolios->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
