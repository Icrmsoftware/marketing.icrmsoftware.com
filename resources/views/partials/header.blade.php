@if (Session::has('alert-message'))
    <div class="bg-lime-500 py-3 py-md-5 my-auto">
        <div class="text-center text-stone-950 inter-500 cursor-pointer text-lg md:text-2xl">
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

<header class="py-3 bg-stone-950 sticky-top">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-between">
                <div class="my-auto">
                    <a href="{{ route('welcome') }}">
                        <img src="https://icommerce.co.in//storage/settings/May2023/PWc4rbir5SgM8o39hTPW.webp"
                            class="img-fluid h-14" alt="iCommerce Logo">
                    </a>
                    {{-- <h1 class="text-white text-3xl inter-600">
                        ICRM Software
                    </h1> --}}
                </div>
                <div class="my-auto">
                    <div class="my-auto d-none d-lg-block">
                        <ul class="d-flex gap-4 my-auto text-lg text-stone-200 inter-400">
                            @include('partials.menuitems')
                        </ul>
                    </div>

                    <div class="my-auto d-block d-lg-none">
                          <div>
                            <a data-bs-toggle="offcanvas" href="#mobileMenu" role="button" aria-controls="mobileMenu">
                                <i class="fa-light fa-bars text-2xl text-stone-400"></i>
                              </a>
                          </div>
                          <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
                            <div class="offcanvas-header bg-black my-auto">
                              <div class="my-auto">
                                <a href="{{ route('welcome') }}">
                                    <img src="https://icommerce.co.in//storage/settings/May2023/PWc4rbir5SgM8o39hTPW.webp"
                                        class="img-fluid h-14" alt="">
                                </a>
                              </div>
                              <button type="button" class="btn-close my-auto" data-bs-dismiss="offcanvas" aria-label="Close"
                              style="color: white !important"
                              >
                                <i class="fa fa-times text-2xl"></i>
                              </button>
                            </div>
                            <div class="offcanvas-body bg-black px-4">
                                <ul class="d-flex flex-column gap-4 my-auto text-lg text-stone-200 inter-400">
                                    @include('partials.menuitems')
                                </ul>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
