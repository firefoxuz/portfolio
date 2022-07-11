@extends('admin.layouts.main')
@section('content')
    <div class="col-12 col-xl-6">
        <div class="card redial-border-light redial-shadow mb-4">
            <div class="card-body">
                <h6 class="header-title pl-3 redial-relative">Form</h6>
                <form method="post"
                      action="{{route('admin.portfolios.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="redial-font-weight-600">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Enter Type"
                               value="{{old('type')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Project name</label>
                        <input type="text" name="project_name" class="form-control" placeholder="Enter Project name"
                               value="{{old('project_name')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600 d-block">Description</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Site</label>
                        <input type="text" name="site" class="form-control" placeholder="Enter Site"
                               value="{{old('site')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Date</label>
                        <input type="text" name="date" class="form-control" placeholder="Enter Date"
                               value="{{old('date')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Priority</label>
                        <input type="text" name="priority" class="form-control" placeholder="Enter Priority"
                               value="{{old('priority')}}">
                    </div>
                    <button type="submit" href="#" class="btn btn-primary btn-xs">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
