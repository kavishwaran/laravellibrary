@extends('layouts.app')

@section('content')


<body style = "background-image:  url({{ asset('/images/1.jpg') }});
<div class="container">
    <style>
        background-image:  url({{ asset('/images/1.jpg') }});
        </style>
    
    <div class="row justify-content-center" style="">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#ff7200">{{ __('Get started') }}</div>

                <div class="card-body" style="background-color:#5a5958  ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    {{ __('Get started after logging in') }}
                    <button class = "cnn" style="width: 160px; height: 40px;background: #ff7200;  margin-left: 20px; margin-bottom: 10px;font-size: 18px; border-radius: 10px; cursor: pointer;"><a href="{{ URL::to('/home1') }}">Lend Book</a></button>

                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
