<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('title')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="icon" href="{{ asset('favicon.png') }}') }}">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body x-data="{ @yield('page'), 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">

    <!-- ===== Header Start ===== -->

    @include('front.layouts.menu')

    <!-- ===== Header End ===== -->

    @yield('content')


    <!-- ===== Footer Start ===== -->
    <footer>
        <div class="bb ze ki xn 2xl:ud-px-0 lg:px-[130px]">
            <!-- Footer Top -->
            <div class="ji gp">
                <div class="tc uf ap gg fp">
                    <div class="animate_top zd/2 to/4">
                        <a href="index.html">
                            <img src="{{ asset('images/logoBD.png') }}" alt="Logo" class="om w-[130px]" />
                            <img src="{{ asset('images/logoBD.png') }}" alt="Logo" class="xc nm w-[130px]" />
                            <!-- <img src="{{ asset('images/logo-dark.svg') }}" alt="Logo" class="xc nm" /> -->
                        </a>

                        <p class="lc fb">Bidang pengelola kegiatan dakwah dan pelayanan ibadah jamaah yang
                            diselenggarakan oleh YPM Salman ITB</p>

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

                    <div class="vd ro tc sf rn un gg vn">
                        <div class="animate_top">
                            <h4 class="kk wm tj ec">Quick Links</h4>

                            <ul>
                                <li><a href="{{ route('front.index') }}" class="sc xl vb">Home</a></li>
                                <li><a href="{{ route('front.events') }}" class="sc xl vb">Event</a></li>
                                <li>
                                    <a href="{{ route('front.features') }}" class="sc xl vb">
                                        Layanan
                                        {{-- <span class="sc ek uj lk nh rg zi _i nc">Hiring</span> --}}
                                    </a>
                                </li>
                                <li><a href="{{ route('front.about') }}" class="sc xl vb">Tentang Kami</a></li>
                            </ul>
                        </div>

                        <div class="animate_top">
                            <h4 class="kk wm tj ec">Lingkungan Kami</h4>

                            <ul>
                                <li><a href="https://salmanitb.com/" class="sc xl vb" target="_blank">Masjid Salman
                                        ITB</a>
                                    <span class="sc ek uj lk nh rg zi _i nc">Our Epicentrum</span>
                                </li>
                                <li><a href="https://kaderisasi.salmanitb.com/" class="sc xl vb"
                                        target="_blank">Kaderisasi Salman
                                        ITB</a></li>
                                <li><a href="https://kbihusalmanitb.com/" class="sc xl vb" target="_blank">Kelompok
                                        Bimbingan Haji dan
                                        Umroh</a></li>
                                <li><a href="https://www.rumahamal.org/" class="sc xl vb" target="_blank">Rumah Amal
                                        Salman</a></li>
                                <li><a href="https://www.wakafsalman.or.id/" class="sc xl vb" target="_blank">Wakaf
                                        Salman</a></li>
                            </ul>
                        </div>

                        {{-- <div class="animate_top">
                            <h4 class="kk wm tj ec">Newsletter</h4>
                            <p class="ac qe">Subscribe to receive future updates</p>

                            <form action="https://formbold.com/s/unique_form_id" method="POST">
                                <div class="i">
                                    <input type="text" placeholder="Email address"
                                        class="vd sm _g ch pm vk xm rg gm dm dn gi mi" />

                                    <button class="h q fi">
                                        <svg class="th vm ul" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_48_1487)">
                                                <path
                                                    d="M3.1175 1.17318L18.5025 9.63484C18.5678 9.67081 18.6223 9.72365 18.6602 9.78786C18.6982 9.85206 18.7182 9.92527 18.7182 9.99984C18.7182 10.0744 18.6982 10.1476 18.6602 10.2118C18.6223 10.276 18.5678 10.3289 18.5025 10.3648L3.1175 18.8265C3.05406 18.8614 2.98262 18.8792 2.91023 18.8781C2.83783 18.8769 2.76698 18.857 2.70465 18.8201C2.64232 18.7833 2.59066 18.7308 2.55478 18.6679C2.51889 18.6051 2.50001 18.5339 2.5 18.4615V1.53818C2.50001 1.46577 2.51889 1.39462 2.55478 1.33174C2.59066 1.26885 2.64232 1.2164 2.70465 1.17956C2.76698 1.14272 2.83783 1.12275 2.91023 1.12163C2.98262 1.12051 3.05406 1.13828 3.1175 1.17318ZM4.16667 10.8332V16.3473L15.7083 9.99984L4.16667 3.65234V9.16651H8.33333V10.8332H4.16667Z"
                                                    fill="" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_48_1487">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div> --}}

                        <div class="animate_top lg:w-48">
                            <h4 class="kk wm tj ec">Alamat</h4>

                            <ul>
                                Jl. Ganesa No.7, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Footer Top -->

            <!-- Footer Bottom -->
            <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
                <div class="animate_top">
                    {{-- <ul class="tc wf gg">
                        <li><a href="#" class="xl">English</a></li>
                        <li><a href="#" class="xl">Privacy Policy</a></li>
                        <li><a href="#" class="xl">Support</a></li>
                    </ul> --}}
                </div>

                <div class="animate_top">
                    <p>&copy; 2025 Base. All rights reserved</p>
                </div>
            </div>
            <!-- Footer Bottom -->
        </div>
    </footer>

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc': scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <!-- ====== Back To Top End ===== -->
    <!-- JavaScript -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.7.1.min.js') }}"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('main.js') }}"></script>
    <script>
        //  Pricing Table
        const setup = () => {
            return {
                isNavOpen: false,

                billPlan: 'monthly',

                plans: [{
                        name: 'Starter',
                        price: {
                            monthly: 29,
                            annually: 29 * 12 - 199,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Growth Plan',
                        price: {
                            monthly: 59,
                            annually: 59 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Business',
                        price: {
                            monthly: 139,
                            annually: 139 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                ],
            };
        };
    </script>
    <script defer src="{{ asset('bundle.js') }}"></script>
    @yield('js')
</body>

</html>
