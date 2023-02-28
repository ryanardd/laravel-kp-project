@extends('frontend/layouts/main')

@section('container')

<section class="detail">

    <div class="container">
        <div class="row row-product">
            <div class="col-lg-5">
                <figure class="figure">
                    <img src="/assets/img/hero-img.png" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption d-flex justify-content-between">
                        <a href="">
                            <img src="/assets/img/about-2.jpg" class="figure-img img-fluid rounded" style="width: 70px" alt="...">
                        </a>
                        <a href="">
                            <img src="/assets/img/about-2.jpg" class="figure-img img-fluid rounded" style="width: 70px" alt="...">
                        </a>
                        <a href="">
                            <img src="/assets/img/about-2.jpg" class="figure-img img-fluid rounded" style="width: 70px" alt="...">
                        </a>
                        <a href="">
                            <img src="/assets/img/about-2.jpg" class="figure-img img-fluid rounded" style="width: 70px" alt="...">
                        </a>
                        <a href="">
                            <img src="/assets/img/about-2.jpg" class="figure-img img-fluid rounded" style="width: 70px" alt="...">
                        </a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-lg-7">
                <h3>{{ $detail->nama_produk }}</h3>
                <div class="underline"></div>
                <h4>Rp. {{ number_format($detail->harga, 0, ',', '.') }}</h4>
                <h6>Note</h6>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, obcaecati!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa obcaecati vero temporibus soluta quisquam. Voluptatum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, obcaecati!</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                </ul>
                <p>Order Via :</p>
                <a href="#" style="text-decoration: none;">
                    <img src="https://img.icons8.com/color/48/null/whatsapp--v1.png"/>
                </a>
                <a href="#" style="text-decoration: none;">
                    <img src="https://img.icons8.com/nolan/48/tokopedia.png"/>
                </a>
                <a href="#" style="text-decoration: none;">
                    <img src="https://img.icons8.com/color/48/null/shopee.png"/>
                </a>
            </div>
        </div>

        <!-- description -->
        <div class="row row-product">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <p>{!! $detail->deskripsi !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end description -->
    </div>
</section>

@endsection
