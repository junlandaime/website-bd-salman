{{-- @dd($events) --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage events') }}
            </h2>
            <a href="{{ route('admin.events.create') }}"
                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @if (session('success'))
                    <div class="p-5 w-full ext-xl font-bold rounded-3xl bg-green-500 text-white">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="p-5 w-full ext-xl font-bold rounded-3xl bg-red-500 text-white">
                        {{ session('error') }}
                    </div>
                @endif

                @forelse ($events as $event)
                    <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                        <div class="flex flex-row items-center gap-x-3">
                            <img src="{{ Storage::url($event->image) }}" alt="{{ $event->name }}"
                                class="rounded-2xl object-cover w-[120px] h-[90px]">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold text-wrap w-48">{{ $event->name }}</h3>
                                <p class="text-slate-500 text-sm">Kategori Acara: {{ $event->category->name }}</p>
                                <p class="text-slate-900 text-xs">created_at {{ $event->created_at->diffForHumans() }}
                                </p>
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
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Tags Event</p>
                            <h3 class="text-indigo-950 text-xs font-base mt-2 text-wrap w-40">
                                @foreach ($event->tags as $tag)
                                    {{ $tag->name }} |
                                @endforeach

                            </h3>
                        </div>
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Waktu Penting</p>
                            {{-- <h3 class="text-indigo-950 text-xl font-bold">{{ $event->user->post->count() }}</h3> --}}
                            <span class="text-indigo-950 text-xs font-base mt-2 text-wrap w-40">Publikasi
                                {{ $event->published_at->format('d-m-Y') }} -
                                {{ $event->published_end->format('d-m-Y') }}</span>

                            <span class="text-indigo-950 text-xs font-base mt-2 text-wrap w-40">Acara
                                {{ $event->event_start->format('d-m-Y') }} -
                                {{ $event->event_end->format('d-m-Y') }}</span>

                        </div>
                        <div class="hidden md:flex flex-col">
                            <p class="text-slate-500 text-sm">Status</p>
                            {!! $event->status_event_label !!}


                        </div>
                        <div class="hidden md:flex flex-row items-center gap-x-3">
                            {{-- <a href="{{ route('admin.events.toggle', $event) }}"
                                class="font-bold py-4 px-6 {{ !$event->status ? 'bg-green-500' : 'bg-red-500' }} text-white rounded-full">
                                {{ !$event->status ? 'Aktifkan' : 'Pasifkan' }}

                            </a> --}}
                            <a href="{{ route('admin.events.edit', $event) }}"
                                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                @empty
                    <p>Belum Ada events</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
