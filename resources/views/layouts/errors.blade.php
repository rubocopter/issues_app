@if (count($errors))
<div class="form-group">
    <div class="alert alert-danger">
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <br>
    </div>
</div>
@endif