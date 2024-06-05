<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Photo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.photos.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-4">
                        <x-input-label for="path" :value="__('Foto')" />
                        <x-text-input id="path" class="block mt-1 w-full" type="file" name="path" required
                            autofocus autocomplete="path" />
                        <x-input-error :messages="$errors->get('path')" class="mt-2" />
                    </div>

                    <div class="mt-4" x-data="{ pesan: '' }">
                        <x-input-label for="name" :value="__('Judul Foto')" />
                        <x-text-input x-model="pesan" id="name" class="block mt-1 w-full" type="text"
                            name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <p class="text-sm text-green-600 space-y-1" :class="pesan.length > 75 ? 'text-red-500' : ''"
                            x-text="pesan.length"></p>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="category" :value="__('Kategori Foto')" />

                        <select name="gallery_id" id="gallery_id"
                            class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            <option value="">Choose category</option>
                            @role('superadmin')
                                @php
                                    $categories = $categories->where('slug', 'gallery');
                                @endphp
                                @forelse($categories as $category)
                                    @foreach ($category->child as $child)
                                        <option value="{{ $child->id }}">{{ $child->name }}</option>
                                    @endforeach
                                @empty
                                @endforelse
                            @endrole
                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="caption" :value="__('Caption Foto')" />
                        <textarea name="caption" id="caption" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full"></textarea>
                        <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Photo
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('caption');
    </script>
</x-app-layout>
