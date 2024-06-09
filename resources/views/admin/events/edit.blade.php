@php
    $hasil = [];

    foreach ($event->tags as $sub) {
        $hasil[] = ['tag' => $sub->name];
    }

    $result = json_encode($hasil);
    // $goal = json_parse($result);
@endphp

{{-- @dd($result) --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data People') }}
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

                <form method="POST" action="{{ route('admin.events.update', $event) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div x-data="{ pesan: '{{ $event->name }}' }">
                        <x-input-label for="name" :value="__('Nama Acara')" />
                        <x-text-input x-model='pesan' value="{{ $event->name }}" id="name"
                            class="block mt-1 w-full" type="text" name="name" required autofocus
                            autocomplete="name" />
                        <p class="text-sm text-green-600 space-y-1" :class="pesan.length > 75 ? 'text-red-500' : ''"
                            x-text="pesan.length"></p>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="image" :value="__('Poster Acara')" />
                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->name }}"
                            class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" autofocus
                            autocomplete="image" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="category" :value="__('Kategori Event')" />

                        <select name="category_id" id="category_id"
                            class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            <option value="">Choose category</option>


                            @forelse($categories as $category)
                                @foreach ($category->child as $child)
                                    <option value="{{ $child->id }}"
                                        {{ $event->category->id == $child->id ? 'selected' : '' }}>
                                        {{ $child->name }}</option>
                                @endforeach
                            @empty
                            @endforelse

                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <div class="md:columns-3 mt-4">
                        <div>
                            <x-input-label for="price" :value="__('Infaq Kegiatan')" />
                            <x-text-input id="price" class="mt-1" type="number" name="price" :value="old('price')"
                                value='{{ $event->price }}' required autofocus autocomplete="price" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="meet" :value="__('Jumlah Pertemuan')" />
                            <x-text-input id="meet" class="mt-1" type="number" name="meet" :value="old('meet')"
                                value='{{ $event->meet }}' required autofocus autocomplete="meet" />
                            <x-input-error :messages="$errors->get('meet')" class="mt-2" />
                        </div>
                        {{-- <div>
                            <x-input-label for="link" :value="__('Link Pendaftaran')" />
                            <x-text-input id="link" class="mt-1" type="text" name="link" :value="old('link')"
                                value='{{ $event->link }}' required autofocus autocomplete="link" />
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div> --}}
                    </div>

                    <div class="mt-4">
                        <x-input-label for="link" :value="__('Link Pendaftaran')" />
                        <x-text-input value='{{ $event->link }}' id="link" class="block mt-1 w-full"
                            type="text" name="link" required autofocus autocomplete="link" />
                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="excerpt" :value="__('Ringkasan')" />
                        <x-text-input value='{{ $event->excerpt }}' id="excerpt" class="block mt-1 w-full"
                            type="text" name="excerpt" required autofocus autocomplete="excerpt" />
                        <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                    </div>


                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Deskripsi Acara')" />
                        <textarea name="description" id="description" cols="30" rows="5"
                            class="border border-slate-300 rounded-xl w-full">{{ $event->description }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="facility" :value="__('Fasilitas Acara')" />
                        <textarea name="facility" id="facility" cols="30" rows="5"
                            class="border border-slate-300 rounded-xl w-full">{{ $event->facility }}</textarea>
                        <x-input-error :messages="$errors->get('facility')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="jadwal" :value="__('Jadwal Acara')" />
                        <textarea name="jadwal" id="jadwal" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full">{{ $event->jadwal }}</textarea>
                        <x-input-error :messages="$errors->get('jadwal')" class="mt-2" />
                    </div>

                    <div class="md:columns-2 mt-4">
                        <div>
                            <x-input-label for="event_start" :value="__('Mulai Kegiatan')" />
                            <x-text-input id="event_start" class="mt-1" type="date" name="event_start"
                                value="{{ $event->event_start->format('Y-m-d') }}" required autofocus
                                autocomplete="event_start" />
                            <x-input-error :messages="$errors->get('event_start')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="event_end" :value="__('Akhir Kegiatan')" />
                            <x-text-input id="event_end" class="mt-1" type="date" name="event_end"
                                value="{{ $event->event_end->format('Y-m-d') }}" required autofocus
                                autocomplete="event_end" />
                            <x-input-error :messages="$errors->get('event_end')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="published_at" :value="__('Mulai Publikasi')" />
                            <x-text-input id="published_at" class="mt-1" type="date" name="published_at"
                                value="{{ $event->published_at->format('Y-m-d') }}" required autofocus
                                autocomplete="published_at" />
                            <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="published_end" :value="__('Akhir Publikasi')" />
                            <x-text-input id="published_end" class="mt-1" type="date" name="published_end"
                                value="{{ $event->published_end->format('Y-m-d') }}" required autofocus
                                autocomplete="published_end" />
                            <x-input-error :messages="$errors->get('published_end')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="status" :value="__('status')" />

                        <select name="status" id="status"
                            class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            <option value=0 {{ $event->status == 0 ? 'selected' : '' }}>Draft</option>
                            <option value=1 {{ $event->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value=9 {{ $event->status == 9 ? 'selected' : '' }}>Arsipkan</option>
                        </select>

                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>


                    <div class="mt-4" x-data="{ data: JSON.parse('{{ $result }}'), tag: {} }">
                        <x-input-label for="file" :value="__('Tags Event')" />
                        {{-- <p class="my-1 text-xs text-slate-400">pisahkan dengan coma</p> --}}
                        <div class="relative w-full">
                            <input type="text" id="name-tag" name="tags" x-model="tag"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 "
                                placeholder="tag Areas" :value="old('tags')" autofocus autocomplete="tags" />
                            <a id="d" @click="data.push({tag})"
                                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </a>
                        </div>
                        <template x-for="(item, index) in data" :key="index">
                            <div
                                class="inline-flex mt-3 items-center h-8 overflow-hidden text-white bg-blue-500 rounded">
                                <span class="px-5 py-1.5 text-[12px] font-medium" x-text="item.tag"></span>
                                <button @click="data.splice(index, 1);"
                                    class="inline-flex items-center justify-center w-8 h-8 bg-blue-600 transition-color hover:bg-blue-700 focus:outline-none focus:ring"
                                    type="button"> <span class="sr-only"> Close </span> <svg class="w-3 h-3"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg> </button>
                            </div>
                        </template>
                        <input type="hidden" class="form-control" name="subjs" id="perSubjs"
                            :value="JSON.stringify(data)">
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Event
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <script>
        CKEDITOR.replace('link');
        CKEDITOR.replace('excerpt');
        CKEDITOR.replace('description');
        CKEDITOR.replace('facility');
        CKEDITOR.replace('jadwal');
    </script>
</x-app-layout>
