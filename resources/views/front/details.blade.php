@extends('front.layouts.front')

@section('title')
    <title>{{ $event->name }}Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'events'
@endsection

@section('content')
    <main>
        <!-- ===== SignUp Form Start ===== -->
        <section class="gj qp gr hr lg:px-[150px]">
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc sf yo zf kq">
                    <div class="flex flex-col md:grid md:grid-cols-2 gap-[30px]">
                        <div class="course-card animate_top">
                            <div
                                class="flex flex-col rounded-t-[12px] rounded-b-[24px] gap-[32px] bg-white w-full pb-[10px] overflow-hidden ring-1 ring-[#DADEE4] transition-all duration-300 hover:ring-2 hover:ring-[#FF6129]">
                                <a href="details.html"
                                    class="thumbnail w-full h-full shrink-0 rounded-[10px] overflow-hidden">
                                    <img src="{{ Storage::url($event->image) }}" class="w-full" alt="thumbnail">
                                </a>

                            </div>
                        </div>
                        <div class="course-card animate_top">
                            <div
                                class="md:max-w-[450px] flex-wrap w-full mx-auto mt-10 tablink-container flex gap-3 px-4 sm:p-0 ">
                                <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129] project-tab-btn ek rg ml il vi mi "
                                    onclick="openPage('About', this)" id="defaultOpen">Tentang Kegiatan</div>
                                <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129] project-tab-btn ek rg ml il vi mi"
                                    onclick="openPage('Resources', this)">Fasilitas Kegiatan</div>
                                <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129] project-tab-btn ek rg ml il vi mi"
                                    onclick="openPage('Reviews', this)">Jadwal Kegiatan</div>
                                <div class="tablink font-semibold text-lg h-[47px] transition-all duration-300 cursor-pointer hover:text-[#FF6129] project-tab-btn ek rg ml il vi mi"
                                    onclick="openPage('Daftar', this)"><a href="#Daftar">Daftar</a></div>
                            </div>
                            <div class="bg-[#F5F8FA] py-[50px]">
                                <div class="md:max-w-[450px] w-full mx-auto flex flex-col gap-[70px]">
                                    <div class="flex gap-[50px]">
                                        <div class="tabs-container md:w-[450px] flex shrink-0">
                                            <div id="About" class="tabcontent hidden">
                                                <div class="flex flex-col gap-5 md:w-[450px] shrink-0">
                                                    @php
                                                        $cd0 =
                                                            strtotime($event->published_at->format('Y-m-d')) -
                                                            mktime(0, 0, 0);
                                                        $cd1 =
                                                            strtotime($event->published_end->format('Y-m-d')) -
                                                            mktime(0, 0, 0);
                                                        $cd2 =
                                                            strtotime($event->event_end->format('Y-m-d')) -
                                                            mktime(0, 0, 0);
                                                    @endphp

                                                    @if ($event->published_at > $now)
                                                        <p class="font-semibold"><span
                                                                class="text-sm w-fit py-2 px-3 rounded-full bg-indigo-700 text-white font-bold">Coming
                                                                Soon insyaAllah
                                                                <strong>{{ $cd0 / 86400 + 10 }}</strong> hari lagi</span>
                                                        </p>
                                                    @elseif ($event->publshed_at < $now and $event->event_start > $now)
                                                        <p class="font-semibold"><span
                                                                class="text-sm w-fit py-2 px-3 rounded-full bg-green-500 text-white font-bold">Pendaftaran
                                                                berakhir
                                                                <strong>{{ $cd1 / 86400 }}</strong> hari lagi</span></p>
                                                    @elseif ($event->event_start < $now and $event->event_end > $now)
                                                        <p class="font-semibold"><span
                                                                class="text-sm w-fit py-2 px-3 rounded-full bg-blue-500 text-white font-bold">
                                                                Kegiatan berakhir
                                                                <strong>{{ $cd2 / 86400 }}</strong> hari lagi

                                                            </span></p>
                                                    @elseif ($event->event_end < $now)
                                                        <p class="font-semibold"><span
                                                                class="text-sm w-fit py-2 px-3 rounded-full bg-red-500 text-white font-bold">
                                                                Kegiatan Selesai
                                                            </span></p>
                                                    @endif
                                                    <h3 class="font-bold text-2xl">{{ $event->name }}</h3>
                                                    <p class="font-medium leading-[30px]">
                                                        {!! $event->description !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="Resources" class="tabcontent hidden">
                                                <div class="flex flex-col gap-5 md:w-[450px] shrink-0">
                                                    <h3 class="font-bold text-2xl">Fasilitas Kegiatan</h3>
                                                    <p class="font-medium leading-[30px]">
                                                        {!! $event->facility !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="Reviews" class="tabcontent hidden">
                                                <div class="flex flex-col gap-5 md:w-[450px] shrink-0">
                                                    <h3 class="font-bold text-2xl">Jadwal Kegiatan</h3>
                                                    <p class="font-medium leading-[30px]">
                                                        {!! $event->jadwal !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Video-Resources" class="flex flex-col">
            <div class="max-w-[1100px] w-full mx-auto flex flex-col gap-3">

            </div>

            <div class="bg-[#F5F8FA] py-[50px]">
                <div class="max-w-[1100px] w-full mx-auto flex flex-col gap-[70px]">
                    <div class="flex justify-center gap-[50px]">
                        <div class="tabs-container w-[700px] flex shrink-0">

                            <div id="Daftar" class="tabcontent hidden">
                                <div class="flex flex-col gap-5 w-[700px] shrink-0">
                                    <h3 class="font-bold text-2xl text-center">Daftar</h3>
                                    {!! $event->link !!}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="Screenshots" class="flex flex-col gap-3">
                        <h3 class="title-section font-bold text-xl leading-[30px] ">Dokumentasi Kegiatan</h3>
                        <div class="grid grid-cols-4 gap-5">
                            <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                                data-src="{{ asset('images/spn (1).jpg') }}" data-fancybox="gallery"
                                data-caption="Caption #1">
                                <img src="{{ asset('images/spn (1).jpg') }}" class="object-cover h-full w-full"
                                    alt="image">
                            </div>
                            <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                                data-src="{{ asset('images/spn (2).jpg') }}" data-fancybox="gallery"
                                data-caption="Caption #1">
                                <img src="{{ asset('images/spn (2).jpg') }}" class="object-cover h-full w-full"
                                    alt="image">
                            </div>
                            <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                                data-src="{{ asset('images/spn (3).jpg') }}" data-fancybox="gallery"
                                data-caption="Caption #1">
                                <img src="{{ asset('images/spn (3).jpg') }}" class="object-cover h-full w-full"
                                    alt="image">
                            </div>
                            <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                                data-src="{{ asset('images/spn (4).jpg') }}" data-fancybox="gallery"
                                data-caption="Caption #1">
                                <img src="{{ asset('images/spn (4).jpg') }}" class="object-cover h-full w-full"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== SignUp Form End ===== -->
    </main>
@endsection
