@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah User Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            @include('users.form-control.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection