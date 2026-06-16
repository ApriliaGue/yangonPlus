<div class="flex items-center space-x-6 text-base font-medium text-black mb-4">
    <label class="flex items-center space-x-2 cursor-pointer">
        <input type="radio" name="trip-type" id="one-way" class="w-5 h-5 accent-black" checked onchange="toggleTripType()">
        <span>One Way</span>
    </label>
    <label class="flex items-center space-x-2 cursor-pointer">
        <input type="radio" name="trip-type" id="round-trip" class="w-5 h-5 accent-black" onchange="toggleTripType()">
        <span>Round trip</span>
    </label>
</div>

<div class="flex flex-row flex-wrap items-end gap-y-4 gap-x-4 w-full">
    
    <div class="w-full md:w-[calc(50%-0.5rem)] lg:flex-1 min-w-[150px]">
        <label for="flight-name" class="text-xs font-normal text-[#3E465F]">Flight name</label>
        <input type="text" id="flight-name" name="flight-name" placeholder="MAI/MNA" class="w-full bg-white rounded-lg px-4 py-3 mt-1 text-base font-normal text-[#1F0730] shadow-sm border border-gray-100 focus:outline-none focus:ring-1 focus:ring-black">
    </div>
    
    <div class="w-[calc(50%-0.5rem)] lg:flex-1 min-w-[140px] relative">
        <label for="departure-city" class="text-xs font-normal text-[#3E465F]">From <span class="text-[#D23118]">*</span></label>
        <div class="relative mt-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.50009 19.0001H21.5001V21.0001H2.50009V19.0001ZM22.0701 9.64007C21.8601 8.84007 21.0301 8.36007 20.2301 8.58007L14.9201 10.0001L8.02009 3.57007L6.09009 4.08007L10.2301 11.2501L5.26009 12.5801L3.29009 11.0401L1.84009 11.4301L4.43009 15.9201L21.0001 11.4901C21.8101 11.2601 22.2801 10.4401 22.0701 9.64007Z" fill="currentColor" />
                </svg>
            </span>
            <input type="text" id="departure-city" name="departure-city" placeholder="Departure city" class="w-full bg-white rounded-lg pl-10 pr-4 py-3 text-base font-normal text-[#1F0730] shadow-sm border border-gray-100 focus:outline-none focus:ring-1 focus:ring-black">
        </div>
        
        <button type="button" onclick="swapLocations()" aria-label="Swap Locations" class="absolute -right-[18px] bottom-2.5 z-20 hover:scale-105 active:scale-95 transition-transform hidden sm:block">
            <svg width="32" height="32" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="35" height="36" rx="17.3144" fill="#EBEDA4" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 21.5C11 21.7761 11.2239 22 11.5 22H23.2929L20.1464 25.1464C19.9512 25.3417 19.9512 25.6583 20.1464 25.8536C20.3417 26.0488 20.6583 26.0488 20.8536 25.8536L24.8536 21.8536C25.0488 21.6583 25.0488 21.3417 24.8536 21.1464L20.8536 17.1464C20.6583 16.9512 20.3417 16.9512 20.1464 17.1464C19.9512 17.3417 19.9512 17.6583 20.1464 17.8536L23.2929 21H11.5C11.2239 21 11 21.2239 11 21.5Z" fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 14.5C25 14.7761 24.7761 15 24.5 15H12.7071L15.8536 18.1464C16.0488 18.3417 16.0488 18.6583 15.8536 18.8536C15.6583 19.0488 15.3417 19.0488 15.1464 18.8536L11.1464 14.8536C10.9512 14.6583 10.9512 14.3417 11.1464 14.1464L15.1464 10.1464C15.3417 9.95118 15.6583 9.95118 15.8536 10.1464C16.0488 10.3417 16.0488 10.6583 15.8536 10.8536L12.7071 14H24.5C24.7761 14 25 14.2239 25 14.5Z" fill="black" />
            </svg>
        </button>
    </div>
    
    <div class="w-[calc(50%-0.5rem)] lg:flex-1 min-w-[140px]">
        <label for="arrival-city" class="text-xs font-normal text-[#3E465F]">To <span class="text-[#D23118]">*</span></label>
        <div class="relative mt-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 19H21.5V21H2.5V19ZM19.34 15.85C20.14 16.06 20.96 15.59 21.18 14.79C21.39 13.99 20.92 13.17 20.12 12.95L14.81 11.53L12.05 2.51L10.12 2V10.28L5.15 8.95L4.22 6.63L2.77 6.24V11.41L19.34 15.85Z" fill="currentColor" />
                </svg>
            </span>
            <input type="text" id="arrival-city" name="arrival-city" placeholder="Arrival city" class="w-full bg-white rounded-lg pl-10 pr-4 py-3 text-base font-normal text-[#1F0730] shadow-sm border border-gray-100 focus:outline-none focus:ring-1 focus:ring-black">
        </div>
    </div>
    
    <div class="w-[calc(50%-0.5rem)] lg:flex-1 min-w-[140px]">
        <label for="departure-date" class="text-xs font-normal text-[#3E465F]">Departure date <span class="text-[#D23118]">*</span></label>
        <div class="relative mt-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 9.75C16.5 9.33579 16.8358 9 17.25 9H18.75C19.1642 9 19.5 9.33579 19.5 9.75V11.25C19.5 11.6642 19.1642 12 18.75 12H17.25C16.8358 12 16.5 11.6642 16.5 11.25V9.75Z" fill="currentColor" />
                    <path d="M5.25 0C5.66421 0 6 0.335786 6 0.75V1.5H18V0.75C18 0.335786 18.3358 0 18.75 0C19.1642 0 19.5 0.335786 19.5 0.75V1.5H21C22.6569 1.5 24 2.84315 24 4.5V21C24 22.6569 22.6569 24 21 24H3C1.34315 24 0 22.6569 0 21V4.5C0 2.84315 1.34315 1.5 3 1.5H4.5V0.75C4.5 0.335786 4.83579 0 5.25 0ZM1.5 6V21C1.5 21.8284 2.17157 22.5 3 22.5H21C21.8284 22.5 22.5 21.8284 22.5 21V6H1.5Z" fill="currentColor" />
                </svg>
            </span>
            <input type="date" id="departure-date" name="departure-date" placeholder="Select date" class="w-full bg-white rounded-lg pl-10 pr-4 py-3 text-base font-normal text-[#1F0730] shadow-sm border border-gray-100 focus:outline-none focus:ring-1 focus:ring-black">
        </div>
    </div>
    
    <div id="return-date-container" class="w-[calc(50%-0.5rem)] lg:flex-1 min-w-[140px] hidden">
        <label for="return-date" class="text-xs font-normal text-[#3E465F]">Return date <span class="text-[#D23118]">*</span></label>
        <div class="relative mt-1">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 pointer-events-none">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 9.75C16.5 9.33579 16.8358 9 17.25 9H18.75C19.1642 9 19.5 9.33579 19.5 9.75V11.25C19.5 11.6642 19.1642 12 18.75 12H17.25C16.8358 12 16.5 11.6642 16.5 11.25V9.75Z" fill="currentColor" />
                    <path d="M5.25 0C5.66421 0 6 0.335786 6 0.75V1.5H18V0.75C18 0.335786 18.3358 0 18.75 0C19.1642 0 19.5 0.335786 19.5 0.75V1.5H21C22.6569 1.5 24 2.84315 24 4.5V21C24 22.6569 22.6569 24 21 24H3C1.34315 24 0 22.6569 0 21V4.5C0 2.84315 1.34315 1.5 3 1.5H4.5V0.75C4.5 0.335786 4.83579 0 5.25 0ZM1.5 6V21C1.5 21.8284 2.17157 22.5 3 22.5H21C21.8284 22.5 22.5 21.8284 22.5 21V6H1.5Z" fill="currentColor" />
                </svg>
            </span>
            <input type="date" id="return-date" name="return-date" placeholder="Select date" class="w-full bg-white rounded-lg pl-10 pr-4 py-3 text-base font-normal text-[#1F0730] shadow-sm border border-gray-100 focus:outline-none focus:ring-1 focus:ring-black">
        </div>
    </div>
</div>

<script>
function toggleTripType() {
    const isRoundTrip = document.getElementById('round-trip').checked;
    const returnContainer = document.getElementById('return-date-container');
    
    if (isRoundTrip) {
        returnContainer.classList.remove('hidden');
    } else {
        returnContainer.classList.add('hidden');
    }
}

function swapLocations() {
    const departureInput = document.getElementById('departure-city');
    const arrivalInput = document.getElementById('arrival-city');
    
    const tempValue = departureInput.value;
    departureInput.value = arrivalInput.value;
    arrivalInput.value = tempValue;
}

// Initial script execution check on render setup
document.addEventListener("DOMContentLoaded", toggleTripType);
</script>