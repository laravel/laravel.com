<div
    x-data="{
        tab: null,
        tabs: [],
        scrolledLeft: true,
        scrolledRight: false,
        init() {
            window.addEventListener('hashchange', () => this.changeTab(location.hash.substring(1)))

            this.updateScrollPosition()
        },
        changeTab(tab) {
            if (this.tabs.includes(tab)) {
                this.tab = tab
                history.replaceState(null, null, '#' + tab)
            }
        },
        scrollLeft() {
            document.getElementById('feature-nav').scrollBy({ left: -200, behavior: 'smooth' })
        },
        scrollRight() {
            document.getElementById('feature-nav').scrollBy({ left: 200, behavior: 'smooth' })
        },
        updateScrollPosition(event) {
            const el = document.getElementById('feature-nav')
            this.scrolledLeft = el.scrollLeft === 0
            this.scrolledRight = (el.scrollWidth - el.offsetWidth) === el.scrollLeft
        },
    }"
    class="z-10 relative lg:h-[550px] max-w-[1100px] mt-12 flex flex-col lg:flex-row bg-white border border-gray-200 overflow-hidden"
>
    <nav class="w-full flex relative lg:max-w-xs">
        <div class="hidden lg:block pointer-events-none absolute top-0 w-5 lg:w-full h-full lg:h-8 bg-gradient-to-r lg:bg-gradient-to-b from-white"></div>
        <div class="hidden lg:block pointer-events-none absolute bottom-0 right-0 z-10 w-5 lg:w-full h-full lg:h-6 bg-gradient-to-l lg:bg-gradient-to-t from-white"></div>

        <button class="lg:hidden w-6 bg-gray-50 border-r border-b border-gray-100 text-gray-600 disabled:text-gray-200 flex items-center justify-center" :disabled="scrolledLeft" @click="scrollLeft">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
        </button>

        <ul
            id="feature-nav"
            class="flex-1 divide-x lg:divide-x-0 lg:divide-y divide-gray-100 max-h-full overflow-x-auto lg:overflow-x-visible lg:overflow-y-auto lg:overscroll-y-contain flex lg:block whitespace-nowrap text-sm lg:text-base"
            @scroll.throttle.50ms="updateScrollPosition"
        >
            @stack('nav')
        </ul>

        <button class="lg:hidden w-6 bg-gray-50 border-l border-b border-gray-100 text-gray-600 disabled:text-gray-200 flex items-center justify-center" :disabled="scrolledRight" @click="scrollRight">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
        </button>
    </nav>

    <div class="flex-1 overflow-y-auto">
        {{ $slot }}
    </div>

    <div x-data="{ init() {
        tab = tabs[0];
        changeTab(location.hash.substring(1));
    } }"></div>
</div>
