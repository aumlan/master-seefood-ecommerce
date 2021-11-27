@extends('layouts.frontend.desktop.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    <div class="container">
        <div class="mt-5 text-center">
            <h2 style="font-weight: 600">Frequently Asked Question (FAQ)</h2>
        </div>
        <hr>
        <div class="accordion" id="accordionExample">
            <div class="item-accordion">
                <div class="item-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn-aacordion collapsed py-2 px-4" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What courier do you use for deliveries?
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                     data-parent="#accordionExample">
                    <div class="t-p">
                        We are using DHL
                        AL NAJM AL THAHABI KEYS AND LOCKS reserves the right to use discretion in any circumstance where it makes more sense to use an alternative delivery method.
                    </div>
                </div>
            </div>
            <div class="item-accordion">
                <div class="item-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn-aacordion collapsed py-2 px-4" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long does it take for home delivery?
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                     data-parent="#accordionExample">
                    <div class="t-p">
                        We usually arrange delivery within 1-3 working days (holidays and national days are not counted).
                    </div>
                </div>
            </div>
            <div class="item-accordion">
                <div class="item-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn-aacordion collapsed py-2 px-4" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                            Can I track my item?
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                     data-parent="#accordionExample">
                    <div class="t-p">
                        Yes you can as we will provide you with URL that contain tracking number, all our shipping couriers provide tracking.
                    </div>
                </div>
            </div>
            <div class="item-accordion">
                <div class="item-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn-aacordion collapsed py-2 px-4" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                            Is it safe to order and pay online?
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                     data-parent="#accordionExample">
                    <div class="t-p">
                        All credit/debit cards details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties.
                        If you make a payment for our products or services on our website, the details you are asked to submit will be provided directly to our payment provider via a secured connection.
                    </div>
                </div>
            </div>

            <div class="item-accordion">
                <div class="item-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn-aacordion collapsed py-2 px-4" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                            How do I return an item?
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                     data-parent="#accordionExample">
                    <div class="t-p">
                        For information on returning an item, please click here Refund & Cancellation Policy
                    </div>
                </div>
            </div>

            <div class="item-accordion">
                <div class="item-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn-aacordion collapsed py-2 px-4" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="false"
                                aria-controls="collapseSix">
                            How long will it be before I get a refund?<i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                     data-parent="#accordionExample">
                    <div class="t-p">
                        We will refund your money directly after received back the products and we can send you replacement or the correct one in case of wrong supplied.
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
    <script>

    </script>
@endsection
