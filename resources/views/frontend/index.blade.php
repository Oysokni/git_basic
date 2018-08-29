@extends('layouts.main')
@section('content')

<section>
    <div class="row">
        <div class="column left">
            <div>
                <h2>Introduction to monotone2</h2>
                <p>Posted on 14 May by
                    <span>Joe Blogges</span>
                </p>
                <p> We cooperated with Mastercard® and VISA to present you a unique 16‑digit computer generated number
                    used to settle a specific vendor payment transaction online. You can issue the virtual card instantly
                    at your convince for</p>
                <p> We cooperated with Mastercard® and VISA to present you a unique 16‑digit computer generated number
                    used to settle a specific vendor payment transaction online. You can issue the virtual card instantly
                    at your convince for</p>
                <p>This template has been yesyed in:</p>
            </div>
            <div class="list">
                <ul>
                    <li>firfox</li>
                    <li>IE/Edge</li>
                    <li>Chrome</li>
                    <li>Safari</li>
                    <li>ios / Android</li>
                </ul>
            </div>
            <div>
                <button class="read-more-left">  <a href="{{ url('detail')}} ">Read more </a></button>
                <button class="read-more-right">Comments</button>
            </div>
            <div>
                <h2>Buy unbranded</h2>
                <p>Posted on 14 May by
                    <span>Joe Blogges</span>
                </p>
                <p> We cooperated with Mastercard® and VISA to present you a unique 16‑digit computer generated number
                    used to settle a specific vendor payment transaction online. You can issue the virtual card instantly
                    at your convince forWe cooperated with Mastercard® and VISA to present you a unique 16‑digit
                    computer generated number used to settle a specific vendor payment transaction online. You can
                    issue the virtual card instantly at your convince for</p>
            </div>
            <div>
                <h2>
                    <Lorem>Lorem lipsum</Lorem>
                </h2>
                <p> We cooperated with Mastercard® and VISA to present you a unique 16‑digit computer generated number
                    used to settle a specific vendor payment transaction online. You can issue the virtual card instantly
                    at your convince forWe cooperated with Mastercard® and VISA to present you a unique 16‑digit
                    computer generated number used to settle a specific vendor payment transaction online. You can
                    issue the virtual card instantly at your convince for vendor payment transaction online. You
                    can issue the virtual card instantly at your convince for</p>
            </div>
            <div>
                 <button class="read-more-left">Read more</button> 
                <button class="read-more-right">Comments</button>
            </div>
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a class="active" href="#">2</a>
                <a href="#">3</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
        @include('partials.right_bar')
    </div>
</section>
<!--Indroduction left and catergory right -->
@endsection