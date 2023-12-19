<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="Colorlib Templates" />
        <meta name="author" content="Colorlib" />
        <meta name="keywords" content="Colorlib Templates" />

        <!-- Title Page-->
        <title>Registrasi CMI Hospital</title>

        <!-- Icons font CSS-->
        <link
            href="/vendor/mdi-font/css/material-design-iconic-font.min.css"
            rel="stylesheet"
            media="all"
        />
        <link
            href="/vendor/font-awesome-4.7/css/font-awesome.min.css"
            rel="stylesheet"
            media="all"
        />
        <!-- Font special for pages-->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
            rel="stylesheet"
        />

        <!-- Vendor CSS-->
        <link
            href="/vendor/select2/select2.min.css"
            rel="stylesheet"
            media="all"
        />
        <link
            href="vendor/datepicker/daterangepicker.css"
            rel="stylesheet"
            media="all"
        />

        <!-- Main CSS-->
        <link href="/css/main.css" rel="stylesheet" media="all" />
    </head>

    <body>
        <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w680">
                <div class="card card-1">
                    <div class="card-heading"></div>
                    <div class="card-body">


                        <h2 class="title">Registrasi Pasien CMI Hospital</h2>

                        <form action="{{route('user.store')}}"method="POST">
                            @csrf

                            <span>Kode Registrasi :{{$gabung}}</span><input type="hidden" name="kode_registrasi" value="{{$gabung}}">
                            <button> </button>
                            <div class="input-group">
                                <input
                                    class="input--style-1"
                                    type="text"
                                    placeholder="NAMA"
                                    name="nama"
                                />
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input
                                            class="input--style-1 js-datepicker"
                                            type="text"
                                            placeholder="TANGGAL LAHIR"
                                            name="ttl"
                                        />
                                        <i
                                            class="zmdi zmdi-calendar-note input-icon js-btn-calendar"
                                        ></i>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <div
                                            class="rs-select2 js-select-simple select--no-search"
                                        >
                                            <select name="gender">
                                                <option
                                                    disabled="disabled"
                                                    selected="selected"
                                                >
                                                    GENDER
                                                </option>
                                                <option value="L">
                                                    Laki-laki
                                                </option>
                                                <option value="P">
                                                    Perempuan
                                                </option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <div
                                    class="rs-select2 js-select-simple select--no-search"
                                >
                                    <select name="pendidikan">
                                        <option
                                            disabled="disabled"
                                            selected="selected"
                                        >
                                            PENDIDIKAN
                                        </option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            {{-- <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input
                                            class="input--style-1"
                                            type="text"
                                            placeholder="KODE REGISTRASI"
                                            name="res_code"
                                            disabled
                                        />
                                    </div>
                                </div>
                            </div> --}}
                            <div class="p-t-20">
                                <button
                                    class="btn btn--radius btn--green"
                                    type="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="/vendor/select2/select2.min.js"></script>
        <script src="/vendor/datepicker/moment.min.js"></script>
        <script src="/vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>
    </body>
    <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
