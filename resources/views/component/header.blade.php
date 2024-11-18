<div class="w-full fixed-header">
    <nav class="flex justify-between items-center w-full px-4 xl:w-[80%] m-auto header">
        <input class="menu-btn md:hidden" type="checkbox" id="menu-btn" />
        <label class="menu-icon md:hidden" for="menu-btn">
            <span class="navicon"></span>
        </label>
        <a href="/" class="cursor-pointer">
            <img width="75px" src="{{ asset('images/logo.webp') }}" alt="logo">
        </a>
        <ul class="hidden md:gap-6 gap-2 cursor-pointer h-[75px] menu md:flex md:pb-0 pb-5">
            <li
                class="{{ request()->is('/') ? 'active-menu' : '' }} font-semibold menu-item h-full flex items-center border-b-2 border-transparent hover:border-b-2  md:hover:text-hover-blue hover:border-b-indigo-500">
                <a href="/">TRANG CHỦ</a>
            </li>
            <li
                class="{{ request()->is('gioi-thieu') ? 'active-menu' : '' }} font-semibold menu-item h-full flex items-center border-b-2 border-transparent hover:border-b-2  md:hover:text-hover-blue hover:border-b-indigo-500">
                <a href="/gioi-thieu">GIỚI THIỆU</a>
            </li>
            <li
                class="{{ request()->is('linh-vuc-kinh-doanh/*') ? 'active-menu' : '' }} font-semibold menu-item h-full flex md:flex-row flex-col md:items-center drop-down-parent md:relative border-b-2 border-transparent hover:border-b-2  md:hover:text-hover-blue hover:border-b-indigo-500">
                <span>LĨNH VỰC KINH DOANH</span>
                <ul class="drop-down-child md:absolute border-[1px] top-[100%] md:w-[300px] bg-white w-full">
                    <li class="py-2 px-5 hover:bg-hover-gray"><a href="/linh-vuc-kinh-doanh/dich-vu-xuat-nhap-khau"
                            class="text-color-444 hover:text-color-main-text">Dịch vụ
                            xuất nhập khẩu</a></li>
                    <li class="py-2 px-5 hover:bg-hover-gray"><a href="/linh-vuc-kinh-doanh/ecommerce"
                            class="text-color-444 hover:text-color-main-text">Dịch vụ
                            TMĐT đa quốc gia</a></li>
                    <li class="py-2 px-5 hover:bg-hover-gray"><a href="/linh-vuc-kinh-doanh/kinh-doanh-san-xuat-mi-pham"
                            class="text-color-444 hover:text-color-main-text">SXKD dược mỹ phẩm</a></li>
                </ul>
            </li>
            <li
                class="{{ request()->is('tin-tuc/*') ? 'active-menu' : '' }} font-semibold menu-item h-full flex items-center border-b-2 border-transparent hover:border-b-2  md:hover:text-hover-blue hover:border-b-indigo-500">
                <a href="/tin-tuc/{{ NEW_ALL }}">TIN TỨC</a>
            </li>
            <li
                class="{{ request()->is('tuyen-dung') ? 'active-menu' : '' }} font-semibold menu-item h-full flex items-center border-b-2 border-transparent hover:border-b-2  md:hover:text-hover-blue hover:border-b-indigo-500">
                <a href="/tuyen-dung">TUYỂN DỤNG</a>
            </li>
            <li
                class="{{ request()->is('videos') ? 'active-menu' : '' }} font-semibold menu-item h-full flex items-center border-b-2 border-transparent hover:border-b-2  md:hover:text-hover-blue hover:border-b-indigo-500">
                <a href="/videos">THƯ VIỆN VIDEO</a>
            </li>
        </ul>
        {{-- <div>
            <button class="bg-indigo-900 rounded-lg text-white px-3 py-2">Lien hệ</button>
        </div> --}}
    </nav>
</div>
