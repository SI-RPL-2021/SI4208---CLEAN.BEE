@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Layanan Cuci Pakaian') }}</h1>

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow mb-4">

            <div class="card-profile-image mt-4">
                <img src="{{ asset('img/pakaian.png') }}" class="rounded-circle" alt="user-image">
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <div class="text-center">
                            <h5 class="font-weight-bold">Layanan Cuci Pakaian</h5>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="container">
                    <h2 align=center>Price List Cuci Pakaian CleanBee</h2>
                    <p align=center>Pada layanan cuci pakaian, CleanBee berusaha memberi layanan yang terbaik untuk bajumu!</p>
                    <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Layanan</th>
                        <th>Berat</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cuci kering lipat</td>
                        <td>5 Kg</td>
                        <td>Rp45.000</td>
                    </tr>
                    <tr>
                        <td>Cuci kering</td>
                        <td>5 Kg</td>
                        <td>Rp35.000</td>
                    </tr>
                    <tr>
                        <td>Setrika</td>
                        <td>5 Kg</td>
                        <td>Rp25.000,-</td>
                    </tr>
                   
                </tbody>
            </table>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="col-12 col-md-15"></div>
                        <div class="col-12 col-md-15"> <br><br><br>
                            <h2 align=center>Formulir Pemesanan</h2><br><br>
                            <form class="was-validated" action="" method="post">
                                <?php if (isset($error)) : ?>
                                    <p class="text-danger">The data is not completed!</p>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="nname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">No Handphone:</label>
                                    <input type="text" class="form-control" id="nohp" placeholder="Enter Your Phone Number" name="nohp" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Pengambilan:</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="Enter Your Address" name="alamat" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">Catatan:</label>
                                    <input type="text" class="form-control" id="catatan" placeholder="Notes" name="catatan" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I am sure the data is correct.
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                </div>
                                <div align=center;>
                                    <button align=center; type="submit" name="submit" class="btn btn-dark">Submit</button>
                                </div>

                            </form>
                            <br><br>
                        </div>
                    </div>

                </div>

            </div>

            @endsection