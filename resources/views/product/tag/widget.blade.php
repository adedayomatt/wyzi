<?php 
    $producttags = $_productTags::all();
?>
<div class="card widget">
    <div class="card-header">
        <h5>Product Tags</h5>
        <form action="">
            <input class="form-control" type="text" placeholder="search for product tag...">
        </form>

    </div>
    <div class="card-body">
        <ul class="list-group ball-bullet">
            @if($producttags->count() > 0)
                @foreach($producttags as $producttag)
                    <li class="list-group-item">
                        <div class="d-flex">
                            <span class="bullet"></span>
                            <a class="product-tag mr-2" href="{{route('product.tag.show',[$producttag->slug])}}">{{ $producttag->name}}</a>
                            <small><span class="badge badge-secondary figure">{{$producttag->products->count()}}</span> products </small>
                        </div>
                       <small class="grey">{!!$producttag->description()!!}</small>
                    </li>
                @endforeach
                <div class="text-right">
                    <a href="{{route('product.tags')}}">see all tags</a>
                </div>
            @else
                <li class="list-group-item">
                    <small class="text-danger">No tag found</small>
                </li>
            @endif
        </ul> 
    </div>
</div>
