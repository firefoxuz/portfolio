@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card redial-border-light redial-shadow">
                <div class="card-body">
                    <h6 class="header-title pl-3 redial-relative">Portfolio</h6>
                    <dl class="row mb-0 redial-line-height-2_5">
                        <dt class="col-sm-5">Type:</dt>
                        <dd class="col-sm-7">{{$portfolio->type}}</dd>

                        <dt class="col-sm-5">Project Name:</dt>
                        <dd class="col-sm-7">{{$portfolio->project_name}}</dd>

                        <dt class="col-sm-5">Description:</dt>
                        <dd class="col-sm-7">{{$portfolio->description}}</dd>

                        <dt class="col-sm-5">Site:</dt>
                        <dd class="col-sm-7">{{$portfolio->site}}</dd>

                        <dt class="col-sm-5">Date:</dt>
                        <dd class="col-sm-7">{{$portfolio->date}}</dd>

                        <dt class="col-sm-5">Priority:</dt>
                        <dd class="col-sm-7">{{$portfolio->priority}}</dd>

                        <dt class="col-sm-5">Created Date:</dt>
                        <dd class="col-sm-7">{{$portfolio->created_at}}</dd>

                        <dt class="col-sm-5">Updated Date:</dt>
                        <dd class="col-sm-7">{{$portfolio->updated_at}}</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-primary btn-md rounded-0" data-toggle="modal" data-target="#photoModel"> Add
                photo</a>
            <a href="#" class="btn btn-primary btn-md rounded-0" data-toggle="modal" data-target="#technologyModel"> Add
                technology</a>
        </div>
    </div>

    <!-- Launch photo Modal -->
    <div class="modal fade" id="photoModel" tabindex="-1" role="dialog" aria-labelledby="photoModel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content redial-border-light">
                <div class="modal-header redial-border-light">
                    <h5 class="modal-title pt-2" id="exampleModalLabel">Add portfolio photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.portfolio-photos.store')}}" method="post" enctype="multipart/form-data"
                          id="portfolio-photo-store">
                        {{csrf_field()}}
                        <input type="text" name="portfolio_id" class="form-control" value="{{$portfolio->id}}" hidden>
                        <div class="form-group">
                            <label class="redial-font-weight-600 d-block">Photo Input</label>
                            <input type="file" name="photo" accept="image/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer redial-border-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="portfolio-photo-store" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--End photo Modal -->

    <!-- Launch Demo Modal -->
    <div class="modal fade" id="technologyModel" tabindex="-1" role="dialog" aria-labelledby="technologyModel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content redial-border-light">
                <div class="modal-header redial-border-light">
                    <h5 class="modal-title pt-2" id="exampleModalLabel">Add portfolio technology</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.portfolio-technologies.store')}}" method="post"
                          id="portfolio-technologies-store">
                        {{csrf_field()}}
                        <input type="text" name="portfolio_id" class="form-control" value="{{$portfolio->id}}" hidden>
                        <div class="form-group">
                            <label class="redial-font-weight-600">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer redial-border-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button form="portfolio-technologies-store" type="submit" class="btn btn-primary">Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Launch Demo Modal -->

    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-md-12">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <div class="col-md-6"><h6 class="header-title pl-3 redial-relative">Technology</h6></div>
                            <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                <thead class="redial-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($portfolio->technologies as $technology)
                                    <tr>
                                        <th scope="row">{{$technology->id}}</th>
                                        <td>{{$technology->name}}</td>
                                        <td>
                                            <form
                                                action="{{route('admin.portfolio-technologies.destroy',['portfolio_technology' => $technology->id])}}"
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-md-12">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <div class="col-md-6"><h6 class="header-title pl-3 redial-relative">Photos</h6></div>
                            <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                <thead class="redial-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($portfolio->photos as $photo)
                                    <tr>
                                        <th scope="row">{{$photo->id}}</th>
                                        <td>
                                            <img src="{{$photo->path}}" alt="" style="width: 500px;">

                                        </td>
                                        <td>
                                            <form
                                                action="{{route('admin.portfolio-photos.destroy',['portfolio_photo' => $photo->id])}}"
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
