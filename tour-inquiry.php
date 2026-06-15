<?php include 'header.php'; ?>
<img src="assets/img/contactus.jpg" alt="" class="w-full h-80 object-cover">
<div class="layout1 space-y-10 text-[#1F0730]">
    <!-- Breadcrumb -->
    <div class="space-y-4">
        <div class="inline-flex text-base font-normal gap-2 border border-[#2E31921A] p-3 rounded-full">
            <a href="index.php" class="text-[#667085]">Home</a>
            <svg class="w-4 h-4 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <a href="tour.php" class="text-[#2E3192]">Tour packages</a>
            <svg class="w-4 h-4 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <a href="tour-detail.php" class="text-[#151567]">Bagan & Inle Lake Local Discovery Trip</a>
        </div>
        <h4 class="text-4xl font-semibold">Bagan & Inle Lake Local Discovery Trip</h4>
        <p class="text-lg text-[#3E465F] font-medium">Our exclusive all-inclusive package includes luxury stays, private transfers, and tours. Book your dream trip now!</p>
    </div>
    <h5 class="text-xl font-semibold mb-6">Your Information</h5>
    <div class="flex justify-between space-x-6">
        <!-- Left -->
        <div class="w-full space-y-6">
            <div class="grid grid-cols-2 gap-6 font-normal text-[#1F0730] px-6">
                <div>
                    <label class="text-xs text-[#3E465F]">My name is <span class="text-[#D23118]">*</span></label>
                    <input type="text" placeholder="Hla Hla" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                </div>
                <div class="relative">
                    <label class="text-xs text-[#3E465F]">My gender is <span class="text-[#D23118]">*</span></label>
                    <input type="text" placeholder="Select your gender" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                    <svg class="w-4 h-4 absolute right-3 bottom-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="relative">
                    <label class="text-xs text-[#3E465F]">Nationality <span class="text-[#D23118]">*</span></label>
                    <input type="text" placeholder="Myanmar" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                    <svg class="w-4 h-4 absolute right-3 bottom-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="relative">
                    <label class="text-xs text-[#3E465F]">Country <span class="text-[#D23118]">*</span></label>
                    <input type="text" placeholder="Myanmar" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                    <svg class="w-4 h-4 absolute right-3 bottom-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="relative">
                    <label class="text-xs text-[#3E465F]">Current city <span class="text-[#D23118]">*</span></label>
                    <input type="text" placeholder="Yangon" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                    <svg class="w-4 h-4 absolute right-3 bottom-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div class="relative">
                    <label class="text-xs text-[#3E465F]">Township <span class="text-[#D23118]">*</span></label>
                    <input type="text" placeholder="Mayangone" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                    <svg class="w-4 h-4 absolute right-3 bottom-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
                <div>
                    <label class="text-xs text-[#3E465F]">You can call me via <span class="text-[#D23118]">*</span></label>
                    <input type="tel" placeholder="09 XXX XXX XXX" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                </div>
                <div>
                    <label class="text-xs text-[#3E465F]">Mail to <span class="text-[#D23118]">*</span></label>
                    <input type="email" placeholder="mymail@gmail.com" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm">
                </div>
                <div class="col-span-2">
                    <label class="text-xs text-[#3E465F]">My address is <span class="text-[#D23118]">*</span></label>
                    <textarea type="address" placeholder="Tell us where you live" class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm"></textarea>
                </div>
                <div class="col-span-2">
                    <label class="text-xs text-[#3E465F]">My message is <span class="text-[#D23118]">*</span></label>
                    <textarea type="message" rows="4" placeholder="We love to hear your story..." class="w-full bg-white rounded-lg p-3 mt-1 text-base shadow-sm"></textarea>
                </div>
            </div>
            <div class="flex justify-center text-[#1F0730] text-base font-medium transition">
                <button class="bg-[#EFD64D] hover:bg-[#EBE359] px-4 py-3 rounded-full">Send Message</button>
            </div>
        </div>
        <!-- Right -->
        <div class="space-y-6 w-4xl mt-7">
            <div class="bg-white rounded-lg shadow-sm p-4">
                <div class="flex items-start gap-2">
                    <svg class="w-4 h-4 my-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 9.75C16.5 9.33579 16.8358 9 17.25 9H18.75C19.1642 9 19.5 9.33579 19.5 9.75V11.25C19.5 11.6642 19.1642 12 18.75 12H17.25C16.8358 12 16.5 11.6642 16.5 11.25V9.75Z" fill="black" />
                        <path d="M5.25 0C5.66421 0 6 0.335786 6 0.75V1.5H18V0.75C18 0.335786 18.3358 0 18.75 0C19.1642 0 19.5 0.335786 19.5 0.75V1.5H21C22.6569 1.5 24 2.84315 24 4.5V21C24 22.6569 22.6569 24 21 24H3C1.34315 24 0 22.6569 0 21V4.5C0 2.84315 1.34315 1.5 3 1.5H4.5V0.75C4.5 0.335786 4.83579 0 5.25 0ZM1.5 6V21C1.5 21.8284 2.17157 22.5 3 22.5H21C21.8284 22.5 22.5 21.8284 22.5 21V6H1.5Z" fill="black" />
                    </svg>
                    <h5 class="text-xl font-semibold">Duration</h5>
                </div>
                <hr class="my-2 -mx-4 border-[#F8F8F5]">
                <span class="text-lg font-medium">7 days/ 6 nights</span>
            </div>
            <div class="bg-white rounded-lg shadow-sm p-4">
                <div class="flex items-start gap-2">
                    <svg class="w-4 h-4 my-auto" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.1 11.2C3.19443 11.0741 3.34262 11 3.5 11H6C6.27615 11 6.5 11.2239 6.5 11.5C6.5 11.7761 6.27615 12 6 12H3.75L1.5 15H14.5L12.25 12H10C9.72386 12 9.5 11.7761 9.5 11.5C9.5 11.2239 9.72386 11 10 11H12.5C12.6574 11 12.8056 11.0741 12.9 11.2L15.9 15.2C16.0136 15.3515 16.0319 15.5542 15.9472 15.7236C15.8625 15.893 15.6894 16 15.5 16H0.500003C0.310617 16 0.137485 15.893 0.0527893 15.7236C-0.0319067 15.5542 -0.0136288 15.3515 0.100003 15.2L3.1 11.2Z" fill="#1F0730" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 1C6.34315 1 5 2.34315 5 4C5 5.65685 6.34315 7 8 7C9.65686 7 11 5.65685 11 4C11 2.34315 9.65686 1 8 1ZM4 4C4 1.79086 5.79086 0 8 0C10.2091 0 12 1.79086 12 4C12 6.03981 10.4732 7.723 8.5 7.96905V13.5C8.5 13.7761 8.27615 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V7.96905C5.52685 7.723 4 6.03981 4 4Z" fill="#1F0730" />
                    </svg>
                    <h5 class="text-xl font-semibold">Destination</h5>
                </div>
                <hr class="my-2 -mx-4 border-[#F8F8F5]">
                <span class="text-lg font-medium">Singapore-Sentosa</span>
            </div>
            <div class="bg-[#EFD64D1A] rounded-lg shadow-md p-4">
                <div class="flex items-start gap-2">
                    <svg class="w-4 h-4 my-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 9.75C16.5 9.33579 16.8358 9 17.25 9H18.75C19.1642 9 19.5 9.33579 19.5 9.75V11.25C19.5 11.6642 19.1642 12 18.75 12H17.25C16.8358 12 16.5 11.6642 16.5 11.25V9.75Z" fill="black" />
                        <path d="M5.25 0C5.66421 0 6 0.335786 6 0.75V1.5H18V0.75C18 0.335786 18.3358 0 18.75 0C19.1642 0 19.5 0.335786 19.5 0.75V1.5H21C22.6569 1.5 24 2.84315 24 4.5V21C24 22.6569 22.6569 24 21 24H3C1.34315 24 0 22.6569 0 21V4.5C0 2.84315 1.34315 1.5 3 1.5H4.5V0.75C4.5 0.335786 4.83579 0 5.25 0ZM1.5 6V21C1.5 21.8284 2.17157 22.5 3 22.5H21C21.8284 22.5 22.5 21.8284 22.5 21V6H1.5Z" fill="black" />
                    </svg>
                    <h5 class="text-xl font-semibold">Price</h5>
                </div>
                <hr class="my-2 -mx-4 border-[#EFD64D] opacity-50">
                <span class="text-lg font-medium">$1200 per person</span>
                <p class="text-xs text-[#3E465F] mt-1"><strong>Cancellation Policy: </strong>You will receive a full refund if you cancel at least 30 days before the trip.</p>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>