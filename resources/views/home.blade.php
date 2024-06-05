<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Web Bidang Dakwah Masjid Salman ITB</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>

    {{-- Navbar Start --}}
    <div class="min-h-full">
        <nav class="bg-white" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center md:justify-end">
                    <div class="items-center">
                        <div class="flex-shrink-0 z-30">
                            <a class="" href="">
                                <div
                                    class="flex bg-primer w-72 h-24 rounded-full font-semibold shadow-xl justify-between px-6 items-center absolute md:top-3 border-4 md:left-1 lg:left-20">
                                    <div
                                        class="bg-white rounded-full w-16 h-16 shadow-lg overflow-hidden flex justify-center items-center">
                                        <img class="w-8" src="{{ asset('/img/logbd.png') }}"
                                            alt="Logo Bidang Dakwah">
                                    </div>
                                    <div class="h-10 w-0.5 bg-white"></div>
                                    <div class="grow-9">
                                        <h1 class="font-bold text-white">Bidang Dakwah</h1>
                                        <h1 class="font-bold text-white">YPM Salman ITB</h1>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a class="bg-primary text-white rounded-md px-3 py-2 text-sm font-medium"
                                    arian-current="page" href="">Dashboard</a>
                                <a href=""
                                    class="text-black hover:bg-primary hover:text-white rounded-md px-3 py-2 text font-medium">Team</a>
                                <a href=""
                                    class="text-black hover:bg-primary hover:text-white rounded-md px-3 py-2 text font-medium">Projects</a>
                                <a href=""
                                    class="text-black hover:bg-primary hover:text-white rounded-md px-3 py-2 text font-medium">Calendar</a>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            {{-- mobile menu button --}}
                            <button type="button" @click="isOpen = !isOpen"
                                class="absolute right-4 inline-flex items-center justify-center rounded-md bg-white p-2 text-primary hover:bg-primary hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open Main Menu</span>
                                <!-- Menu open: "hidden", Menu closed: "block" -->
                                <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!-- Menu open: "block", Menu closed: "hidden" -->
                                <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>

                {{-- Mobile menu, show/hide based on menu state --}}
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="md:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2 mt-20 sm:px-3">
                        <a class="bg-primary block text-white rounded-md px-3 py-2 text-sm font-medium"
                            arian-current="page" href="">Dashboard</a>
                        <a href=""
                            class="text-black hover:bg-primary block hover:text-white rounded-md px-3 py-2 text font-medium">Team</a>
                        <a href=""
                            class="text-black hover:bg-primary block hover:text-white rounded-md px-3 py-2 text font-medium">Projects</a>
                        <a href=""
                            class="text-black hover:bg-primary block hover:text-white rounded-md px-3 py-2 text font-medium">Calendar</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- Navbar End --}}


    {{-- Carosuel Start --}}
    <div x-data="carousel()" class="relative">
        <img class="h-[80vh] w-full -z-99 object-cover object-center" :src="images[selected]" alt="mountains" />

        <button @click="if (selected > 0 ) {selected -= 1} else { selected = images.length - 1 }"
            class="absolute inset-y-0 left-0 px-2 py-[25%] h-full w-8 group hover:bg-gray-500 hover:bg-opacity-75 cursor-pointer">
            <span class="hidden group-hover:block text-gray-50">
                &larr;
            </span>
        </button>
        <button @click="if (selected < images.length - 1  ) {selected += 1} else { selected = 0 }"
            class="absolute inset-y-0 right-0 px-2 py-[25%] h-full w-8 group hover:bg-gray-500 hover:bg-opacity-75 cursor-pointer">
            <span class="hidden group-hover:block text-gray-50">
                &rarr;
            </span>
        </button>

        <div class="absolute bottom-0 w-full p-4 flex justify-center space-x-2">
            <template x-for="(image,index) in images" :key="index">
                <button @click="selected = index"
                    :class="{ 'bg-gray-300': selected == index, 'bg-gray-500': selected != index }"
                    class="h-2 w-2 rounded-full hover:bg-gray-300 ring-2 ring-gray-300"></button>
            </template>
        </div>
    </div>
    {{-- Carosuel End --}}


</body>


<script>
    const carousel = () => {
        return {
            selected: 0,
            images: [
                "https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80",
                "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80",
                "https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80",
                "https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80",
                "https://images.unsplash.com/photo-1485160497022-3e09382fb310?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80",
                "https://images.unsplash.com/photo-1472791108553-c9405341e398?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2137&q=80"
            ]
        };
    };
</script>

</html>
