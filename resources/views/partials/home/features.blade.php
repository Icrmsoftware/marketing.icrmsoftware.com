<section class="pb-5" id="features" x-data="{ tab: 'Web Design' }">
    <div class="container py-3">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-5xl poppins-semibold text-stone-900">
                        What you will get?
                    </h2>
                    <p class="text-lg text-stone-950 mt-3">Everything you need to launch a high-performing, secure, and scalable website, tailored for your success.</p>
                </div>
                <div class="text-center d-flex gap-4 justify-center">
                    <div
                    class="
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
                        cursor-pointer
                        text-base inter-600 rounded-5 py-2.5 px-4"
                    :class="tab == 'Security & Hosting'
                            ? 'bg-stone-900 text-stone-50 shadow-sm'
                            : 'bg-white border-solid border-2 border-stone-300 text-stone-900 hover:border-stone-700'"
                    @click.prevent="tab = 'Security & Hosting'"
                    >
                        Security & Hosting
                    </div>
                </div>
            </div>

            <div class="col-11 mx-auto">
                <div class="py-4">
                    <div class="row gap-4" x-show="tab == 'Web Design'" x-cloak>
                        <div class="col bg-yellow-300 shadow-md rounded-3 relative px-4 py-4">
                            <div>
                                <img src="https://miro.medium.com/v2/resize:fit:1155/1*ePAhjWouJdh8SRKEiXcmsA.png"
                                class="img-fluid"
                                alt="">
                            </div>
                            <div>
                                <h3 class="text-xl poppins-semibold mb-2">Responsive Designs for All Devices</h3>
                                <p class="text-md inter-400">Your website will look stunning and function perfectly on desktops, tablets, and mobiles.</p>
                                <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                    Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col my-auto">
                            <div class="row gap-4">
                                <div class="col-12 bg-lime-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto">
                                        <img src="https://images.squarespace-cdn.com/content/v1/5fac4b921ca05f08cb315e40/55ed030e-4255-4db5-9297-312d094c6da4/Squarespace+Web+Designer+%2B+Freelance+Squarespace+Web+Designer+%2B+Squarespace+Web+Design+Packages+%2B+Squarespace+Designer+%2B+Best+Squarespace+Designers+%2B+Squarespace+Website+Designer+%2B+Hire+Squarespace+Designer+%2B+Best+Squarespace+Web+Designers+%2B+Custom+Squarespace+Website+%2B+Squarespace+for+Designers+%2B+Website+Designer+Squarespace%2C+Web+Designer+Squarespace%2C+Squarespace+Web+Developer%2C+squarespace+site+designer"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Custom Layouts Aligned with Your Brand</h3>
                                        <p class="text-md inter-400">Designs tailored to reflect your brand’s personality and goals.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 bg-teal-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto">
                                        <img src="https://www.altisinfonet.com/wp-content/uploads/elementor/thumbs/fontend-developer-qalksnrfpsn8sbvycbgz1as8rje3gtgp7mzrvg0we8.png"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Fast-Loading, Sleek Interfaces</h3>
                                        <p class="text-md inter-400">Deliver a seamless browsing experience with optimized, high-speed pages.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4" x-show="tab == 'Content Management'" x-cloak>
                        <div class="col bg-blue-300 shadow-md rounded-3 relative px-4 py-4">
                            <div>
                                <img src="https://www.concretecms.com/application/files/8716/5117/8644/Concrete5_Sc_3.ai_gc.png"
                                class="img-fluid"
                                alt="">
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl poppins-semibold my-2">Intuitive Content Management System</h3>
                                <p class="text-md inter-400">Easily update and control your website content anytime.</p>
                                <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                    Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col my-auto">
                            <div class="row gap-4">
                                <div class="col-12 bg-pink-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto">
                                        <img src="https://images.ctfassets.net/fo9twyrwpveg/3ZYP6K4fQbDtogCoOewtsg/782336131bddc98413b35f14e5f00a07/home-create.png?fm=webp&w=3840&q=100"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Real-Time Editing and Publishing</h3>
                                        <p class="text-md inter-400">Make changes and see them live instantly.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 bg-purple-300 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto py-2">
                                        <img src="https://static.agilitycms.com/panels/header-persona-marketing2x_20201013042222_0-1_20201022085813_0.png?format=auto&w=640"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Scalable Structure for Growth</h3>
                                        <p class="text-md inter-400">Designed to grow with your business and its evolving needs.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4" x-show="tab == 'SEO'" x-cloak>
                        <div class="col bg-green-200 shadow-md rounded-3 relative px-4 py-4">
                            <div>
                                <img src="https://seranking.com/wp-content/uploads/sites/9/2022/05/why-on-page.png"
                                class="img-fluid"
                                alt="">
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl poppins-semibold my-2">Basic SEO Setup</h3>
                                <p class="text-md inter-400">Lay the foundation for better online visibility.</p>
                                <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                    Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col my-auto">
                            <div class="row gap-4">
                                <div class="col-12 bg-violet-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto">
                                        <img src="https://replug.io/_next/image?url=%2Fassets%2Fimages%2Ftools%2Fmeta-tags-generator%2F1.png&w=3840&q=75"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Optimized Meta Tags and Keywords</h3>
                                        <p class="text-md inter-400">Ensure your website aligns with search engine requirements.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 bg-blue-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto py-2">
                                        <img src="https://www.seoptimer.com/frontend-new/images/pages/index_en.png"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Performance Tracking</h3>
                                        <p class="text-md inter-400">Monitor your rankings and improve over time.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gap-4" x-show="tab == 'Security & Hosting'" x-cloak>
                        <div class="col bg-teal-200 shadow-md rounded-3 relative px-4 py-4">
                            <div class="m-auto">
                                <img src="https://www.aidniinfotech.com/images/SSL-Certificate.png"
                                class="img-fluid"
                                alt="">
                            </div>
                            <div class="mt-3">
                                <h3 class="text-xl poppins-semibold my-2">SSL Certification</h3>
                                <p class="text-md inter-400">Protect your website and its users with top-notch encryption.</p>
                                <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                    Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col my-auto">
                            <div class="row gap-4">
                                <div class="col-12 bg-blue-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto">
                                        <img src="https://www.nakivo.com/wp-content/uploads/2024/08/aws_ec2_instance_asset.webp"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">Automatic Backups</h3>
                                        <p class="text-md inter-400">Keep your data safe with regular and reliable backups.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
                                            Learn more <i class="fa-light fa-arrow-right ms-1 animate-bounce"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 bg-yellow-200 shadow-md rounded-3 px-4 py-5 d-flex">
                                    <div class="col-5 my-auto py-2">
                                        <img src="https://serverguy.com/wp-content/uploads/2020/08/High-Bandwidth-Indian-Server.webp"
                                        class="img-fluid"
                                        alt="">
                                    </div>
                                    <div class="my-auto ps-3">
                                        <h3 class="text-xl poppins-semibold mb-2">High-Speed Hosting</h3>
                                        <p class="text-md inter-400">Enjoy faster load times with scalable, high-performance AWS servers.</p>
                                        <a href="#" class="btn btn-dark rounded-2 btn-md mt-3 text-base inter-500">
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
