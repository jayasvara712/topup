@extends('layouts.main')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="col-lg-12">
            <h1 class="p-2 text-white">Shoping cart</h1>
        </div>
        <div class="col-lg-12 table-cart">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Title</th>
                        <th scope="col" class="text-end">Total Price <span class="currency">$1.23</span></th>
                        <th style="width: 5%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>20 Cash</th>
                        <td>2038203720</td>
                        <td>$1.7</td>
                        <td>
                            <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th>20 Cash</th>
                        <td>2038203720</td>
                        <td>$1.7</td>
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
