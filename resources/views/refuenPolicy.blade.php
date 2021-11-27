@extends('layouts.frontend.desktop.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    <div class="container">
        <div class="mt-5">
            <h2 style="font-weight: 600">Refund Policy</h2>
            <h6>Last updated: October 2021</h6>
        </div>
        <hr>
        <div class="row d-flex">
            <div class="col-md-8">

                <p style="font-size: 1.2rem"><ion-icon name="play-circle"></ion-icon><span class="ml-2" style="font-size: 1.5rem">General Terms For Buyers </span></p>
                <br/>
                <p class="text-justify term-conditions mb-3" >
                    Our policy lasts 30 days from purchase date. If 30 days have gone by since your purchase, unfortunately we can’t offer you a refund or exchange.</p>

                <p class="text-justify term-conditions mb-2" >
                    To be eligible for a return, your product (s) should have one of the following conditions:
                </p>

                <ul class="term-conditions-ul">
                    <li>The wrong product was sent by the merchant.</li>
                    <li>The product is defective.</li>
                    <li>Your item must be unused and in the same condition that you received it. It must also be in the original packaging.</li>
                    <li>To complete your return, we require a receipt or proof of purchase. Please send your purchase back to us. You should mail your product to: Industrial area No. 1, BMW St, Sharjah, United Arab Emirates.</li>
                    <li>You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.</li>
                    <li>Depending on where you live, the time it may take for your exchanged product to reach you, may vary.</li>

                </ul>

            </div>
            <div class="col-md-4 pt-5">
                <img src="/site_image/endpoint-pana.svg" alt="Girl in a jacket" width="400" >
            </div>
        </div>
        <hr>
        <div>
            <p style="font-size: 1.2rem"><ion-icon name="play-circle"></ion-icon><span class="ml-2" style="font-size: 1.5rem">
We don’t offer returns (refund or exchange) in the following cases</span></p>
            <br/>
            <ul class="term-conditions-ul-nmbr">
                <li> Any item not in its original condition, is damaged or missing parts for reasons not due to our error.</li>
                <li> Any item that is returned more than 30 days after delivery.</li>
                <li> The product was damaged in shipping.</li>
                <li> The item was not delivered on the agreed time (We usually complete order within 1-3 working days (holidays and national days are not counted), exceptions may occurs if no more stock available and in case the delay is from shipping company so the customer shall coordinate with them as we don’t have any relation with any delay resulted from custom procedures or late delivery of the shipping company).</li>

            </ul>
            <hr>

            <p style="font-size: 1.2rem"><ion-icon name="play-circle"></ion-icon><span class="ml-2" style="font-size: 1.5rem">Refunds</span></p>

            <br/>

            <p class="text-justify term-conditions pb-2" >
                Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund. If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment, within a certain amount of days.
            </p>

            <hr>

            <p style="font-size: 1.2rem"><ion-icon name="play-circle"></ion-icon><span class="ml-2" style="font-size: 1.5rem">Late or missing refunds (if applicable)</span></p>

            <br/>
            <ul class="term-conditions-ul-nmbr" >
                <li>If you haven’t received a refund yet, first check your bank account again.</li>
                <li>Then contact your credit card company, it may take some time before your refund is officially posted.</li>
                <li>Next contact your bank. There is often some processing time before a refund is posted.</li>
                <li>If you’ve done all of this and you still have not received your refund yet, please contact us
                    at g-starkey1@hotmail.com</li>
                </ul>
            <br/>
<br/>

        </div>
    </div>
@endsection
@section('js')
    <script>

    </script>
@endsection
