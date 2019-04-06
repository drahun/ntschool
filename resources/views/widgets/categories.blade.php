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
