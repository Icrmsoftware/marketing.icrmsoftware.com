<section id="faq" class="py-5 bg-stone-900">
    <div class="container py-5">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="text-5xl poppins-semibold text-white lh-2">
                        Got Questions? We’ve Got Answers!
                    </h2>
                    <p class="text-lg text-gray-400 mt-3">
                        Find quick answers to the most common questions about our website design services.
                    </p>
                </div>

                <div>
                    <div class="row">
                        <div class="col-8 mx-auto" x-data="{ faq: 1 }">

                            <div class="py-3 px-3" @click.prevent="faq = 1">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 1 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q1: How long does it take to design and launch a website?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 1" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 1" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 1" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">The timeline depends on the complexity of your requirements. On average, a basic website takes 4-7 days to design and launch. We ensure timely delivery without compromising on quality.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 2">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 2 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q2: Will my website be mobile-friendly?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 2" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 2" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 2" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Absolutely! All our designs are fully responsive, ensuring your website looks great and functions perfectly on any device.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 3">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 3 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q3: Do you provide hosting and domain services?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 3" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 3" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 3" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Yes, we offer secure hosting as part of our services. However, domain registration can either be handled by us or managed on your end.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 4">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 4 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q4: Can I update my website after it’s live?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 4" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 4" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 4" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Of course! With our intuitive content management system (CMS), you can easily make updates to your website without any technical expertise.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 5">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 5 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q5: What is included in the SEO setup?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 5" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 5" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 5" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Our SEO setup includes optimizing meta tags, keywords, and content structure to improve your website’s visibility on search engines.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 6">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 6 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q6: How much does a website cost?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 6" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 6" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 6" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Pricing depends on your requirements. We offer transparent pricing with packages starting at ₹25,000 for a one-time plan.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 7">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 7 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q7: Do you offer ongoing support after the website launch?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 7" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 7" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 7" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Yes! We provide maintenance and support services to ensure your website runs smoothly and stays up to date.</p>
                                </div>
                            </div>

                            <div class="py-3 px-3" @click.prevent="faq = 8">
                                <div class="pt-3 pb-3 cursor-pointer"
                                    :class="faq == 8 ? 'bg-fuchsia-900' : 'bg-stone-800 border-b hover:bg-stone-700'">
                                    <div class="d-flex justify-between">
                                        <div class="px-3">
                                            <h3 class="text-slate-100 text-xl">Q8: What if I don’t have content for my website?</h3>
                                        </div>
                                        <div class="text-stone-200 pe-3">
                                            <i class="fa-regular fa-chevron-down" x-show="faq == 8" x-cloak></i>
                                            <i class="fa-regular fa-chevron-up" x-show="faq != 8" x-cloak></i>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="faq == 8" x-cloak class="py-4 px-3 bg-stone-800 text-gray-300">
                                    <p class="text-lg mt-2">Don’t worry! We can assist with content creation to ensure your website communicates effectively with your audience.</p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
