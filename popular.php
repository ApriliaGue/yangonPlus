<section id="popular-tours" class="scroll-mt-12 py-12 px-4 sm:px-6 md:py-16">
    <div class="max-w-7xl mx-auto text-[#1F0730]">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between border-b border-gray-100 pb-6 mb-8 gap-4">
            <div class="space-y-2 max-w-2xl">
                <h4 class="text-3xl md:text-4xl font-bold tracking-tight">Most Popular Tours & Packages</h4>
                <p class="text-base md:text-lg text-[#3E465F] font-medium">
                    Discover bespoke travel experiences curated by experts to ensure every moment becomes an unforgettable memory.
                </p>
            </div>
            <div class="flex pt-2 md:pt-0">
                <a href="tour.php" class="bg-[#EFD64D]/20 hover:bg-[#EFD64D] text-[#1F0730] text-sm sm:text-base font-semibold px-5 py-3 rounded-full inline-flex items-center gap-2 transition duration-300 ease-out shadow-sm whitespace-nowrap">
                    <span>View All Tours</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="group bg-white hover:shadow-xl rounded-2xl overflow-hidden border border-gray-100 transition-all duration-300 flex flex-col h-full">

                    <div class="overflow-hidden aspect-video sm:aspect-square md:aspect-video relative">
                        <img src="assets/img/tour1.jpg" alt="Tour Destination" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>

                    <div class="p-5 flex flex-col flex-grow justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex gap-2">
                                    <div class="w-9 h-9 rounded-full bg-[#EBEDA4] flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.6667 22.6667H24.3334V24H11.6667V22.6667ZM24.7134 16.4267C24.5734 15.8933 24.02 15.5733 23.4867 15.72L19.9467 16.6667L15.3467 12.38L14.06 12.72L16.82 17.5L13.5067 18.3867L12.1934 17.36L11.2267 17.62L12.9534 20.6133L24 17.66C24.54 17.5067 24.8534 16.96 24.7134 16.4267Z" fill="#2E3192" />
                                        </svg>
                                    </div>
                                    <div class="w-9 h-9 rounded-full bg-[#EBEDA4] flex items-center justify-center">
                                        <svg width="20" height="20" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26 17C26 17.5523 25.5523 18 25 18V21.5C25 22.3179 24.6072 23.0441 24 23.5002V25.5C24 25.7761 23.7761 26 23.5 26H21.5C21.2239 26 21 25.7761 21 25.5V24H15V25.5C15 25.7761 14.7761 26 14.5 26H12.5C12.2239 26 12 25.7761 12 25.5V23.5002C11.3928 23.0441 11 22.3179 11 21.5V18C10.4477 18 10 17.5523 10 17V15C10 14.4477 10.4477 14 11 14V12.6396C11 11.4516 11.8454 10.4079 13.0638 10.2679C14.2084 10.1363 15.9007 10 18 10C20.0993 10 21.7916 10.1363 22.9362 10.2679C24.1546 10.4079 25 11.4516 25 12.6396V14C25.5523 14 26 14.4477 26 15V17ZM13.5517 13.2204C14.6468 13.1066 16.1628 13 18 13C19.8372 13 21.3531 13.1066 22.4483 13.2204C22.7229 13.249 22.9687 13.0495 22.9973 12.7748C23.0259 12.5002 22.8263 12.2544 22.5517 12.2258C21.4263 12.1088 19.8756 12 18 12C16.1244 12 14.5737 12.1088 13.4483 12.2258C13.1736 12.2544 12.9741 12.5002 13.0027 12.7748C13.0312 13.0495 13.277 13.249 13.5517 13.2204ZM18 14C16.1244 14 14.5737 14.1088 13.4483 14.2258C13.1935 14.2523 13 14.467 13 14.7231V18.2768C13 18.533 13.1935 18.7477 13.4483 18.7741C14.5737 18.8911 16.1244 18.9999 18 18.9999C19.8756 18.9999 21.4263 18.8911 22.5517 18.7741C22.8064 18.7477 23 18.533 23 18.2768V14.7231C23 14.467 22.8064 14.2523 22.5517 14.2258C21.4263 14.1088 19.8756 14 18 14ZM15 21C15 20.4477 14.5523 20 14 20C13.4477 20 13 20.4477 13 21C13 21.5523 13.4477 22 14 22C14.5523 22 15 21.5523 15 21ZM23 21C23 20.4477 22.5523 20 22 20C21.4477 20 21 20.4477 21 21C21 21.5523 21.4477 22 22 22C22.5523 22 23 21.5523 23 21ZM16 21C16 21.5523 16.4477 22 17 22H19C19.5523 22 20 21.5523 20 21C20 20.4477 19.5523 20 19 20H17C16.4477 20 16 20.4477 16 21Z" fill="#2E3192" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-[10px] uppercase tracking-wider text-gray-400 font-bold">Duration</p>
                                    <p class="text-xs font-bold text-[#1F0730]">4 Days / 3 Nights</p>
                                </div>
                            </div>

                            <hr class="my-3.5 border-gray-100">

                            <h5 class="text-lg md:text-xl font-bold text-[#1F0730] line-clamp-2 mb-2 group-hover:text-[#2E3192] transition-colors duration-200">
                                4 Days in Paradise: Exclusive Thailand Deals
                            </h5>
                            <p class="text-sm md:text-base font-normal text-[#3E465F] line-clamp-3">
                                Our exclusive all-inclusive package includes luxury stays, private transfers, and tours. Book your dream trip now!
                            </p>
                        </div>

                        <div>
                            <hr class="my-4 border-gray-100">
                            <div class="flex items-center gap-3 text-sm md:text-base font-semibold">
                                <a href="tour-inquiry.php" class="w-1/2 text-center border-2 border-[#EFD64D] text-[#1F0730] hover:bg-[#EFD64D] py-2.5 rounded-full transition duration-300">
                                    Inquiry
                                </a>
                                <a href="tour-detail.php" class="w-1/2 text-center bg-[#EFD64D] hover:bg-[#EBE359] text-[#1F0730] py-2.5 rounded-full transition duration-300 shadow-sm">
                                    Details
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>