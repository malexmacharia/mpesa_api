@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
{{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Policy No</th>
                                    <th scope="col">Endorsement</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($debits as $row)
                                    <tr>
                                        <td>{{$row['id']}}</td>
                                        <td>{{$row['policy_no']}}</td>
                                        <td>{{$row['endt_renewal_no']}}</td>
                                        <td>{{$row['phone_no']}}</td>
                                        <td>{{$row['gross_amount']}}</td>
                                        <td><a href="{{ route('payus') }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Pay</a>
                                            <form action="{{ route('payus') }}">
                                                
                                            </form>>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
