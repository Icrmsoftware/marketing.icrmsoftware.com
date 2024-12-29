<div>
    <div class="offcanvas offcanvas-bottom bg-stone-950 mx-10 max-w-6xl m-auto {{ $canvas ? 'show' : '' }}"
    style="min-height: 100%;"
    data-bs-scroll="false"
    data-bs-backdrop="true"
    tabindex="-1"
    id="offerCanvas"
    aria-labelledby="offerCanvasLabel">
        <div class="offcanvas-header rounded-t-xl text-white">
            <button type="button" class="btn-close text-reset" id="closeCanvas" aria-label="Close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
            style="color: white !important;"
            >
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="offcanvas-body relative px-md-5 my-auto">

            <div class="container py-3">
                <div class="row">
                    <div class="col-12 my-auto mx-auto text-center">
                        <div class="mx-auto mb-4">
                            <img src="https://icommerce.co.in//storage/settings/May2023/PWc4rbir5SgM8o39hTPW.webp"
                                    class="img-fluid h-14 md:h-20 mx-auto" alt="iCommerce Logo">
                        </div>
                        <h2 class="text-fuchsia-500 poppins-semibold text-4xl md:text-5xl text-uppercase">
                            UPTO 30% Discount
                        </h2>
                        <p class="text-gray-200 text-xl md:text-2xl my-3">Apply before {{ $expiry_date }} and enjoy an exclusive discount on our services.</p>

                        <div class="row mt-4 mt-md-5">
                            <div class="col-12 col-md-8 mx-auto">
                                <div class="d-none d-md-block">
                                    <div class="d-flex flex-column flex-sm-row gap-4 justify-center
                                ">
                                    @foreach (config('icrm.pricing') as $plan)


                                    <div
                                        class="border-solid border-1 border-stone-100 py-3 px-4 text-start rounded-lg shadow-lg">
                                        <div class="text-gray-300">
                                            {{ $plan['name'] }}
                                        </div>
                                        <div class="flex items-baseline text-gray-900 dark:text-white">
                                            <span class="text-3xl font-semibold">₹</span>
                                            <span class="text-4xl md:text-5xl font-extrabold tracking-tight">{{number_format(($plan['mrp'] * (100 - $plan['discount']) / 100)) }}</span>
                                            <span class="ms-1 text-xl font-normal text-gray-400"><strike>{{number_format($plan['mrp']) }}</strike></span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                </div>

                                <div class="mt-5 mb-3">
                                    <h4 class="text-amber-400 inter-500 text-2xl animate-bounce">Claim Your Offer Now!</h4>
                                </div>
                                <form wire:submit.prevent='submitlead'>
                                    <div class="d-flex flex-column flex-lg-row gap-4 justify-center">
                                        <div>
                                            <input type="text" class="form-control py-3 @error('name') bg-rose-200 border-danger border-3 @enderror" placeholder="Your name"
                                            wire:model.live='name'
                                            >
                                        </div>
                                        <div>
                                            <input type="text" class="form-control py-3 @error('mobile') bg-rose-200 border-danger border-3 @enderror" placeholder="Contact number"
                                            wire:model.live='mobile'
                                            >
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="btn w-100 h-100 px-4 rounded-1 py-2.5 bg-fuchsia-700 hover:bg-fuchsia-500 text-white text-uppercase font-semibold pt-3">
                                                Apply Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let canvasShown = false; // Flag to track whether the offcanvas has been shown

        document.addEventListener("scroll", function () {
            // Get the total height of the page
            const documentHeight = document.documentElement.scrollHeight - window.innerHeight;

            // Calculate the current scroll position as a percentage
            const scrollPosition = window.scrollY / documentHeight;

            // Determine the scroll thresholds based on device width
            let scrollThreshold;
            if (window.innerWidth <= 768) {
                scrollThreshold = 0.85;
            } else if (window.innerWidth <= 1024) {
                scrollThreshold = 0.85;
            } else {
                scrollThreshold = 0.70;
            }

            // Get the target element
            const ctaElement = document.getElementById("offerCanvas");

            // Show the offcanvas if the user has scrolled past the threshold and it hasn't been shown before
            if (scrollPosition >= scrollThreshold && !canvasShown) {
                ctaElement.classList.add("show");
                Livewire.dispatch('showCanvas');
                canvasShown = true; // Update the flag to prevent showing again
            }
        });

        // Close button logic to hide the offcanvas
        document.getElementById("closeCanvas").addEventListener("click", function () {
            const ctaElement = document.getElementById("offerCanvas");
            ctaElement.classList.remove("show");
            Livewire.dispatch('hideCanvas');
        });
    });
</script>

