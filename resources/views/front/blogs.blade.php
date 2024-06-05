@extends('front.layouts.front')

@section('title')
    <title>Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'blogs'
@endsection

@section('content')
    <main>
        <!-- ===== Blog Grid Start ===== -->
        <section class="ji gp uq">
            <div class="bb ye ki xn vq jb jo">
                <div class="wc qf pn xo zf iq">
                    @forelse ($posts as $post)
                        <!-- Blog Item -->
                        <div class="animate_top sg vk rm xm">
                            <div class="c rc i z-1 pg thumbnail w-full h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                                <img class="w-full h-full object-cover" src="{{ Storage::url($post->image) }}"
                                    alt="{{ $post->name }}" />

                                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                    <a href="{{ route('front.readmore', $post) }}" class="vc ek rg lk gh sl ml il gi hi">Read
                                        More</a>
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
                                    <a href="{{ route('front.readmore', $post) }}">{{ $post->title }}</a>
                                </h4>
                            </div>
                        </div>

                    @empty
                        <p>Belum terdapat Postingan Blogs</p>
                    @endforelse

                    <!-- Pagination -->
                    <div class="mb lo bq i ua">
                        <nav>
                            <ul class="tc wf xf bg">
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        <svg class="th lm ml il" width="8" height="14" viewBox="0 0 8 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        4
                                    </a>
                                </li>
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        ...
                                    </a>
                                </li>
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        12
                                    </a>
                                </li>
                                <li>
                                    <a class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an" href="#">
                                        <svg class="th lm ml il" width="8" height="14" viewBox="0 0 8 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z"
                                                fill="#fefdfo" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination -->
                </div>
        </section>
        <!-- ===== Blog Grid End ===== -->

        <!-- ===== CTA Start ===== -->
        @include('front.layouts.cta')
        <!-- ===== CTA End ===== -->
    </main>
@endsection
