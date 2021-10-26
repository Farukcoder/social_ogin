@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <img class="w-25" style="object-fit: cover; width: 110px; height: 180px; border-radius:5%" src="{{Session::get('image')}}" alt="user image">
                        <table class="table mt-4 table-bordered">
                            <tr>
                                <td>User Id</td>
                                <td>{{Session::get('user_id')}}</td>
                            </tr>
                            <tr>
                                <td>Nick Name</td>
                                <td>{{Session::get('nickname')}}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{Session::get('name')}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{Session::get('email')}}</td>
                            </tr>
                            <tr>
                                <td>Token</td>
                                <td>{{Session::get('token')}}</td>
                            </tr>
                        </table>
                        <a href="{{url('logout')}}" class="btn btn-danger">Logout</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
