@extends('admin.admin_master')

@section('admin')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>client_id</th>
                                        <th>firstName</th>
                                        <th>lastName</th>
                                        <th>email</th>
                                        <th>address</th>
                                        <th>country</th>
                                        <th>state</th>
                                        <th>zip</th>
                                        <th>cardName</th>
                                        <th>cardNumber</th>
                                        <th>cardExpration</th>
                                        <th>status</th>
                                        <th>total_sum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td width="1%">{{ $item->id }}</td>
                                            <td>{{ $item->client_id }}</td>
                                            <td>{{ $item->firstName }}</td>
                                            <td>{{ $item->lastName }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->country }}</td>
                                            <td>{{ $item->state }}</td>
                                            <td>{{ $item->zip }}</td>
                                            <td>{{ $item->cardName }}</td>
                                            <td>{{ $item->cardNumber }}</td>
                                            <td>{{ $item->cardExpiration }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->total_sum }}</td>
                                            <td>
                                                {{-- <a href="{{ route('order.manage', $item->id) }}" class="btn btn-info"
                                                    title="Manage"><i class="fas fa-mnage"></i></a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
