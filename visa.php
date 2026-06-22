<?php include 'header.php'; ?>
<!-- Hero -->
<section class="relative h-64 md:h-80 bg-[#EFD64D] flex flex-col items-center justify-center text-center overflow-hidden">
    <img src="assets/img/bg2.png" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="relative container-default space-y-1 md:space-y-4">
        <h1 class="text-2xl md:text-4xl text-[#1F0730] font-semibold">Visa Assistance</h1>
        <p class="md:max-w-3xl md:mx-auto text-base md:text-lg text-[#3E465F] font-medium text-pretty">
            We assist in preparing and submitting visa applications for various countries, providing guidance on required documents and procedures.
        </p>
    </div>
</section>
<div class="bg-[#F8F8F5]">
    <div class="container-default py-10 md:py-18 text-black">
        <div class="space-y-10 sm:space-y-16 lg:space-y-20">
            <div class="space-y-6">
                <h5 class="text-xl font-semibold">Visa Information</h5>
                <form action="" method="$_POST" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 font-normal text-[#1F0730]">
                        <div>
                            <label for="country" class="text-xs text-[#3E465F]">Country <span class="text-[#D23118]">*</span></label>
                            <input type="text" id="country" name="country" placeholder="Country you are applying for" required class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                        </div>
                        <div class="relative">
                            <label for="visatype" class="text-xs text-[#3E465F]">Visa Type <span class="text-[#D23118]">*</span></label>
                            <select id="visatype" name="visatype" required class="w-full bg-white invalid:text-gray-400 rounded-lg p-3 mt-1 text-base shadow-sm appearance-none">
                                <option value="" disabled selected hidden>Select visa type</option>
                                <option value="tourist" class="text-[#1F0730] text-xs xl:text-base">Tourist Visa</option>
                                <option value="business" class="text-[#1F0730] text-xs xl:text-base">Business Visa</option>
                                <option value="student" class="text-[#1F0730] text-xs xl:text-base">Student / Education Visa</option>
                                <option value="employment" class="text-[#1F0730] text-xs xl:text-base">Work / Employment Visa</option>
                                <option value="transit" class="text-[#1F0730] text-xs xl:text-base">Transit Visa</option>
                                <option value="medical" class="text-[#1F0730] text-xs xl:text-base">Medical Visa</option>
                            </select>
                            <svg class="w-4 h-4 absolute right-3 bottom-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </div>
                    </div>
                </form>
                <hr class="border border-[#2E3192]">
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
            <!-- Do & Don't -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 font-normal text-base text-black leading-relaxed">
                <div class="bg-white rounded-lg">
                    <div class="bg-[#2E9800] flex items-center px-3 py-1 space-x-2 text-white rounded-t-lg">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3536 6.14645C10.5488 6.34171 10.5488 6.65829 10.3536 6.85355L7.35355 9.85355C7.25979 9.94732 7.13261 10 7 10C6.86739 10 6.74021 9.94732 6.64645 9.85355L5.14645 8.35355C4.95118 8.15829 4.95118 7.84171 5.14645 7.64645C5.34171 7.45118 5.65829 7.45118 5.85355 7.64645L7 8.79289L9.64645 6.14645C9.84171 5.95118 10.1583 5.95118 10.3536 6.14645Z" fill="white" />
                            <path d="M10.2729 2.51266L9.3519 1.56943L10.0674 0.870798L10.6892 1.50763L11.5792 1.49703C13.2019 1.47771 14.5223 2.79809 14.503 4.42075L14.4924 5.31077L15.1292 5.93262C16.2903 7.06635 16.2903 8.93365 15.1292 10.0674L14.4924 10.6892L14.503 11.5792C14.5223 13.2019 13.2019 14.5223 11.5792 14.503L10.6892 14.4924L10.0674 15.1292C8.93365 16.2903 7.06635 16.2903 5.93262 15.1292L5.31077 14.4924L4.42075 14.503C2.79809 14.5223 1.47771 13.2019 1.49703 11.5792L1.50763 10.6892L0.870798 10.0674C-0.290266 8.93365 -0.290266 7.06635 0.870798 5.93262L1.50763 5.31077L1.49703 4.42075C1.47771 2.79809 2.79809 1.47771 4.42075 1.49703L5.31077 1.50763L5.93262 0.870798C7.06635 -0.290266 8.93365 -0.290266 10.0674 0.870798L9.3519 1.56943C8.61053 0.810189 7.38947 0.810189 6.6481 1.56943L5.72707 2.51266L4.40884 2.49696C3.34775 2.48432 2.48432 3.34775 2.49696 4.40884L2.51266 5.72707L1.56943 6.6481C0.810189 7.38947 0.810189 8.61053 1.56943 9.3519L2.51266 10.2729L2.49696 11.5912C2.48432 12.6523 3.34775 13.5157 4.40884 13.503L5.72707 13.4873L6.6481 14.4306C7.38947 15.1898 8.61053 15.1898 9.3519 14.4306L10.2729 13.4873L11.5912 13.503C12.6523 13.5157 13.5157 12.6523 13.503 11.5912L13.4873 10.2729L14.4306 9.3519C15.1898 8.61053 15.1898 7.38947 14.4306 6.6481L13.4873 5.72707L13.503 4.40884C13.5157 3.34775 12.6523 2.48432 11.5912 2.49696L10.2729 2.51266Z" fill="white" />
                        </svg>
                        <span>Do</span>
                    </div>
                    <ol class="list-decimal list-outside pl-10 pr-4 py-4">
                        <li>Apply well in advance Give yourself at least 4-8 weeks before your travel date. Some embassies have long appointment queues or processing times.</li>
                        <li>Be honest and consistent All information on your application must match your supporting documents — dates, names, addresses, employment details. Inconsistencies are a red flag.</li>
                        <li>Provide clear proof of funds Show bank statements covering the last 3-6 months. Funds should look stable and sufficient to cover your entire trip, not suddenly deposited just before applying.</li>
                        <li>Book refundable/flexible travel Use flexible flight bookings or "dummy tickets" (where allowed) rather than fully paid-for tickets before your visa is approved.</li>
                        <li>Double-check requirements per country Each embassy has slightly different document checklists. Always check the official embassy website before submitting.</li>
                    </ol>
                </div>
                <div class="bg-white rounded-lg">
                    <div class="bg-[#EB3B3B] flex items-center px-3 py-1 space-x-2 text-white rounded-t-lg">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.53984 0.146447C4.63361 0.0526784 4.76079 0 4.8934 0H11.1066C11.2392 0 11.3664 0.0526784 11.4602 0.146447L15.8536 4.53984C15.9473 4.63361 16 4.76079 16 4.8934V11.1066C16 11.2392 15.9473 11.3664 15.8536 11.4602L11.4602 15.8536C11.3664 15.9473 11.2392 16 11.1066 16H4.8934C4.76079 16 4.63361 15.9473 4.53984 15.8536L0.146447 11.4602C0.0526784 11.3664 0 11.2392 0 11.1066V4.8934C0 4.76079 0.0526784 4.63361 0.146447 4.53984L4.53984 0.146447ZM5.1005 1L1 5.1005V10.8995L5.10051 15H10.8995L15 10.8995V5.10051L10.8995 1H5.1005Z" fill="white" />
                            <path d="M4.64645 4.64645C4.84171 4.45118 5.15829 4.45118 5.35355 4.64645L8 7.29289L10.6464 4.64645C10.8417 4.45118 11.1583 4.45118 11.3536 4.64645C11.5488 4.84171 11.5488 5.15829 11.3536 5.35355L8.70711 8L11.3536 10.6464C11.5488 10.8417 11.5488 11.1583 11.3536 11.3536C11.1583 11.5488 10.8417 11.5488 10.6464 11.3536L8 8.70711L5.35355 11.3536C5.15829 11.5488 4.84171 11.5488 4.64645 11.3536C4.45118 11.1583 4.45118 10.8417 4.64645 10.6464L7.29289 8L4.64645 5.35355C4.45118 5.15829 4.45118 4.84171 4.64645 4.64645Z" fill="white" />
                        </svg>
                        <span>Don't</span>
                    </div>
                    <ol class="list-decimal list-outside pl-10 pr-4 py-4">
                        <li>Don't submit incomplete applications Missing a document or leaving fields blank is one of the most common reasons for rejection. Review everything twice before submitting.</li>
                        <li>Don't apply too close to your travel date Last-minute applications increase rejection risk and leave no time to appeal or reapply.</li>
                        <li>Don't ignore previous visa history If you've had a visa refusal before, don't hide it. Most application forms ask directly, and concealing it is considered fraud.</li>
                        <li>Don't use unprofessional photos Visa photos have strict requirements (size, background, expression). Non-compliant photos can get your application rejected outright.</li>
                        <li>Don't show only one-way travel plans A return ticket or onward travel booking is essential. It demonstrates you plan to leave before your visa expires.</li>
                    </ol>
                </div>
            </div>
            <!-- Other Services -->
            <div class="space-y-6">
                <h4 class="text-black text-2xl sm:text-3xl lg:text-4xl font-semibold">Our Services</h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
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
                    <a href="flightbooking.php">
                        <div class="text-[#1F0730] text-center p-5 sm:p-6 bg-white space-y-3 cursor-pointer rounded-2xl">
                            <svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                                <path d="M19.6417 11.7271C20.0613 10.8879 20.8194 10 22 10C23.1806 10 23.9387 10.8879 24.3583 11.7271C24.7913 12.593 25 13.6475 25 14.5V20.0365L32.7562 23.9146C33.5185 24.2957 34 25.0748 34 25.9271V28C34 28.2205 33.903 28.4298 33.7348 28.5723C33.5666 28.7148 33.3442 28.776 33.1267 28.7398L24.8665 27.3631L24.3032 30.7426L26.2803 32.7197C26.4948 32.9342 26.559 33.2568 26.4429 33.537C26.3268 33.8173 26.0533 34 25.75 34H18.25C17.9467 34 17.6732 33.8173 17.5571 33.537C17.441 33.2568 17.5052 32.9342 17.7197 32.7197L19.6968 30.7426L19.1335 27.3631L10.8733 28.7398C10.6558 28.776 10.4334 28.7148 10.2652 28.5723C10.097 28.4298 10 28.2205 10 28L10 25.9271C10 25.0748 10.4815 24.2957 11.2438 23.9146L19 20.0365V14.5C19 13.6475 19.2087 12.593 19.6417 11.7271ZM20.9833 12.3979C20.6663 13.032 20.5 13.8525 20.5 14.5V20.5C20.5 20.7841 20.3395 21.0438 20.0854 21.1708L11.9146 25.2562C11.6605 25.3833 11.5 25.643 11.5 25.9271V27.1147L19.6267 25.7602C20.0353 25.6921 20.4217 25.9681 20.4898 26.3767L21.2398 30.8767C21.2796 31.1156 21.2016 31.3591 21.0303 31.5303L20.0607 32.5H23.9393L22.9697 31.5303C22.7984 31.3591 22.7204 31.1156 22.7602 30.8767L23.5102 26.3767C23.5783 25.9681 23.9647 25.6921 24.3733 25.7602L32.5 27.1147V25.9271C32.5 25.643 32.3395 25.3833 32.0854 25.2562L23.9146 21.1708C23.6605 21.0438 23.5 20.7841 23.5 20.5V14.5C23.5 13.8525 23.3337 13.032 23.0167 12.3979C22.6863 11.7371 22.3194 11.5 22 11.5C21.6806 11.5 21.3137 11.7371 20.9833 12.3979Z" fill="#2E3192" />
                            </svg>
                            <h5 class="text-lg sm:text-xl font-semibold leading-relaxed">Flight Booking</h5>
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