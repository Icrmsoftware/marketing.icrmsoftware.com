<section id="howitworks" class="pb-5 bg-white relative" x-data="{ tab: 1 }">
    <div class="container">
        <div class="row">
            <div class="col-9 mx-auto">
                <div class="text-center mb-5">
                    <div class="row">
                        <div class="col-7 mx-auto">
                            <h2 class="text-5xl poppins-semibold text-stone-900 lh-2">
                                Launch your website in 03 easy steps
                            </h2>
                            <p class="text-lg text-stone-950 mt-3">
                                Bring your vision to life and go live effortlessly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-5">
                    <div class="col-2">
                        <div class="d-flex flex-column gap-4">
                            @for ($step = 0; $step < 3; $step++)
                            <div class="
                            rounded-5 py-3.5 px-2 cursor-pointer
                            text-center my-auto shadow-sm"
                            :class="tab == {{ $step+1 }} ? 'bg-stone-900 text-stone-200 hover:text-purple-400' :
                            'border-solid border-2 hover:bg-stone-100'"
                            @click.prevent="tab = {{ $step+1 }}"
                            >
                                <div class="my-auto text-1xl font-semibold">
                                    STEP {{ $step+1 }}
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="rounded-3">
                        <div x-show="tab == 1" class="bg-stone-100 p-4">
                            <div class="mb-2">
                                STEP 01
                            </div>
                            <h3 class="text-3xl poppins-semibold text-black">Tell Us What You Need</h3>
                            <p class="inter-400 text-lg mt-1 text-stone-700">Share your goals, ideas, and vision. We’ll listen, understand, and create a plan tailored just for you.</p>
                            <div class="mt-4">
                                <img src="{{ Voyager::image('/Images/headway-5QgIuuBxKwM-unsplash(1).jpg') }}"
                                class="img-fluid rounded-3 h-100"
                                alt="Tell Us What You Need">
                            </div>
                        </div>

                        <div x-show="tab == 2" class="bg-stone-100 p-4">
                            <h3 class="text-3xl poppins-semibold text-black">Watch Your Website Take Shape</h3>
                            <p class="inter-400 text-lg mt-1 text-stone-700">Our team designs and builds a beautiful, user-friendly website that matches your vision and brand perfectly.</p>
                            <div class="mt-4">
                                <img src="{{ Voyager::image('/Images/bruce-mars-FWVMhUa_wbY-unsplash.jpg') }}"
                                class="img-fluid rounded-3 h-100"
                                alt="Tell Us What You Need">
                            </div>
                        </div>

                        <div x-show="tab == 3" class="bg-stone-100 p-4">
                            <h3 class="text-3xl poppins-semibold text-black">Launch and Grow Together</h3>
                            <p class="inter-400 text-lg mt-1 text-stone-700">Once your website is live, we’re here to support you with updates, growth strategies, and ongoing success.</p>
                            <div class="mt-4">
                                <img src="{{ Voyager::image('/Images/magnet-me-315vPGsAFUk-unsplash.jpg') }}"
                                class="img-fluid rounded-3 h-100"
                                alt="Tell Us What You Need">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- <section class="py-10 bg-green-950">
    <div class="container pt-5 pb-2">
        <div class="row my-auto">
            <div class="col my-auto">
                <img src="https://media0.giphy.com/media/JTVWACMOESFcA1oewp/giphy.gif?cid=6c09b952p4gs2s59o4bct5cmsc4eep4c511xz72x21ogzc10&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=s"
                class="img-fluid"
                alt="Launch your website in three easy steps">
            </div>
            <div class="col my-auto">
                <div class="mb-4">
                    <h2 class="text-5xl text-uppercase poppins-extrabold text-white">
                        Launch your website in three easy steps
                    </h2>
                </div>
                <div class="d-flex gap-4 py-2 mb-4">
                    <div>
                        <div class="text-6xl fw-semibold poppins-bold text-lime-400 opacity-75">01</div>
                    </div>
                    <div>
                        <h3 class="text-xl poppins-semibold text-lime-400">Tell Us What You Need</h3>
                        <p class="inter-400 text-lg mt-2 text-light">Share your goals, ideas, and vision. We’ll listen, understand, and create a plan tailored just for you.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 py-2 mb-4">
                    <div>
                        <div class="text-6xl fw-semibold poppins-bold text-lime-400 opacity-75">02</div>
                    </div>
                    <div>
                        <h3 class="text-xl poppins-semibold text-lime-400">Watch Your Website Take Shape</h3>
                        <p class="inter-400 text-lg mt-2 text-light">Our team designs and builds a beautiful, user-friendly website that matches your vision and brand perfectly.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 py-2 mb-4">
                    <div>
                        <div class="text-6xl fw-semibold poppins-bold text-lime-400 opacity-75">03</div>
                    </div>
                    <div>
                        <h3 class="text-xl poppins-semibold text-lime-400">Launch and Grow Together</h3>
                        <p class="inter-400 text-lg mt-2 text-light">Once your website is live, we’re here to support you with updates, growth strategies, and ongoing success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
