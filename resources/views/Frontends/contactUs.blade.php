@extends('baseLayout')
@section('styles')
    <link href="{{ URL::asset('assets/frontend/onepage/css/style.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
@endsection
@section('content')
    <div class="choose-us-block content text-center margin-bottom-40" id="benefits">
        <div class="container">
            <div class="row">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                    Ferdous Hossain<br>
                    M/S Sharif Enterprise<br>
                    22 Nawab yousuf Market Nayabazar<br>
                    Dhaka<br>
                    Phone: 01711524335<br>
                    Email: <a href="mailto:info@metronic.com">sales@razorwirebd.com</a><br>
                    Skype: <a href="skype:metronic">Ferdous</a>
                </address>
            </div>
        </div>
    </div>
    <!-- Choose us block END -->
@stop
