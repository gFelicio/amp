@extends('layouts.master')

@push('amp-component')
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
@endpush

@push('boilerplate')
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
@endpush

@push('ampCanon')
    <link rel="amphtml" href="{{ route('mob') }}">
    <link rel="canonical" href="{{ route('desk') }}">
@endpush

@push('customStyle')
    @include('amp.custom-style.landing')
@endpush

@section('content')

    @section('pageTitle')
        Amp/Page
    @endsection

    <div class="imgDiv">
        <amp-img src="https://www.ampproject.org/examples/images/amp.jpg" width="900" height="508" layout="responsive"></amp-img>
    </div>
@endsection

