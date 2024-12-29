<section class="pt-md-5 pb-md-5" id="features" x-data="{ tab: 'Web Design' }">
    <div class="container py-5 py-md-3">
        <div class="row">
            <div class="col-12 col-lg-9 mx-auto">
                <div class="text-center mb-8 md:px-10">
                    <h2 class="text-5xl poppins-semibold text-stone-900 px-4 px-md-0">
                        What you will get?
                    </h2>
                    <p class="text-lg text-stone-950 mt-3">Everything you need to launch a high-performing, secure, and scalable website, tailored for your success.</p>
                </div>
                <div class="text-center d-flex flex-row gap-2 gap-lg-4 overflow-auto pb-3 pb-lg-0">
                    <div
                    class="
                        text-nowrap
                        cursor-pointer
                        text-base inter-600 rounded-5 py-2.5 px-4"
                    :class="tab == 'Web Design'
                            ? 'bg-stone-900 text-stone-50 shadow-sm'
                            : 'bg-white border-solid border-2 border-stone-300 text-stone-900 hover:border-stone-700'"
                    @click.prevent="tab = 'Web Design'"
                    >
                        Website Design
                    </div>

                    <div
                    class="
                        text-nowrap
                        cursor-pointer
                        text-base inter-600 rounded-5 py-2.5 px-4"
                    :class="tab == 'Content Management'
                            ? 'bg-stone-900 text-stone-50 shadow-sm'
                            : 'bg-white border-solid border-2 border-stone-300 text-stone-900 hover:border-stone-700'"
                    @click.prevent="tab = 'Content Management'"
                    >
                        Content Management
                    </div>

                    <div
                    class="
                        text-nowrap
                        cursor-pointer
                        text-base inter-600 rounded-5 py-2.5 px-4"
                    :class="tab == 'SEO'
                            ? 'bg-stone-900 text-stone-50 shadow-sm'
                            : 'bg-white border-solid border-2 border-stone-300 text-stone-900 hover:border-stone-700'"
                    @click.prevent="tab = 'SEO'"
                    >
                        SEO
                    </div>
                    <div
                    class="
                        text-nowrap
                        cursor-pointer
                        text-base inter-600 rounded-5 py-2.5 px-4"
                    :class="tab == 'Security & Hosting'
                            ? 'bg-stone-900 text-stone-50 shadow-sm'
                            : 'bg-white border-solid border-2 border-stone-300 text-stone-900 hover:border-stone-700'"
                    @click.prevent="tab = 'Security & Hosting'"
                    >
                        Security & Hosting
                    </div>
                    <div
                    class="
                        text-nowrap
                        cursor-pointer
                        text-base inter-600 rounded-5 py-2.5 px-4"
                    :class="tab == 'Technology Stack'
                            ? 'bg-stone-900 text-stone-50 shadow-sm'
                            : 'bg-white border-solid border-2 border-stone-300 text-stone-900 hover:border-stone-700'"
                    @click.prevent="tab = 'Technology Stack'"
                    >
                        Technology Stack
                    </div>
                </div>
            </div>

            <div class="col-11 mx-auto">
                <div class="py-4">
                    <div class="row gap-4" x-show="tab == 'Web Design'" x-cloak>
                        <div class="col-12 col-md bg-blue-200 shadow-md rounded-3 relative px-4 py-4">
                            <div>
                                <img src="{{ Voyager::image('/Images/Features/Web Design/Responsive Designs for All Devices.webp') }}"
                                class="img-fluid"
                                alt="">
                            </div>
                            <div>
                                <h3 class="text-xl poppins-semibold mb-2">Responsive Designs for All Devices</h3>
                                <p class="text-md inter-400">Your website will look stunning and function perfectly on desktops, tablets, and mobiles.</p>
                                <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')"
                                    class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                    Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg my-auto">
                            <div class="row gap-4">
                                <div class="col-12 col-md col-lg-12 bg-violet-200 shadow-md rounded-3 px-4 py-5 d-flex flex-column flex-lg-row gap-3">
                                    <div class="col-12 col-lg-5 my-auto">
                                        <img src="{{ Voyager::image('/Images/Features/Web Design/Custom Layouts Aligned with Your Brand.webp') }}"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-md-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Custom Layouts Aligned with Your Brand</h3>
                                        <p class="text-md inter-400">Designs tailored to reflect your brand’s personality and goals.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md col-lg-12 bg-green-200 shadow-md rounded-3 px-4 py-5 d-flex flex-column flex-lg-row gap-3">
                                    <div class="col-12 col-lg-5 my-auto">
                                        <img src="{{ Voyager::image('/Images/Features/Web Design/Fast-Loading, Sleek Interfaces.webp') }}"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-md-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Fast-Loading, Sleek Interfaces</h3>
                                        <p class="text-md inter-400">Deliver a seamless browsing experience with optimized, high-speed pages.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4" x-show="tab == 'Content Management'" x-cloak>
                        <div class="col my-auto">
                            <div class="row row-cols-3 g-4">
                                <div class="col-12 col-md-12 col-lg-4">
                                    <div class="bg-blue-200 shadow-md rounded-3 relative px-4 pt-3 pb-4 d-flex flex-column flex-md-row flex-lg-column gap-md-4 gap-lg-0">
                                        <div class="col-md-5 col-lg-12">
                                            <img src="{{ Voyager::image('/Images/Features/Content Management/Content Management System.webp') }}"
                                            class="img-fluid"
                                            alt="">
                                        </div>
                                        <div class="my-auto">
                                            <h3 class="text-xl poppins-semibold my-2">Content Management System</h3>
                                            <p class="text-md inter-400">Easily update and control your website content anytime.</p>
                                            <a data-bs-toggle="offcanvas"
                                                data-bs-target="#getStartedCanvas"
                                                aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                                Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="bg-pink-200 shadow-md rounded-3 px-4 pt-1 pb-5">
                                        <div class="col-12 my-auto">
                                            <img src="{{ Voyager::image('/Images/Features/Content Management/Real-Time Editing and Publishing.webp') }}"
                                            class="img-fluid"
                                            alt="">
                                        </div>
                                        <div class="my-auto">
                                            <h3 class="text-xl poppins-semibold mb-2">Real-Time Editing and Publishing</h3>
                                            <p class="text-md inter-400">Make changes and see them live instantly on your website.</p>
                                            <a data-bs-toggle="offcanvas"
                                        data-bs-target="#getStartedCanvas"
                                        aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                                Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="bg-purple-200 shadow-md rounded-3 px-4 pt-1 pb-5">
                                        <div class="col-12 my-auto">
                                            <img src="{{ Voyager::image('/Images/Features/Content Management/Scalable Structure for Growth.webp') }}"
                                            class="img-fluid"
                                            alt="">
                                        </div>
                                        <div class="my-auto">
                                            <h3 class="text-xl poppins-semibold mb-2">Scalable Structure for Growth</h3>
                                            <p class="text-md inter-400">Designed to grow with your business and its evolving needs.</p>
                                            <a data-bs-toggle="offcanvas"
                                        data-bs-target="#getStartedCanvas"
                                        aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                                Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4" x-show="tab == 'SEO'" x-cloak>
                        <div class="col-12 col-md bg-green-200 shadow-md rounded-3 relative px-4 py-5 py-md-4">
                            <div>
                                <img src="{{ Voyager::image('/Images/Features/SEO/Basic SEO Setup.webp') }}"
                                class="img-fluid"
                                alt="">
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl poppins-semibold my-2">Basic SEO Setup</h3>
                                <p class="text-md inter-400">Lay the foundation for better online visibility.</p>
                                <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                    Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg my-auto">
                            <div class="row gap-4">
                                <div class="col-12 bg-violet-200 shadow-md rounded-3 px-4 py-5 d-flex flex-column flex-sm-row">
                                    <div class="col-12 col-md-5 my-auto">
                                        <img src="{{ Voyager::image('/Images/Features/SEO/Optimized Meta Tags and Keywords.webp') }}"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Optimized Meta Tags and Keywords</h3>
                                        <p class="text-md inter-400">Ensure your website aligns with search engine requirements.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 bg-blue-200 shadow-md rounded-3 px-4 py-5 d-flex flex-column flex-sm-row">
                                    <div class="col-12 col-md-5 my-auto py-2">
                                        <img src="{{ Voyager::image('/Images/Features/SEO/Performance Tracking.webp') }}"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Performance Tracking</h3>
                                        <p class="text-md inter-400">Monitor your rankings and improve over time.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab == 'Security & Hosting'" x-cloak>
                        <div class="row gap-4">
                            <div class="col-12 col-md-12 col-lg bg-teal-200 shadow-md rounded-3 relative px-4 py-4">
                                <div class="col m-auto">
                                    <img src="{{ Voyager::image('/Images/Features/Security & Hosting/SSL Certification.webp') }}"
                                    class="img-fluid"
                                    alt="">
                                </div>
                                <div class="mt-2 mt-md-0 mt-lg-4">
                                    <h3 class="text-xl poppins-semibold my-2">SSL Certification</h3>
                                    <p class="text-md inter-400">Protect your website and its users with top-notch encryption.</p>
                                    <a data-bs-toggle="offcanvas"
                                        data-bs-target="#getStartedCanvas"
                                        aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                        Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md bg-blue-200 shadow-md rounded-3 px-4 py-5">
                                <div class="col my-auto">
                                    <img src="{{ Voyager::image('/Images/Features/Security & Hosting/Automatic Backups.webp') }}"
                                    class="img-fluid"
                                    alt="">
                                </div>
                                <div class="my-auto ps-md-3 mt-4">
                                    <h3 class="text-xl poppins-semibold mb-2">Automatic Backups</h3>
                                    <p class="text-md inter-400">Keep your data safe with regular and reliable backups.</p>
                                    <a data-bs-toggle="offcanvas"
                                data-bs-target="#getStartedCanvas"
                                aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                        Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md bg-yellow-200 shadow-md rounded-3 px-4 py-5">
                                <div class="col my-auto py-2">
                                    <img src="{{ Voyager::image('/Images/Features/Security & Hosting/High-Speed Hosting.webp') }}"
                                    class="img-fluid"
                                    alt="">
                                </div>
                                <div class="my-auto ps-md-3 mt-2">
                                    <h3 class="text-xl poppins-semibold mb-2">High-Speed Hosting</h3>
                                    <p class="text-md inter-400">Enjoy faster load times with scalable, high-performance AWS servers.</p>
                                    <a data-bs-toggle="offcanvas"
                                data-bs-target="#getStartedCanvas"
                                aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                        Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab == 'Technology Stack'" x-cloak>
                        <div class="row row-cols-2 g-4">
                            <div class="col-12 col-lg-6">
                                <div class="d-flex gap-4 flex-column flex-sm-row bg-indigo-200 shadow-md rounded-3 px-4 py-5">
                                    <div class="col-12 col-md-4 m-auto">
                                        <img src="{{ Voyager::image('/Images/Features/Technology Stack/Laravel Framework.webp') }}"
                                             class="img-fluid px-5"
                                             alt="Laravel Framework">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold my-2">Laravel Framework</h3>
                                        <p class="text-md inter-400">Power your applications with one of the most elegant and robust PHP frameworks.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex gap-4 flex-column flex-sm-row bg-green-200 shadow-md rounded-3 px-4 py-5">
                                    <div class="col-12 col-md-4 my-auto">
                                        <img src="{{ Voyager::image('/Images/Features/Technology Stack/Livewire Components.webp') }}"
                                             class="img-fluid"
                                             alt="Livewire Logo">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Livewire Components</h3>
                                        <p class="text-md inter-400">Enhance user experience with dynamic, reactive components.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex gap-4 flex-column flex-sm-row bg-purple-200 shadow-md rounded-3 px-4 py-5">
                                    <div class="col-12 col-md-4 my-auto">
                                        <img src="{{ Voyager::image('/Images/Features/Technology Stack/Bootstrap Framework.webp') }}"
                                             class="img-fluid"
                                             alt="Bootstrap Logo">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Bootstrap Framework</h3>
                                        <p class="text-md inter-400">Create responsive, mobile-first designs effortlessly.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex gap-4 flex-column flex-sm-row bg-teal-200 shadow-md rounded-3 px-4 py-5">
                                    <div class="col-12 col-md-4 my-auto py-2">
                                        <img src="{{ Voyager::image('/Images/Features/Technology Stack/Tailwind CSS.webp') }}"
                                             class="img-fluid py-2.5"
                                             alt="Tailwind CSS Logo">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Tailwind CSS</h3>
                                        <p class="text-md inter-400">Design faster with a modern utility-first CSS framework.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mx-auto">
                                <div class="d-flex gap-4 flex-column flex-sm-row bg-yellow-200 shadow-md rounded-3 px-4 py-5">
                                    <div class="col-12 col-md-4 my-auto py-2">
                                        <img src="{{ Voyager::image('/Images/Features/Technology Stack/jQuery Library.webp') }}"
                                             class="img-fluid"
                                             alt="jQuery Logo">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">jQuery Library</h3>
                                        <p class="text-md inter-400">Simplify scripting and enhance your application's interactivity.</p>
                                        <a data-bs-toggle="offcanvas"
                                    data-bs-target="#getStartedCanvas"
                                    aria-controls="getStartedCanvas"
                                    onclick="Livewire.dispatch('openGetStartedCanvas')" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
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
</section>
