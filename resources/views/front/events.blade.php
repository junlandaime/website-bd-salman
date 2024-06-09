@extends('front.layouts.front')

@section('title')
    <title>Event Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'events'
@endsection

@section('content')
    <main class="mt-28">

        @if (request()->routeIs('front.events'))
            <!-- ===== Projects Start ===== -->
            <section class="pg pj vp mr oj wp nr">
                <!-- Section Title Start -->
                <div x-data="{ sectionTitle: `Mari Arungi Perjalanan Spiritualitasmu bersama kami`, sectionTitleText: `Ikuti Kegiatan-kegiatan Menarik bersama Kami.` }">
                    <div class="animate_top bb ze rj ki xn vq">
                        <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                        </h2>
                        <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                    </div>


                </div>
                <!-- Section Title End -->

                <div class="animate_top bb ze ki xn 2xl:ud-px-0 jb" x-data="{ filterTab: 0 }">
                    <!-- Porject Tab -->
                    <div class="projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc w-[720px]">
                        <button data-filter="*" @click="filterTab = 0" :class="{ 'gh lk': filterTab === 0 }"
                            class="project-tab-btn ek rg ml il vi mi">
                            All
                        </button>
                        @forelse ($tags as $tag)
                            <button data-filter=".{{ $tag->slug }}" @click="filterTab = {{ $tag->id }}"
                                :class="{ 'gh lk': filterTab === {{ $tag->id }} }"
                                class="project-tab-btn ek rg ml il vi mi">
                                {{ $tag->name }}
                            </button>
                        @empty
                        @endforelse

                        {{-- <button data-filter=".digital" @click="filterTab = 3" :class="{ 'gh lk': filterTab === 3 }"
                        class="project-tab-btn ek rg ml il vi mi">
                        Digital Experiences
                    </button>
                    <button data-filter=".ecommerce" @click="filterTab = 4" :class="{ 'gh lk': filterTab === 4 }"
                        class="project-tab-btn ek rg ml il vi mi">
                        Ecommerce
                    </button> --}}
                    </div>

                    <!-- Projects item wrapper -->
                    <div class="projects-wrapper tc -ud-mx-5">
                        <div class="project-sizer"></div>
                        @forelse ($events as $event)
                            <!-- Project Item -->
                            <div
                                class="project-item wi animate_top fb vd jn/2 to/3 @foreach ($event->tags as $tag)
                            {{ $tag->slug }} @endforeach">
                                <div class="c i pg sg z-1">
                                    <img src="{{ Storage::url($event->image) }}" alt="{{ $event->name }}" />

                                    <div class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                                        <h4 class="ek tj kk hc text-wrap">{{ $event->name }}</h4>
                                        <p>{{ $event->category->name }}</p>
                                        @php
                                            $cd0 = strtotime($event->published_at->format('Y-m-d')) - mktime(0, 0, 0);
                                            $cd1 = strtotime($event->published_end->format('Y-m-d')) - mktime(0, 0, 0);
                                            $cd2 = strtotime($event->event_end->format('Y-m-d')) - mktime(0, 0, 0);
                                        @endphp

                                        @if ($event->published_at > $now)
                                            <p class="font-semibold"><span
                                                    class="text-sm w-fit py-1 px-2 rounded-full bg-indigo-700 text-white font">Coming
                                                    Soon insyaAllah
                                                    <strong>{{ $cd0 / 86400 + 10 }}</strong> hari lagi</span>
                                            </p>
                                        @elseif ($event->publshed_at < $now and $event->event_start > $now)
                                            <p class="font-semibold"><span
                                                    class="text-sm w-fit py-1 px-2 rounded-full bg-green-500 text-white font">Pendaftaran
                                                    berakhir
                                                    <strong>{{ $cd1 / 86400 }}</strong> hari lagi</span></p>
                                        @elseif ($event->event_start < $now and $event->event_end > $now)
                                            <p class="font-semibold"><span
                                                    class="text-sm w-fit py-1 px-2 rounded-full bg-blue-500 text-white font">
                                                    Kegiatan berakhir
                                                    <strong>{{ $cd2 / 86400 }}</strong> hari lagi

                                                </span></p>
                                        @elseif ($event->event_end < $now)
                                            <p class="font-semibold"><span
                                                    class="text-sm w-fit py-1 px-2 rounded-full bg-red-500 text-white font">
                                                    Kegiatan Selesai
                                                </span></p>
                                        @endif
                                        <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                                            href="{{ route('front.details', $event) }}">
                                            <svg class="th lm ml il" width="14" height="14" viewBox="0 0 14 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Belum ada kegiatan</p>
                        @endforelse

                    </div>
                </div>
            </section>
            <section id="Top-Categories" class="max-w-[1200px] mx-auto flex flex-col p-[70px_50px] gap-[30px]">
                <div class="flex flex-col gap-[30px]">
                    <div
                        class="gradient-badge w-fit p-[8px_16px] rounded-full border border-[#FED6AD] flex items-center gap-[6px]">
                        <div>
                            <img src="{{ asset('assets/icon/medal-star.svg') }}" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#FF6129]">Our Categories</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[30px]">
                    @forelse ($categories as $category)
                        @foreach ($category->child as $kategori)
                            <a href="{{ route('front.category', $kategori) }}"
                                class="card flex items-center p-4 gap-3 ring-1 ring-[#DADEE4] rounded-2xl hover:ring-2 hover:ring-[#FF6129] transition-all duration-300">
                                <div class="w-[70px] h-[70px] flex shrink-0">

                                </div>
                                <p class="font-bold text-lg">{{ $kategori->name }}</p>
                            </a>
                        @endforeach

                    @empty
                        <p>Belum ada Kategori</p>
                    @endforelse
                </div>

            </section>
            <!-- ===== Projects End ===== -->
        @else
            <!-- ===== Blog Single Start ===== -->
            <section class="gj qp gr hj rp hr lg:px-[150px] animate_top">
                <div class="bb ze ki xn 2xl:ud-px-0">
                    <div class="tc sf yo zf kq">
                        <div class="flex flex-col gap-[30px]">
                            <div
                                class="gradient-badge w-fit p-[8px_16px] rounded-full border border-[#FED6AD] flex items-center gap-[6px]">
                                <p class="font-medium text-sm text-[#FF6129]">Categories Event</p>
                            </div>
                            <div class="flex flex-col">
                                <h2 class="font-bold text-[40px] leading-[60px]">{{ $category->name }}</h2>
                            </div>
                            <div class="grid md:grid-cols-3 gap-[30px] w-full">
                                @forelse ($events as $event)
                                    <div class="course-card">
                                        <div
                                            class="flex flex-col rounded-t-[12px] rounded-b-[24px] gap-[32px] bg-white w-full pb-[10px] overflow-hidden transition-all duration-300 hover:ring-2 hover:ring-[#FF6129]">
                                            <a href="{{ route('front.details', $event) }}"
                                                class="thumbnail w-full h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                                                <img src="{{ Storage::url($event->image) }}"
                                                    class="w-full h-full object-cover" alt="thumbnail">
                                            </a>
                                            <div class="flex flex-col px-4 gap-[10px]">
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
                                                            <strong>{{ $cd0 / 86400 + 10 }}</strong> hari lagi</span></p>
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

                                                <a href="{{ route('front.details', $event) }}"
                                                    class="font-semibold text-lg line-clamp-2 hover:line-clamp-none min-h-[56px]">{{ $event->name }}</a>

                                                <h3 class="text-indigo-950 text-xs font-base mt-2 text-wrap w-40">
                                                    @foreach ($event->tags as $tag)
                                                        <a href=""><span
                                                                class="sc ek uj lk nh rg zi _i nc mx-0">{{ $tag->name }}</span></a>
                                                    @endforeach
                                                </h3>
                                                <div class="flex justify-between items-center">

                                                    <div class="tc wf ag">
                                                        <img src="{{ asset('images/icon-calender.svg') }}"
                                                            alt="Calender" />
                                                        <p>{{ $event->event_start->format('d M Y') }} -
                                                            {{ $event->event_end->format('d M Y') }}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>Belum ada Acara Kategori ini</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Top-Categories" class="max-w-[1200px] mx-auto flex flex-col p-[70px_50px] gap-[30px]">
                <div class="flex flex-col gap-[30px]">
                    <div
                        class="gradient-badge w-fit p-[8px_16px] rounded-full border border-[#FED6AD] flex items-center gap-[6px]">
                        <div>
                            <img src="{{ asset('assets/icon/medal-star.svg') }}" alt="icon">
                        </div>
                        <p class="font-medium text-sm text-[#FF6129]">Our Categories</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[30px]">
                    @forelse ($categories as $category)
                        @foreach ($category->child as $kategori)
                            <a href="{{ route('front.category', $kategori) }}"
                                class="card flex items-center p-4 gap-3 ring-1 ring-[#DADEE4] rounded-2xl hover:ring-2 hover:ring-[#FF6129] transition-all duration-300">
                                <div class="w-[70px] h-[70px] flex shrink-0">

                                </div>
                                <p class="font-bold text-lg">{{ $kategori->name }}</p>
                            </a>
                        @endforeach

                    @empty
                        <p>Belum ada Kategori</p>
                    @endforelse
                </div>

            </section>
            <!-- ===== Blog Single End ===== -->
        @endif
    </main>
@endsection
