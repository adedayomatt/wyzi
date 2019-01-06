<?php 
    $businesstags = $_businessTags::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Business Tags</h5>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @if($businesstags->count() > 0)
                @foreach($businesstags as $businesstag)
                    <li class="list-group-item">
                        <div>
                            <a class="business-tag" href="{{route('biz.tag.show',[$businesstag->slug])}}">{{ $businesstag->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$businesstag->businesses->count()}}</span> Businesses </small>
                        </div>
                       <small class="grey">{!!$businesstag->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('business.tags')}}">see all tags</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No tag found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
