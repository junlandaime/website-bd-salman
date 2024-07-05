@extends('front.layouts.front')

@section('title')
    <title>{{ $event->name }} - Bidang Dakwah Masjid Salman ITB</title>
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
                    <div class="md:grid md:grid-cols-2 gap-[30px]">
                        <div class="course-card animate_top">
                            <div
                                class="flex flex-col rounded-t-[12px] rounded-b-[24px] gap-[32px] bg-white w-full pb-[10px] overflow-hidden ring-1 ring-[#DADEE4] transition-all duration-300 hover:ring-2 hover:ring-[#FF6129]">
                                <div class="thumbnail w-full h-full shrink-0 rounded-[10px] overflow-hidden">
                                    <img src="{{ Storage::url($event->image) }}" class="w-full" alt="thumbnail">
                                </div>

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
                                    onclick="openPage('Daftar', this)">Daftar</div>
                            </div>
                            <div class="bg-[#F5F8FA] dark:bg-transparent py-[50px] md:w-[625px] w-[330px] text-wrap">
                                <div class="md:max-w-[450px] w-full mx-auto flex flex-col gap-[70px]">
                                    <div class="tabs-container w-[330px] flex shrink-0">
                                        <div id="About" class="tabcontent hidden">
                                            <div class="flex flex-col gap-5 w-[330px] shrink-0 text-wrap">
                                                @php
                                                    $cd0 =
                                                        strtotime($event->published_at->format('Y-m-d')) -
                                                        mktime(0, 0, 0);
                                                    $cd1 =
                                                        strtotime($event->published_end->format('Y-m-d')) -
                                                        mktime(0, 0, 0);
                                                    $cd2 =
                                                        strtotime($event->event_end->format('Y-m-d')) - mktime(0, 0, 0);
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

                                                @if ($event->price == 0)
                                                    <p class="font-semibold"><span
                                                            class="text-sm w-fit py-2 px-3 rounded-full bg-green-500 text-white font-bold">Gratis</span>
                                                    </p>
                                                @else
                                                    <p class="font-semibold"><span
                                                            class="text-sm w-fit py-2 px-3 rounded-full bg-indigo-700 text-white font-bold">Infaq
                                                            Kegiatan: Rp {{ number_format($event->price) }}</span>
                                                    </p>
                                                @endif

                                                <h3 class="font-bold text-2xl">{{ $event->name }}</h3>
                                                <p class="font-semibold"><span
                                                        class="text-sm w-fit py-2 px-3 rounded-full bg-[#66B161] text-white font-bold">Kategori
                                                        : {{ $event->category->name }}</span>
                                                </p>
                                                <p class="font-medium leading-[30px] text-wrap">
                                                    {!! $event->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div id="Resources" class="tabcontent hidden">
                                            <div class="flex flex-col gap-5 w-[330px] shrink-0">
                                                <h3 class="font-bold text-2xl">Fasilitas Kegiatan</h3>
                                                <p class="font-medium leading-[30px] ">
                                                    {!! $event->facility !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div id="Reviews" class="tabcontent hidden">
                                            <div class="flex flex-col gap-5 w-[330px] shrink-0">
                                                <h3 class="font-bold text-2xl">Jadwal Kegiatan</h3>
                                                <p class="font-medium leading-[30px]">
                                                    {!! $event->jadwal !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div id="Daftar" class="tabcontent hidden">
                                            <div class="flex flex-col gap-5 w-[330px] shrink-0">
                                                <h3 class="font-bold text-2xl">Amankan Kursimu</h3>

                                                @if ($event->price == 0)
                                                @else
                                                    <p class="font-medium leading-[30px]">
                                                        No rekening <br>
                                                        1130011057 <br>
                                                        Bank Muamalat a.n YPM Salman ITB <br>
                                                        kode bank : 451 <br>
                                                        <br>
                                                        @php
                                                            switch ($event->category->name) {
                                                                case 'Pranikah':
                                                                    $digit = 1;
                                                                    break;

                                                                case 'Rumah Quran':
                                                                    $digit = 2;
                                                                    break;

                                                                case 'Bahasa Arab':
                                                                    $digit = 3;
                                                                    break;

                                                                case 'Madrasah Husnul Khatimah':
                                                                    $digit = 2;
                                                                    break;

                                                                default:
                                                                    $digit = 9;
                                                                    break;
                                                            }
                                                        @endphp

                                                        Kode unik {{ $digit }} rupiah di digit terakhir. <br>
                                                        Contoh : 200.00{{ $digit }} <br>
                                                        <br>
                                                        Pastikan nominal sudah sesuai sampai angka terakhir yaa <br>
                                                    </p>
                                                @endif


                                                @if ($event->link == '-')
                                                    <p class="font-medium leading-[30px]">
                                                    <form action="https://formbold.com/s/unique_form_id" method="POST">
                                                        <div class="tc sf yo ap zf ep qb">
                                                            <input type="hidden" name="event"
                                                                value="{{ $event->name }}" id="event" />
                                                            <div class="vd to/2">
                                                                <label class="rc ac" for="fullname">Nama
                                                                    Lengkap</label>
                                                                <input type="text" name="fullname" id="fullname"
                                                                    placeholder="Salmani Itabi"
                                                                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                                            </div>

                                                            <div class="vd to/2">
                                                                <label class="rc ac" for="phone">No Kontak
                                                                    (WA)</label>
                                                                <input type="text" name="phone" id="phone"
                                                                    placeholder="085333888333"
                                                                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                                            </div>
                                                        </div>

                                                        <div class="tc sf yo ap zf ep qb">
                                                            <div class="vd to/2">
                                                                <label class="rc ac" for="domis">Domisili</label>
                                                                <input type="text" name="domis" id="domis"
                                                                    placeholder="Bandung"
                                                                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                                            </div>
                                                        </div>

                                                        <div class="tc xf">
                                                            <a class="vc rg lk gh ml il hi gi _l" id="startcon"
                                                                href="#"
                                                                @if ($event->category->name === 'Pranikah') onclick="gettogetInputValue()"
                                                                    @else
                                                                        onclick="gettogetInputValue2()" @endif>Book
                                                                Your
                                                                Seat</a>
                                                        </div>
                                                    </form>
                                                    </p>
                                                @else
                                                    <p class="font-medium leading-[30px]">
                                                        {!! $event->link !!}
                                                    </p>
                                                @endif



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
                    {{-- <div class="flex justify-center gap-[50px]">
                        <div class="tabs-container w-[700px] flex shrink-0">

                            <div id="Daftar" class="tabcontent hidden">
                                <div class="flex flex-col gap-5 w-[700px] shrink-0">
                                    <h3 class="font-bold text-2xl text-center">Daftar</h3>
                                    {!! $event->link !!}
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    <div id="Screenshots" class="flex flex-col gap-3">
                        <h3 class="title-section font-bold text-xl leading-[30px] ">Dokumentasi Kegiatan</h3>
                        <div class="grid md:grid-cols-4 gap-5">
                            @forelse ($galleries as $gallery)
                                <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
                                    data-src="{{ Storage::url($gallery->path) }}" data-fancybox="gallery"
                                    data-caption="Caption #1">
                                    <img src="{{ Storage::url($gallery->path) }}" class="object-cover h-full w-full"
                                        alt="image">
                                </div>
                            @empty
                            @endforelse

                            {{-- <div class="rounded-[20px] overflow-hidden w-full h-[200px] hover:shadow-[0_10px_20px_0_#0D051D20] transition-all duration-300"
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== SignUp Form End ===== -->
    </main>
@endsection


<script>
    function gettogetInputValue() {
        let inputName = document.getElementById("fullname").value;
        let phone = document.getElementById("phone").value;
        let domis = document.getElementById("domis").value;
        let event = document.getElementById("event").value;
        let tombol = document.getElementById('startcon')
        let hrefAwal =
            `https://wa.me/6285722183585?text=*Daftar ${event}*%0A%0A Nama Lengkap: ${inputName}%0A No Kontak (WA): ${phone}%0A Domisili: ${domis}`
        tombol.href = hrefAwal
    }

    function gettogetInputValue2() {
        let inputName = document.getElementById("fullname").value;
        let phone = document.getElementById("phone").value;
        let domis = document.getElementById("domis").value;
        let event = document.getElementById("event").value;
        let tombol = document.getElementById('startcon')
        let hrefmulai =
            `https://wa.me/6281395136113?text=*Daftar ${event}*%0A%0A Nama Lengkap: ${inputName}%0A No Kontak (WA): ${phone}%0A Domisili: ${domis}`
        tombol.href = hrefmulai
    }

    // const getInputValues = () => {
    //   const inputName = document.getElementById("fullname").value;
    //   const phone = document.getElementById("phone").value;
    //   const domis = document.getElementById("domis").value;
    //   const event = document.getElementById("event").value;
    //   let tombol = document.getElementById('startcon');

    //   if (tombol) {
    //     let hrefAwal =
    //         `https://wa.me/6285722183585?text=*Daftar ${event}* Nama Lengkap: ${inputName} No Kontak (WA): ${phone} Domisili: ${domis}`
    //     tombol.href = hrefAwal;
    // }

    //   let tombol2 = document.getElementById('startcon2');

    //   if (tombol2) {
    //     let hrefmulai =
    //         `https://wa.me/6281395136113?text=*Daftar ${event}* Nama Lengkap: ${inputName} No Kontak (WA): ${phone} Domisili: ${domis}`
    //     tombol2.href = hrefmulai;
    //   }
    // };

    // document.addEventListener("DOMContentLoaded", getInputValues);
</script>
