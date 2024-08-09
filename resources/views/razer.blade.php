@extends('layouts.main')
@section('content')
    <div class="container mt-5 p-5">
        <div class="col-lg-12 razer-pay p-5">
            <h1 class="p-2 text-white text-center">Link Razer Payment</h1>
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="url" class="form-control" placeholder="Ex : ">
                    </div>
                    <div class="col-lg-12 pt-2 text-center">
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 table-cart table-responsive mt-1">
            <table class="table table-sm text-center">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="width: 25%">Link</th>
                        <th style="width: 15%">Usd Currency</th>
                        <th style="width: 15%">Amount To Pay</th>
                        <th style="width: 10%">Status</th>
                        <th style="width: 15%">Input Time</th>
                        <th style="width: 5%"></th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <th>1</th>
                        <td>https://pay.gold.razer.com/Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum,
                            assumenda.</td>
                        <td>USD $0.1</td>
                        <td>S$1300</td>
                        <td>Timeout</td>
                        <td>7/31/2024 23:12PM</td>
                        <td>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="total-price">
                        <th colspan="2" class="text-end">Total Price : <span class="currency">$3.40</span></th>
                        <td colspan="2">
                            <button class="btn-buy">Buy Now</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
