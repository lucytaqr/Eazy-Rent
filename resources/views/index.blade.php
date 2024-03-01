@extends('layouts.global')
@extends('layouts.navbar')


@section('title')
    EazyRent - Malang
@endsection

@section('content')
    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-2"> Selamat Datang di EazyRent!</h4>
            <h3 class="display-6">Cari Mobil Sesuai dengan kenyamanan anda!</h3><br>
            <a href="{{ route('login') }}">
                <button type="button" class="btn btn-secondary btn-lg">Login</button>
            </a>
            <a href="{{ route('register') }}">
                <button type="button" class="btn btn-secondary btn-lg">Sign Up</button>
            </a>
        </div>
    </div>

    <!-- portofolio -->
    {{-- <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-5" id="portofolio"><b>Pilih Mitra Penyewaan Mobil</b></h2>
            <p>Anda bisa memilih mitra yang akan anda pilih untuk penyewaan mobil bebas sesuai keinginan dan kenyamanan
                anda.
            </p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_1.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>ERC TRANS</b></h5>
                            <p class="card-text">Hadir sebagai solusi anda, dengan layanan sewa mobil Malang, sewa
                                mobil Surabaya
                                Malang, travel Surabaya dan paket wisata Bromo Malang Batu berkualitas dengan harga hemat,
                                baik besifat
                                pribadi atau coorporate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_2.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>SUMMIT TRANS MALANG</b></h5>
                            <p class="card-text">Mitra terbaik anda untuk touring di area malang dan sekitarnya. Kami
                                menyediakan sewa
                                mobil malang murah dengan kualitas terbaik serta pelayanan yang profesional. Selalu menjaga
                                kondisi
                                kendaraan agar tetap terawat, bersih, harum, dan rapi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_3.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>SMART TRANS MALANG</b></h5>
                            <p class="card-text">menyediakan bermacam-macam armada mulai dari mobil pribadi seperti
                                Innova, Avanza,
                                Xenia, Luxio, Elf, Hiace, Bus Mikro, dan Bus pariwisata, hingga paket tour wali lima, wali
                                songo, wisata
                                ijen, wisata bromo midnight, dan moment lainnya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_4.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>ZENTRANS</b></h5>
                            <p class="card-text">Jasa sewa mobil yang sudah berlegalitas dan berbadan hukum di malang
                                batu.
                                Mobil-mobil kami terpelihara dengan baik demi kenyamanan anda dalam perjalanan. Harganya pun
                                tetap
                                terjangkau, disertai supir yang handal.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_5.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>MALIQ TRANS</b></h5>
                            <p class="card-text">Melayani jasa sewa mobil murah di Malang. Kami mengutamakan pelayanan
                                yang ramah,
                                profesional, dan terpercaya. Kami menyediakan segala jenis mode transportasi mulai Avanza,
                                Xenia, Innova
                                Grand, Innova Reborn, dan banyak lagi lainnya.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_6.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>SALSA WISATA</b></h5>
                            <p class="card-text">Sewa mobil Malang cara termudah dan nyaman jelajahi Malang tanpa
                                ribet. Mobil rental
                                berbagai tipe siap membawa Anda mengelilingi Malang mengeksplor setiap rute. Anda bisa pesan
                                langsung
                                melalui website.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_7.jpeg') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>TIGADARA</b></h5>
                            <p class="card-text">Perusahaan penyedia rental mobil + driver di Malang dengan harga
                                murah. Unit yang
                                ditawarkan yaitu Toyota Avanza, Innova, Hiace Commuter serta Isuzu Elf dengan kapasitas 11
                                dan 17 seat.
                                Rute sewa mobil Malang specialis kami adalah rute wisata.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_8.jpg') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>TANTOTRANS</b></h5>
                            <p class="card-text">Armada rental mobil Malang yang kami siapkan ialah armada keluaran
                                teranyar dan
                                terurus, tentunya di dukung dengan kondisi mesin yang baik serta AC yang dingin supaya
                                membuat
                                perjalanan wisata anda di Kota Malang serta Batu jadi nyaman untuk waktu penggunaan 12 jam –
                                18 jam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="{{ asset('img/Rent_9.png') }}" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title"><b>DW TRANS MALANG</b></h5>
                            <p class="card-text">Penyedia layanan sewa mobil malang murah kota malang, jawa timur. Sewa
                                mobil malang
                                batu, rental mobil malang batu, sewa mobil malang bromo, rental mobil malang bromo.
                                Terpercaya sudah
                                berpengalaman di bidang transportasi sejak tahun 2009.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    </div>
    </div>
    </div> --}}
