<section id="hero" class="bg-white">
    <div class="container py-md-5 px-0">
        <div class="d-flex flex-column flex-md-row gap-sm-4">
            <div
                class="col-span-3 md:rounded-xl
            bg-purple-100 shadow-md
            cursor-pointer relative overflow-hidden">
                <div class="my-auto justify-center">
                    <div class="d-flex flex-column flex-sm-row">
                        <div class="col-sm-8
                        ps-md-4 pe-md-5
                        py-8 px-3
                        py-md-5">
                            <h1 class="poppins-semibold text-4xl md:text-6xl text-uppercase">
                                <span>Web Development</span> Services For Your Revenue Growth
                            </h1>
                            <h3 class="text-lg md:text-xl ps-2 text-zinc-600 mt-3 mb-2 inter-400">
                                Your vision, our design expertise. Build a website that not only looks great but works
                                to convert visitors into loyal customers.
                            </h3>
                            <div class="d-flex gap-3 mt-4 ms-2">
                                <div>
                                    <a data-bs-toggle="offcanvas" data-bs-target="#getStartedCanvas"
                                        aria-controls="getStartedCanvas"
                                        onclick="Livewire.dispatch('openGetStartedCanvas')"
                                        class="btn btn-dark rounded-3 text-md md:text-lg py-2.5 px-4 font-semibold text-uppercase">
                                        Apply Now
                                    </a>
                                    <p class="mt-3 text-md md:text-md text-zinc-500 inter-300">Get Your Free Consultation Today!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="my-auto">
                            <img src="https://cdn.prod.website-files.com/5d816b07d269385f68dbcab0/60f6ec4d104e8f554cf58781_greg-gunn-illustration-for-designers-3-start-illustrating-1080x1080-min.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 bg-stone-950 md:rounded-xl overflow-hidden justify-content-center shadow flex items-center">
                <div class="my-auto px-4 py-4">
                    <div class="d-flex mb-3">
                        <div
                            class="border-solid border-1 border-store-200
                        bg-purple-300 text-stone-950
                        py-0 px-3
                        rounded-2
                        text-md font-semibold">
                            <div class="d-flex my-auto">
                                <div class="my-auto">
                                    <img src="https://media1.giphy.com/media/C8QrVDET9w1NFgoRfj/giphy.gif"
                                        class="img-fluid h-10" alt="">
                                </div>
                                <div class="my-auto">
                                    Helpdesk Support
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-white text-3xl poppins-medium">
                        {{-- Get Free Consultation --}}
                        {{-- Need Help? --}}
                        Existing User?
                    </h2>
                    <p class="text-gray-300 text-base font-normal my-1">
                        If you need help optimizing your website, we're just a message away to assist you!
                    </p>

                    <div class="mt-4">
                        <a data-bs-toggle="offcanvas" data-bs-target="#getStartedCanvas"
                            aria-controls="getStartedCanvas" onclick="Livewire.dispatch('openGetStartedCanvas')"
                            class="btn btn-lg
                        border-solid border-1
                        {{-- bg-lime-400 hover:bg-lime-300 text-zinc-950 --}}
                        bg-stone-50 hover:bg-lime-400 text-zinc-950
                        rounded-1
                        inter-500 text-base
                        ">
                            <i class="fa-light fa-phone-volume me-2"></i>
                            Request a call
                        </a>
                    </div>
                    <p class="text-gray-300 text-sm inter-300 font-normal mt-3">
                        Support available 24x7
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="bg-white">
    <div class="container">
        <div class="row border-b">
            <div class="row gap-4 my-auto min-h-screen">
                <div class="col-7 my-auto">
                    <h1 class="text-7xl text-uppercase poppins-extrabold text-black">
                        Web Development Services For Your Business
                    </h1>
                    <h3 class="text-xl ps-2 text-zinc-600 mt-3 mb-2 inter-400">
                        Your vision, our design expertise. Build a website that not only looks great but works to convert visitors into loyal customers.
                    </h3>
                    <div class="d-flex gap-3 mt-4 ms-2">
                        <div>
                            <a href="#" class="btn bg-lime-300 hover:bg-lime-400 text-zinc-900 rounded-3 text-lg py-2.5 px-4 font-semibold text-uppercase">
                                Apply Now
                            </a>
                            <p class="mt-3 text-md text-zinc-500 inter-300">Get Your Free Consultation Today!</p>
                        </div>
                    </div>
                </div>
                <div class="col my-auto">
                    <div class="row">
                        <div class="col-11 mx-auto">
                            <div class="bg-white rounded-3 px-10 py-10 shadow-xl border">
                                <div class="mb-4">
                                    <h2 class="fw-semibold text-black text-2xl poppins-semibold">Get Free Consultation</h2>
                                    <p class="text-zinc-600 text-lg mt-1 inter-400">
                                        Please enter your contact information
                                    </p>
                                </div>
                                <hr class="mb-4">
                                <div class="d-flex flex-column gap-4">
                                    <div class="form-group">
                                        <label class="font-regular mb-2 text-md">Full name <i class="text-danger">*</i></label>
                                        <input type="text" class="form-control border rounded-1">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-regular mb-2 text-md">Mobile number <i class="text-danger">*</i></label>
                                        <input type="text" class="form-control border rounded-1">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-regular mb-2 text-md">Email <small class="opacity-75">(optional)</small></label>
                                        <input type="text" class="form-control border rounded-1">
                                    </div>
                                    <div class="form-group text-zinc-500">
                                        <input type="checkbox" class="accent-pink-300 me-1" checked> I agree to the terms and conditions of ICRM Software Pvt Ltd
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-md bg-gray-800 hover:bg-gray-700 cursor-pointer text-white rounded-1 poppins-medium">
                                            Submit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4 text-center">
                <p class="text-lg font-regular text-zinc-500">
                    Join 300+ B2B Brands Who Trusted ICRM Software to Design Their Websites in November 2024!
                </p>
            </div>
        </div>
    </div>
</section> --}}
