{{-- @dd($posts) --}}
@extends('front.layouts.front')

@section('title')
    <title>About - Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'about'
@endsection

@section('content')
    <main class="mt-28 lg:px-[150px]">

        @if (request()->routeIs('front.about'))
            <!-- ===== Contact Start ===== -->
            <section id="support" class="i pg fh rm ji gp uq">
                <!-- Bg Shapes -->
                <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h aa y" />
                <img src="{{ asset('images/shape-03.svg') }}" alt="Shape" class="h ca u" />
                <img src="{{ asset('images/shape-07.svg') }}" alt="Shape" class="h w da ee" />
                <img src="{{ asset('images/shape-12.svg') }}" alt="Shape" class="h p s" />
                <img src="{{ asset('images/shape-13.svg') }}" alt="Shape" class="h r q" />

                <!-- Section Title Start -->
                <div x-data="{ sectionTitle: `Let’s Stay Connected`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                    <div class="animate_top bb ze rj ki xn vq">
                        <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                        </h2>
                        {{-- <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p> --}}
                    </div>


                </div>
                <!-- Section Title End -->

                <div class="bb ze ki xn 2xl:ud-px-0">
                    <div class="tc sf yo zf kq">

                        <div class="jn/2 so">

                            <div class="animate_top fb text-right mt-10">
                                <h4 class="tj kk wm qb">About Us</h4>

                                <ul>
                                    <li class="ql vb du-ease-in-out il xl">
                                        <a href="{{ route('front.about') }}">Kontak Kami</a>
                                    </li>
                                    @forelse ($posts as $post)
                                        <li class="ql vb du-ease-in-out il xl">
                                            <a href="{{ route('front.tentang', $post) }}">{{ $post->title }}</a>
                                        </li>
                                    @empty
                                    @endforelse


                                </ul>
                            </div>

                        </div>

                        <div class="ro mt-32">
                            <div class="animate_top rounded-md shadow-solid-13 p-7.5">
                                <div id="mapBox" class="mapBox">

                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.944062863299!2d107.6123765!3d-6.8939488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e650eb4f8499%3A0x5d08d070d6d3c906!2sMasjid%20Salman%20ITB!5e0!3m2!1sid!2sid!4v1657080620695!5m2!1sid!2sid"
                                        width="500px" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="ro">
                        <div class="animate_top rounded-md shadow-solid-13 p-7.5">
                            <img src="images/blog-big.png" alt="Blog" />

                            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">Selamat Datang di <br><span>Bidang
                                    Dakwah</span> <br><span>Masjid Salman ITB</h2>


                            <p class="ob">
                                Bidang Dakwah merupakan bidang yang mengelola seluruh
                                bentuk kegiatan dakwah dan pelayanan ibadah jamaah yang diselenggarakan oleh YPM
                                Salman ITB baik yang berkaitan dengan Civitas Academica ITB maupun pihak
                                lain.
                            </p>
                            <p class="ob">
                                Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132
                            </p>
                            <p class="ob">
                                Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132
                            </p>
                        </div>
                    </div> --}}


                    </div>
                </div>


                <div class="i va bb ye ki xn wq jb mo">
                    <div class="tc uf sn tf rn un zf xl:gap-10">
                        <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
                            <!-- Bg Shapes -->
                            <img src="{{ asset('images/shape-03.svg') }}" alt="Shape" class="h la x wd" />
                            <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h la ma ne kf" />

                            <div class="fb">
                                <h4 class="wj kk wm cc">Email Address</h4>
                                <p><a
                                        href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=bidangdakwah@salmanitb.com">bidangdakwah@salmanitb.com</a>
                                </p>
                            </div>
                            <div class="fb">
                                <h4 class="wj kk wm cc">Office Location</h4>
                                <p>Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132</p>
                            </div>
                            <div class="fb">
                                <h4 class="wj kk wm cc">Phone Number</h4>
                                <p><a href="https://wa.me/6285722183585">(+62) 857 2218 35852</a></p>
                            </div>


                            <span class="rc nd rh tm lc fb"></span>

                            <div>
                                <h4 class="wj kk wm qb">Social Media</h4>
                                <ul class="tc wf cg">
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCOivuK5MQ3QMiI7WeSJWE6w" target="_blank"
                                            class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-900 text-slate-900 hover:border-[#66B161] hover:bg-[#66B161] hover:text-white">
                                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title>YouTube</title>
                                                <path
                                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/bidakwah.salmanitb/" target="_blank"
                                            class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-900 text-slate-900 hover:border-[#66B161] hover:bg-[#66B161] hover:text-white">
                                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title>Instagram</title>
                                                <path
                                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
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
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
                            <form action="https://formbold.com/s/unique_form_id" method="POST">
                                <div class="tc sf yo ap zf ep qb">
                                    <div class="vd to/2">
                                        <label class="rc ac" for="fullname">Full name</label>
                                        <input type="text" name="fullname" id="fullname" placeholder="Devid Wonder"
                                            class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                    </div>

                                    <div class="vd to/2">
                                        <label class="rc ac" for="email">Email address</label>
                                        <input type="email" name="email" id="email"
                                            placeholder="example@gmail.com"
                                            class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                    </div>
                                </div>

                                <div class="tc sf yo ap zf ep qb">
                                    <div class="vd to/2">
                                        <label class="rc ac" for="phone">Hari - Tanggal Pengajuan</label>
                                        <input type="text" name="phone" id="phone"
                                            placeholder="Hari, Tanggal-Bulan"
                                            class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                    </div>

                                    <div class="vd to/2">
                                        <label class="rc ac" for="subject">Subject</label>
                                        <input type="text" for="subject" id="subject"
                                            placeholder="Type your subject"
                                            class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                    </div>
                                </div>

                                <div class="fb">
                                    <label class="rc ac" for="message">Message</label>
                                    <textarea placeholder="Message" rows="4" name="message" id="message"
                                        class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
                                </div>

                                <div class="tc xf">
                                    <a class="vc rg lk gh ml il hi gi _l" id="startcon" href="#"
                                        onclick="gettogetInputValue()">Jadwalkan Konsultasi</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ===== Contact End ===== -->
        @else
            <!-- ===== Contact Start ===== -->
            <section id="support" class="i pg fh rm ji gp uq">
                <!-- Bg Shapes -->
                <img src="{{ asset('images/shape-06.svg') }}" alt="Shape" class="h aa y" />
                <img src="{{ asset('images/shape-03.svg') }}" alt="Shape" class="h ca u" />
                <img src="{{ asset('images/shape-07.svg') }}" alt="Shape" class="h w da ee" />
                <img src="{{ asset('images/shape-12.svg') }}" alt="Shape" class="h p s" />
                <img src="{{ asset('images/shape-13.svg') }}" alt="Shape" class="h r q" />

                <!-- Section Title Start -->
                <div x-data="{ sectionTitle: `{{ $post->title }}`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
                    <div class="animate_top bb ze rj ki xn vq">
                        <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                        </h2>
                        {{-- <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p> --}}
                    </div>


                </div>
                <!-- Section Title End -->

                <div class="bb ze ki xn 2xl:ud-px-0">
                    <div class="tc sf yo zf kq">

                        <div class="jn/2 so">

                            <div class="animate_top fb text-right mt-10">
                                <h4 class="tj kk wm qb">About Us</h4>

                                <ul>
                                    <li class="ql vb du-ease-in-out il xl">
                                        <a href="{{ route('front.about') }}">Kontak Kami</a>
                                    </li>
                                    @forelse ($posts as $row)
                                        <li class="ql vb du-ease-in-out il xl">
                                            <a href="{{ route('front.tentang', $row) }}">{{ $row->title }}</a>
                                        </li>
                                    @empty
                                    @endforelse


                                </ul>
                            </div>

                        </div>

                        <div class="ro">
                            <div class="animate_top rounded-md shadow-solid-13 p-7.5 mt-12">
                                {{-- <img src="images/blog-big.png" alt="Blog" /> --}}

                                {!! $post->body !!}

                            </div>
                        </div>


                    </div>
                </div>

            </section>
            <!-- ===== Contact End ===== -->
        @endif


    </main>
@endsection

<script>
    function gettogetInputValue() {
        let inputName = document.getElementById("fullname").value;
        let inputTopik = document.getElementById("subject").value;
        let reservasi = document.getElementById("phone").value;
        let inputMessage = document.getElementById("message").value;
        let tombol = document.getElementById('startcon')
        let hrefAwal =
            `https://wa.me/6281395136113?text=_Assalamualaikum_%20*Admin%20Konsultasi%20Bidang%20Dakwah*%0A%0APerkenalkan%20saya%20${inputName}%0A%0AIngin%20berkonsultasi%20terkait%20topik%20${inputTopik}%0AApakah%20saya%20bisa%20menjadwalkan%20konsultasi%20di%20Hari%20${reservasi}%0A%0Apesan%20tambahan%3A%0A${inputMessage}%0A%0AHatur%20Nuhun%20sebelumnya%20Admin%0AWassalamualaikum`
        tombol.href = hrefAwal
    }
</script>
