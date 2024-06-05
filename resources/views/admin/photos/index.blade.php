{{-- @dd($photos) --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Foto-foto') }}
            </h2>
            <a href="{{ route('admin.photos.create') }}"
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

                @forelse ($categories as $category)
                    @foreach ($category->child as $child)
                        <div class="item-card flex flex-row justify-between items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <div class="flex flex-col">
                                    <h3 class="text-indigo-950 text-xl font-bold text-wrap w-36">
                                        {{ $child->name }}</h3>
                                </div>

                            </div>

                        </div>
                        @forelse ($child->photos as $photo)
                            <div class="item-card flex flex-col md:flex-row gap-y-10 justify-between md:items-center">
                                <div class="flex flex-row items-center gap-x-3">
                                    <img src="{{ Storage::url($photo->path) }}" alt="{{ $photo->name }}"
                                        class="rounded-2xl object-cover w-[120px] h-[90px]">
                                    <div class="flex flex-col">
                                        <h3 class="text-indigo-950 text-xl font-bold text-wrap w-48">
                                            {{ $photo->name }}</h3>
                                        <p class="text-slate-500 text-sm">{{ $photo->gallery->name }}</p>
                                        <p class="text-slate-900 text-xs">created_at
                                            {{ $photo->created_at->format('D d-m-Y h-m-s') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="hidden md:flex flex-col">
                                    <p class="text-slate-500 text-sm">Caption Foto</p>
                                    <h3 class="text-indigo-950 text-xl font-bold">{!! $photo->caption !!}</h3>
                                </div>

                                <div class="hidden md:flex flex-col">
                                    <p class="text-slate-500 text-sm">Pengupload</p>
                                    {{-- <h3 class="text-indigo-950 text-xl font-bold">{{ $photo->user->name }}</h3> --}}
                                </div>
                                <div class="hidden md:flex flex-row items-center gap-x-3">

                                    <a href="{{ route('admin.photos.edit', $photo) }}"
                                        class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.photos.destroy', $photo) }}" method="photo">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                        @empty
                            <p>Belum Ada Foto</p>
                        @endforelse
                    @endforeach
                    @empty
                        <p>Belum ada Data Kategori</p>
                    @endforelse


                </div>
            </div>
        </div>
    </x-app-layout>
