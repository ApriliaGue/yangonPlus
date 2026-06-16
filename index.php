<?php include 'header.php'; ?>
<main>
    <!-- Hero Section -->
    <section class="relative h-[85vh] md:h-screen bg-cover bg-center flex flex-col items-center justify-center text-center overflow-hidden">
        <img src="/assets/img/bg.jpg" alt="Myanmar Landscape" class="h-full w-full object-cover absolute inset-0 hero-zoom">
        <!-- Subtle dark overlay for better text contrast -->
        <div class="absolute inset-0 bg-black/30 z-[5]"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 space-y-6">
            <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight">
                Uncover the Soul of Myanmar
            </h1>
            <p class="text-xl md:text-2xl text-gray-100 font-medium mb-8">
                Curated adventure packages for the modern explorer. Experience the Golden Land like never before.
            </p>
            <a href="#popular-tours" class="bg-[#EFD64D] hover:bg-[#EBE359] text-[#1F0730] text-lg font-semibold px-8 py-4 rounded-full inline-flex items-center gap-2 transition duration-300 shadow-xl hover:shadow-2xl">
                <span>Explore Tours</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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

    <!-- Flight Search Section -->
    <section class="relative bg-[#fdfdfd] py-16 px-6 lg:px-20 overflow-hidden">
        <img src="assets/img/bg2.png" alt="" class="absolute inset-0 w-full h-full object-cover opacity-5">
        <div class="relative max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h4 class="text-4xl md:text-5xl font-bold text-[#151567] leading-tight">
                    Are you ready to travel?<br>
                    <span class="text-[#D23118]">Find the best routes.</span>
                </h4>
                <p class="text-lg text-gray-600">Access thousands of flight connections across Myanmar with the most competitive prices in the market.</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-2xl border border-gray-100">
                <?php include 'flight.php' ?>
                <div class="mt-8 flex justify-end">
                    <a href="flightbooking-detail.php" class="bg-[#2E3192] hover:bg-[#151567] text-white text-base font-medium py-3.5 px-10 rounded-full flex items-center gap-2 transition-all">
                        <span>Search Flight</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>