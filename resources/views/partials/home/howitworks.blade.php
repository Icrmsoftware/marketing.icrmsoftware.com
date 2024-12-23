<section id="howitworks" class="py-5 bg-stone-100" x-data="{ tab: '1' }">
    <div class="container py-5">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="text-stone-900 text-5xl poppins-semibold">Launch your website in three easy steps</h2>
                </div>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/hNJHF65S6Go?si=KXvD0LSS7nr0Fnwj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="mt-4">
                    <div class="d-flex gap-4">
                        <div class="
                        rounded-3 py-4 px-4 cursor-pointer"
                        :class="tab == 1 ? 'bg-stone-900 shadow-sm border-solid border-1 border-stone-300' : 'bg-stone-200 shadow-sm border-solid border-1 border-stone-300'" x-cloak
                        @click.prevent="tab = 1"
                        >
                            <div class="text-1xl font-semibold mb-3" :class="tab == 1 ? 'text-lime-200' : 'text-black'">
                                STEP 01
                            </div>
                            <h3 class="text-xl inter-600 "
                            :class="tab == 1 ? 'text-gray-200' : 'text-black'"
                            >Tell Us What You Need</h3>
                            <p class="inter-400 text-md mt-2"
                            :class="tab == 1 ? 'text-gray-400' : 'text-stone-600'"
                            >Share your goals, ideas, and vision. We’ll listen, understand, and create a plan tailored just for you.</p>
                        </div>

                        <div class="
                        rounded-3 py-4 px-4 cursor-pointer"
                        :class="tab == 2 ? 'bg-stone-900 shadow-sm border-solid border-1 border-stone-300' : 'bg-stone-200 shadow-sm border-solid border-1 border-stone-300'" x-cloak

                        @click.prevent="tab = 2"
                        >
                            <div class="text-1xl font-semibold mb-3" :class="tab == 2 ? 'text-lime-200' : 'text-black'">
                                STEP 02
                            </div>
                            <h3 class="text-xl inter-600 "
                            :class="tab == 2 ? 'text-gray-200' : 'text-black'"
                            >Watch Your Website Take Shape</h3>
                            <p class="inter-400 text-md mt-2"
                            :class="tab == 2 ? 'text-gray-400' : 'text-stone-600'"
                            >Our team designs and builds a beautiful, user-friendly website that matches your vision and brand perfectly.</p>
                        </div>

                        <div class="
                        rounded-3 py-4 px-4 cursor-pointer"
                        :class="tab == 3 ? 'bg-stone-900 shadow-sm border-solid border-1 border-stone-300' : 'bg-stone-200 shadow-sm border-solid border-1 border-stone-300'" x-cloak

                        @click.prevent="tab = 3"
                        >
                            <div class="text-1xl font-semibold mb-3" :class="tab == 3 ? 'text-lime-200' : 'text-black'">
                                STEP 03
                            </div>
                            <h3 class="text-xl inter-600 "
                            :class="tab == 3 ? 'text-gray-200' : 'text-black'"
                            >Launch and Grow Together</h3>
                            <p class="inter-400 text-md mt-2"
                            :class="tab == 3 ? 'text-gray-400' : 'text-stone-600'"
                            >Once your website is live, we’re here to support you with updates, growth strategies, and ongoing success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-10 bg-green-950">
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
</section>
