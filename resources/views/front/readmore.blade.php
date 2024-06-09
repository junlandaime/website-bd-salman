@extends('front.layouts.front')

@section('title')
    <title>Bidang Dakwah Masjid Salman ITB</title>
@endsection

@section('page')
    page: 'blogs'
@endsection

@section('content')
    <main>
        <!-- ===== Blog Single Start ===== -->
        <section class="gj qp gr hj rp hr">
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc sf yo zf kq">
                    <div class="ro">
                        <div class="animate_top rounded-md shadow-solid-13  p-7.5 md:p-10">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" />

                            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $post->title }}</h2>

                            <ul class="tc uf cg 2xl:ud-gap-15 fb">
                                <li><span class="rc kk wm">Author: </span> {{ $post->author->name }}</li>
                                <li><span class="rc kk wm">Published On: </span> {{ $post->published_at->format('d M, Y') }}
                                </li>
                                <li><span class="rc kk wm">Category: </span> {{ $post->category->name }}</li>
                            </ul>

                            <p class="ob">{!! $post->body !!}</p>

                            <ul class="tc wf bg sb">
                                <li>
                                    <p class="sj kk wm tb">Share On:</p>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                        target="_blank" class="tc wf xf yd ad rg ml il ih wk">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_47_28)">
                                                <path
                                                    d="M11.6663 11.25H13.7497L14.583 7.91663H11.6663V6.24996C11.6663 5.39163 11.6663 4.58329 13.333 4.58329H14.583V1.78329C14.3113 1.74746 13.2855 1.66663 12.2022 1.66663C9.93967 1.66663 8.33301 3.04746 8.33301 5.58329V7.91663H5.83301V11.25H8.33301V18.3333H11.6663V11.25Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_47_28">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="jn/2 so">
                        <div class="animate_top fb">
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
                        </div>

                        <div class="animate_top fb">
                            <h4 class="tj kk wm qb">Categories</h4>

                            <ul>
                                @forelse ($categories as $category)
                                    @foreach ($category->child as $child)
                                        <li class="ql vb du-ease-in-out il xl">
                                            <a href="#">{{ $child->name }}</a>
                                        </li>
                                    @endforeach
                                @empty
                                @endforelse

                            </ul>
                        </div>

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
                                        <a href="{{ route('front.readmore', $post) }}">{{ $post->title }}</a>
                                    </h5>
                                @empty
                            @endforelse

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
