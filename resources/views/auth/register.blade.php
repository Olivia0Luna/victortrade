@extends('auth.index')


@section('content')


<!-- Slider Starts -->
<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators Starts -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
    </ol>
    <!-- Indicators Ends -->
    <!-- Carousel Inner Starts -->
    <div class="carousel-inner">
        <!-- Carousel Item Starts -->
        <div class="item active item-1">
            <div>
                <blockquote>
                    <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                    <footer><span>Lucy Smith</span>, England</footer>
                </blockquote>
            </div>
        </div>
        <!-- Carousel Item Ends -->
        <!-- Carousel Item Starts -->
        <div class="item item-2">
            <div>
                <blockquote>
                    <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                    <footer><span>Slim Hamdi</span>, Tunisia</footer>
                </blockquote>
            </div>
        </div>
        <!-- Carousel Item Ends -->
        <!-- Carousel Item Starts -->
        <div class="item item-3">
            <div>
                <blockquote>
                    <p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
                    <footer><span>Dalel Boubaker</span>, Russia</footer>
                </blockquote>
            </div>
        </div>
        <!-- Carousel Item Ends -->
    </div>
    <!-- Carousel Inner Ends -->
</div>
<!-- Slider Ends -->
</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
<!-- Logo Starts -->
<a class="visible-xs" href="/">
    <img id="logo" class="img-responsive mobile-logo" src="{{asset('images/logo.png')}}" alt="logo">
</a>
<!-- Logo Ends -->
<div class="form-container">
    <div>
        <!-- Section Title Starts -->
        <div class="row text-center">
            <h2 class="title-head hidden-xs">get <span>started</span></h2>
                <p class="info-form">Open account for free and start trading Bitcoins now!</p>
        </div>
        <!-- Section Title Ends -->
        <!-- Form Starts -->
        <form method="POST" action="{{route('register')}}">
            @csrf
            <!-- Input Field Starts -->
            <div class="form-group">
                <input class="form-control" name="name" id="name" placeholder="NAME" type="text" required value="{{old('name')}}">
            </div>
            <!-- Input Field Ends -->
            <!-- Input Field Starts -->
            <div class="form-group">
                <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required value="{{old('email')}}">
            </div>
            <!-- Input Field Ends -->
            <!-- Input Field Starts -->
            <div class="form-group">
                <input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
            </div>

            <div class="form-group">
                <input class="form-control" name="password_confirmation" id="password" placeholder="RETYPE YOUR PASSWORD" type="password" required>
            </div>

            <input type="hidden" name="referral" value="{{$referral}}">
            <!-- Input Field Ends -->
            <!-- Submit Form Button Starts -->
            <div class="form-group">
                <input type="checkbox" name="terms" id="" required>
                <span>I agree to all terms and conditions proferred by victortrade</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">create account</button>
                <p class="text-center">already have an account ? <a href="{{route('login')}}">Login</a>
            </div>
            <p>
                <p class="text-center">Back to <a href="/">Home</a>
            </p>
            <!-- Submit Form Button Ends -->
        </form>
        <!-- Form Ends -->
    </div>
</div>

@endsection