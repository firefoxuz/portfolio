@extends('admin.layouts.main')
@section('content')
    <div class="col-12 col-xl-6">
        <div class="card redial-border-light redial-shadow mb-4">
            <div class="card-body">
                <h6 class="header-title pl-3 redial-relative">Form</h6>
                <form method="post"
                      action="{{route('admin.social-networks.update',['social_network' => $socialNetwork->id])}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label class="redial-font-weight-600">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name"
                               value="{{old('name',$socialNetwork->name)}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Link</label>
                        <input type="text" name="link" class="form-control" placeholder="Enter Link"
                               value="{{old('link',$socialNetwork->link)}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600 d-block">Icon</label>
                        <input type="text" name="icon" class="form-control" placeholder="Enter Icon"
                               value="{{old('icon',$socialNetwork->icon)}}">
                    </div>
                    <button type="submit" href="#" class="btn btn-primary btn-xs">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
