<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>{{ $title }}</title>
    </head>

    <body>
        <div class="row">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Duaz</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Konsumen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/parkir') }}">Transaksi Parkir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/list') }}">Table Parkir</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function () {
                $("#biaya").on('click', function () {
                    getbiaya($('#waktu_masuk').val(), $('#waktu_keluar').val(),
                        $('select[name=jenis_kendaraan]').find("option:selected").val())
                });
            });

            function getbiaya(wm, wk, jk) {
                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: "{{ url('/getbiaya') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "waktu_masuk": wm,
                        "waktu_keluar": wk,
                        "jenis_kendaraan": jk
                    },
                    success: function (data) {
                        $('#biaya').val(data)
                    },
                    error: function () {
                        alert("Error");
                    }
                });
            }

        </script>
    </body>

</html>
