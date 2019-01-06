{!!Form::open(['route' => ['update.product.gallery',$product->business->slug,$product->slug,'gallery'], 'method' => 'POST','class'=>'has-image-upload', 'files' => true])!!}
    @method('PUT')
    <fieldset>
        <div class="card">
            <div class="card-header">
                <h4>Add New</h4>
                <p class="help-text">Add as many photo to {{$product->name}} gallery</p>
            </div>
            <div class="card-body">
                <div class="image-preview-container"></div>
                <div class="form-group">
                    {{form::file('gallery[]',['class' => 'form-control','accept' => 'image/*','multiple'])}}
                    @if ($errors->has('gallery'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gallery') }}</strong>
                    </span>
                 @endif

                </div>
                <div class="text-right">
                {{form::submit('Add Photos',['class' => 'btn btn-success'])}}
            </div>        

            </div>
        </div>
    </fieldset>
{!! Form::close() !!}
