<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <!-- Static sidebar for desktop -->
    <div class="hidden md:flex md:w-[13.4rem] md:flex-col md:fixed md:inset-y-0 z-50 overflow-x-hidden">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-grow pt-4 overflow-y-auto bg-white dark:bg-dark">
            <div class="flex items-center w-full gap-2 mx-2">
                <div class="block w-20 h-20 bg-center bg-cover bg-image-one dark:bg-image-two ">
                    {{-- <img src="/logom.png" alt="MoE logo" srcset="" {{ $attributes }}> --}}
                </div>
                <div class="flex-col hidden text-left sm:flex">
                    <div class="font-medium text-[10px] text-gray/70 dark:text-light/80 tracking-tighter leading-[0.5]">
                        {{ __('FDRE') }}
                    </div>
                    <div class="text-xs font-semibold tracking-tight text-gray/70 dark:text-light/80">
                        {{ __('Ministry of Education') }}
                    </div>
                    <div class="font-semibold leading-tight text-gray dark:text-light">{{ __('SIP') }}<br>
                        {{ __('Campaign') }}
                    </div>
                </div>
            </div>

            <div class="flex w-full h-2 mt-4">
                <div class="w-3/12 h-full bg-yellow"></div>
                <div class="w-4/12 h-full bg-red"></div>
                <div class="w-2/12 h-full bg-sky"></div>
                <div class="w-3/12 h-full bg-blue"></div>
            </div>

            <x-side-navigation.nav />

            <x-side-navigation.footer />
        </div>
    </div>
</div>


<div x-data="{
            currentSlide: 0,
            images: ['https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
            'https://images.unsplash.com/photo-1644018335954-ab54c83e007f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
            'https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'],
            autoplay: true,
            startAutoplay() {
                if (this.autoplay) {
                    setInterval(() => {
                        this.nextSlide();
                    }, 4000);
                }
            },
            previousSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.images.length) % this.images.length;
            },
            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.images.length;
            }
        }" x-init="startAutoplay()" class="relative max-w-xl">

    <div class="relative border rounded-3xl h-96 overflow-clip">
        <template x-for="(image, index) in images" :key="index" class="absolute inset-0">
            <img :src="image" :alt="'Slide' + (index + 1)" x-show="currentSlide === index"
                x-transition:enter="transition ease-out duration-500" x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-500"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-clock
                class="absolute inset-0 object-cover h-96">
        </template>
    </div>

    <div class="flex justify-between w-full">
        <button @click="previousSlide()" class="prev-button">Previous</button>
        <button @click="nextSlide()" class="next-button">Next</button>
    </div>

</div>