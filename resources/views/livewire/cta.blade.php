<div>
    <div class="offcanvas offcanvas-bottom bg-slate-950 mx-10 max-w-6xl m-auto"
    style="min-height: 100%;"
    data-bs-scroll="true"
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
        <div class="offcanvas-body relative px-5 my-auto">

            <div class="container py-3">
                <div class="row">
                    <div class="col-12 my-auto text-center">
                        <h2 class="text-fuchsia-500 poppins-semibold text-5xl text-uppercase">
                            Avail 30% off + Free Content Writing
                        </h2>
                        <p class="text-gray-200 text-2xl my-3">Sign up before 31st December 2024 and enjoy an exclusive
                            discount on our services.</p>

                        <div class="row mt-5">
                            <div class="col-8 mx-auto">
                                <div class="d-flex gap-4 justify-center">
                                    <div
                                        class="border-solid border-1 border-stone-100 py-3 px-4 text-start rounded-lg shadow-lg">
                                        <div class="text-gray-300">
                                            Startup plan
                                        </div>
                                        <div class="flex items-baseline text-gray-900 dark:text-white">
                                            <span class="text-3xl font-semibold">₹</span>
                                            <span class="text-5xl font-extrabold tracking-tight">17,500</span>
                                            <span class="ms-1 text-xl font-normal text-gray-400"><strike>₹25,000</strike></span>
                                        </div>
                                    </div>
                                    <div
                                        class="border-solid border-1 border-stone-100 py-3 px-4 text-start rounded-lg shadow-lg">
                                        <div class="text-gray-300">
                                            Enterprise plan
                                        </div>
                                        <div class="flex items-baseline text-gray-900 dark:text-white">
                                            <span class="text-3xl font-semibold">₹</span>
                                            <span class="text-5xl font-extrabold tracking-tight">24,500</span>
                                            <span class="ms-1 text-xl font-normal text-gray-400"><strike>₹35,000</strike></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5 mb-3">
                                    <h4 class="text-amber-400 inter-500 text-2xl animate-bounce">Claim Your Offer Now!</h4>
                                </div>
                                <div class="d-flex gap-4 justify-center">
                                    <div>
                                        <input type="text" class="form-control py-3" placeholder="Your name">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control py-3" placeholder="Contact number">
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="btn h-100 px-4 rounded-1 py-2.5 bg-fuchsia-700 hover:bg-fuchsia-500 text-white text-uppercase font-semibold pt-3">
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
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

            // Get the target element
            const ctaElement = document.getElementById("offerCanvas");

            // Show the offcanvas if the user has scrolled 75% and it hasn't been shown before
            if (scrollPosition >= 0.70 && !canvasShown) {
                ctaElement.classList.add("show");
                canvasShown = true; // Update the flag to prevent showing again
            }
        });

        // Close button logic to hide the offcanvas
        document.getElementById("closeCanvas").addEventListener("click", function () {
            const ctaElement = document.getElementById("offerCanvas");
            ctaElement.classList.remove("show");
        });
    });
</script>
