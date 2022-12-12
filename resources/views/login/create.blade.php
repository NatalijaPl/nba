<form method="POST" action="/login">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="email"> <strong> Email: </strong> </label>
        <input type="email" class="form-control" id="email" name="email"/>
        <br>
        <br>
    </div>

    @error('email')
        @include('partials.error')
    @enderror

    <div class="form-group">
        <label for="password"> <strong> Password: </strong> </label>
        <input type="password" class="form-control" id="password" name="password"/>
        <br>
        <br>
    </div>

    @error('password')
        @include('partials.error')
    @enderror

    <div class="form-group">
        <button type="submit" class="btn btn-primary"> <strong> Submit </strong> </button>
    </div>

</form>
