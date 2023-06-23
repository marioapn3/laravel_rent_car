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

    <!-- RENT -->
    <div class="rent container-lg mt-5 riwayat-body">
        <h5>Mazda</h1>
            <div class="row mt-4">
                @foreach ($cars as $car)
                    <div class="col-lg-4 col-sm-6 mt-4">
                        <div class="card border-0 shadow-lg">
                            <img src="{{ url('storage/' . $car->car_img) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $car->name }}</h5>
                                <p class="rent-merk">{{ $car->brand }}</p>
                            </div>
                            <p class="rent-price fw-semibold d-flex justify-content-center">{{ $car->price }}/day</p>
                            <form action="{{ route('show_car', $car) }}" method="get">
                                <button type="submit"
                                    class="btn btn-rent border-0 rounded-0 rounded-bottom p-2 fw-semibold w-100">
                                    Rent
                                    Now</button>
                            </form>

                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <!-- RENT END -->

    <x-footer_user />

    <script src="{{ asset('user/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
