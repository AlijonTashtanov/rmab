<div
    class="userSidebar default flex items-stretch w-[130px] transition-all min-h-screen"
>
    <div class="default__sidebar">
        <div
            class="sidebar h-full relative transition-all ease-linear duration-200 sidebar"
        >
            <div
                class="sidebar__main z-20 h-full relative bg-slate-800 py-3 transition-all ease-linear duration-200"
            >
                <button
                    class="userSidebarOpen sidebar__minify--media w-6 h-6 p-0.5 bg-[#3675d4] rounded-md absolute -right-2.5 top-8"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            fill="#fff"
                            d="M3 6h10v2H3zm0 10h10v2H3zm0-5h12v2H3zm13-4l-1.42 1.39L18.14 12l-3.56 3.61L16 17l5-5z"
                        ></path>
                    </svg>
                </button>

                <a
                    href="{{route('index')}}"
                    class="sidebarItem flex items-center py-1.5 transition-all ease-linear duration-200 hover:bg-slate-600 active:bg-stone-500"
                >
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="#fff"
                            d="M6 19h3v-6h6v6h3v-9l-6-4.5L6 10zm-2 2V9l8-6l8 6v12h-7v-6h-2v6zm8-8.75"
                        ></path>
                    </svg>
                    <p class="font-medium text-sm text-white text-center">Home</p>
                </a>

                <a
                    href="{{route('user')}}"
                    class="sidebarItem flex items-center py-1.5 transition-all ease-linear duration-200 hover:bg-slate-600 active:bg-stone-500"
                >
                    <svg  class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M384 64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64l0-384zM128 192a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 356.6c0-37.9 30.7-68.6 68.6-68.6h86.9c37.9 0 68.6 30.7 68.6 68.6c0 15.1-12.3 27.4-27.4 27.4H107.4C92.3 384 80 371.7 80 356.6z" fill="#fff"
                        />
                    </svg>
                    <p class="font-medium text-sm text-white text-center">Asosiy</p>
                </a>

                <a
                    href="{{route('user.quality')}}"
                    class="sidebarItem flex items-center py-1.5 transition-all ease-linear duration-200 hover:bg-slate-600 active:bg-stone-500"
                >
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="#fff"
                            d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zM5 8h14V6H5zm0 0V6zm2 6v-2h10v2zm0 4v-2h7v2z"
                        ></path>
                    </svg>
                    <p class="font-medium text-sm text-white text-center">
                        Sifat baholash
                    </p>
                </a>

                <a
                    href="{{route('user.services')}}"
                    class="sidebarItem flex items-center py-1.5 transition-all ease-linear duration-200 hover:bg-slate-600 active:bg-stone-500"
                >
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="#fff"
                            d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zM5 8h14V6H5zm0 0V6zm2 6v-2h10v2zm0 4v-2h7v2z"
                        ></path>
                    </svg>
                    <p class="font-medium text-sm text-white text-center">
                        Foydalanubchi xizmatlari
                    </p>
                </a>
                <a
                    href="{{route('user.shipping')}}"
                    class="sidebarItem flex items-center py-1.5 transition-all ease-linear duration-200 hover:bg-slate-600 active:bg-stone-500"
                >
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="#fff"
                            d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zM5 8h14V6H5zm0 0V6zm2 6v-2h10v2zm0 4v-2h7v2z"
                        ></path>
                    </svg>
                    <p class="font-medium text-sm text-white text-center">
                        Jo`natma haqida malumot olish
                    </p>
                </a>

                <a
                    href="#"
                    class="sidebarItem flex items-center py-1.5 transition-all ease-linear duration-200 hover:bg-slate-600 active:bg-stone-500"
                >
                    <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="#fff"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4m7 14l5-5l-5-5m5 5H9"
                        ></path>
                    </svg>
                    <p class="font-medium text-sm text-white text-center">
                        Chiqish
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
