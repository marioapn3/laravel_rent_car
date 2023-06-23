<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">

    <title>Dashboard Rental</title>
    <style>
        .order {
            margin: 0 auto;
            width: 500px;
            border: 1px solid #ccc;
            padding: 1rem;
        }

        .head {
            background-color: #f9f9f9;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }

        .container {
            padding: 0.5rem;
        }

        p {
            margin-bottom: 0.5rem;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <x-sidebar-admin />
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Order</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('dashboard_order') }}">Order</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Bukti Pembayaran</h3>

                </div>
                <hr>
                @foreach ($orders as $order)
                    <div class="container">
                        <h4>Order ID : {{ $order->id }}</h4>
                        <p>User ID : {{ $order->payment->user_id }}</p>
                        <p>Nama Kustomer : {{ $order->payment->user->name }}</p>
                        <p>Jumlah Pembayaran : {{ $order->payment->cost }}</p>
                        <p>Mobil : {{ $order->car->brand }} {{ $order->car->name }}</p>
                        @if ($order->payment->is_paid)
                            <p>Sudah Lunas</p>
                        @else
                            <p>Belum Lunas</p>
                        @endif

                        <p>Tanggal Penyewaan: {{ $order->rent_date }}</p>
                        {{-- <p> Tanggal Pengembalian:{{ $order->return_date }}</p>  --}}
                        Bukti Pembayaran:
                        @if ($order->payment->payment_receipt == null)
                            Belum ada pembayaran
                        @else
                            <a href="{{ url('storage/' . $order->payment->payment_receipt) }}">Cek
                                Pembayaran</a>
                            @if ($order->payment->is_paid == true)
                                <p>Pembayaran Lunas</p>
                            @else
                                <form action="{{ route('confirmPayment', $order->payment) }}" method="post">

                                    @csrf
                                    <button type="submit">Konfirmasi Pembayaran</button>
                                </form>
                            @endif
                        @endif

                        <hr>
                    </div>
                @endforeach
            </div>

        </div>
    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
