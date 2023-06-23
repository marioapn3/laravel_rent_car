<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoRent</title>
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}" sizes="50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
</head>

<body>
    <x-navbar_user />

    <!-- DETAIL -->
    <div class="container-fluid">
        <div class="card border-0 shadow-lg rounded pb-4">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ url('Storage/' . $car->car_img) }}" class="w-100">
                </div>
                <div class="col-lg-6 mt-4 ps-3 d-flex flex-column justify-content-around">
                    <div class="row px-3">
                        <h1 class="fw-bold">{{ $car->brand }}{{ $car->name }}</h1>
                        <p class="fs-3 fw-semibold">Rp {{ $car->price }}/day</p>
                    </div>
                    <form action="{{ route('add_order', $car) }}" method="post" class="">
                        @csrf
                        <div class="row px-3">
                            <div class="date-input mb-3">
                                <label for="dateFirst" class="fs-4 fw-semibold mb-1" style="color: #0d7c5d;">Tanggal
                                    Pinjam</label>
                                <input type="date" name="rent_date" class="form-control" id="dateFirst">
                            </div>
                            <div class="date-input">
                                <label for="dateFirst" class="fs-4 fw-semibold mb-1" style="color: #0d7c5d;">Tanggal
                                    Kembali</label>
                                <input type="date" name="return_date" class="form-control" id="dateFirst">
                            </div>
                        </div>
                        <div class="detail-btn ms-3 pt-3">
                            <button class="btn btn-rent" type="submit">Rent Now</button>
                        </div>
                    </form>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p style="color: red; margin-left:20px;">Tanggal Pinjam harus lebih awal dari tanggal
                                kembali</p>
                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="card border-0 shadow-lg rounded mt-5">
            <h5 class="ms-3 mt-4 text-center">Detail Product</h5>
            <hr>
            <div class="detail-product row text-center">
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Merk</p>
                    <p>{{ $car->brand }}</p>
                </div>
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Tipe</p>
                    <p> {{ $car->name }}</p>
                </div>
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Nomor</p>
                    <p>{{ $car->plat_num }}</p>
                </div>
                <div class="col-lg-3 col-6">
                    <p class="mb-1">Tahun</p>
                    <p>2023</p>
                </div>
            </div>
            <hr>
            <div class="detail-desc mt-2">
                <h3 class="fs-3 fw-semibold ms-5">Deskripsi</h3>
                <p class="fs-6 text-secondary px-5 py-4">Mobil ini menawarkan beragam fitur yang memungkinkan
                    pengalaman mengemudi yang nyaman, aman, dan serba canggih. Dengan desain yang modern dan
                    aerodinamis, mobil ini memiliki fitur-fitur berikut: <br>
                    1. Kinerja Tinggi: Mobil dilengkapi dengan mesin bertenaga tinggi yang memberikan akselerasi
                    responsif dan kecepatan maksimum yang mengesankan. Sistem kemudi yang responsif juga memungkinkan
                    pengendalian yang presisi dan stabil. <br>
                    2. Konektivitas Digital: Dengan adanya sistem infotainment terbaru, mobil ini menyediakan
                    konektivitas digital yang luar biasa. Pengemudi dan penumpang dapat terhubung dengan smartphone
                    mereka, mengakses aplikasi, mendengarkan musik, atau menggunakan navigasi dengan mudah melalui layar
                    sentuh yang intuitif. <br>
                    3. Keamanan Tingkat Tinggi: Fitur keamanan canggih seperti sistem pengereman anti-lock, pengawas
                    titik buta, kamera belakang, dan sensor parkir membantu mengurangi risiko kecelakaan. Mobil ini juga
                    dilengkapi dengan kantong udara (airbag) dan sistem pengereman darurat yang mengoptimalkan
                    perlindungan penumpang. <br>
                    4. Fitur Kenyamanan: Dengan kursi yang nyaman dan penyesuaian elektrik, pengemudi dapat menemukan
                    posisi yang ideal. Fitur-fitur lain seperti pendingin udara otomatis, pemanas jok, sistem audio
                    premium, dan kontrol suhu zona ganda memastikan kenyamanan maksimal dalam perjalanan. <br>
                    5. Efisiensi Bahan Bakar: Mobil ini dilengkapi dengan teknologi yang mengoptimalkan efisiensi bahan
                    bakar, seperti sistem hibrida atau mesin ramah lingkungan. Ini membantu mengurangi konsumsi bahan
                    bakar dan emisi gas rumah kaca. <br>
                    6. Desain Inovatif: Desain eksterior mobil ini menonjol dengan garis-garis aerodinamis yang elegan
                    dan detail yang menawan. Interior yang luas dan serba guna memberikan ruang yang cukup untuk
                    penumpang dan barang bawaan. <br>
                    Mobil ini adalah perwujudan dari kemajuan teknologi otomotif yang menyatukan performa tinggi,
                    keamanan, kenyamanan, efisiensi, dan keindahan dalam satu paket yang mengagumkan</p>
            </div>
        </div>
    </div>
    <!-- DETAIL END -->
    <x-footer_user />



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    < </body>

</html>
