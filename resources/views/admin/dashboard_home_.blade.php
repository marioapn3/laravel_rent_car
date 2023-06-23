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

    <title>Home</title>
</head>

<body>
    <x-sidebar-admin />
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Home</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('dashboard_home') }}">Home</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Laporan Keuangan AutoRent</h3>
                    <a href="{{ route('dashboard_home_', ['range' => 'week']) }}" class="btn btn-primary">Data Minggu
                        Ini</a>
                    <a href="{{ route('dashboard_home_', ['range' => 'month']) }}" class="btn btn-primary">Data Bulan
                        Ini</a>
                    <a href="{{ route('dashboard_home_', ['range' => 'year']) }}" class="btn btn-primary">Data Tahun
                        Ini</a>
                </div>
                <table>
                    <thead>
                        @php
                            $no = 1;
                            $totalCost = 0;
                        @endphp
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>Tanggal Pemasukan</th>
                            <th>Pemasukan</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->return_date }}</td>
                                <td>{{ $order->payment->cost }}</td>
                            </tr>
                            @php
                                $no++;
                                $totalCost += $order->payment->cost;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <p>Total Cost: {{ $totalCost }}</p>
            </div>

        </div>
    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
