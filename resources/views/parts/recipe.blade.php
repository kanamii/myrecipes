@foreach($posts as $recipe)
  @if ($loop->index <= 7)
    <section class="col-md-3 card m-1">
      <img class="card-img" src="{{ asset('storage/image/' . $recipe->image_path) }}" alt="">
      <div class="card-content">
        <div class="card-title">{{ str_limit($recipe->name, 70) }}</div>
        <p class="card-text">{{ str_limit($recipe->introduction, 200) }}</p>
        <a href="{{ route('recipe', ['id' => $recipe->id]) }}">レシピページ</a>
      </div>
    </section>
  @endif
@endforeach