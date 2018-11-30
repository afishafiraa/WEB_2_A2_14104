@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Member</h1>
            <hr>
            <form action="{{ route('14104_web.store') }}" method="post">
                {{ csrf_field() }}
				<div class="form-group">
                    <label for="nama_barang">Nama Member:</label>
                    <input type="text" class="form-control" id="usr" name="name">
                </div>
				<div class="form-group">
                    <label for="stok">Email:</label>
                    <input type="text" class="form-control" id="usr" name="email">
                </div>
				<div class="form-group">
                    <label for="harga">Password:</label>
                    <input type="text" class="form-control" id="usr" name="password">
                </div>
                <div class="form-group">
                    <label for="expired_date">Address:</label>
                    <input type="date" class="form-control" id="usr" name="macAddress">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection