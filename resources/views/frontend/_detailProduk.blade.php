{{-- @dd($detail) --}}
{{-- @dd($images) --}}
@extends('frontend/layouts/main')

@section('container')
    <section class="detail">

        <div class="container">
            <div class="row row-product justify-content-evenly">
                <div class="col-lg-5">
                    <figure class="figure w-100">
                        <div class="itemtab mb-2" style="height: 300px;">
                            <img src="/images/cover/{{ $detail->thumbnail }}" id="image" class="w-100 h-100 figure-img img-fluid rounded"
                                alt="...">
                        </div>
                        <figcaption class="figure-caption d-flex justify-content-evenly gap-2">
                            <a>
                                <img src="/images/cover/{{ $detail->thumbnail }}" onclick="change(this.src)"
                                    class="figure-img img-fluid rounded" style="width: 70px;height: 54px;" alt="...">
                            </a>
                            @foreach ($images as $image)
                            <a>
                                <img src="/images/image/{{ $image->image }}" onclick="change(this.src)"
                                    class="figure-img img-fluid rounded" style="width: 70px; height: 54px;" alt="...">
                            </a>
                            @endforeach
                            {{-- <a>
                                <img src="/assets/img/profile.jpg" onclick="change(this.src)"
                                    class="figure-img img-fluid rounded" style="width: 70px; height: 54px;" alt="...">
                            </a>
                            <a>
                                <img src="/assets/img/about.jpg" onclick="change(this.src)"
                                    class="figure-img img-fluid rounded" style="width: 70px;height: 54px;" alt="...">
                            </a>
                            <a>
                                <img src="/assets/img/testimonials-1.jpg" onclick="change(this.src)"
                                    class="figure-img img-fluid rounded" style="width: 70px;height: 54px;" alt="...">
                            </a> --}}
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-6">
                    <h3>{{ $detail->nama_produk }}</h3>
                    <div class="underline"></div>
                    <h4>Rp. {{ number_format($detail->harga, 0, ',', '.') }}</h4>
                    <h6>Note</h6>
                    <ul>
                        <li>Cek stock terlebih dahulu sebelum order (Ketersedian Terbatas)</li>
                        <li>Packing aman dengan bubble wrap tebal berlapis-lapis (dijamin sampai dengan selamat)</li>
                        <li>Free asuransi barang hilang/rusak selama proses pengiriman oleh jasa kirim</li>
                        <li>Request warna, ukuran dll. Wajib cantumkan pada keterangan saat order, Jika tidak maka unit kami
                            kirim secara random</li>
                        <li>Simpan dus dan invoice pembelian untuk klaim garansi.</li>
                    </ul>
                    <p>Order Via :</p>
                        <a href="#" style="text-decoration: none;">
                            <img src="https://img.icons8.com/color/48/null/whatsapp--v1.png" />
                        </a>
                        <a href="{{ $detail->cta_tokped }}" style="text-decoration: none;" target="_blank">
                            <img src="https://img.icons8.com/nolan/48/tokopedia.png" />
                        </a>
                        <a href="{{ $detail->cta_shopee }}" style="text-decoration: none;" target="_blank">
                            <img src="https://img.icons8.com/color/48/null/shopee.png" />
                        </a>
                </div>
            </div>

            <!-- description -->
            <div class="row row-product">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                aria-selected="true">Description</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <p>{!! $detail->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end description -->

            {{-- Produk Terkait --}}
            <div class="row row-product">
                <div class="tab-content">
                    <h3 class="border-dark border-bottom border-2 pb-2">Produk Terkait</h3>
                    <div class="tab-pane fade active show" id="all">
                        {{-- Items --}}
                        <div class="row gy-5 justify-content-between p-2">
                            {{-- @foreach ($product->take(3) as $produk) --}}
                            <div class="col-lg-3">
                                <div class="items p-2">
                                    <a href="" class="">
                                        <img src="/assets/img/hero-img.png" class="menu-img img-fluid" alt="">
                                    </a>
                                    <a href="">
                                        <h4>Acer</h4>
                                    </a>
                                    <p class="price">
                                        Rp. 5.000.000
                                    </p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a class="text-white"
                                            href="">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="items p-2">
                                    <a href="" class="">
                                        <img src="/assets/img/hero-img.png" class="menu-img img-fluid" alt="">
                                    </a>
                                    <a href="">
                                        <h4>Acer</h4>
                                    </a>
                                    <p class="price">
                                        Rp. 5.000.000
                                    </p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a class="text-white"
                                            href="">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="items p-2">
                                    <a href="" class="">
                                        <img src="/assets/img/hero-img.png" class="menu-img img-fluid" alt="">
                                    </a>
                                    <a href="">
                                        <h4>Acer</h4>
                                    </a>
                                    <p class="price">
                                        Rp. 5.000.000
                                    </p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a class="text-white"
                                            href="">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="items p-2">
                                    <a href="" class="">
                                        <img src="/assets/img/hero-img.png" class="menu-img img-fluid" alt="">
                                    </a>
                                    <a href="">
                                        <h4>Acer</h4>
                                    </a>
                                    <p class="price">
                                        Rp. 5.000.000
                                    </p>
                                    <div class="btn btn-dark d-flex justify-content-center mt-2"><a class="text-white"
                                            href="">Read More</a></div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        </div>
                        {{-- end Items --}}
                    </div>
                </div>
            </div>
            {{-- end Produk Terkait --}}
        </div>


        <script>
            const change = src => {
                document.getElementById('image').src = src
            }
        </script>
    </section>
@endsection
