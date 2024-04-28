@extends('admin.admin_master')

@section('admin')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add to product size</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('all.product_set_size') }}">Size</a></li>
                    <li class="breadcrumb-item active">Add to Product size</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('product_set_size.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product id</label>
                                            <input type="number" name="product_id" class="form-control">
                                            @error('product_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size id</label>
                                            <input type="number" name="size_id" class="form-control">
                                            @error('size_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-end">
                                <input type="submit" class="btn btn-rounded btn-primary" value="Submit">
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection

