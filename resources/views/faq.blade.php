<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FAQ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('user/css/faq-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- font awasome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <x-navbar_user />

    <!-- FAQ -->
    <section id="faq" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">FAQ</h1>
                        <div class="line"></div>
                        <p>
                            Pertanyaan yang Paling Sering Diajukan.</p>
                    </div>
                </div>
            </div>
            <div class="questions-container" data-aos="fade-down" data-aos-delay="250">
                <div class="question">
                    <button id="questionButton">
                        <span>Apa syarat umum untuk menyewa mobil?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Syarat umum untuk menyewa mobil meliputi memiliki SIM yang valid, kartu identitas yang sah, dan
                        umur minimum 18 tahun.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Apakah saya bisa membatalkan pesanan saya setelah terverifikasi?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>
                        Maaf, sayang sekali anda tidak dapat membatalkan pesanan anda setelah pesanan itu terverifikasi.
                    </p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Metode pembayaran apa saja yang tersedia?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Saat pesanan anda sudah terverifikasi, Anda dapat melakukan pembayaran terlebih dahulu melalui
                        transfer bank ke nomor rekening yang sudah dicantumkan</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>
                            Apakah ada biaya tambahan yang perlu saya bayar selain harga sewa?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Ya, ada biaya tambahan yang mungkin perlu Anda bayar, seperti biaya kerusakan dan biaya
                        keterlambatan pengembalian.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Apakah ada batasan waktu penyewaan mobil?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Waktu penyewaan mobil memiliki tarif harian, dihitung mulai dari hari dimana mobil tersebut sudah
                        ditangan anda. </p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Bagaimana prosedur pengambilan dan pengembalian mobil?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>1. Anda harus memesan mobil yang ingin disewa terlebih dahulu melalui aplikasi<br>
                        2. Setelah pesanan terverifikasi, datanglah ke lokasi penyewaan dengan dokumen yang diperlukan
                        dan menandatangani perjanjian sewa. <br>
                        3. Setelah mendapat persetujuan pihak kami, anda dapat membawa mobil yang sudah dipesan.<br>
                        4. Saat pengembalian, Anda akan mengembalikan mobil ke lokasi penyewaan. Saat mengembalikan, tim
                        kami akan mengecek kondisi mobil serta lama waktu pengembalian. Jika terdapat keterlambatan atau
                        kerusakan mobil, maka anda harus membayar biaya tambahan.</p>
                </div>

                <div class="question">
                    <button id="questionButton">
                        <span>Apakah saya perlu mengisi bahan bakar sendiri?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Ya, kami mengharapkan Anda mengisi bahan bakar sendiri sebelum mengembalikan mobil. Pastikan
                        untuk mengembalikan mobil dengan level bahan bakar yang sama seperti saat Anda menerimanya.</p>
                </div>



            </div>
    </section>

    <x-footer_user />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>


</body>

</html>