<div class="row container">
    @foreach($rent as $r)
    <div class="col-md-4 mt-1">
        <div class="card crop-img" style="text-align: center">
            <img src="{{ asset('image/rent/'.$r->image)}}" alt="">
            <div class="card-body">
                <h5>{{ $r->name }}</h5>
                <p>{{ $r->deskripsi }}</p>
                <p>{{ $r->price }}</p>
                <a type="button" class="btn btn-primary" id="show" href="{{ url('form/')}}">Booking Sekarang</a>
            </div>
        </div>
    </div>
@endforeach
</div>

    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-5" id="layanan"><b>Kenapa Memilih Kita?</b></h2>
            <p>
                Kita adalah penyedia layanan untuk rental mobil yang paling terpercaya. Penyewa akan aman dan nyaman dengan
                layanan kami
                yang sangat efisien.
            </p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran d-flex align-items-center justify-content-center"><i
                            class="fal fa-globe fa-5x"></i></span>
                    <h3 class="mt-3">Pencarian</h3>
                    <p>
                        Hasil pencarian yang lebih komprehensif
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran d-flex align-items-center justify-content-center"><i
                            class="fal fa-shield-check fa-5x"></i></span>
                    <h3 class="mt-3">Transaksi</h3>
                    <p>
                        Jaminan transaksi aman di EazyRent
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran d-flex align-items-center justify-content-center"><i
                            class="far fa-clock fa-5x"></i></i></span>
                    <h3 class="mt-3">Layanan</h3>
                    <p>
                        EazyRent siap membantu anda 24/7 dan juga dalam keadaan darurat
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tim -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-5" id="staff"><b>Testimoni</b></h2>
            <p>
                ini adalah testimoni dari pelanggan yang telah menggunakan jasa kami untuk penyewaan mobil.
            </p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                    <img src="{{ asset('img/terisiannaxean.jpg') }}" class="rounded-circle mb-3" />
                    <h4>Aman 100%</h4>
                    <p>Pelanggan aman saat akan transaksi</p>
                    <p>(telah menyewa di DW TRANS MALANG)</p>
                    <!-- <p>
                                                                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                                                                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                                                                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                                                                      </p> -->
                </div>

                <div class="col-md-4 text-center tim">
                    <img src="{{ asset('img/P H I L I P..jpg') }}" class="rounded-circle mb-3" />
                    <h4>Pelayanan Cepat</h4>
                    <p>Pelanggan senang dengan pelayanan yang cepat</p>
                    <p>(telah menyewa di ZENTRANS)</p>
                    <!-- <p>
                                                                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                                                                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                                                                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                                                                      </p> -->
                </div>

                <div class="col-md-4 text-center tim">
                    <img src="{{ asset('img/Alchra.jpg') }}" class="rounded-circle mb-3" />
                    <h4>Tersedia 24 jam</h4>
                    <p>Pelanggan tidak khawatir saat membutuhkan sewa mobil saat darurat</p>
                    <p>(telah menyewa di SMART TRANS MALANG)</p>
                    <!-- <p>
                                                                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                                                                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                                                                        <a href="" class="social"><i class="fab fa-instagram"></i></a>
                                                                      </p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak -->
    <div class="container-fluid pt-5 pb-5 kontak ">
        <div class="container">
            <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
            <p class=text-center>
                jika ingin bertanya atau butuh bantuan seputar penyewaan mobil bisa kontak kami dibawah ini
            </p>
            <div class="row pb-3">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" />
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" />
                    <input class="form-control form-control-lg" type="text" placeholder="No. Phone" />
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <button type="button" class="btn btn-secondary btn-lg">Kirim Pesan</button>
            </div>
        </div>
    </div>
    <div class="container text-center pt-5 pb-5">
        All Rights Reserved &copy; 2022
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
