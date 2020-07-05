@extends('../layouts.main')
@section('content')

  <a href="#" id="" class="title is-4 has-text-weight-normal is-spaced anchor">
    <span class="anchor-name">{{ $title }}</span>
  </a>

  <ul class="step-text">
    @foreach ($content as $key=>$signs)
      <li data-content="{{$key}}.">
        @for ($i = 0; $i < count($signs); $i += 2)
            @if (array_key_exists($i, $signs))
              <div class="columns">
                @include('categories.sign_card',['sign' => $signs[$i]])               
                @if (array_key_exists($i+1, $signs))
                  @include('categories.sign_card',['sign' => $signs[$i+1]])               
                @endif
              </div>
            @endif
        @endfor
      </li>
    @endforeach
    {{-- <li data-content="A.">
      <div class="columns">
          <div class="column is-6">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-5by3">
                    <img src="https://media.giphy.com/media/kF5GJuvYGvrWUVu5IL/giphy.gif" alt="">
                  </figure>
                </div>
                <div class="card-content">

                  <div class="media">
                    <div class="media-content">
                      <p class="title is-4 mb-0">Aceituna</p>
                    </div>
                  </div>
              
                  <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris.                    
                  </div>
                </div>
              </div>
          </div>
      </div>
    </li> --}}
  </ul>
@endsection

