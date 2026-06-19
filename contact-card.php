<div class="relative h-auto bg-[var(--Base-Gray,#3E465F)] rounded-2xl mt-10 sm:mt-16 lg:mt-20">
    <div class="absolute inset-0 bg-[url(/assets/img/bg1.jpg)] bg-cover bg-center opacity-20 rounded-2xl"></div>
    <!-- <div class="relative z-10 flex justify-between text-white px-10 py-18">
        <h4 class="w-2/5 text-4xl font-semibold leading-relaxed">If you would to know your next trip in details,</h4>
        <div class="flex items-start w-2/5 gap-4"> -->
    <div class="relative z-10 flex flex-col lg:flex-row justify-between text-white px-4 py-8 sm:px-10 sm:py-18 gap-10 lg:gap-25">
        <h4 class="w-ful lg:w-1/2 text-2xl md:text-4xl font-semibold leading-relaxed">If you would to know <br class="hidden lg:block">your next trip in details,</h4>
        <div class="flex items-start w-full lg:w-1/2 sm:gap-4 lg:ml-auto">
            <div class="shrink-0 my-auto">
                <svg class="hidden sm:block" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="#EFD64D" fill-opacity="0.3" />
                    <path d="M24.5 9.5C25.3284 9.5 26 10.1716 26 11V29C26 29.8284 25.3284 30.5 24.5 30.5H15.5C14.6716 30.5 14 29.8284 14 29V11C14 10.1716 14.6716 9.5 15.5 9.5H24.5ZM15.5 8C13.8431 8 12.5 9.34315 12.5 11V29C12.5 30.6569 13.8431 32 15.5 32H24.5C26.1569 32 27.5 30.6569 27.5 29V11C27.5 9.34315 26.1569 8 24.5 8H15.5Z" fill="white" />
                    <path d="M20 29C20.8284 29 21.5 28.3284 21.5 27.5C21.5 26.6716 20.8284 26 20 26C19.1716 26 18.5 26.6716 18.5 27.5C18.5 28.3284 19.1716 29 20 29Z" fill="white" />
                </svg>
            </div>
            <div class="w-full space-y-3 text-sm sm:text-base font-normal my-auto">
                <h5 class="text-lg sm:text-xl font-semibold">Call us within 9:30 am - 5:30 pm Monday - Friday</h5>
                <div class="flex justify-between">
                    <span class="truncate">09 79 79 79 144 (Air Tickets)</span>
                    <button onclick="copyToClipboard(this, '09 79 79 79 144')" class="text-xs font-normal shrink-0">Copy</button>
                </div>
                <div class="flex justify-between">
                    <span class="truncate">09 960 960 990 (Visa & Tour Packages)</span>
                    <button onclick="copyToClipboard(this, '09 960 960 990')" class="text-xs font-normal shrink-0">Copy</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard(buttonElement, textToCopy) {
        // Attempt modern Clipboard API architecture
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(textToCopy).then(() => {
                triggerVisualFeedback(buttonElement);
            }).catch(err => {
                console.error('Failed to copy via Clipboard API: ', err);
                fallbackCopyMechanism(buttonElement, textToCopy);
            });
        } else {
            fallbackCopyMechanism(buttonElement, textToCopy);
        }
    }

    function fallbackCopyMechanism(buttonElement, text) {
        const textArea = document.createElement("textarea");
        textArea.value = text;
        // Keep it out of view structure
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        document.body.appendChild(textArea);
        textArea.select();
        try {
            document.execCommand('copy');
            triggerVisualFeedback(buttonElement);
        } catch (err) {
            console.error('Fallback copy strategy failed: ', err);
        }
        document.body.removeChild(textArea);
    }

    function triggerVisualFeedback(btn) {
        const defaultText = "Copy";
        btn.innerText = "Copied!";
        btn.classList.add("text-green-600", "font-bold");
        btn.classList.remove("text-[#F8F8F5]");

        setTimeout(() => {
            btn.innerText = defaultText;
            btn.classList.remove("text-green-600", "font-bold");
            btn.classList.add("text-[#F8F8F5]");
        }, 5000);
    }
</script>