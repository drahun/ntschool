@if (!empty($categories))
    <div class="widget-categories  push-down-30">
        <h6>РАЗДЕЛЫ-похожих статей</h6>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="">{{ $category->name }} &nbsp;
                        <span class="widget-categories__text">({{$category->posts()->count()}})</span> </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (!empty($popularPosts) && !empty($recentPosts))
    <div class="widget-posts  push-down-30">
        <h6>Популярное / Свежее</h6>
        <ul class="nav  nav-tabs">
            <li class="active">
                <a href="#recent-posts" data-toggle="tab"> <span class="glyphicon  glyphicon-time"></span> &nbsp;Свежо</a>
            </li>
            <li>
                <a href="#popular-posts" data-toggle="tab"> <span class="glyphicon  glyphicon-flash"></span> &nbsp;Популярно </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane  fade  in  active" id="recent-posts">
                @forelse($recentPosts as $post)
                    <div class="push-down-25">
                        @if (!empty($post->image))
                            <img src="uploads/{{ $post->image }}" alt="Posts">
                        @endif
                        <h5>
                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a><br>
                            <span class="widget-posts__time">{{ getRusDate($post->created_at, 'd %MONTH% Y H:i') }}</span>
                        </h5>
                    </div>
                @empty
                    <div class="push-down-15">
                        Нет доступных записей для отображения
                    </div>
                @endforelse
            </div>
            <div class="tab-pane  fade" id="popular-posts">
                @forelse($featuredPosts as $post)
                    <div class="push-down-25">
                        @if (!empty($post->image))
                            <img src="uploads/{{ $post->image }}" alt="Posts">
                        @endif
                        <h5>
                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a><br>
                            <span class="widget-posts__time">{{ getRusDate($post->created_at, 'd %MONTH% Y H:i') }}</span>
                        </h5>
                    </div>
                @empty
                    <div class="push-down-15">
                        Нет доступных записей для отображения
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endif


@if (!empty($tags))
    <div class="tags widget-tags">
        <h6>Тэги</h6>
        <hr>
        @foreach($tags as $tag)
            <a href="{{ route('post.show', ['tag' => $tag->name ]) }}" class="tags__link">{{ $tag->name }}</a>
        @endforeach
    </div>
@endif