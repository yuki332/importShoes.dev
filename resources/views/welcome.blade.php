@extends('layouts.master')
@section('content')

    <section class="full-height flex flex--center mainvisual">

            <div>
                <h1 class="mainvisual__title">importShoes.dev</h1>
                <div class="flex flex--sparnd">
                    <button class="btn btn--md btn--clear"><a href="">Sign UP</a></button>
                    <button class="btn btn--md btn--special"><a href="">Log In</a></button>
                </div>
            </div>

    </section>
    
    <section>
    
        <h2>Our Service</h2>
        <div>
            <p>We help you to get your favorite shoes!</p>
            <p>Easy to use!</p>
            <ol>
                <li>Find shoes you love</li>
                <li>Place order with shoes name</li>
                <li>We go Order the shoes for you</li>
                <li>Send it to you with lower shipping cost</li>
            </ol>
        </div>

    </section>
    
    <section>
        <h2>Popular Items</h2>
        <div class="flex flex--wrap flex--spbtw">
            <div class="card">
                <img class="card__img" src="/img/nike.png">
                <h3>Shoes Name</h3>
                <p>Price: $120.99</p>
                <div class="text--right">
                    <button class="btn card__btn">Order</button>
                </div>
            </div>

            <div class="card">
                <img class="card__img" src="/img/nike2.png">
                <h3>Shoes Name</h3>
                <p>Price: $120.99</p>
                <div class="text--right">
                    <button class="btn card__btn">Order</button>
                </div>
            </div>

            <div class="card">
                <img class="card__img" src="/img/adidas.png">
                <h3>Shoes Name</h3>
                <p>Price: $120.99</p>
                <div class="text--right">
                    <button class="btn card__btn">Order</button>
                </div>
            </div>

            <div class="card">
                <img class="card__img" src="/img/adidas3.png">
                <h3>Shoes Name</h3>
                <p>Price: $120.99</p>
                <div class="text--right">
                    <button class="btn card__btn">Order</button>
                </div>
            </div>

            <div class="card">
                <img class="card__img" src="/img/newbalance.png">
                <h3>Shoes Name</h3>
                <p>Price: $120.99</p>
                <div class="text--right">
                    <button class="btn card__btn">Order</button>
                </div>
            </div>

            <div class="card">
                <img class="card__img" src="/img/newbalance2.png">
                <h3>Shoes Name</h3>
                <p>Price: $120.99</p>
                <div class="text--right">
                    <button class="btn card__btn">Order</button>
                </div>
            </div>
        </div>

    </section>
    <section id="popular">
        <example></example>
        <example></example>
        <example></example>
    </section>

@endsection