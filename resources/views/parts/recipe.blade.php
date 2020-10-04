@foreach($posts as $post)
  <div class="col-md-3 col-6 mt-3 mb-3">
    <a href="{{ route('recipe', ['id' => $post->id]) }}">
      <div class="card">
        <p class="img-wrap">
          @if($post->image_path == null)
            <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
          @else
            <img class="card-img" src="{{ asset('storage/image/' . $post->image_path) }}" alt="">
          @endif
        </p>
        <div class="card-content">
          <p class="card-title">{{ str_limit($post->name, 40) }}</p>
        </div>
      </div>
    </a>
  </div>
@endforeach