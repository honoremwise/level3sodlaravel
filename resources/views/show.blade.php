<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="align:center">Product page</div>
{{$product}}
                <div class="card-body">
                    <form method="post" action="/update/{{$product->id}}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " required autofocus name="name" value="{{$product->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Product price</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control "  required autofocus name="price" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Product Description</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control"  required autofocus name="desc" value="{{$product->desc}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Qty</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control " required name="quantity" value="{{$product->qty}}">
                            </div>
                        </div>

              

                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" >
                                   update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

