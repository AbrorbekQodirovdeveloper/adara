@extends('admin.admin_master')

@section('admin')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Order Products</li>
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
                                        <th>PRODUCT_ID</th>
                                        <th>Name</th>
                                        <th>Order_id</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Discount</th>
                                        <th>Client_id</th>
                                        <th>Size_id</th>
                                        <th>Color_id</th>
                                        <th>Count</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderproducts as $item)
                                        <tr>
                                            <td width="1%">{{ $item->id }}</td>
                                            <td>{{ $item->product_id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->order_id }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td width="15%">
                                                <img
                                                src="{{ asset($item->image) }}"
                                                style="width: 90px; height: 60px;">
                                              </td>
                                            <td>{{ $item->discount }}</td>
                                            <td>{{ $item->client_id }}</td>
                                            <td>{{ $item->size_id }}</td>
                                            <td>{{ $item->color_id }}</td>
                                            <td>{{ $item->count }}</td>

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
