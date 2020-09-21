@foreach($posts as $post)
    <section class="card m-1">
      @if($post->image_path == null)
        <img class="card-img" src="{{ asset('storage/image/noimage.png') }}" alt="">
      @else
        <img class="card-img" src="{{ asset('storage/image/' . $post->image_path) }}" alt="">
      @endif
      <div class="card-content">
        <a href="{{ route('recipe', ['id' => $post->id]) }}" class="card-title">{{ str_limit($post->name, 70) }}</a>
        <p class="card-text">{{ str_limit($post->introduction, 200) }}</p>
      </div>
    </section>
@endforeach