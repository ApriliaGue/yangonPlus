<?php include 'header.php'; ?>
<!-- Hero -->
<section class="relative min-h-80 bg-[#EFD64D] flex flex-col items-center justify-center text-center overflow-hidden">
    <img src="assets/img/bg2.png" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="relative max-w-4xl space-y-4">
        <h1 class="text-4xl text-[#1F0730] font-semibold">Golf Tour</h1>
        <p class="text-lg text-[#3E465F] font-medium">
            We organize exclusive golf tours to top-rated golf courses in Myanmar and abroad, with accommodation, transport, and caddie arrangements.
        </p>
    </div>
</section>
<div id="tour" class="layout1 space-y-20 scroll-mt-12 text-black">
    <div class=space-y-6>
        <!-- Crads -->
        <?php $active_tour = isset($_GET['tour']) ? $_GET['tour'] : 'in'; ?>
        <div class="flex space-x-2 text-base font-medium">
            <a href="?tour=in#tour" class="px-4 py-3 rounded-full cursor-pointer transition-colors duration-200 select-none <?php echo ($active_tour === 'in') ? 'bg-[#EFD64D] text-[#1F0730]' : 'bg-[#EFD64D1A] text-[#3E465F] hover:bg-[#EBE359]'; ?>">Inbound</a>
            <a href="?tour=out#tour" class="px-4 py-3 rounded-full cursor-pointer transition-colors duration-200 select-none <?php echo ($active_tour === 'out') ? 'bg-[#EFD64D] text-[#1F0730]' : 'bg-[#EFD64D1A] text-[#3E465F] hover:bg-[#EBE359]'; ?>">Outbound</a>
        </div>
        <?php if ($active_tour === 'in'): ?>
            <div class="grid grid-cols-3 gap-8">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="card bg-white hover:shadow-lg rounded-2xl overflow-hidden transition-shadow duration-300">
                        <img src="assets/img/golf2.png" alt="" class="w-full h-80 object-cover rounded-t-2xl">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold text-[#1F0730]">Pan Hlaing Golf Club</h5>
                            <hr class="my-4 border-[#2E319280] opacity-50">
                            <div class="flex justify-between text-[#1F0730] text-base text-center font-medium gap-3 transition mx-auto">
                                <a href="golftour-inquiry.php" class="w-1/2 bg-[#EFD64D] hover:bg-[#EBE359] py-3 rounded-full">Inquiry</a>
                                <a href="golftour-detail.php" class="w-1/2 bg-[#EFD64D] hover:bg-[#EBE359] py-3 rounded-full">Details</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
        <?php if ($active_tour === 'out'): ?>
            <div class="grid grid-cols-3 gap-8">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="card bg-white hover:shadow-lg rounded-2xl overflow-hidden transition-shadow duration-300">
                        <img src="assets/img/golf5.png" alt="" class="w-full h-80 object-cover rounded-t-2xl">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold text-[#1F0730]">TH-Pattaya-Black Mountain Golf Club-6days</h5>
                            <hr class="my-4 border-[#2E319280] opacity-50">
                            <div class="flex justify-between text-[#1F0730] text-base text-center font-medium gap-3 transition mx-auto">
                                <a href="golftour-inquiry.php" class="w-1/2 bg-[#EFD64D] hover:bg-[#EBE359] py-3 rounded-full">Inquiry</a>
                                <a href="golftour-detail.php" class="w-1/2 bg-[#EFD64D] hover:bg-[#EBE359] py-3 rounded-full">Details</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- Other Services -->
    <div class=space-y-6>
        <?php $services = [
            [
                "title" => "Tour Packages",
                "icon"  => '<svg class="w-11 h-11 mx-auto" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#EFD64D" fill-opacity="0.5" />
                        <path d="M19 17.5C19.4142 17.5 19.75 17.8358 19.75 18.25V28.75C19.75 29.1642 19.4142 29.5 19 29.5C18.5858 29.5 18.25 29.1642 18.25 28.75V18.25C18.25 17.8358 18.5858 17.5 19 17.5Z" fill="#2E3192" />
                        <path d="M22 17.5C22.4142 17.5 22.75 17.8358 22.75 18.25V28.75C22.75 29.1642 22.4142 29.5 22 29.5C21.5858 29.5 21.25 29.1642 21.25 28.75V18.25C21.25 17.8358 21.5858 17.5 22 17.5Z" fill="#2E3192" />
                        <path d="M25 17.5C25.4142 17.5 25.75 17.8358 25.75 18.25V28.75C25.75 29.1642 25.4142 29.5 25 29.5C24.5858 29.5 24.25 29.1642 24.25 28.75V18.25C24.25 17.8358 24.5858 17.5 25 17.5Z" fill="#2E3192" />
                        <path d="M19.75 10C19.3358 10 19 10.3358 19 10.75V14.5H17.5C15.8431 14.5 14.5 15.8431 14.5 17.5V29.5C14.5 30.6298 15.1245 31.6137 16.0472 32.1254C16.0164 32.2451 16 32.3706 16 32.5C16 33.3284 16.6716 34 17.5 34C18.3284 34 19 33.3284 19 32.5H25C25 33.3284 25.6716 34 26.5 34C27.3284 34 28 33.3284 28 32.5C28 32.3706 27.9836 32.2451 27.9528 32.1254C28.8755 31.6137 29.5 30.6298 29.5 29.5V17.5C29.5 15.8431 28.1569 14.5 26.5 14.5H25V10.75C25 10.3358 24.6642 10 24.25 10H19.75ZM23.5 14.5H20.5V11.5H23.5V14.5ZM28 29.5C28 30.3284 27.3284 31 26.5 31H17.5C16.6716 31 16 30.3284 16 29.5V17.5C16 16.6716 16.6716 16 17.5 16H26.5C27.3284 16 28 16.6716 28 17.5V29.5Z" fill="#2E3192" />
                        </svg>'
            ],
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