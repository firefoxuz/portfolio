@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-md-12">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <div class="col-md-6"><h6 class="header-title pl-3 redial-relative">Contact Messages</h6>
                            </div>
                            <table class="table table-bordered mb-0 redial-font-weight-500 table-responsive d-md-table">
                                <thead class="redial-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{$contact->id}}</th>
                                        <td>{{$contact->full_name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>{{$contact->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <div class="text-center col-md-12">
                                    {{ $contacts->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
