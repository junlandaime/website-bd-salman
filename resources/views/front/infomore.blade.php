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



                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- ===== Blog Single End ===== -->


    </main>
@endsection
