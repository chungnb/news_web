<div class="footer border-t-[1px] py-10">
    <div class="px-4 w-full xl:w-[80%] m-auto"
        style="background-image: url({{ asset('images/group_earth.png') }});
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: contain;">
        <div class="flex flex-col md:flex-row justify-between gap-2 xl:gap-[10rem]">
            <div class="footer-about relative">
                <h3 class="relative footer-title mb-4 font-bold text-bl-222">CÔNG TY CỔ PHẦN THƯƠNG MẠI VÀ XUẤT NHẬP KHẨU
                    ĐỨC TÍN</h3>

                <p class="footer-content text-gray-666">Công Ty CP Thương mại và Xuất Nhập Khẩu Đức Tín đang không ngừng
                    phát
                    triển. Với mục tiêu xây
                    dựng niềm tin, sự tín nhiệm bằng chất lượng sản phẩm và dịch vụ, sự trung thực và tinh thần
                    trách nhiệm, ĐỨC TÍN GROUP cam kết với mọi đối tác, khách hàng và với chính mình về chất
                    lượng,
                    giá trị sản phẩm để đáp ứng kì vọng ngày càng cao của khách hàng.</p>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-2 xl:gap-12 w-full">
                <div class="w-full">
                    <h3 class="relative footer-title mb-4 font-bold text-bl-222">Về DTG</h3>
                    <div class="footer-content flex flex-col gap-4">
                        <a href="/gioi-thieu">Giới thiệu</a>
                        <a href="/#linh-vuc-kinh-doanh">Lĩnh vực kinh doanh</a>
                        <a href="/tin-tuc">Tin tức</a>
                        <a href="/tuyen-dung">Tuyển dụng</a>
                        <a href="/videos">Thư viện video</a>
                        <a href="/lien-he">Liên hệ</a>
                    </div>
                </div>
                <div class="w-full">
                    <h3 class="relative footer-title mb-4 font-bold text-bl-222">Thông tin</h3>
                    <div class="footer-content flex flex-col gap-4">
                        @foreach ($information as $info)
                            <a href="/thong-tin/{{ $info->slug }}">{{ $info->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full hidden md:block">
                <div class="flex gap-6">
                    <a href="/" class="cursor-pointer"><img src="{{ asset('images/dma.png') }}" alt="DMA"></a>
                    <a href="/" class="cursor-pointer"><img src="{{ asset('images/bo-cong-thuong.png') }}" alt="Bo cong thuong"></a>
                </div>
                <p class="text['#292A6B'] mt-10 mb-4 text-center">Theo dõi Đức Tín Group trên
                </p>
                <div class="flex gap-4">
                    <a href="https://www.facebook.com/ductingroup.dtg" target="_blank"><img
                            src="{{ asset('images/fb.png') }}" alt="Facebook"></a>
                    <a href="https://www.tiktok.com/@ductin_group" target="_blank"><img
                            src="{{ asset('images/Tiktok.png') }}" alt="Tiktok"></a>
                    <a href="https://www.instagram.com/ductingroup/" target="_blank"><img
                            src="{{ asset('images/Instagram.png') }}" alt="Instagram"></a>
                    <a href="https://www.linkedin.com/in/duc-tin-group-7b01ba312/" target="_blank"><img
                            src="{{ asset('images/LinkedIn.png') }}" alt="Linkedin"></a>
                </div>
                <?php
                $scripts['footer'] = mb_convert_encoding($scripts['footer'] ?? '', 'UTF-8', 'auto');
                echo html_entity_decode($scripts['footer'], ENT_QUOTES, 'UTF-8');
                ?>
            </div>
        </div>

        <div class="flex flex-col gap-4 md:gap-8 justify-between mt-4 md:mt-8 mb-4 md:mb-12">
            <div class="w-full flex flex-col gap-3 md:w-4/12">
                <p class="flex gap-2" style="align-items: baseline;"><i class="fa-solid fa-location-dot"></i><strong class="w-[20%]">Địa
                        Chỉ:</strong> Nhà 84 đường 23, khu đô thị thành phố Giao Lưu,
                    Cổ Nhuế 2, Bắc Từ Liêm, Thành Phố Hà Nội.</p>
                <p class="flex gap-2 items-center"><i class="fa-solid fa-phone"></i><strong>Hotline:</strong> 0963290292
                </p>
                <p class="flex gap-2 items-center"><i class="fa-solid fa-envelope"></i><strong>Email:</strong>
                    admin@ductingroup.com</p>
                <p class="flex gap-2 items-center"><i class="fa-solid fa-qrcode"></i><strong>Mã số thuế:</strong>
                    0108970525</p>
            </div>
            <div class="w-full block md:hidden mt-10">
                <div class="flex gap-6">
                    <a href="/" class="cursor-pointer"><img src="{{ asset('images/dma.png') }}" alt="DMA"></a>
                    <a href="/" class="cursor-pointer"><img src="{{ asset('images/bo-cong-thuong.png') }}" alt="Bo cong thuong"></a>
                </div>
                <p class="text['#292A6B'] mt-4 md:mt-10 mb-4 text-left">Theo dõi Đức Tín Group trên
                </p>
                <div class="flex gap-2 md:gap-4">
                    <a href="https://www.facebook.com/ductingroup.dtg" target="_blank"><img
                            src="{{ asset('images/fb.png') }}" alt="Facebook"></a>
                    <a href="https://www.tiktok.com/@ductin_group" target="_blank"><img
                            src="{{ asset('images/Tiktok.png') }}" alt="Tiktok"></a>
                    <a href="https://www.instagram.com/ductingroup/" target="_blank"><img
                            src="{{ asset('images/Instagram.png') }}" alt="Instagram"></a>
                    <a href="https://www.linkedin.com/in/duc-tin-group-7b01ba312/" target="_blank"><img
                            src="{{ asset('images/LinkedIn.png') }}" alt="Linkedin"></a>
                </div>
            </div>
        </div>

        <p class="text-bl-222 text-base text-center">Copyright © 2024 Ductingroup.com. All Rights Reserved.</p>
    </div>
</div>
