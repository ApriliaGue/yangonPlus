<?php include 'header.php'; ?>
<!-- Hero -->
<section class="relative h-64 md:h-80 bg-[#EFD64D] flex flex-col items-center justify-center text-center overflow-hidden">
    <img src="assets/img/bg2.png" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="relative container-default space-y-1 md:space-y-4">
        <h1 class="text-2xl md:text-4xl text-[#1F0730] font-semibold">Flight Booking</h1>
        <p class="md:max-w-3xl md:mx-auto text-base md:text-lg text-[#3E465F] font-medium text-pretty">
            We provide domestic and international flight ticketing services at competitive prices. Our experienced staff helps you find the best routes, schedules, and airlines according to your budget and preferences.
        </p>
    </div>
    <div class="flex bg-white rounded-xl px-3 py-2 space-x-4 mt-2 md:mt-4">
        <span class="text-xs font-normal my-auto">Partnership airlines:</span>
        <img src="assets/img/logo1.png" alt="" class="w-8 h-8 rounded-full">
        <img src="assets/img/logo2.png" alt="" class="w-8 h-8 rounded-full">
        <img src="assets/img/logo3.png" alt="" class="w-8 h-8 rounded-full">
        <img src="assets/img/logo4.png" alt="" class="w-8 h-8 rounded-full">
    </div>
</section>
<div class="bg-[#F8F8F5]">
    <div class="container-default py-10 md:py-18 text-black">
        <div class="space-y-10 sm:space-y-16 lg:space-y-20">
            <div class="space-y-6">
                <h5 class="text-xl font-semibold">Your Next Trip Information</h5>
                <?php include 'flight.php' ?>
                <div class="flex justify-end">
                    <a href="flightbooking-detail.php" class="bg-[#EFD64D] hover:bg-[#EBE359] text-[#1F0730] text-base font-medium py-3 px-8 rounded-full flex items-center justify-center gap-2 transition">
                        <span>Search Flight</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
                <hr class="border border-[#2E3192]">
                <!-- Card -->
                <h4 class="text-2xl md:text-4xl font-semibold">Our available airlines routes</h4>
                <div class="space-y-4">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                        <div class="flex flex-col md:flex-row items-stretch justify-between bg-white border border-[#2E31924D] rounded-lg overflow-hidden">
                            <div class="w-full md:w-1/2 flex items-center gap-4 md:gap-6 p-4 md:p-0">
                                <img src="assets/img/air1.png" alt="Airline Logo" class="w-32 h-24 md:w-48 md:h-36 object-contain rounded-l-lg">
                                <div class="space-y-1">
                                    <h5 class="text-xl font-semibold">Myanmar National Airline</h5>
                                    <div class="flex flex-row items-center text-base font-normal gap-2">
                                        <span class="city-from">Yangon</span>
                                        <svg class="swap-city-btn w-9 h-9 my-auto cursor-pointer transform transition-transform duration-300 active:scale-95" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 21.5C11 21.7761 11.2239 22 11.5 22H23.2929L20.1464 25.1464C19.9512 25.3417 19.9512 25.6583 20.1464 25.8536C20.3417 26.0488 20.6583 26.0488 20.8536 25.8536L24.8536 21.8536C25.0488 21.6583 25.0488 21.3417 24.8536 21.1464L20.8536 17.1464C20.6583 16.9512 20.3417 16.9512 20.1464 17.1464C19.9512 17.3417 19.9512 17.6583 20.1464 17.8536L23.2929 21H11.5C11.2239 21 11 21.2239 11 21.5Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25 14.5C25 14.7761 24.7761 15 24.5 15H12.7071L15.8536 18.1464C16.0488 18.3417 16.0488 18.6583 15.8536 18.8536C15.6583 19.0488 15.3417 19.0488 15.1464 18.8536L11.1464 14.8536C10.9512 14.6583 10.9512 14.3417 11.1464 14.1464L15.1464 10.1464C15.3417 9.95118 15.6583 9.95118 15.8536 10.1464C16.0488 10.3417 16.0488 10.6583 15.8536 10.8536L12.7071 14H24.5C24.7761 14 25 14.2239 25 14.5Z" fill="black" />
                                        </svg>
                                        <span class="city-to">Mandalay</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 flex flex-row items-center justify-between md:justify-end border-t md:border-t-0 border-[#2E31924D]">
                                <div class="flex flex-row items-center text-sm md:text-base font-normal gap-2 bg-[#EBEDA4] px-4 py-2 rounded-full my-auto mx-auto transition-all duration-300">
                                    <span class="date-from">20 Apr</span>
                                    <svg class="swap-date-btn w-9 h-9 my-auto cursor-pointer transform transition-transform duration-300 active:scale-95" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11 21.5C11 21.7761 11.2239 22 11.5 22H23.2929L20.1464 25.1464C19.9512 25.3417 19.9512 25.6583 20.1464 25.8536C20.3417 26.0488 20.6583 26.0488 20.8536 25.8536L24.8536 21.8536C25.0488 21.6583 25.0488 21.3417 24.8536 21.1464L20.8536 17.1464C20.6583 16.9512 20.3417 16.9512 20.1464 17.1464C19.9512 17.3417 19.9512 17.6583 20.1464 17.8536L23.2929 21H11.5C11.2239 21 11 21.2239 11 21.5Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25 14.5C25 14.7761 24.7761 15 24.5 15H12.7071L15.8536 18.1464C16.0488 18.3417 16.0488 18.6583 15.8536 18.8536C15.6583 19.0488 15.3417 19.0488 15.1464 18.8536L11.1464 14.8536C10.9512 14.6583 10.9512 14.3417 11.1464 14.1464L15.1464 10.1464C15.3417 9.95118 15.6583 9.95118 15.8536 10.1464C16.0488 10.3417 16.0488 10.6583 15.8536 10.8536L12.7071 14H24.5C24.7761 14 25 14.2239 25 14.5Z" fill="black" />
                                    </svg>
                                    <span class="date-to">30 May</span>
                                </div>
                                <a href="flightbooking-detail.php" class="flex items-center gap-1 border-l border-[#2E31924D] p-10 h-full">
                                    <span class="text-[#1F0730] text-base font-medium">Inquiry</span>
                                    <svg class="w-4 h-4 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <!-- Other Services -->
            <div class="space-y-6">
                <h4 class="text-black text-2xl sm:text-3xl lg:text-4xl font-semibold">Our Services</h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
                    <a href="visa.php">
                        <div class="text-[#1F0730] text-center p-5 sm:p-6 bg-white space-y-3 cursor-pointer rounded-2xl">
                            <svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                                <path d="M22 17.5C19.5147 17.5 17.5 19.5147 17.5 22C17.5 24.4853 19.5147 26.5 22 26.5C24.4853 26.5 26.5 24.4853 26.5 22C26.5 19.5147 24.4853 17.5 22 17.5ZM19 22C19 20.3431 20.3431 19 22 19C23.6569 19 25 20.3431 25 22C25 23.6569 23.6569 25 22 25C20.3431 25 19 23.6569 19 22Z" fill="#2E3192" />
                                <path d="M18.25 28C17.8358 28 17.5 28.3358 17.5 28.75C17.5 29.1642 17.8358 29.5 18.25 29.5H25.75C26.1642 29.5 26.5 29.1642 26.5 28.75C26.5 28.3358 26.1642 28 25.75 28H18.25Z" fill="#2E3192" />
                                <path d="M14.8475 12.6641C13.7777 12.8586 13 13.7904 13 14.8778V31.304C13 31.9709 13.2869 32.5604 13.7362 32.9687C14.2862 33.6006 15.0965 34 16 34H28C29.6569 34 31 32.6569 31 31V16C31 14.8896 30.3967 13.92 29.5 13.4013V12.696C29.5 11.2922 28.2286 10.2311 26.8475 10.4823L14.8475 12.6641ZM16 14.5H28C28.8284 14.5 29.5 15.1716 29.5 16V31C29.5 31.8284 28.8284 32.5 28 32.5H16C15.1716 32.5 14.5 31.8284 14.5 31V16C14.5 15.1716 15.1716 14.5 16 14.5Z" fill="#2E3192" />
                            </svg>
                            <h5 class="text-lg sm:text-xl font-semibold leading-relaxed">Visa Assistance</h5>
                        </div>
                    </a>
                    <a href="golftour.php">
                        <div class="text-[#1F0730] text-center p-5 sm:p-6 bg-white space-y-3 cursor-pointer rounded-2xl">
                            <svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                                <path d="M32.1677 10.1271C32.3754 10.2664 32.5 10.5 32.5 10.75V22C32.5 22.3067 32.3133 22.5825 32.0285 22.6964L31.75 22C32.0285 22.6964 32.0286 22.6963 32.0285 22.6964L32.0247 22.6979L32.0154 22.7016L31.9812 22.7151C31.9515 22.7267 31.9084 22.7435 31.8531 22.7647C31.7425 22.8071 31.5831 22.8673 31.3852 22.9392C30.9899 23.083 30.4386 23.2748 29.8143 23.4668C28.5913 23.8432 26.9972 24.25 25.75 24.25C24.4799 24.25 23.4275 23.8289 22.5132 23.4631L22.4715 23.4464C21.5204 23.0659 20.7105 22.75 19.75 22.75C18.6998 22.75 17.2924 23.0939 16.0938 23.4662C15.5061 23.6488 14.9888 23.8317 14.6186 23.9689C14.5772 23.9842 14.5376 23.999 14.5 24.0132V33.25C14.5 33.6642 14.1642 34 13.75 34C13.3358 34 13 33.6642 13 33.25V10.75C13 10.3358 13.3358 10 13.75 10C14.1642 10 14.5 10.3358 14.5 10.75V11.1734C14.8392 11.0547 15.2442 10.919 15.6857 10.7832C16.9087 10.4068 18.5028 10 19.75 10C21.0111 10 22.0358 10.4154 22.9315 10.7784C22.9533 10.7873 22.975 10.7961 22.9966 10.8049C23.9288 11.1824 24.7417 11.5 25.75 11.5C26.8002 11.5 28.2076 11.1561 29.4062 10.7838C29.9939 10.6012 30.5112 10.4183 30.8814 10.2811C31.0662 10.2126 31.2138 10.1557 31.3144 10.1162C31.3647 10.0965 31.4033 10.0811 31.4289 10.0709L31.4573 10.0594L31.4639 10.0567L31.4654 10.0561M31 11.8336C30.6706 11.9505 30.279 12.0833 29.8512 12.2162C28.6355 12.5939 27.0429 13 25.75 13C24.4206 13 23.3618 12.5711 22.4448 12.1997L22.4335 12.1951C21.4928 11.8141 20.7082 11.5 19.75 11.5C18.7472 11.5 17.3413 11.8432 16.1268 12.2168C15.5323 12.3998 15.0055 12.583 14.6274 12.7205C14.5828 12.7367 14.5403 12.7523 14.5 12.7671V22.4164C14.8294 22.2995 15.221 22.1667 15.6488 22.0338C16.8645 21.6561 18.4571 21.25 19.75 21.25C21.0201 21.25 22.0725 21.6711 22.9868 22.0369L23.0285 22.0536C23.9796 22.4341 24.7895 22.75 25.75 22.75C26.7528 22.75 28.1587 22.4068 29.3732 22.0332C29.9677 21.8502 30.4945 21.667 30.8726 21.5295C30.9172 21.5133 30.9597 21.4977 31 21.4829V11.8336Z" fill="#2E3192" />
                            </svg>
                            <h5 class="text-lg sm:text-xl font-semibold leading-relaxed">Golf Tour</h5>
                        </div>
                    </a>
                    <a href="tour.php">
                        <div class="text-[#1F0730] text-center p-5 sm:p-6 bg-white space-y-3 cursor-pointer rounded-2xl">
                            <svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                                <path d="M19 17.5C19.4142 17.5 19.75 17.8358 19.75 18.25V28.75C19.75 29.1642 19.4142 29.5 19 29.5C18.5858 29.5 18.25 29.1642 18.25 28.75V18.25C18.25 17.8358 18.5858 17.5 19 17.5Z" fill="#2E3192" />
                                <path d="M22 17.5C22.4142 17.5 22.75 17.8358 22.75 18.25V28.75C22.75 29.1642 22.4142 29.5 22 29.5C21.5858 29.5 21.25 29.1642 21.25 28.75V18.25C21.25 17.8358 21.5858 17.5 22 17.5Z" fill="#2E3192" />
                                <path d="M25 17.5C25.4142 17.5 25.75 17.8358 25.75 18.25V28.75C25.75 29.1642 25.4142 29.5 25 29.5C24.5858 29.5 24.25 29.1642 24.25 28.75V18.25C24.25 17.8358 24.5858 17.5 25 17.5Z" fill="#2E3192" />
                                <path d="M19.75 10C19.3358 10 19 10.3358 19 10.75V14.5H17.5C15.8431 14.5 14.5 15.8431 14.5 17.5V29.5C14.5 30.6298 15.1245 31.6137 16.0472 32.1254C16.0164 32.2451 16 32.3706 16 32.5C16 33.3284 16.6716 34 17.5 34C18.3284 34 19 33.3284 19 32.5H25C25 33.3284 25.6716 34 26.5 34C27.3284 34 28 33.3284 28 32.5C28 32.3706 27.9836 32.2451 27.9528 32.1254C28.8755 31.6137 29.5 30.6298 29.5 29.5V17.5C29.5 15.8431 28.1569 14.5 26.5 14.5H25V10.75C25 10.3358 24.6642 10 24.25 10H19.75ZM23.5 14.5H20.5V11.5H23.5V14.5ZM28 29.5C28 30.3284 27.3284 31 26.5 31H17.5C16.6716 31 16 30.3284 16 29.5V17.5C16 16.6716 16.6716 16 17.5 16H26.5C27.3284 16 28 16.6716 28 17.5V29.5Z" fill="#2E3192" />
                            </svg>
                            <h5 class="text-lg sm:text-xl font-semibold leading-relaxed">Tour Packages</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Contact -->
        <?php include 'contact-card.php' ?>
    </div>
</div>
<?php include 'footer.php'; ?>

<script>
    document.querySelectorAll('.swap-city-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const parent = this.parentElement;
            const fromEl = parent.querySelector('.city-from');
            const toEl = parent.querySelector('.city-to');
            const tempText = fromEl.textContent;
            fromEl.textContent = toEl.textContent;
            toEl.textContent = tempText;
        });
    });
    document.querySelectorAll('.swap-date-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const parent = this.parentElement;
            const fromEl = parent.querySelector('.date-from');
            const toEl = parent.querySelector('.date-to');
            const tempText = fromEl.textContent;
            fromEl.textContent = toEl.textContent;
            toEl.textContent = tempText;
        });
    });
</script>