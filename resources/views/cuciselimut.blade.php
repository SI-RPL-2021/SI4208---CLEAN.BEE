<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Laundry Selimut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">CleanBee</span>
            <span class="navbar-brand mb-0 h1">Log Out</span>
        </div>
    </nav>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <br><br>
        <div class="container">
            <h2 align=center>Price List Cuci Selimut CleanBee</h2>
            <p align=center>Pada layanan cuci selimut, CleanBee memberi harga terbaik untuk kamu!</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tipe</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Karpet Rumah</td>
                        <td>per meter</td>
                        <td>Rp25.000,-</td>
                    </tr>
                    <tr>
                        <td>Karpet Masjid</td>
                        <td>per meter</td>
                        <td>Rp17.500,-</td>
                    </tr>
                    <tr>
                        <td>Karpet Kantor</td>
                        <td>per meter</td>
                        <td>Rp25.000,-</td>
                    </tr>
                    <tr>
                        <td>Seprei</td>
                        <td>120x120</td>
                        <td>Rp25.000,-</td>
                    </tr>
                    <tr>
                        <td>Karpet Kantor</td>
                        <td>160x200</td>
                        <td>Rp30.000,-</td>
                    </tr>
                    <tr>
                        <td>Selimut</td>
                        <td>per kilo</td>
                        <td>Rp15.000,-</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container">
        
            <div  class="row">
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
                        <button align=center; type="submit" class="btn btn-primary">Submit</button>
                        </div>
                       
                    </form>
                    <br><br><br>

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

    </html>