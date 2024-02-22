@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Transaction</h4>
                        <a href="{{ route('transactions.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Pengguna</td>
                                    <td>Barang</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transaction->name }}</td>
                                        <td>{{ $transaction->email }}</td>
                                        <td>
                                            <a href="{{ route('transactions.edit', $transaction->id) }}">Edit</a> 
                                            <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection