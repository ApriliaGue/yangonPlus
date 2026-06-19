<?php include 'header.php'; ?>
<img src="assets/img/flight.jpg" alt="" class="w-full h-48 md:h-80 object-cover">
<div class="bg-[#F8F8F5]">
    <div class="container-default py-10 md:py-18 text-black">
        <div class="space-y-10 sm:space-y-16 lg:space-y-20">
            <div class=space-y-6>
                <!-- Breadcrumb -->
                <div class=space-y-4>
                    <div class="flex flex-wrap w-fit text-base font-normal gap-2 border border-[#2E31921A] p-3 rounded-full">
                        <a href="index.php" class="text-[#2E3192]">Home</a>
                        <svg class="w-4 h-4 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <a href="flightbooking.php" class="text-[#151567]">Flight booking</a>
                    </div>
                    <h4 class="text-2xl md:text-4xl font-semibold text-black">Send your flight booking inquiry</h4>
                </div>
                <?php include 'flight.php' ?>
                <hr class="border border-[#2E3192]">
                <div class="space-y-6">
                    <h5 class="text-xl font-semibold">Your Information</h5>
                    <form action="" method="$_POST" class="w-full space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 font-normal text-[#1F0730] sm:px-6">
                            <div>
                                <label for="name" class="text-xs text-[#3E465F]">My name is <span class="text-[#D23118]">*</span></label>
                                <input type="text" id="name" name="name" placeholder="Hla Hla" required class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                            </div>
                            <div class="relative">
                                <label for="gender" class="text-xs text-[#3E465F]">My gender is <span class="text-[#D23118]">*</span></label>
                                <select id="gender" name="gender" required class="w-full bg-white invalid:text-gray-400 rounded-lg p-3 mt-1 text-base shadow-sm appearance-none">
                                    <option value="" disabled selected hidden>Select your gender</option>
                                    <option value="female" class="text-[#1F0730] text-xs xl:text-base">Male</option>
                                    <option value="male" class="text-[#1F0730] text-xs xl:text-base">Female</option>
                                    <option value="other" class="text-[#1F0730] text-xs xl:text-base">Other</option>
                                </select>
                                <svg class="w-4 h-4 absolute right-3 bottom-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                            <div class="relative">
                                <label for="nationality" class="text-xs text-[#3E465F]">Nationality <span class="text-[#D23118]">*</span></label>
                                <select id="nationality" name="nationality" required class="w-full bg-white invalid:text-gray-400 rounded-lg p-3 mt-1 text-base shadow-sm appearance-none">
                                    <option value="" disabled selected hidden>Select Nationality</option>
                                    <option value="Myanmar" class="text-[#1F0730] text-xs xl:text-base">Myanmar</option>
                                </select>
                                <svg class="w-4 h-4 absolute right-3 bottom-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                            <div class="relative">
                                <label for="country" class="text-xs text-[#3E465F]">Country <span class="text-[#D23118]">*</span></label>
                                <select id="country" name="country" required class="w-full bg-white invalid:text-gray-400 rounded-lg p-3 mt-1 text-base shadow-sm appearance-none">
                                    <option value="" disabled selected hidden>Select Country</option>
                                    <option value="Myanmar" class="text-[#1F0730] text-xs xl:text-base">Myanmar</option>
                                </select>
                                <svg class="w-4 h-4 absolute right-3 bottom-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                            <div class="relative">
                                <label for="city" class="text-xs text-[#3E465F]">Current city <span class="text-[#D23118]">*</span></label>
                                <select id="city" name="city" required class="w-full bg-white invalid:text-gray-400 rounded-lg p-3 mt-1 text-base shadow-sm appearance-none">
                                    <option value="" disabled selected hidden>Select City</option>
                                    <option value="Yangon" class="text-[#1F0730] text-xs xl:text-base">Yangon</option>
                                    <option value="Mandalay" class="text-[#1F0730] text-xs xl:text-base">Mandalay</option>
                                </select>
                                <svg class="w-4 h-4 absolute right-3 bottom-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                            <div class="relative">
                                <label for="township" class="text-xs text-[#3E465F]">Township <span class="text-[#D23118]">*</span></label>
                                <select id="township" name="township" required class="w-full bg-white invalid:text-gray-400 rounded-lg p-3 mt-1 text-base shadow-sm appearance-none">
                                    <option value="" disabled selected hidden>Select Township</option>
                                    <option value="Mayangone" class="text-[#1F0730] text-xs xl:text-base">Mayangone</option>
                                </select>
                                <svg class="w-4 h-4 absolute right-3 bottom-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                            <div>
                                <label for="phone" class="text-xs text-[#3E465F]">You can call me via <span class="text-[#D23118]">*</span></label>
                                <input type="tel" id="phone" name="phone" placeholder="09 XXX XXX XXX" required class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                            </div>
                            <div>
                                <label for="mail" class="text-xs text-[#3E465F]">Mail to <span class="text-[#D23118]">*</span></label>
                                <input type="email" id="mail" name="mail" placeholder="mymail@gmail.com" required class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="address" class="text-xs text-[#3E465F]">My address is <span class="text-[#D23118]">*</span></label>
                                <textarea id="address" name="address" placeholder="Tell us where you live" required class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm"></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="text-xs text-[#3E465F]">My message is <span class="text-[#D23118]">*</span></label>
                                <textarea id="message" name="message" rows="4" placeholder="We love to hear your story..." required class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm"></textarea>
                            </div>
                        </div>
                        <div class="flex justify-center text-[#1F0730] text-base font-medium transition">
                            <button type="submit" class="bg-[#EFD64D] hover:bg-[#EBE359] px-4 py-3 rounded-full">Send Message</button>
                        </div>
                    </form>
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