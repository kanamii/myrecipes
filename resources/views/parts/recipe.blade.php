@foreach($posts as $post)
  <div class="col-md-3 col-6 mt-3 mb-3">
    <a href="{{ route('recipe', ['id' => $post->id]) }}">
      <div class="card">
        <p class="img-wrap">
          @if($post->image_path == null)
            <img class="card-img" src="{{ asset('https://techmyrecipes.s3-ap-northeast-1.amazonaws.com/noimage.png') }}" alt="">
          @else
            <img src="{{ $post->image_path }}" class="card-img">
          @endif
        </p>
        <div class="card-content">
          <p class="card-category">{{ str_limit($post->category, 40) }}</p>
          <p class="card-title">{{ str_limit($post->name, 40) }}</p>
        </div>
      </div>
    </a>
  </div>
@endforeach