@foreach($items as $item)
<div class="card demo-card-header-pic card-new">
    <div valign="bottom" class="card-header color-white no-border no-padding">

        <div class="video-card"
             id="{{ $item->id }}"
             data-poster="{{  $item->poster }}"
             data-src="{{$item->url }}"
                >
        </div>
    </div>
    <div class="card-content video-title">
        <div class="card-content-inner">
            <p class="">
                {{ $item->title }}
            </p>
        </div>
    </div>
    <div class="card-footer card-bottom">
        <a class="tag-item">花絮片段</a>
        <a class="tag-item">电视剧</a>
        <a href="#" class="link">
            <span class="icon icon-message"></span>
            12
        </a>
        <a href="#" class="link">
            <span class="icon icon-star"></span>
            12
        </a>
    </div>
</div>
@endforeach