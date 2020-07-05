<div class="column is-6">
    <div class="card">
        <div class="card-image">
          <figure class="image is-5by3">
            <img src="{{$sign->imagen}}" alt="">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4 mb-0">{{mb_strtoupper($sign->palabra->descripcion,'UTF-8')}}</p>
            </div>
          </div>
      
          <div class="content">
            {{$sign->descripcion}}
          </div>
        </div>
    </div>
</div>