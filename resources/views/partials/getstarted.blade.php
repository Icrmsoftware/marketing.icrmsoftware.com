{{-- <button class="btn btn-primary" type="button"
data-bs-toggle="offcanvas"
data-bs-target="#getStartedCanvas"
aria-controls="getStartedCanvas">Enable body scrolling</button> --}}

<div class="offcanvas offcanvas-bottom bg-black"
style="min-block-size: 100%;"
data-bs-scroll="true"
data-bs-backdrop="false" tabindex="-1" id="getStartedCanvas" aria-labelledby="getStartedCanvasLabel">
  <div class="offcanvas-header bg-black">
    {{-- <h5 class="offcanvas-title" id="getStartedCanvasLabel">Offcanvas with body scrolling</h5> --}}
    <button type="button" class="btn-close me-2" style="color: white !important" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fa fa-times text-3xl"></i>
    </button>
  </div>
  <div class="offcanvas-body bg-black">
    <div class="container">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row">
                    <div class="col my-auto">
                        <div class="mb-5">
                            <img src="https://icommerce.co.in//storage/settings/May2023/PWc4rbir5SgM8o39hTPW.webp"
                            class="img-fluid h-20" alt="">
                        </div>
                        <div>
                            <h2 class="text-8xl text-white poppins-semibold">You're in Trusted Hands!</h2>
                            <p class="text-2xl text-gray-400 mt-4">
                                Join over 10,000 satisfied customers as we craft your vision into a beautifully designed reality with creativity and precision.
                            </p>
                        </div>
                    </div>
                    <div class="col my-auto">
                        <div class="d-flex flex-column gap-4 px-5">
                            <div class="form-group">
                                <label class="font-regular mb-2 text-md text-gray-400">Full name <i class="text-danger">*</i></label>
                                <input type="text" class="form-control border rounded-1">
                            </div>
                            <div class="form-group">
                                <label class="font-regular mb-2 text-md text-gray-400">Mobile number <i class="text-danger">*</i></label>
                                <input type="text" class="form-control border rounded-1">
                            </div>
                            <div class="form-group">
                                <label class="font-regular mb-2 text-md text-gray-400">Email <small class="opacity-75">(optional)</small></label>
                                <input type="text" class="form-control border rounded-1">
                            </div>
                            <div class="form-group text-zinc-500">
                                <input type="checkbox" class="accent-pink-300 me-1" checked> I agree to the terms and conditions of ICRM Software Pvt Ltd
                            </div>
                            <div>
                                <a href="#" class="btn btn-md bg-fuchsia-800 hover:bg-fuchsia-700 cursor-pointer text-white rounded-1 poppins-medium">
                                    Submit
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
