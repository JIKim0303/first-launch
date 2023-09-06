@extends('layouts.app')

@section('title', 'FIND YOUR<br>
BEST PARTNER')

@section('content')
<main class="main">

    <div class="wrapper">
        <h1>Slide Show</h1>
        <ul class="slider">
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('storage/pair.jpg') }}"></li>
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('storage/golden.jpg') }}"></li>
            <li class="slider-item"><img decoding="async" id="mypic" class="mypic" src="{{ asset('storage/ko-gi.jpg') }}"></li>
        </ul>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p>使用したライブラリ：<a href="https://kenwheeler.github.io/slick/">https://kenwheeler.github.io/slick/</a></p>
        <img class="mainimg" src="img/cake.png">
        <img class="mainimg" src="img/golden.jpg">
    </div>
    <a id="back-btn" class="back-btn" href="#">TOP</a>
</main>
@endsection
<!-- 
<footer>
</footer>


</body>
</html> -->