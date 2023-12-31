{{-- @dd($detail) --}}
{{-- @dd($images) --}}
@extends('frontend.layouts.main')
@section('title', $detail->nama_produk)
@section('container')
    <section class="detail">

        <div class="container">
            <div class="row row-product justify-content-evenly">
                <div class="col-lg-5">
                    <figure class="figure w-100">
                        <div class="itemtab zoom-image mb-2">
                            <img src="/images/cover/{{ $detail->thumbnail }}" id="image"
                                class="figure-img img-fluid img-popup rounded border" alt="...">
                        </div>
                        <figcaption class="figure-caption">
                            <div class="row justify-content-center sld">
                                <div id="recipeCarousel" class="carousel slide">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <a class="image-item-slide">
                                                <img src="/images/cover/{{ $detail->thumbnail }}" onclick="change(this.src)"
                                                    class="figure-img img-fluid border-primary rounded border"
                                                    alt="{{ $detail->thumbnail }}" style="width: 90px">
                                            </a>
                                        </div>
                                        @foreach ($images as $image)
                                            <div class="carousel-item">
                                                <a class="image-item-slide">
                                                    <img src="/images/image/{{ $image->image }}" onclick="change(this.src)"
                                                        class="figure-img img-fluid border-primary rounded border"
                                                        alt="{{ $image->image }}" style="width: 90px">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="overlay-dark"></div>
                                    <img class="img-overlay">
                                    <a class="carousel-control-prev justify-content-start" href="#recipeCarousel"
                                        role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bg-primary rounded-circle"
                                            aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next justify-content-end" href="#recipeCarousel"
                                        role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bg-primary rounded-circle"
                                            aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-6">
                    <h3>{{ $detail->nama_produk }}</h3>
                    <div class="underline"></div>
                    <h4 class="mb" style="color: #777">Rp{{ number_format($detail->harga, 0, ',', '.') }}</h4>
                    <div class="underline"></div>
                    <h6><b>Note :</b></h6>
                    <ul>
                        <li>Cek stock terlebih dahulu sebelum order (Ketersedian Terbatas)</li>
                        <li>Packing aman dengan bubble wrap tebal berlapis-lapis (dijamin sampai dengan selamat)</li>
                        <li>Free asuransi barang hilang/rusak selama proses pengiriman oleh jasa kirim</li>
                        <li>Request warna, ukuran dll. Wajib cantumkan pada keterangan saat order, Jika tidak maka unit kami
                            kirim secara random</li>
                        <li>Simpan dus dan invoice pembelian untuk klaim garansi.</li>
                    </ul>
                    <p>Order Via :</p>
                    <a href="https://api.whatsapp.com/send?phone=6282335593809&text=Halo Admin, Apakah produk {{ route('product') }}/{{ $detail->slug }} masih ada ?"
                        style="text-decoration: none;" target="_blank">
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
                                aria-selected="true">Deskripsi</button>
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

            {{-- Produk Terpopuler --}}
            <div class="row row-product">
                <div class="tab-content">
                    <h3 class="border-dark border-bottom border-2 pb-2">Produk Terpopuler</h3>
                    {{-- Items --}}
                    <div class="row gy-5 portfolio-container p-2">
                        @foreach ($populer as $produk)
                            <div class="col-lg-3 portfolio-item">
                                <div class="portfolio-wrap">
                                    <a href="{{ route('product') }}/{{ $produk->slug }}"
                                        class="d-flex justify-content-center">
                                        <img src="/images/cover/{{ $produk->thumbnail }}" class="img-fluid"
                                            alt="{{ $produk->thumbnail }}">
                                    </a>
                                    <div class="portfolio-info">
                                        <h5><a href="{{ route('product') }}/{{ $produk->slug }}"
                                                title="{{ $produk->nama_produk }}">{{ $produk->nama_produk }}</a>
                                        </h5>
                                        <div class="mt-3">
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <div class="fw-bold">
                                                    Rp{{ number_format($produk->harga, 0, ',', '.') }}
                                                </div>
                                                <p class="rounded-1 p-1">
                                                    {{ $produk->stok ? 'Tersedia' : 'Stok Kosong' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- end Items --}}
                </div>
            </div>
        </div>
        {{-- end Produk Terkait --}}
        </div>

        {{-- zoom image --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        {{-- view image --}}
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>
            const change = src => {
                document.getElementById('image').src = src

                // zoom image
                $('.zoom-image').each(function() {
                    var originalImagePath = $(this).find('img').data('original-image');
                    $(this).zoom({
                        url: originalImagePath,
                        magnify: 1
                    });
                });
            }
            // $(function() {
            //     $('.zoom-image').each(function() {
            //         var originalImagePath = $(this).find('img').data('original-image');
            //         $(this).zoom({
            //             url: originalImagePath,
            //             magnify: 1
            //         });
            //     });
            // });
        </script>
    </section>
@endsection
