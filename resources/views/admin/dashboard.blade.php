<x-app-layout>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-3 2xl:gap-7.5">
        <!-- Card Item Start -->
        <div
            class="rounded border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="mt-4 px-8">
                <div class="mb-3">
                    <p class="text-lg font-bold text-radient-blue sm:text-2xl">Tổng số lượt truy cập:</p>
                </div>

                <span class="flex items-center gap-1 text-sm sm:text-lg text-meta-3 font-bold justify-end">
                   {{$totalVisit}} <i class="ml-1 fa-regular fa-eye text-radient-blue"></i>
                </span>
            </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div
            class="rounded border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="mt-4 px-8">
                <div class="mb-3">
                    <p class="text-lg font-bold text-radient-blue sm:text-2xl">Tổng số danh mục:</p>
                </div>

                <span class="flex items-center gap-1 text-sm sm:text-lg text-meta-3 font-bold justify-end">
                   {{$totalCategory}} <i class="ml-1 fa-solid fa-list text-radient-blue"></i>
                </span>
            </div>
        </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        <div
        class="rounded border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="mt-4 px-8">
            <div class="mb-3">
                <p class="text-lg font-bold text-radient-blue sm:text-2xl">Tổng số tin tức:</p>
            </div>

            <span class="flex items-center gap-1 text-sm sm:text-lg text-meta-3 font-bold justify-end">
               {{$totalNews}} <i class="ml-1 fa-regular fa-newspaper text-radient-blue"></i>
            </span>
        </div>
    </div>
        <!-- Card Item End -->

        <!-- Card Item Start -->
        {{-- <div
        class="rounded border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="mt-4 px-8">
            <div class="mb-3">
                <p class="text-lg font-bold text-radient-blue sm:text-2xl">Tổng số lượt truy cập:</p>
            </div>

            <span class="flex items-center gap-1 text-sm sm:text-lg text-meta-3 font-bold justify-end">
               1000 <i class="ml-1 fa-regular fa-eye"></i>
            </span>
        </div>
    </div> --}}
        <!-- Card Item End -->
    </div>
    </div>
</x-app-layout>
