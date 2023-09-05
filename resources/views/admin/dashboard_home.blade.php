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
    <style>
        .btn-pdf {

            padding: 8px 16px;
            border: none;
            background-color: #008CBA;
            color: white;
            transition-duration: 0.4s;
            cursor: pointer;

        }

        .btn-pdf:hover {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 0 auto;
            margin-top: 15%;
            padding: 20px;
            border: 1px solid #888;
            width: 400px;
            border-radius: 20px;
            height: 150px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .laporan_form {
            display: flex;
            width: 100%;
            justify-content: center;
            align-content: center;
            gap: 20px;
        }
    </style>
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
                    <button onclick="openModal()" class="btn-pdf">Donwload
                        PDF</button>
                    <a href="{{ route('dashboard_home_', ['range' => 'week']) }}" class="btn btn-primary">Per Minggu</a>
                    <a href="{{ route('dashboard_home_', ['range' => 'month']) }}" class="btn btn-primary">Per Bulan</a>
                    <a href="{{ route('dashboard_home_', ['range' => 'year']) }}" class="btn btn-primary">Per Tahun</a>
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

                                @php
                                    $no++;
                                    $totalCost += $order->payment->cost;
                                @endphp
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>Total Cost: {{ $totalCost }}</p>

            </div>

        </div>


    </main>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3 style="margin-bottom:20px">Download Laporan Keuangan PDF</h3>
            <div class="laporan_form">
                <div class="">
                    <form action="{{ route('pdf_keuangan', ['range' => 'week']) }}" method="post">
                        @csrf
                        <button class="btn-pdf" type="submit">Laporan Mingguan</button>
                    </form>
                </div>
                <div>
                    <form action="{{ route('pdf_keuangan', ['range' => 'month']) }}" method="post">
                        @csrf
                        <button class="btn-pdf" type="submit">Laporan Bulanan</button>
                    </form>
                </div>
                <div>
                    <form action="{{ route('pdf_keuangan', ['range' => 'year']) }}" method="post">
                        @csrf
                        <button class="btn-pdf" type="submit">Laporan Tahunan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script>
        function openModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>

    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
