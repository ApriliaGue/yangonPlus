<?php include 'header.php'; ?>
<!-- Hero -->
<section class="relative min-h-80 bg-[#EFD64D] flex flex-col items-center justify-center text-center overflow-hidden">
    <img src="assets/img/bg2.png" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="relative max-w-4xl space-y-4">
        <h1 class="text-4xl text-[#1F0730] font-semibold">Tour Packages</h1>
        <p class="text-lg text-[#3E465F] font-medium">
            We offer customized local and international tour packages to suit your travel preferences and budget. Whether you’re planning a romantic getaway, a family vacation, or a group adventure, we provide full arrangements including accommodation, sightseeing, and guided tours.
        </p>
    </div>
</section>
<div id="tour" class="layout1 space-y-20 scroll-mt-12">
    <div class=space-y-6>
        <!-- Cards -->
        <?php $active_tour = isset($_GET['tour']) ? $_GET['tour'] : 'mm'; ?>
        <div class="flex space-x-2 text-base font-medium">
            <a href="?tour=mm#tour" class="px-4 py-3 rounded-full cursor-pointer transition-colors duration-200 select-none <?php echo ($active_tour === 'mm') ? 'bg-[#EFD64D] text-[#1F0730]' : 'bg-[#EFD64D1A] text-[#3E465F] hover:bg-[#EBE359]'; ?>">Myanmar Tours</a>
            <a href="?tour=inter#tour" class="px-4 py-3 rounded-full cursor-pointer transition-colors duration-200 select-none <?php echo ($active_tour === 'inter') ? 'bg-[#EFD64D] text-[#1F0730]' : 'bg-[#EFD64D1A] text-[#3E465F] hover:bg-[#EBE359]'; ?>">International Tours</a>
        </div>
        <?php if ($active_tour === 'mm'): ?>
            <div class="grid grid-cols-3 gap-8">
                <?php for ($i = 0; $i < 8; $i++): ?>
                    <div class="card bg-white hover:shadow-lg rounded-2xl overflow-hidden transition-shadow duration-300">
                        <img src="assets/img/tour5.jpg" alt="" class="w-full h-80 object-cover rounded-t-2xl">
                        <div class="p-4">
                            <div class="flex justify-between gap-3">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="36" height="36" rx="18" fill="#EBEDA4" />
                                    <path d="M11.6667 22.6667H24.3334V24H11.6667V22.6667ZM24.7134 16.4267C24.5734 15.8933 24.02 15.5733 23.4867 15.72L19.9467 16.6667L15.3467 12.38L14.06 12.72L16.82 17.5L13.5067 18.3867L12.1934 17.36L11.2267 17.62L12.9534 20.6133L24 17.66C24.54 17.5067 24.8534 16.96 24.7134 16.4267Z" fill="#2E3192" />
                                </svg>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="36" height="36" rx="18" fill="#EBEDA4" />
                                    <path d="M26 17C26 17.5523 25.5523 18 25 18V21.5C25 22.3179 24.6072 23.0441 24 23.5002V25.5C24 25.7761 23.7761 26 23.5 26H21.5C21.2239 26 21 25.7761 21 25.5V24H15V25.5C15 25.7761 14.7761 26 14.5 26H12.5C12.2239 26 12 25.7761 12 25.5V23.5002C11.3928 23.0441 11 22.3179 11 21.5V18C10.4477 18 10 17.5523 10 17V15C10 14.4477 10.4477 14 11 14V12.6396C11 11.4516 11.8454 10.4079 13.0638 10.2679C14.2084 10.1363 15.9007 10 18 10C20.0993 10 21.7916 10.1363 22.9362 10.2679C24.1546 10.4079 25 11.4516 25 12.6396V14C25.5523 14 26 14.4477 26 15V17ZM13.5517 13.2204C14.6468 13.1066 16.1628 13 18 13C19.8372 13 21.3531 13.1066 22.4483 13.2204C22.7229 13.249 22.9687 13.0495 22.9973 12.7748C23.0259 12.5002 22.8263 12.2544 22.5517 12.2258C21.4263 12.1088 19.8756 12 18 12C16.1244 12 14.5737 12.1088 13.4483 12.2258C13.1736 12.2544 12.9741 12.5002 13.0027 12.7748C13.0312 13.0495 13.277 13.249 13.5517 13.2204ZM18 14C16.1244 14 14.5737 14.1088 13.4483 14.2258C13.1935 14.2523 13 14.467 13 14.7231V18.2768C13 18.533 13.1935 18.7477 13.4483 18.7741C14.5737 18.8911 16.1244 18.9999 18 18.9999C19.8756 18.9999 21.4263 18.8911 22.5517 18.7741C22.8064 18.7477 23 18.533 23 18.2768V14.7231C23 14.467 22.8064 14.2523 22.5517 14.2258C21.4263 14.1088 19.8756 14 18 14ZM15 21C15 20.4477 14.5523 20 14 20C13.4477 20 13 20.4477 13 21C13 21.5523 13.4477 22 14 22C14.5523 22 15 21.5523 15 21ZM23 21C23 20.4477 22.5523 20 22 20C21.4477 20 21 20.4477 21 21C21 21.5523 21.4477 22 22 22C22.5523 22 23 21.5523 23 21ZM16 21C16 21.5523 16.4477 22 17 22H19C19.5523 22 20 21.5523 20 21C20 20.4477 19.5523 20 19 20H17C16.4477 20 16 20.4477 16 21Z" fill="#2E3192" />
                                </svg>
                                <div class="ml-auto text-right">
                                    <p class="font-normal text-xs text-[#3E465F]">Duration:</p>
                                    <p class="font-bold text-xs leading-relaxed">4 Days/ 3 Nights</p>
                                </div>
                            </div>
                            <hr class="my-4 border-[#2E319280] opacity-50">
                            <h5 class="text-xl font-semibold pb-2 text-[#1F0730]">Yangon City Highlights Adventure</h5>
                            <p class="min-h-18 text-base font-normal text-[#3E465F]">Dive into the bustling life of Yangon with our curated city tour featuring iconic landmarks and local delicacies. Discover the heart of Myanmar!</p>
                            <hr class="my-4 border-[#2E319280] opacity-50">
                            <div class="flex justify-between text-[#1F0730] text-base text-center font-medium gap-3 transition mx-auto">
                                <a href="tour-inquiry.php" class="w-1/2 bg-[#EFD64D] hover:bg-[#EBE359] py-3 rounded-full">Inquiry</a>
                                <a href="tour-detail.php" class="w-1/2 bg-[#EFD64D] hover:bg-[#EBE359] py-3 rounded-full">Details</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- Pagination -->
            <div class="mx-auto flex items-center justify-center text-xl font-normal font-roboto">
                <button type="button" class="flex h-14 w-14 items-center justify-center rounded-sm bg-[#EEEEEE] text-[#151567]">«</button>
                <button type="button" class="flex h-14 w-14 items-center justify-center rounded-sm text-[#4F4F4F]">1</button>
                <button type="button" class="flex h-14 w-14 items-center justify-center rounded-sm text-[#4F4F4F]">2</button>
                <button type="button" class="flex h-14 w-14 items-center justify-center rounded-sm text-[#4F4F4F]">3</button>
                <button type="button" class="flex h-14 w-14 items-center justify-center rounded-sm text-[#4F4F4F]">»</button>
            </div>
        <?php endif; ?>
        <?php if ($active_tour === 'inter'): ?>
        <?php endif; ?>
    </div>
    <!-- Other Services -->
    <div class=space-y-6>
        <?php $services = [
            [
                "title" => "Flight Booking",
                "icon"  => '<svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                        <path d="M19.6417 11.7271C20.0613 10.8879 20.8194 10 22 10C23.1806 10 23.9387 10.8879 24.3583 11.7271C24.7913 12.593 25 13.6475 25 14.5V20.0365L32.7562 23.9146C33.5185 24.2957 34 25.0748 34 25.9271V28C34 28.2205 33.903 28.4298 33.7348 28.5723C33.5666 28.7148 33.3442 28.776 33.1267 28.7398L24.8665 27.3631L24.3032 30.7426L26.2803 32.7197C26.4948 32.9342 26.559 33.2568 26.4429 33.537C26.3268 33.8173 26.0533 34 25.75 34H18.25C17.9467 34 17.6732 33.8173 17.5571 33.537C17.441 33.2568 17.5052 32.9342 17.7197 32.7197L19.6968 30.7426L19.1335 27.3631L10.8733 28.7398C10.6558 28.776 10.4334 28.7148 10.2652 28.5723C10.097 28.4298 10 28.2205 10 28L10 25.9271C10 25.0748 10.4815 24.2957 11.2438 23.9146L19 20.0365V14.5C19 13.6475 19.2087 12.593 19.6417 11.7271ZM20.9833 12.3979C20.6663 13.032 20.5 13.8525 20.5 14.5V20.5C20.5 20.7841 20.3395 21.0438 20.0854 21.1708L11.9146 25.2562C11.6605 25.3833 11.5 25.643 11.5 25.9271V27.1147L19.6267 25.7602C20.0353 25.6921 20.4217 25.9681 20.4898 26.3767L21.2398 30.8767C21.2796 31.1156 21.2016 31.3591 21.0303 31.5303L20.0607 32.5H23.9393L22.9697 31.5303C22.7984 31.3591 22.7204 31.1156 22.7602 30.8767L23.5102 26.3767C23.5783 25.9681 23.9647 25.6921 24.3733 25.7602L32.5 27.1147V25.9271C32.5 25.643 32.3395 25.3833 32.0854 25.2562L23.9146 21.1708C23.6605 21.0438 23.5 20.7841 23.5 20.5V14.5C23.5 13.8525 23.3337 13.032 23.0167 12.3979C22.6863 11.7371 22.3194 11.5 22 11.5C21.6806 11.5 21.3137 11.7371 20.9833 12.3979Z" fill="#2E3192" />
                        </svg>'
            ],
            [
                "title" => "Visa Assistance",
                "icon"  => '<svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                        <path d="M22 17.5C19.5147 17.5 17.5 19.5147 17.5 22C17.5 24.4853 19.5147 26.5 22 26.5C24.4853 26.5 26.5 24.4853 26.5 22C26.5 19.5147 24.4853 17.5 22 17.5ZM19 22C19 20.3431 20.3431 19 22 19C23.6569 19 25 20.3431 25 22C25 23.6569 23.6569 25 22 25C20.3431 25 19 23.6569 19 22Z" fill="#2E3192" />
                        <path d="M18.25 28C17.8358 28 17.5 28.3358 17.5 28.75C17.5 29.1642 17.8358 29.5 18.25 29.5H25.75C26.1642 29.5 26.5 29.1642 26.5 28.75C26.5 28.3358 26.1642 28 25.75 28H18.25Z" fill="#2E3192" />
                        <path d="M14.8475 12.6641C13.7777 12.8586 13 13.7904 13 14.8778V31.304C13 31.9709 13.2869 32.5604 13.7362 32.9687C14.2862 33.6006 15.0965 34 16 34H28C29.6569 34 31 32.6569 31 31V16C31 14.8896 30.3967 13.92 29.5 13.4013V12.696C29.5 11.2922 28.2286 10.2311 26.8475 10.4823L14.8475 12.6641ZM16 14.5H28C28.8284 14.5 29.5 15.1716 29.5 16V31C29.5 31.8284 28.8284 32.5 28 32.5H16C15.1716 32.5 14.5 31.8284 14.5 31V16C14.5 15.1716 15.1716 14.5 16 14.5Z" fill="#2E3192" />
                        </svg>'
            ],
            [
                "title" => "Golf Tour",
                "icon"  => '<svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                        <path d="M32.1677 10.1271C32.3754 10.2664 32.5 10.5 32.5 10.75V22C32.5 22.3067 32.3133 22.5825 32.0285 22.6964L31.75 22C32.0285 22.6964 32.0286 22.6963 32.0285 22.6964L32.0247 22.6979L32.0154 22.7016L31.9812 22.7151C31.9515 22.7267 31.9084 22.7435 31.8531 22.7647C31.7425 22.8071 31.5831 22.8673 31.3852 22.9392C30.9899 23.083 30.4386 23.2748 29.8143 23.4668C28.5913 23.8432 26.9972 24.25 25.75 24.25C24.4799 24.25 23.4275 23.8289 22.5132 23.4631L22.4715 23.4464C21.5204 23.0659 20.7105 22.75 19.75 22.75C18.6998 22.75 17.2924 23.0939 16.0938 23.4662C15.5061 23.6488 14.9888 23.8317 14.6186 23.9689C14.5772 23.9842 14.5376 23.999 14.5 24.0132V33.25C14.5 33.6642 14.1642 34 13.75 34C13.3358 34 13 33.6642 13 33.25V10.75C13 10.3358 13.3358 10 13.75 10C14.1642 10 14.5 10.3358 14.5 10.75V11.1734C14.8392 11.0547 15.2442 10.919 15.6857 10.7832C16.9087 10.4068 18.5028 10 19.75 10C21.0111 10 22.0358 10.4154 22.9315 10.7784C22.9533 10.7873 22.975 10.7961 22.9966 10.8049C23.9288 11.1824 24.7417 11.5 25.75 11.5C26.8002 11.5 28.2076 11.1561 29.4062 10.7838C29.9939 10.6012 30.5112 10.4183 30.8814 10.2811C31.0662 10.2126 31.2138 10.1557 31.3144 10.1162C31.3647 10.0965 31.4033 10.0811 31.4289 10.0709L31.4573 10.0594L31.4639 10.0567L31.4654 10.0561M31 11.8336C30.6706 11.9505 30.279 12.0833 29.8512 12.2162C28.6355 12.5939 27.0429 13 25.75 13C24.4206 13 23.3618 12.5711 22.4448 12.1997L22.4335 12.1951C21.4928 11.8141 20.7082 11.5 19.75 11.5C18.7472 11.5 17.3413 11.8432 16.1268 12.2168C15.5323 12.3998 15.0055 12.583 14.6274 12.7205C14.5828 12.7367 14.5403 12.7523 14.5 12.7671V22.4164C14.8294 22.2995 15.221 22.1667 15.6488 22.0338C16.8645 21.6561 18.4571 21.25 19.75 21.25C21.0201 21.25 22.0725 21.6711 22.9868 22.0369L23.0285 22.0536C23.9796 22.4341 24.7895 22.75 25.75 22.75C26.7528 22.75 28.1587 22.4068 29.3732 22.0332C29.9677 21.8502 30.4945 21.667 30.8726 21.5295C30.9172 21.5133 30.9597 21.4977 31 21.4829V11.8336Z" fill="#2E3192" />
                        </svg>'
            ]
        ]; ?>
        <h4 class="text-black text-4xl font-semibold">Our Services</h4>
        <div class="grid grid-cols-3 gap-8">
            <?php foreach ($services as $service): ?>
                <div class="text-[#1F0730] text-center p-6 bg-white space-y-3 cursor-pointer rounded-2xl">
                    <?php echo $service['icon']; ?>
                    <h5 class="text-xl font-semibold leading-relaxed"><?php echo htmlspecialchars($service['title']); ?></h5>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Contact -->
    <?php include 'contact-card.php' ?>
</div>
<?php include 'footer.php'; ?>