@extends('template.temp')

@section('title', 'E-Ticket - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/etiket.css') }}">
    @if ($transaksi->isNotEmpty())
        @foreach ($transaksi as $item)
            <section>
                <div class="row hero mt-5 mb-5">
                    <img class="imghero" src="{{ asset('storage/' . $item->olahraga->foto) }}" alt="hero">
                    <h1 class="head">{{ $item->user->namatempat }}</h1>
                    <p class="desk">{{ $item->olahraga->jenis }} Di {{ $item->user->alamat }}</p>
                    <div class="d-flex mt-2">
                        <a href="{{ 'https://www.instagram.com/' . $item->user->instagram }}" class="bulat">
                            <img src="{{ asset('image/ig.png') }}" alt="instagram">
                        </a>
                        <a href="{{ 'https://wa.me/' . $item->user->whatsapp }}" class="bulat">
                            <img src="{{ asset('image/wa.png') }}" alt="whatsapp">
                        </a>
                        <button type="button" class="bulat btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <img class="tiket" src="{{ asset('image/ticket.png') }}" alt="tiket">
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">E-Ticket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pembayaran">
                                    <div class="dat data">
                                        <h4>Order ID</h4>
                                        <h5>{{ $item->order_id }}</h5>
                                    </div>
                                    <div class="dat datakanan">
                                        <h4>Status Pembayaran</h4>
                                        <div class="status {{ $item->status === 0 ? 'pending' : '' }}">
                                            @if ($item->status === 0)
                                                <span>PENDING</span>
                                            @else
                                                <span>SUKSES</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="dat data">
                                        <h4>Nama Rekening / Akun</h4>
                                        <h5>{{ $item->nama_pelanggan }}</h5>
                                    </div>
                                    <div class="dat datakanan">
                                        <h4>Jenis Transaksi</h4>
                                        <h5>{{ $item->jenis_transaksi }}</h5>
                                    </div>
                                    <div class="dat data">
                                        <h4>Tanggal Order</h4>
                                        <h5>{{ $item->waktu_order }}</h5>
                                    </div>
                                    <div class="dat datakanan">
                                        <h4>Metode Pembayaran</h4>
                                        <h5>{{ $item->jenis_pembayaran }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row deskripsi mt-3 mb-5">
                    <div class="col-lg-7">
                        <h1 class="mb-2">Deskripsi Lapangan</h1>
                        {!! $item->olahraga->deskripsi !!}
                        <h1 class="mt-5 mb-2">Aturan Lapangan</h1>
                        {!! $item->olahraga->aturan !!}
                    </div>
                    <div class="fasilitas mt-2 col-lg-5">
                        <div class="isi">
                            <p>E-ticket</p>
                            <h3>Rp. {{ $item->harga_lapangan }}</h3>
                            <div class="bungkus">
                                <div class="waktu">
                                    <label>Tanggal <br><span>{{ $item->jadwal->tanggal }}</span></label>
                                </div>
                                <div class="waktu">
                                    <label>Jam <br><span>{{ $item->jadwal->jam }}</span></label>
                                </div>
                                <div class="waktu">
                                    <label>Lapangan <br><span>{{ $item->lapangan->nama_lapangan }}</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!$loop->last)
                    <hr>
                @endif
            </section>
        @endforeach
    @else
        <h2 class="text-center" style="margin-top: 350px; margin-bottom: 350px;">Anda Belum Booking Apapun</h2>
    @endif
    {{-- <section>
        <div class="row hero mt-5 mb-5">
            <img class="imghero" src="{{ asset('image/heropilih.png') }}" alt="hero">
            <h1 class="head">Kakanta Sport Center</h1>
            <p class="desk">Futsal Di Kota Makassar</p>
            <div class="d-flex mt-2">
                <a href="#" class="bulat">
                    <img src="{{ asset('image/ig.png') }}" alt="instagram">
                </a>
                <a href="#" class="bulat">
                    <img src="{{ asset('image/wa.png') }}" alt="whatsapp">
                </a>
                <a href="#" class="bulat">
                    <img src="{{ asset('image/barcode.png') }}" alt="whatsapp">
                </a>
            </div>
        </div>
        <hr>
        <div class="row deskripsi mt-3 mb-5">
            <div class="detail">
                <h1 class="mb-2">Deskripsi Lapangan</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Placerat turpis sed cras scelerisque. Cursus ornare
                    habitasse non quis vel. Curabitur praesent id ullamcorper volutpat facilisi purus. Tortor vulputate et
                    quis
                    nulla. Enim volutpat natoque habitant ipsum faucibus mauris velit sed. Consectetur morbi cras quis
                    consectetur
                    orci mauris mi ornare pulvinar. Massa ultricies viverra pulvinar convallis sem. At in dictum cras amet
                    arcu enim
                    volutpat lorem feugiat. Sem vitae diam eleifend ac sed interdum nascetur. Eros sodales at fermentum dui.
                </p>
                <h1 class="mt-5 mb-2">Aturan Lapangan</h1>
                <ul>
                    <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio
                        amet
                        laboriosam eius</li>
                    <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio
                        amet
                        laboriosam eius</li>
                    <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio
                        amet
                        laboriosam eius</li>
                    <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio
                        amet
                        laboriosam eius</li>
                    <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio
                        amet
                        laboriosam eius</li>
                    <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio
                        amet
                        laboriosam eius</li>
                </ul>
            </div>
            <div class="fasilitas mt-2 col-2">
                <div class="isi">
                    <p>E-ticket</p>
                    <h3>Rp 135.000</h3>
                    <div class="bungkus">
                        <div class="waktu">
                            <label>Tanggal <br><span>12 Desember 2022</span></label>
                        </div>
                        <div class="waktu">
                            <label>Jam <br><span>19:00 - 20:00</span></label>
                        </div>
                        <div class="waktu">
                            <label>Lapangan <br><span>Lapangan 2</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
