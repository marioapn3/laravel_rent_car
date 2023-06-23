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

    <title>Dashboard Validasi</title>
</head>

<body>
    <x-sidebar-admin />
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Return Car</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('dashboard_return') }}">ReturnCar</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Table Car</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>ORDER_ID</th>
                            <th>TGL SEWA</th>
                            <th>TGL KEMBALI</th>
                            <th>TGL PENGEMBALIAN</th>
                            <th>Denda</th>
                            <th>Validasi Admin</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $no = 1;
                        ?>
                        @foreach ($CarReturns as $CarReturn)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $CarReturn->id }}</td>
                                <td>{{ $CarReturn->order_id }}</td>
                                <td>{{ $CarReturn->order->rent_date }}</td>
                                <td>{{ $CarReturn->order->return_date }}</td>
                                <td>
                                    @if ($CarReturn->date_of_return == null)
                                        Mobil belum kembali
                                    @else
                                        {{ $CarReturn->date_of_return }}
                                    @endif
                                </td>
                                <td>{{ $CarReturn->fines }}</td>
                                <td>
                                    @if ($CarReturn->validate_admin)
                                        Sudah Valid
                                    @else
                                        Belum Valid
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('edit_validate_car', $CarReturn) }}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bx bx-edit" style="color:green; font-size: 20px;"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $no++;
                            ?>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
