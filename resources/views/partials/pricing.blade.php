<section class="py-5 bg-stone-900" id="pricing">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto my-auto text-center mb-5">
                        <h2 class="text-4xl md:text-5xl poppins-semibold text-white">
                            Know exactly what you’re paying for, no surprises.
                        </h2>
                        <p class="text-gray-400 text-lg mt-3">
                            Keeping everything transparent and clear.
                        </p>
                    </div>
                    <div class="col-12 col-lg-12 mx-auto">
                        <div class="d-flex flex-column flex-lg-row gap-5 gap-sm-4">
                            @foreach (config('icrm.pricing') as $plan)
                            <div class="col p-4 bg-stone-900 border-solid border-1 border-gray-200 rounded-lg shadow sm:p-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-400">{{ $plan['name'] }}</h3>
                                <div class="flex items-baseline">
                                    <span class="text-3xl font-semibold text-white">₹</span>
                                    <span class="text-5xl font-extrabold tracking-tight text-white">{{number_format($plan['mrp'] * ( 100 - $plan['discount']) / 100) }}</span>
                                    <span class="ms-1 text-xl font-normal text-gray-400 line-through">₹{{number_format($plan['mrp']) }}</span>
                                </div>
                                <ul role="list" class="space-y-5 my-7">
                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            One-time charges
                                        </span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Upto {{ $plan['pages'] }} web pages
                                        </span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Website hosting
                                        </span>
                                    </li>

                                    <li class="flex items-center">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Content writing
                                        </span>
                                    </li>



                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Content management system
                                        </span>
                                    </li>

                                    <li class="flex @if ($plan['analytics'] === 0) line-through opacity-50 @endif decoration-gray-500">
                                        <svg class="flex-shrink-0 w-4 h-4 @if ($plan['analytics'] === 0) text-gray-400 @else text-lime-400 @endif" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">Google Analytics</span>
                                    </li>

                                    <li class="flex @if ($plan['chat'] === 0) line-through opacity-50 @endif decoration-gray-500">
                                        <svg class="flex-shrink-0 w-4 h-4 @if ($plan['chat'] === 0) text-gray-400 @else text-lime-400 @endif" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">Real-time chatbot</span>
                                    </li>

                                    <li class="flex @if ($plan['email'] === 0) line-through opacity-50 @endif decoration-gray-500">
                                        <svg class="flex-shrink-0 w-4 h-4 @if ($plan['email'] === 0) text-gray-400 @else text-lime-400 @endif" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">Email integration</span>
                                    </li>

                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Basic SEO setup
                                        </span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Mobile-friendly design
                                        </span>
                                    </li>
                                    <li class="flex">
                                        <svg class="flex-shrink-0 w-4 h-4 text-lime-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="text-base font-normal leading-tight text-gray-400 ms-3">
                                            Fast-loading pages
                                        </span>
                                    </li>

                                </ul>
                                <button type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#getStartedCanvas"
                                aria-controls="getStartedCanvas"
                                onclick="Livewire.dispatch('openGetStartedCanvas')"
                                    class="text-white bg-fuchsia-700 hover:bg-lime-500
                                    focus:ring-4 focus:outline-none focus:ring-blue-200
                                    font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                                    Choose
                                    plan</button>
                                <div class="flex items-baseline text-gray-900 dark:text-white my-2">
                                    <span class="ms-1 text-md font-normal text-gray-400">₹3,000/- Annual Web Hosting Renewal Fee</span>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="mt-4"
                        >
                            <a
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offerCanvas"
                            aria-controls="offerCanvas"
                            onclick="Livewire.dispatch('openOfferCanvas')"
                             class="text-center text-stone-400 cursor-pointer">
                                <h3>Apply for exclusive upto 30% discounts on our services by <u class="text-fuchsia-400">clicking here</u>
                                    <div class="spinner-grow text-lime-400 h-3 w-3 ms-2" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="bg-fuchsia-950 sticky-top d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto py-4 py-md-1">
                <div class="d-flex gap-1 justify-between">
                    <div class="my-auto text-center">
                        <h3 class="text-xl md:text-2xl text-white">
                            <span class="d-none d-md-block">iCommerce has been recognized as a leader across all major review platforms.</span>
                            <span class="d-block d-md-none">iCommerce has been recognized as a leader.</span>
                        </h3>
                    </div>
                    <div class="my-auto d-flex gap-1 gap-sm-4 py-2 justify-center">
                        <div>
                            <img src="{{ Voyager::image('/Images/01.webp') }}"
                            class="img-fluid h-16 rounded-1"
                            alt="">
                        </div>
                        <div>
                            <img src="{{ Voyager::image('/Images/02.webp') }}"
                            class="img-fluid h-16 rounded-1"
                            alt="">
                        </div>
                        <div>
                            <img src="{{ Voyager::image('/Images/03.webp') }}"
                            class="img-fluid h-16 rounded-1"
                            alt="">
                        </div>
                        <div>
                            <img src="{{ Voyager::image('/Images/04.webp') }}"
                            class="img-fluid h-16 rounded-1"
                            alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
