@extends('layouts.app')
@section('content')
<div class="contanier">
    <div class="row">
        <div class="col-10 mx-auto">
            <h1 class="text-center" style="font-size: 100px;">Your Cart</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Diet Plan</th>
                        <th>Created By</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                    @php
                    
                    $total2 = $plan->dietplans['price']*$plan['quantity'];
                    $total[] = $plan->dietplans['price']*$plan['quantity'];
                    // echo array_sum($total);
                    
                    @endphp
                    <tr>
                        <td data-label="Contact ID">{{ $plan['id'] }}</td>
                        <td data-label="Contact ID">{{ $plan->dietplans['title'] }}</td>
                        <td data-label="Power">{{ Auth::user()->name }}</td>
                        <td data-label="Expiration">{{$plan['quantity']}}</td>
                        <td data-label="Value">${{ $total2 }}</td>
                        <td data-label=""><a href="{{ url('/delete_cart/'.$plan['id']) }}" class="btn btn__active">Delete</a></td>
                    </tr>
                    @endforeach

                
                </tbody>
            </table>
            <div class="card ml-auto" style="width: 500px;">
                <div class="card-body">
                    <h1 class="text-center">Your Cart Total</h1>
                    <h4>Subtotal = ${{ array_sum($total) }} </h4>
                    <h4>Total = ${{ array_sum($total) }}</h4>
                    <a href="{{ url('/checkout') }}" class="btn btn-danger">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection