@extends('layouts.appRHSfixed')

@section('main')
    <div class="row justify-content-center ">
        <div class="col-md-8 shadow-lg">
            {!!Form::open(['route' => ['product.category.update',$productcategory->slug], 'method' => 'POST'])!!}
                @method('PUT')
                <h4>Update Product Category</h4>
               <h5 class="float-right"><a href="{{route('product.category.show',$productcategory->slug)}}">{{$productcategory->name}}</a></h5> 
                <div class="form-group">
                    {{form::label('category_name', 'Category Name')}}
                    {{form::text('category_name',$productcategory->name,['class'=>'form-control', 'placeholder'=>'category name','required','autofocus'])}}
                    @if($errors->has('category_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_name') }}</strong>
                        </span>
                    @endif
                </div>  

                <div class="form-group">
                    {{form::label('description', 'Description')}}
                    {{form::textarea('description',$productcategory->description,['id'=>'ckeditor','class'=>'form-control','placeholder'=>'about this category...'])}}
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 offset-sm-3">
                        {{Form::submit('Update',['class' => 'btn btn-success btn-block'])}}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('RHS')
    <?php
        $w_title = "Products";
        $w_collection = $productcategory->products;
    ?>
    @include('product.widgets.list')
@endsection

@section('b-scripts')
    @include('layouts.components.ckeditor')
@endsection