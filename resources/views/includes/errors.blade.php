@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0" style="list-style-type: none">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif