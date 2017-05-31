@extends('layouts.master')
@section('content')
    
    <modal v-if="showResigter" @close="showResigter = false">
        <form method="POST" action="/register" class="form">
            {{ csrf_field() }}
            <div>
                <input class="form__input ishalf" type="text" name="firstName" placeholder="First Name" required>
                <input class="form__input ishalf" type="text" name="lastName" placeholder="Last Name" required>
            </div>
            <div>
                <input class="form__input" type="text" name="username" placeholder="User Name" required>
            </div>
            <div>
                <input class="form__input" type="email" name="email" placeholder="E-mail Address" required>
            </div>

            <div>
                <input class="form__input" type="password" name="password" placeholder="Password" required>
            </div>
            <div>
        　       <input class="form__input" type="password" name="password_confirmation" placeholder="Password Confirmation">
            </div>
            <div class="text--center">
                <input class="btn card__btn" type="submit" name="submit" value="Sign Up">
            </div>
        </form>
    </modal>
    <modal v-if="showLogin" @close="showLogin = false">
        <form method="POST" action="/login" class="form">
            {{ csrf_field() }}
            <div>
                <input class="form__input" type="text" name="username" placeholder="User Name" required>
            </div>
            <div>
                <input class="form__input" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="text--center">
                <input class="btn card__btn" type="submit" name="submit" value="Log In">
            </div>
        </form>
    </modal>

    <section class="full-height flex flex--center mainvisual">

        <div>
            <h1 class="mainvisual__title">importShoes.dev</h1>
            <div class="flex flex--sparnd">
                {{-- <sign-up title="Sign Up"></sign-up> --}}
                @if(!Auth::check())
                    <button class="btn btn--md btn--clear" @click="showResigter = true">Sign Up</button>
                    <button class="btn btn--md btn--special" @click="showLogin = true">Log In</button>
                @endif
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
            <card item="New Balance navy" price="100.99"><img class="card__img" src="/img/newbalance2.png"></card>
            <card item="Adidas RED" price="75.99"><img class="card__img" src="/img/adidas3.png"></card>
            <card item="Nike Fly" price="150.99"><img class="card__img" src="/img/nike2.png"></card>
            <card item="Adidas Gray/White" price="250.99"><img class="card__img" src="/img/adidas.png"></card>
            <card item="New Balance" price="120.99"><img class="card__img" src="/img/newbalance.png"></card>
            <card item="Nike AirForce" price="159.99"><img class="card__img" src="/img/nike.png"></card>
        </div>
    </section>

@endsection