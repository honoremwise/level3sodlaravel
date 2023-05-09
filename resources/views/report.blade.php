<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="align:center">Product page</div>

                <div class="card-body">
                    <table>
                        <tr>
                        <th>id</th><th>name</th>
                    </tr>
                 @foreach($product as $recs)
                 <tr><td>{{$recs->id}}</td><td>{{$recs->name}}</td></tr>
                @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>

