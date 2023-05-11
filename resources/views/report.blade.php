<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="align:center">Product page</div>

                <div class="card-body">
                                 <table>
                    <tr><th>id</th><th>name</th><th>qty</th><th>price</th><th>options</th></tr>
                    @foreach($product as $record)
                    <tr><td>{{$record->id}}</td><td>{{$record->name}}</td>
                    <td>{{$record->qty}}</td><td>{{$record->price}}</td>
                    <td><a href="show/{{$record->id}}">edit</a></td>
                </tr>
                    @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>

