@foreach($posts as $post)
  <div class="col-md-3 mt-2 mb-2">
    <div class="card">
      <p class="img-wrap">
        @if($post->image_path == null)
          <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
        @else
          <img class="card-img" src="{{ asset('storage/image/' . $post->image_path) }}" alt="">
        @endif
      </p>
      <div class="card-content">
        <a href="{{ route('recipe', ['id' => $post->id]) }}" class="card-title">{{ str_limit($post->name, 40) }}</a>
        <!-- <p class="card-text">{{ str_limit($post->introduction, 36) }}</p> -->
      </div>
    </div>
  </div>
@endforeach