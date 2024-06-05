@extends('front.layouts.front')

@section('title')
    <title>Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'features'
@endsection

@section('content')
    <main class="mt-28">

        <!-- ===== Projects Start ===== -->
        <section class="pg pj vp mr oj wp nr md:px-[120px]">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Layanan Bidang Dakwah Masjid Salman ITB`, sectionTitleText: `Manfaatkan Layanan-layanan menarik dari Bidang Dakwah Masjid Salman ITB.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                    </h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>


            </div>
            <!-- Section Title End -->

            <div class="animate_top jb cq">
                @forelse ($posts as $post)
                    <!-- Slider main container -->
                    <div class="i hh rm sg vk xm bi qj mt-4">
                        <!-- Border Shape -->
                        <span class="rc je md/2 gh xg h q r"></span>
                        <span class="rc je md/2 mh yg h q p"></span>

                        <div class="tc sf rn tn un zf dp">
                            <a href="details.html"
                                class="thumbnail w-[200px] h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                                <img src="{{ Storage::url($post->image) }}" class="w-full h-full object-cover"
                                    alt="{{ $post->title }}">
                            </a>

                            <div>
                                <h1 class="fk vj zp or kk wm wb text-xl"> {{ $post->title }}</h1>
                                <p>
                                    {!! $post->excerpt !!}
                                </p>

                                {{-- <div class="tc yf vf mt-5">
                                    <div>
                                        <span class="rc ek xj kk wm zb">Devid Smith</span>
                                        <span class="rc">Founter @democompany</span>
                                    </div>

                                    <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                <!-- Slider main container -->
                {{-- <div class="i hh rm sg vk xm bi qj mt-4">
                    <!-- Border Shape -->
                    <span class="rc je md/2 gh xg h q r"></span>
                    <span class="rc je md/2 mh yg h q p"></span>

                    <div class="tc sf rn tn un zf dp">
                        <a href="details.html"
                            class="thumbnail w-[200px] h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                            <img src="{{ asset('img/bahan-webd/ibadah muamalah.png') }}" class="w-full h-full object-cover"
                                alt="Layanan Ibadah dan Muamalah">
                        </a>

                        <div>
                            <h1 class="fk vj zp or kk wm wb text-xl"> Layanan Ibadah dan Muamalah </h1>
                            <p>
                                Layanan Konsultasi (Gratis)
                                a. Konsultasi ibadah
                                a. Konsultasi ibadah
                                a. Konsultasi ibadah
                                a. Konsultasi ibadah
                                a. Konsultasi ibadah
                                a. Konsultasi ibadah
                                a. Konsultasi ibadah
                            </p>

                            <div class="tc yf vf mt-5">
                                <div>
                                    <span class="rc ek xj kk wm zb">Ade Mastur</span>
                                    <span class="rc">088-820-316-23</span>
                                </div>

                                <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- ===== Projects End ===== -->


    </main>
@endsection
