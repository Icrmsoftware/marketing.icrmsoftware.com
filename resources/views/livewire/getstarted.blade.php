<div>
    {{-- <button class="btn btn-primary" type="button"
data-bs-toggle="offcanvas"
data-bs-target="#getStartedCanvas"
aria-controls="getStartedCanvas">Enable body scrolling</button> --}}

    <div class="offcanvas offcanvas-bottom bg-black @if($this->canvas == true) show @endif"
        style="min-block-size: 100%;" data-bs-scroll="false"
        data-bs-backdrop="false" tabindex="-1" id="getStartedCanvas" aria-labelledby="getStartedCanvasLabel">
        <div class="offcanvas-header bg-black">
            {{-- <h5 class="offcanvas-title" id="getStartedCanvasLabel">Offcanvas with body scrolling</h5> --}}
            <button type="button"
            wire:click="closeGetStartedCanvas()"
            class="btn-close me-2" style="color: white !important" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="fa fa-times text-3xl"></i>
            </button>
        </div>
        <div class="offcanvas-body bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-12 col-lg my-auto">
                                <div class="mb-3 mb-lg-5 d-none d-lg-block">
                                    <img src="https://icommerce.co.in//storage/settings/May2023/PWc4rbir5SgM8o39hTPW.webp"
                                        class="img-fluid h-14 md:h-16 lg:h-20" alt="iCommerce Logo">
                                </div>
                                <div>
                                    <h2 class="text-5xl md:text-8xl lg:text-8xl text-white poppins-semibold">You're in <span
                                            class="text-fuchsia-400">Trusted</span> Hands!</h2>
                                    <p class="text-xl md:text-2xl text-gray-400 mt-2 mt-md-0">
                                        Join over 10,000 satisfied customers as we craft your vision into a beautifully
                                        designed reality with creativity and precision.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg mt-4 mt-md-5 mt-lg-0 my-auto">
                                <div class="row">
                                    <div class="col-12 col-lg-9 mx-auto">
                                        <div class="d-flex flex-column gap-4 px-3 px-md-5 py-3 py-md-5 bg-stone-900">
                                            <div>
                                                <h3 class="text-stone-400 text-lg inter-400">Please share your contact
                                                    information</h3>
                                            </div>
                                            <form class="d-flex flex-column gap-4"
                                            wire:submit.prevent='submitlead'
                                            >
                                                <div class="form-group">
                                                    <label class="font-regular mb-2 text-md text-gray-400">Full name <i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" class="form-control border rounded-1"
                                                    wire:model.live='name'
                                                    >
                                                    @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-regular mb-2 text-md text-gray-400">Mobile number <i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" class="form-control border rounded-1"
                                                    wire:model.live='mobile'
                                                    >
                                                    @error('mobile')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="font-regular mb-2 text-md text-gray-400">Email <small
                                                            class="opacity-75">(optional)</small></label>
                                                    <input type="text" class="form-control border rounded-1"
                                                    wire:model.live='email'
                                                    >
                                                    @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group text-zinc-500">
                                                    <input type="checkbox" class="accent-pink-300 me-1" checked> I agree to
                                                    the terms & conditions and privacy policy of iCommerce.co.in
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-md bg-fuchsia-800 hover:bg-fuchsia-700 cursor-pointer text-white rounded-1 poppins-medium">
                                                        Submit
                                                    </button>
                                                    <div>
                                                        <small class="text-stone-400">Upto 30% discount if you apply before {{ $expiry_date }}</small>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
