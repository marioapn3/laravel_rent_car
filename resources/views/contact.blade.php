<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Auto Rent</title>
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
    <!-- <link href="bootstrap.min.css" rel="stylesheet" /> -->

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <x-navbar_user />

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5 text-secondary">Kontak <span
                    class="text-success">Kami</span>
            </h1>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4 shadow-lg" style="padding: 30px">
                        <form>
                            <div class="row mb-3">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Nama Anda"
                                        required="required" />
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-4" placeholder="Email Anda"
                                        required="required" />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control p-4" placeholder="Subject"
                                    required="required" />
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control py-3 px-4" rows="5" placeholder="Pesan" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-success py-3 px-5" type="submit">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="d-flex flex-column justify-content-center px-5 mb-4"
                        style="height: 416px; background-color: #292F36;">
                        <div class="d-flex mb-4 mt-4">
                            <i class="fa fa-2x fa-map-marker-alt text-success flex-shrink-0 mr-3 me-3 ml-1"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Head Office</h5>
                                <a class="text-decoration-none" href="https://goo.gl/maps/ZyrzAWhDEuLamKdHA"
                                    style="color: #8486a0">Mario's House</a>
                            </div>
                        </div>
                        <!-- <div class="d-flex mb-3">
                <i class="fa fa-2x fa-map-marker-alt text-success flex-shrink-0 mr-3"></i>
                <div class="mt-n1">
                  <h5 class="text-light">Branch Office</h5>
                  <p>123 Street, New York, USA</p>
                </div>
              </div> -->
                        <div class="d-flex mb-4 mt-4">
                            <i class="fa fa-2x fa-envelope-open text-success flex-shrink-0 mr-3 me-3 ml-1"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Customer Service</h5>
                                <a class="text-decoration-none" href="cs.autorent@gmail.com"
                                    style="color: #8486a0">cs.autorent@gmail.com</a>
                            </div>
                        </div>
                        <div class="d-flex mb-4 mt-4">
                            <i class="fa fa-2x fa-phone text-success flex-shrink-0 mr-3 me-3 ml-1"
                                style="transform: scaleX(-1);"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Telephone</h5>
                                <a class="m-0 text-decoration-none" href="tel:+62 896-4908-1621"
                                    style="color: #8486a0">+62
                                    896-4908-1621</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <x-footer_user />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
