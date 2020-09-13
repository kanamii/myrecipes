@foreach($posts as $post)
    <section class="col-md-3 card m-1">
      @if($post->image_path == null)
        <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
      @else
        <img class="card-img" src="{{ asset('storage/image/' . $post->image_path) }}" alt="">
      @endif
      <div class="card-content">
        <div class="card-title">{{ str_limit($post->name, 70) }}</div>
        <p class="card-text">{{ str_limit($post->introduction, 200) }}</p>
        <a href="{{ route('recipe', ['id' => $post->id]) }}">レシピページ</a>
      </div>
    </section>
@endforeach