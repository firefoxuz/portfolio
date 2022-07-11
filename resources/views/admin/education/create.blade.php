@extends('admin.layouts.main')
@section('content')
    <div class="col-12 col-xl-6">
        <div class="card redial-border-light redial-shadow mb-4">
            <div class="card-body">
                <h6 class="header-title pl-3 redial-relative">Form</h6>
                <form method="post"
                      action="{{route('admin.educations.store')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="redial-font-weight-600">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name"
                               value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">Sub Name</label>
                        <input type="text" name="sub_name" class="form-control" placeholder="Enter Sub name"
                               value="{{old('sub_name')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600 d-block">Description</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">From</label>
                        <input type="text" name="from" class="form-control" placeholder="Enter From"
                               value="{{old('from')}}">
                    </div>
                    <div class="form-group">
                        <label class="redial-font-weight-600">To</label>
                        <input type="text" name="to" class="form-control" placeholder="Enter To"
                               value="{{old('to')}}">
                    </div>
                    <button type="submit" href="#" class="btn btn-primary btn-xs">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
