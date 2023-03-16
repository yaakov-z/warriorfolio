   <nav>

        {{--  Mobile Menu --}}
        <nav class=" lg:hidden">
         {{-- Alpine JS Menu --}}
            <div x-data="{ show: false }" class="">
                <button @click="show = !show" class="text-white">
                <ion-icon class="h-9 w-9" name="menu-outline"></ion-icon>
                </button>
                <div x-show="show">
                    <div class="bg-black bg-opacity-95 h-full w-full p-4 mr-auto fixed z-50 top-0 right-0 bottom-0 ">
                        {{-- Close Button --}}
                        <div class="flex justify-end gap-10">
                            <button @click="show = !show" class="text-white justify-end">
                                <ion-icon class="h-9 w-9 justify-end" name="close-outline"></ion-icon>
                            </button>
                        </div>
                        {{-- Nav Links Mobile --}}
                        <ul class="grid gap-8 justify-center text-base">
                            <x-ui.nav-links />
                        </ul>
                    </div>
                </div>
        </nav>
        {{-- End Mobile Menu --}}
        {{-- Desktop Menu --}}
        <nav class="hidden lg:block font-normal lg:text-md">
           <ul class="flex gap-4">
                <x-ui.nav-links />
           </ul>
        </nav>
        {{-- End Desktop Menu --}}

   </nav>
