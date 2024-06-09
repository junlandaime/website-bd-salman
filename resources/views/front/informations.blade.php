@extends('front.layouts.front')

@section('title')
    <title>Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'informations'
@endsection

@section('content')
    <main>
        <!-- ===== Blog Single Start ===== -->
        <section class="gj qp gr hj rp hr lg:px-[150px]">
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc sf yo zf kq">

                    <div class="jn/2 so">
                        {{-- <div class="animate_top fb">
                            <form action="#">
                                <div class="i">
                                    <input type="text" placeholder="Search Here..."
                                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi" />

                                    <button class="h r q _h">
                                        <svg class="th ul ml il" width="21" height="21" viewBox="0 0 21 21"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div> --}}

                        <div class="animate_top">
                            <h4 class="tj kk wm qb">Related Posts</h4>
                            @forelse ($posts as $post)
                                <div>
                                    <div
                                        class="tc fg 2xl:ud-gap-6 qb thumbnail w-[100px] h-[50px] rounded-[10px] overflow-hidden">
                                        <img class="w-full h-full object-cover" src="{{ Storage::url($post->image) }}"
                                            alt="{{ $post->title }}" />


                                    </div>
                                    <h5 class="line-clamp-1 -mt-7 mb-7 text-wrap w-32 hover:line-clamp-none">
                                        <a href="{{ route('front.infomore', $post) }}">{{ $post->title }}</a>
                                    </h5>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>

                    <div class="jn/2 ro">
                        <div class="animate_top rounded-md shadow-solid-13  p-7.5 md:p-10">
                            @if ($posts->first())
                                <img src="{{ Storage::url($posts->first()->image) }}" alt="{{ $posts->first()->title }}" />
                                <a href="{{ route('front.infomore', $posts->first()) }}">
                                    <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $posts->first()->title }}</h2>
                                </a>
                                <p>
                                    {!! $posts->first()->excerpt !!}
                                </p>
                            @endif


                            <div class="mt-20">
                                @forelse ($posts->skip(1) as $post)
                                    <div class="tc fg 2xl:ud-gap-6 qb">
                                        <div
                                            class="c rc i z-1 pg thumbnail w-[300px] h-[200px] shrink-0 rounded-[10px] overflow-hidden">
                                            <img class="w-full h-full object-cover" src="{{ Storage::url($post->image) }}"
                                                alt="{{ $post->title }}" />
                                        </div>
                                        <h5>
                                            <a class="wj kk wm xl bn ml il"
                                                href="{{ route('front.infomore', $post) }}">{{ $post->title }}</a>
                                            <p class="text-sm hidden lg:block line-clamp-2 hover:line-clamp-none">
                                                {!! Str::limit($post->excerpt, 200) !!}

                                            </p>
                                        </h5>
                                    </div>
                                @empty
                                @endforelse


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- ===== Blog Single End ===== -->

        <!-- ===== CTA Start ===== -->
        @include('front.layouts.cta')

        <!-- ===== CTA End ===== -->
    </main>
@endsection
