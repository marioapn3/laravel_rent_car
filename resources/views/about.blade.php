<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About AutoRent</title>
    <link rel="icon" href="logo1_green.png" sizes="50" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet" /> --}}

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <x-navbar_user />

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">ABOUT <span class="text-success">AutoRent</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/pict2.jpg" alt="" />
                    <div class="d-flex align-items-center p-4 mb-4 text-dark">
                        <p>

                            AutoRent adalah platform penyewaan mobil online yang menyediakan layanan berkualitas tinggi
                            bagi pelanggan
                            yang membutuhkan kendaraan sementara. Dengan menggunakan teknologi canggih dan proses yang
                            efisien,
                            AutoRent
                            mempermudah proses penyewaan mobil bagi pelanggan, menghilangkan kerumitan dan memberikan
                            pengalaman yang
                            nyaman serta terpercaya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success ml-n2 mr-4"
                            style="width: 100px; height: 100px; margin-right:20px;">
                            <i class="fa fa-2x fa-check-circle  text-dark "></i>
                        </div>
                        <h4 class="text-uppercase m-0">Kenyamanan dan Kemudahan</h4>
                    </div>
                    <p class="text-dark  text-justify">
                        AutoRent menawarkan kemudahan dan kenyamanan bagi pelanggan dalam menyewa mobil. Melalui situs
                        ini,
                        pelanggan dapat dengan cepat mencari mobil yang mereka inginkan, memeriksa ketersediaan, dan
                        melakukan
                        pemesanan dengan
                        beberapa klik.
                    </p>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success ml-n2 mr-4"
                            style="width: 100px; height: 100px; margin-right:20px;">
                            <i class="fa fa-2x fa-fast-forward  text-dark"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Proses Penyewaan yang Cepat dan Aman</h4>
                    </div>
                    <p class="text-dark text-justify">AutoRent memprioritaskan kecepatan dan keamanan dalam proses
                        penyewaan.
                        Dengan hanya beberapa dokumen yang diperlukan, pelanggan dapat dengan mudah melengkapi proses
                        pendaftaran
                        dan verifikasi.</p>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-success ml-n2 mr-4"
                            style="width: 100px; height: 100px; margin-right:20px;">
                            <i class="fa fa-2x fa-car text-dark"></i>
                        </div>
                        <h4 class="text-uppercase m-0">Pilihan Kendaraan yang Luas</h4>
                    </div>
                    <p class="text-dark text-justify">
                        AutoRent menawarkan beragam pilihan kendaraan, mulai dari mobil keluarga yang nyaman hingga
                        mobil mewah yang
                        elegan. Pelanggan dapat memilih mobil yang sesuai dengan kebutuhan mereka, baik untuk perjalanan
                        bisnis
                        maupun
                        liburan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <x-footer_user />
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
</body>

</html>
