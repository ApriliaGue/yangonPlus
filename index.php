<?php include 'header.php'; ?>
<main>
    <!-- Hero Section -->
    <section class="relative h-175 md:h-screen bg-cover bg-center flex flex-col items-center justify-center text-center overflow-hidden">
        <img src="/assets/img/bg.jpg" alt="" class="h-full w-full object-cover absolute inset-0 hero-zoom">
        <div class="relative z-10 max-w-4xl mx-auto space-y-4">
            <h1 class="text-6xl md:text-7xl font-bold text-[#FFFFFF] leading-tight text-border text-shadow-lg/25">
                Uncover <br> the Soul of Myanmar
            </h1>
            <p class="text-3xl md:text-lg text-[#F8F8F5] font-medium mb-8">
                Curated adventure packages for the modern explorer. Experience the Golden Land like never before.
            </p>
            <a href="#popular-tours" class="bg-[#EFD64D] hover:bg-[#EBE359] text-[#1F0730] text-base font-semibold px-4 py-3 gap-1 rounded-full inline-flex items-center transition duration-300 ease-out">
                <span>Explore Tours</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>
        </div>
    </section>
    <?php include 'popular.php' ?>
    <?php include 'choose.php' ?>
    <?php include 'banner.php' ?>
    <?php include 'promotion.php' ?>
    <?php include 'golf.php' ?>
    <?php include 'map.php' ?>
    <div class="relative bg-[#EFD64D1A] flex flex-col p-10 overflow-hidden">
        <img src="assets/img/bg2.png" alt="" class="absolute inset-0 w-full h-full object-cover">
        <div class="relative space-y-6">
            <h4 class="text-4xl font-semibold text-[#151567] leading-normal">Are you ready to go travel?<br>Find the best route with <span class="text-[#D23118]">cheapest price!</span></h4>
            <?php include 'flight.php' ?>
            <div class="flex justify-end">
                <a href="flightbooking-detail.php" class="bg-[#EFD64D] hover:bg-[#EBE359] text-[#1F0730] text-base font-medium py-3 px-8 rounded-full flex items-center justify-center gap-2 transition">
                    <span>Search Flight</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>