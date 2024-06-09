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
        <section class="gj qp gr hj rp hr">
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc sf yo zf kq">

                    <div class="jn/2 so">

                    </div>

                    <div class="ro">
                        <div class="animate_top rounded-md shadow-solid-1 p-7.5 md:p-10">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" />

                            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $post->title }}</h2>

                            <ul class="tc uf cg 2xl:ud-gap-15 fb">
                                <li><span class="rc kk wm">Author: </span> {{ $post->author->name }}</li>
                                <li><span class="rc kk wm">Published On: </span>
                                    {{ $post->published_at->format('d M, Y') }}</li>
                                <li><span class="rc kk wm">Category: </span> {{ $post->category->name }}</li>
                            </ul>

                            <p>
                                {!! $post->body !!}
                            </p>
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


                </div>
            </div>
        </section>
        <!-- ===== Blog Single End ===== -->


    </main>
@endsection
