@if (Session::has('alert-message'))
    <div class="bg-lime-500 py-5 my-auto">
        <div class="text-center text-stone-950 inter-500 cursor-pointer text-2xl">
            <h3>{{ Session::get('alert-message') }}</h3>
        </div>
    </div>
@else
    {{-- <div class="bg-fuchsia-950 pt-3 pb-3 my-auto">
    <a data-bs-toggle="offcanvas" data-bs-target="#offerCanvas" aria-controls="offerCanvas"
        class="text-center text-stone-300 cursor-pointer text-lg">
        <h3>Avail exclusive discounts on our services by <u class="text-fuchsia-400">clicking here</u></h3>
    </a>
</div> --}}
@endif

<header class="py-3 bg-stone-950">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-between">
                <div class="my-auto">
                    <a href="{{ route('welcome') }}">
                        <img src="https://icommerce.co.in//storage/settings/May2023/PWc4rbir5SgM8o39hTPW.webp"
                            class="img-fluid h-14" alt="">
                    </a>
                    {{-- <h1 class="text-white text-3xl inter-600">
                        ICRM Software
                    </h1> --}}
                </div>
                <div class="my-auto">

                    <ul class="d-flex gap-4 my-auto text-lg text-stone-200 inter-400">
                        <li class="my-auto">
                            <a href="{{ route('welcome') }}#features">
                                Features
                            </a>
                        </li>

                        <li class="my-auto">
                            <a href="{{ route('welcome') }}#pricing">
                                Pricing
                            </a>
                        </li>
                        <li class="my-auto">
                            <a href="{{ route('welcome') }}#howitworks">
                                How it works
                            </a>
                        </li>

                        <li class="my-auto">
                            <a href="{{ route('welcome') }}#faq">
                                FAQ
                            </a>
                        </li>
                        <li class="my-auto relative">
                            <a href="/icrm" class="my-auto">
                                Support
                            </a>
                        </li>
                        <li class="my-auto">
                            <a data-bs-toggle="offcanvas" data-bs-target="#getStartedCanvas"
                                aria-controls="getStartedCanvas" onclick="Livewire.dispatch('openGetStartedCanvas')"
                                class="btn btn-md bg-lime-400 hover:bg-lime-300 text-zinc-950 hover:text-zinc-950 text-uppercase rounded-3 py-2 px-4 text-lg fw-semibold rounded-0">
                                Get Started
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</header>
