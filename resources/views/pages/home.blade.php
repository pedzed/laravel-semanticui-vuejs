@extends('layouts/main')

@section('title', 'Dashboard')

@section('content')
    <div class="ui container">
        <p class="margin-bottom-level-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ipsam, repellendus magnam atque, nisi fuga. Quod maxime, voluptas fuga, reprehenderit officiis obcaecati repellat vero eius totam illo quae atque debitis!
        </p>
        
        <div class="ui grid margin-bottom-level-3">
            <div class="four wide column">
                <img src="{{ asset('images/wireframe/image.png') }}"
                     class="ui wireframe image"
                     alt="wireframe image"
                />
            </div>
            
            <div class="nine wide column">
                <img src="{{ asset('images/wireframe/paragraph.png') }}"
                     class="ui wireframe image"
                     alt="wireframe image"
                />
            </div>
            
            <div class="three wide column">
                <img src="{{ asset('images/wireframe/media-paragraph.png') }}"
                     class="ui wireframe image"
                     alt="wireframe image"
                />
                <img src="{{ asset('images/wireframe/media-paragraph.png') }}"
                     class="ui wireframe image"
                     alt="wireframe image"
                />
                <img src="{{ asset('images/wireframe/media-paragraph.png') }}"
                     class="ui wireframe image"
                     alt="wireframe image"
                />
            </div>
        </div>
        
        <div class="ui stackable doubling five column padded grid margin-bottom-level-3">
            <div class="red column">Red</div>
            <div class="orange column">Orange</div>
            <div class="yellow column">Yellow</div>
            <div class="olive column">Olive</div>
            <div class="green column">Green</div>
            <div class="teal column">Teal</div>
            <div class="blue column">Blue</div>
            <div class="violet column">Violet</div>
            <div class="purple column">Purple</div>
            <div class="pink column">Pink</div>
            <div class="brown column">Brown</div>
            <div class="grey column">Grey</div>
            <div class="black column">Black</div>
        </div>
        
        <div class="ui piled segment margin-bottom-level-5">
            <vue-test></vue-test>
        </div>
    </div>
@stop
