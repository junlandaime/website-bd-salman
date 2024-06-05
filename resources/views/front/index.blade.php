{{-- @dd($posts) --}}
@extends('front.layouts.front')

@section('title')
    <title>Bidang Dakwah Masjid Salman ITB - Website BD</title>
@endsection

@section('page')
    page: 'home'
@endsection

@section('content')
    <main>
        <!-- ===== Hero Start ===== -->
        <section class="gj do ir hj sp jr i pg">
            <!-- Hero Images -->
            <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
                <img src="{{ asset('images/shape-01.svg') }}" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
                <img src="{{ asset('images/shape-02.svg') }}" alt="shape" class="xc 2xl:ud-block h u p va" />
                <img src="{{ asset('images/shape-03.svg') }}" alt="shape" class="xc 2xl:ud-block h v w va" />
                <img src="{{ asset('images/shape-04.svg') }}" alt="shape" class="h q r" />
                <!-- <img src="images/hero.png" alt="Woman" class="h q r ua" /> -->
            </div>

            <!-- Hero Content -->
            <div class="bb ze ki xn 2xl:ud-px-0 lg:px-32">
                <div class="tc _o">
                    <div class="animate_left jn/2">
                        <h3 class="fk vj zp or kk wm wb text-xl">Assalamu’alaykum Wr. Wb.,</h3>
                        <h1 class="fk vj zp or kk wm wb">Selamat Datang di Bidang Dakwah
                            Masjid Salman ITB</h1>
                        <p class="fq">
                            Bidang pengelola kegiatan dakwah dan pelayanan ibadah jamaah
                            yang diselenggarakan oleh Yayasan Pembina Masjid (YPM) Salman ITB
                        </p>

                        <div class="tc tf yo zf mb">
                            {{-- <a href="#" class="ek jk lk gh gi hi rg ml il vc _d _l bg-[#66B161]">Get Started
                                Now</a> --}}
                            <!-- Youtube -->
                            <a href="https://www.youtube.com/channel/UCOivuK5MQ3QMiI7WeSJWE6w" target="_blank"
                                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-900 text-slate-900 hover:border-[#66B161] hover:bg-[#66B161] hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>YouTube</title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>

                            <!-- Instagram -->
                            <a href="https://www.instagram.com/bidakwah.salmanitb/" target="_blank"
                                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-900 text-slate-900 hover:border-[#66B161] hover:bg-[#66B161] hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/bidangdakwah.salmanitb" target="_blank"
                                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-900 text-slate-900 hover:border-[#66B161] hover:bg-[#66B161] hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Facebook</title>
                                    <path
                                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                        fill="" />
                                </svg>
                            </a>

                            <span class="tc sf">
                                <a href="https://wa.me/6285722183585" target="_blank" class="inline-block ek xj kk wm"> Call
                                    us +62 857-2218-3585 </a>
                                <span class="inline-block">For any question or concern</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Hero End ===== -->

        <!-- ===== Small Features Start ===== -->
        <section id="features">
            <div class="bb ze ki yn 2xl:ud-px-12.5 lg:px-32">
                <div class="tc uf zo xf ap zf bp mq">
                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg mh">
                            <img src="{{ asset('images/icon-1.svg') }}" alt="Icon" />
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">Aman</h4>
                            <p>Semoga Anda selalu aman
                                bersama Kami.</p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg nh">
                            <img src="{{ asset('images/icon-2.svg') }}" alt="Icon" />
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">Nyaman</h4>
                            <p>Semoga Anda nyaman
                                berada di sini</p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg oh">
                            <img src="{{ asset('images/icon-3.svg') }}" alt="Icon" />
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">Mengesankan</h4>
                            <p>Semoga pelayanan kami
                                mengesankan di hati Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Small Features End ===== -->

        <!-- Event Terbaru Start -->
        <section id="Popular-Courses"
            class="max-w-[1200px] mx-auto flex flex-col p-[70px_82px_0px] gap-[30px] rounded-[32px]">
            <div class="flex flex-col gap-[30px] items-center text-center">
                <div
                    class="gradient-badge w-fit p-[8px_16px] rounded-full border border-[#FED6AD] flex items-center gap-[6px]">
                    <div>
                        <img src="{{ asset('assets/icon/medal-star.svg') }}" alt="icon">
                    </div>
                    <p class="font-medium text-sm text-[#FF6129]">Newest Events</p>
                </div>
                <div class="flex flex-col">
                    <h2 class="font-bold text-[40px] leading-[60px]">Don’t Missed It, Join Now</h2>
                    {{-- <p class="text-[#6D7786] text-lg -tracking-[2%]">Catching up the on demand skills and high paying
                        career this year</p> --}}
                </div>
            </div>
            <div class="relative">
                @if ($events->first())
                    <button class="btn-prev absolute rotate-180 -left-[52px] top-[216px]">
                        <img src="assets/icon/arrow-right.svg" alt="icon">
                    </button>
                    <button class="btn-prev absolute -right-[52px] top-[216px]">
                        <img src="assets/icon/arrow-right.svg" alt="icon">
                    </button>
                @endif

                <div id="course-slider" class="w-full">
                    @forelse ($events as $event)
                        <div class="course-card md:w-1/3 px-3 pb-[70px] mt-[2px] animate_top kn to/3 tc cg oq">
                            <div
                                class="flex flex-col rounded-t-[12px] rounded-b-[24px] gap-[32px] bg-white w-full pb-[10px] overflow-hidden transition-all duration-300 hover:ring-2 hover:ring-[#FF6129]">
                                <a href="{{ route('front.details', $event) }}"
                                    class="thumbnail w-full h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                                    <img src="{{ Storage::url($event->image) }}" class="w-full h-full object-cover"
                                        alt="thumbnail">
                                </a>
                                <div class="flex flex-col px-4 gap-[10px]">
                                    @php
                                        $cd0 = strtotime($event->published_at->format('Y-m-d')) - mktime(0, 0, 0);
                                        $cd1 = strtotime($event->published_end->format('Y-m-d')) - mktime(0, 0, 0);
                                        $cd2 = strtotime($event->event_end->format('Y-m-d')) - mktime(0, 0, 0);
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
                                    <a href="{{ route('front.category', $event->category) }}"
                                        class="font-semibold text-blue-500">{{ $event->category->name }}</a>
                                    <h3 class="text-indigo-950 text-xs font-base mt-2 text-wrap w-40">
                                        @foreach ($event->tags as $tag)
                                            <a href=""><span
                                                    class="sc ek uj lk nh rg zi _i nc mx-0">{{ $tag->name }}</span></a>
                                        @endforeach
                                    </h3>
                                    <div class="flex justify-between items-center">

                                        <div class="tc wf ag">
                                            <img src="{{ asset('images/icon-calender.svg') }}" alt="Calender" />
                                            <p>{{ $event->event_start->format('d M Y') }} -
                                                {{ $event->event_end->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                    {{-- <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                            <img src="assets/photo/photo2.png" class="w-full h-full object-cover"
                                                alt="icon">
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="font-semibold">Hariyanto</p>
                                            <p class="text-[#6D7786]">Full-Stack Developer</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div
                            class="gradient-badge w-fit p-[8px_16px] rounded-full border border-[#FED6AD] flex items-center gap-[6px]">
                            <p class="font-medium text-sm text-[#FF6129]">Belum ada Acara</p>
                        </div>
                    @endforelse


                </div>
            </div>
        </section>
        <!-- Event Terbaru End -->

        <!-- ===== About Start ===== -->
        <section class="ji gp uq 2xl:ud-py-35 pg lg:px-32">
            <div class="bb ze ki xn wq">
                <div class="tc wf gg qq">
                    <!-- About Images -->
                    <div class="animate_left xc gn gg jn/2 i">
                        <div>
                            <img src="{{ asset('images/shape-05.svg') }}" alt="Shape" class="h -ud-left-5 x" />
                            <img src="{{ asset('images/about-1.jpg') }}" alt="About"
                                class="ib w-[290px] h-[343px] overflow-hidden object-cover rounded-lg shadow-2xl" />
                            <img src="{{ asset('images/about-3.jpg') }}" alt="About"
                                class="w-[290px] h-[343px] overflow-hidden object-cover rounded-lg shadow-2xl" />
                        </div>
                        <div>
                            <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" />
                            <img src="{{ asset('images/about-2.jpg') }}" alt="About"
                                class="ob gb w-[290px] h-[485px] overflow-hidden object-cover rounded-lg shadow-2xl" />
                            <img src="{{ asset('images/shape-07.svg') }}" alt="Shape" class="bb" />
                        </div>
                    </div>

                    <!-- About Content -->
                    <div class="animate_right jn/2">
                        <h4 class="ek yj mk gb">Tentang Kami</h4>
                        <h2 class="fk vj zp pr kk wm qb">Bidang Dakwah Masjid Salman ITB</h2>
                        <p class="uo">Bidang pengelola kegiatan dakwah
                            dan pelayanan ibadah jamaah yang diselenggarakan
                            oleh YPM Salman ITB....</p>

                        <a href="https://www.youtube.com/watch?v=0eKtKk9lcTM" data-fslightbox class="vc wf hg mb">
                            <span class="tc wf xf be dd rg i gh ua">
                                <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                                <img src="images/icon-play.svg" alt="Play" />
                            </span>
                        </a>
                        <a href="{{ route('front.about') }}"><span class="kk">Selengkapnya</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== About End ===== -->


        <!-- ===== Counter Start ===== -->
        <section class="i pg qh rm ji hp lg:px-32">
            <img src="images/shape-11.svg" alt="Shape" class="of h ga ha ke" />
            <img src="images/shape-07.svg" alt="Shape" class="h ia o ae jf" />
            <img src="images/shape-14.svg" alt="Shape" class="h ja ka" />
            <img src="images/shape-15.svg" alt="Shape" class="h q p" />
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Jumlah Penerima Manfaat Program`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                    </h2>
                    <!-- <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p> -->
                </div>


            </div>
            <!-- Section Title End -->
            <div class="bb ze i va ki xn br">
                <div class="tc uf sn tn xf un gg">
                    <div class="animate_top me/5 ln rj">
                        <h2 class="gk vj zp or kk wm hc">1000+</h2>
                        <p class="ek bk aq">Rumah Quran</p>
                    </div>
                    <div class="animate_top me/5 ln rj">
                        <h2 class="gk vj zp or kk wm hc">1200+</h2>
                        <p class="ek bk aq">Sekolah Pranikah</p>
                    </div>
                    <div class="animate_top me/5 ln rj">
                        <h2 class="gk vj zp or kk wm hc">800+</h2>
                        <p class="ek bk aq">Bahasa Arab</p>
                    </div>
                    <!-- <div class="animate_top me/5 ln rj">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <h2 class="gk vj zp or kk wm hc">346</h2>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <p class="ek bk aq">Happy Clients</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->
                </div>
            </div>
        </section>
        <!-- ===== Counter End ===== -->

        <!-- ===== Blog Start ===== -->
        <section class="ji gp uq">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Latest Blogs & News`, sectionTitleText: `Jangan lewatkan Tulisan dan Informasi terbaru dari kami, Bidang Dakwah Masjid Salman ITB.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                    </h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>


            </div>
            <!-- Section Title End -->

            <div class="bb ye ki xn vq jb jo">
                <div class="wc qf pn xo zf iq">
                    @forelse ($posts as $post)
                        <!-- Blog Item -->
                        <div class="animate_top sg vk rm xm">
                            <div class="c rc i z-1 pg thumbnail w-full h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                                <img class="w-full h-full object-cover" src="{{ Storage::url($post->image) }}"
                                    alt="{{ $post->name }}" />

                                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                    <a href="{{ $post->category_id == 3 ? route('front.infomore', $post) : route('front.readmore', $post) }}"
                                        class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                                </div>
                            </div>

                            <div class="yh">
                                <div class="tc uf wf ag jq">
                                    <div class="tc wf ag">
                                        <img src="images/icon-man.svg" alt="User" />
                                        <p>{{ $post->author->name }}</p>
                                    </div>
                                    <div class="tc wf ag">
                                        <img src="images/icon-calender.svg" alt="Calender" />
                                        <p>{{ $post->category->name }}</p>
                                    </div>
                                    <div class="tc wf ag">
                                        <img src="images/icon-calender.svg" alt="Calender" />
                                        <p>{{ $post->published_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <h4 class="ek tj ml il kk wm xl eq lb">
                                    <a
                                        href="{{ $post->category_id == 3 ? route('front.infomore', $post) : route('front.readmore', $post) }}">{{ $post->title }}</a>
                                </h4>
                            </div>
                        </div>

                    @empty
                    @endforelse


                </div>
            </div>
        </section>
        <!-- ===== Blog End ===== -->


        <!-- ===== Testimonials Start ===== -->
        {{-- <section class="hj rp hr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Client’s Testimonials`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                    </h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>


            </div>
            <!-- Section Title End -->

            <div class="bb ze ki xn ar">
                <div class="animate_top jb cq">
                    <!-- Slider main container -->
                    <div class="swiper testimonial-01">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="i hh rm sg vk xm bi qj">
                                    <!-- Border Shape -->
                                    <span class="rc je md/2 gh xg h q r"></span>
                                    <span class="rc je md/2 mh yg h q p"></span>

                                    <div class="tc sf rn tn un zf dp">
                                        <img class="bf" src="images/testimonial.png" alt="User" />

                                        <div>
                                            <img src="images/icon-quote.svg" alt="Quote" />
                                            <p class="ek ik xj _p kc fb">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dolor diam,
                                                feugiat quis enim sed, ullamcorper semper ligula. Mauris consequat justo
                                                volutpat.
                                            </p>

                                            <div class="tc yf vf">
                                                <div>
                                                    <span class="rc ek xj kk wm zb">Devid Smith</span>
                                                    <span class="rc">Founter @democompany</span>
                                                </div>

                                                <img class="rk" src="images/brand-light-02.svg" alt="Brand" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation -->
                        <div class="tc wf xf fg jb">
                            <div class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                                <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                                        fill="" />
                                </svg>
                            </div>
                            <div class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                                <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                        fill="" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ===== Testimonials End ===== -->

        <!-- ===== CTA Start ===== -->
        @include('front.layouts.cta')
        <!-- ===== CTA End ===== -->
    </main>
@endsection
