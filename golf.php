<div class="relative h-auto bg-[var(--Base-Gray,#3E465F)]">
    <div class="absolute inset-0 bg-[url(/assets/img/bg1.jpg)] bg-cover bg-center opacity-20"></div>
    <div class="relative z-10 flex flex-col justify-start">
        <div class="flex items-start justify-between flex-col md:flex-row text-white p-10 gap-10">
            <h4 class="text-4xl font-semibold leading-relaxed  md:w-[25%]">Our Popular<br>Golf Tours</h4>
            <div class="grid grid-cols-3 gap-4  md:w-[75%]"> <?php for ($i = 0; $i < 3; $i++): ?>
                    <a href="golftour-detail.php">
                        <div class="relative group overflow-hidden">
                            <img src="assets/img/golf5.png" alt="" class="pic"></img>
                            <div class="flex absolute bottom-5 left-5 right-5 justify-between items-center gap-1 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 ease-out">
                                <h5 class="text-xl font-semibold my-auto truncate">TH-Pattaya-Black Mountain Golf Club-6days</h5>
                                <svg class="shrink-0 w-9 h-9" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="36" height="36" rx="18" fill="#EFD64D" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 18C14 17.7239 14.2239 17.5 14.5 17.5H20.2929L18.1464 15.3536C17.9512 15.1583 17.9512 14.8417 18.1464 14.6464C18.3417 14.4512 18.6583 14.4512 18.8536 14.6464L21.8536 17.6464C22.0488 17.8417 22.0488 18.1583 21.8536 18.3536L18.8536 21.3536C18.6583 21.5488 18.3417 21.5488 18.1464 21.3536C17.9512 21.1583 17.9512 20.8417 18.1464 20.6464L20.2929 18.5H14.5C14.2239 18.5 14 18.2761 14 18Z" fill="#2E3192" />
                                </svg>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>

        </div>
    </div>
</div>