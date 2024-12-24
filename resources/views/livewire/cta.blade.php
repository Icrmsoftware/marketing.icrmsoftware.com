<div>
    <div class="offcanvas offcanvas-bottom rounded-t-xl bg-stone-950 @if($this->canvas == 1) show @endif"
    {{-- :class="{'show': @entangle('canvas')}" --}}
    style="min-height: 85%;" tabindex="-1" id="CTA"
        aria-labelledby="CTALabel" data-bs-scroll="true">
        <div class="offcanvas-header bg-stone-950 rounded-t-xl">
            <button type="button" class="btn-close" style="color: white !important;"
                {{-- data-bs-dismiss="offcanvas" --}}
                {{-- aria-label="Close" --}}
                wire:click.prevent="closeCanvas()"
                >
                <i class="fa fa-times"></i></button>
        </div>
        <div class="offcanvas-body bg-stone-950 relative">

            <div class="container py-3">
                <div class="row">
                    <div class="col-12 my-auto text-center">
                        <h2 class="text-fuchsia-500 poppins-semibold text-5xl text-uppercase">
                            Avail 30% off + Free Content Writing
                        </h2>
                        <p class="text-gray-200 text-2xl my-3">Sign up before 31st December 2024 and enjoy an exclusive
                            discount on our services.</p>

                        <div class="row mt-5">
                            <div class="col-7 mx-auto">
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
                                    <h4 class="text-gray-400 inter-500">Claim Your Offer Now!</h4>
                                </div>
                                <div class="d-flex gap-4 justify-center">
                                    <div>
                                        <input type="text" class="form-control py-3" placeholder="Name">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control py-3" placeholder="Mobile number">
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

    <script>
        document.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY + window.innerHeight;
            const pageHeight = document.body.scrollHeight;
            const scrollPercent = (scrollPosition / pageHeight) * 100;

            // Pass the value directly as expected by the Livewire component
            Livewire.dispatch('updateCanvas', { value: scrollPercent > {{ $this->scroll }} });
        });
    </script>



</div>
