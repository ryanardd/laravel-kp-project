@extends('frontend.layouts.main')
@section('title', 'Hubungi Kami - Murahkom Toko Komputer Online Termurah di Surabaya')
@section('contact', 'active')
@section('container')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Contact</p>
                <h2>Need Help? Contact Us</h2>
            </div>

            <div class="mb-3">
                {{-- <iframe style="border: 0; width: 100%; height: 350px"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe> --}}
                <iframe style="border: 0; width: 100%; height: 350px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.338527066014!2d112.7446251161769!3d-7.315815759528551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb0fcf24f413%3A0x35bdae1c7503cf47!2sMurahkom!5e0!3m2!1sid!2sid!4v1680527558482!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>Our Address</h3>
                            <p>Plaza Marina Lantai Blok G-05
                                Jl. Margorejo Indah No.97-99, Sidosermo, Kec. Wonocolo, Kota SBY, Jawa Timur 60238</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>murahkomofficial@gmail.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>(031) 8470589</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours</h3>

                            <div><strong>Senin-Minggu:</strong> 10.00 - 21.00
                            </div>
                        </div>
                    </div>
                </div><!-- End Info Item -->
            </div>
        </div>
    </section><!-- End Contact Section -->

@endsection
