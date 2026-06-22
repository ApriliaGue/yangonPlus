<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangon Plus</title>
    <link rel="stylesheet" href="assets/css/output.css">
    <link rel="icon" type="image/png" href="/assets/img/logo-small.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="font-sans">
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    $is_home = ($current_page === 'index.php' || $current_page === 'index.php' || $current_page === '');
    $dropdown_active = in_array($current_page, ['tour.php', 'flightbooking.php', 'visa.php', 'golftour.php', 'tour-detail.php', 'tour-inquiry.php', 'flightbooking-detail.php', 'golftour-detail.php', 'golftour-inquiry.php', 'hotel.php', 'car.php', 'travel.php', 'medical.php', 'study.php']);
    ?>
    <header class="sticky top-0 z-50 w-full bg-white">
        <div class="container-default mx-auto flex justify-between items-center py-2 md:py-4">
            <a href="index.php" class="shrink-0"><img src="assets/img/logo.png" alt="Yangon Plus" class="h-8 md:h-11 object-contain" /></a>
            <nav class="hidden lg:flex items-center w-md space-x-15 font-normal text-base text-center text-[#000000]">
                <a href="index.php" class="w-15 transition-all <?php echo $is_home ? 'font-medium border-b border-black' : 'hover:font-semibold hover:text-[#2E3192]'; ?>">
                    Home
                </a>
                <div class="relative flex items-center gap-1 cursor-pointer group transition-all <?php echo $dropdown_active ? 'font-medium border-b border-black' : 'hover:text-[#2E3192]'; ?>">
                    <span class="w-25 group-hover:font-semibold">Our Services</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                    <div class="absolute text-[#3E465F] text-center top-full mt-3 p-3 space-y-6 w-3xs bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform scale-95 group-hover:scale-100 left-1/2 -translate-x-1/2 origin-top">
                        <a href="tour.php" class="block hover:font-semibold hover:text-[#2E3192] <?php echo ($current_page === 'tour.php') ? 'text-[#2E3192] font-semibold' : ''; ?>">Tour Packages</a>
                        <a href="flightbooking.php" class="block hover:font-semibold hover:text-[#2E3192] <?php echo ($current_page === 'flightbooking.php') ? 'text-[#2E3192] font-semibold' : ''; ?>">Flight Booking</a>
                        <a href="visa.php" class="block hover:font-semibold hover:text-[#2E3192] <?php echo ($current_page === 'visa.php') ? 'text-[#2E3192] font-semibold' : ''; ?>">Visa Assistance</a>
                        <a href="golftour.php" class="block hover:font-semibold hover:text-[#2E3192] <?php echo ($current_page === 'golftour.php') ? 'text-[#2E3192] font-semibold' : ''; ?>">Golf Tour</a>
                    </div>
                </div>
                <a href="about.php" class="w-20 transition-all <?php echo ($current_page === 'about.php') ? 'font-medium border-b border-black' : 'hover:font-semibold hover:text-[#2E3192]'; ?>">
                    About Us
                </a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="contactus.php" class="hidden lg:inline-flex bg-[#2E3192] hover:bg-[#EBE359] text-[#FFFFFF] text-sm font-medium px-4 py-3 gap-1 rounded-full items-center transition duration-300 ease-out">
                    <span>Contact Us</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
                <button id="menu-toggle" class="block lg:hidden text-black focus:outline-none p-1 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Toggle Menu">
                    <svg id="hamburger-icon" class="w-7 h-7 md:w-10 md:h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12" />
                        <line x1="4" x2="20" y1="6" y2="6" />
                        <line x1="4" x2="20" y1="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div id="mobile-overlay" class="fixed inset-0 bg-black/40 z-40 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"></div>
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-[85%] max-w-sm bg-[#F8F8F5] z-50 shadow-2xl overflow-y-auto transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden">
        <div class="flex items-center justify-between p-6 border-b border-gray-200/40">
            <img src="assets/img/logo.png" alt="Yangon Plus" class="h-7 md:h-10 object-contain" />
            <button id="menu-close" class="text-black focus:outline-none p-1.5 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Close Menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div>
        <nav class="flex flex-col p-6 space-y-4 text-xl font-medium text-gray-900">
            <a href="index.php" class="py-2.5 px-3 rounded-xl transition-colors hover:bg-gray-100/60 <?php echo $is_home ? 'font-semibold text-[#2E3192] bg-white shadow-sm' : ''; ?>">Home</a>
            <div class="space-y-1">
                <button id="mobile-dropdown-toggle" class="w-full flex justify-between items-center py-2.5 px-3 rounded-xl text-left focus:outline-none transition-colors hover:bg-gray-100/60 <?php echo $dropdown_active ? 'font-semibold text-[#2E3192]' : ''; ?>">
                    <span>Our Services</span>
                    <svg id="mobile-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-200">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>
                <div id="mobile-dropdown-menu" class="hidden flex-col pl-4 pr-2 py-1 space-y-1 text-lg text-gray-600 transition-all duration-200">
                    <a href="tour.php" class="py-2 px-3 rounded-lg hover:bg-gray-100/60 <?php echo ($current_page === 'tour.php') ? 'text-[#2E3192] font-semibold bg-white shadow-sm' : ''; ?>">Tour Packages</a>
                    <a href="flightbooking.php" class="py-2 px-3 rounded-lg hover:bg-gray-100/60 <?php echo ($current_page === 'flightbooking.php') ? 'text-[#2E3192] font-semibold bg-white shadow-sm' : ''; ?>">Flight Booking</a>
                    <a href="visa.php" class="py-2 px-3 rounded-lg hover:bg-gray-100/60 <?php echo ($current_page === 'visa.php') ? 'text-[#2E3192] font-semibold bg-white shadow-sm' : ''; ?>">Visa Assistance</a>
                    <a href="golftour.php" class="py-2 px-3 rounded-lg hover:bg-gray-100/60 <?php echo ($current_page === 'golftour.php') ? 'text-[#2E3192] font-semibold bg-white shadow-sm' : ''; ?>">Golf Tour</a>
                </div>
            </div>
            <a href="about.php" class="py-2.5 px-3 rounded-xl transition-colors hover:bg-gray-100/60 <?php echo ($current_page === 'about.php') ? 'font-semibold text-[#2E3192] bg-white shadow-sm' : ''; ?>">About Us</a>
            <div class="pt-4">
                <a href="contactus.php" class="flex bg-[#2E3192] text-white text-center justify-center py-3 rounded-full text-base font-medium transition-colors hover:bg-[#1a1c66] shadow-sm">Contact Us</a>
            </div>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.getElementById('menu-toggle');
            const menuClose = document.getElementById('menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileOverlay = document.getElementById('mobile-overlay');
            const mobileDropdownToggle = document.getElementById('mobile-dropdown-toggle');
            const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
            const mobileArrow = document.getElementById('mobile-arrow');

            function openMenu() {
                mobileMenu.classList.remove('translate-x-full');
                mobileOverlay.classList.remove('opacity-0', 'pointer-events-none');
                document.body.classList.add('overflow-hidden');
            }

            function closeMenu() {
                mobileMenu.classList.add('translate-x-full');
                mobileOverlay.classList.add('opacity-0', 'pointer-events-none');
                document.body.classList.remove('overflow-hidden');
            }

            menuToggle.addEventListener('click', openMenu);
            menuClose.addEventListener('click', closeMenu);
            mobileOverlay.addEventListener('click', closeMenu);

            mobileDropdownToggle.addEventListener('click', () => {
                const isHidden = mobileDropdownMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileDropdownMenu.classList.remove('hidden');
                    mobileDropdownMenu.classList.add('flex');
                    mobileArrow.classList.add('rotate-180');
                } else {
                    mobileDropdownMenu.classList.add('hidden');
                    mobileDropdownMenu.classList.remove('flex');
                    mobileArrow.classList.remove('rotate-180');
                }
            });
        });
    </script>
</body>

</html>