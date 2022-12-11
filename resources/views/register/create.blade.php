
    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name"> <strong> Name: </strong> </label>
            <input type="text" class="form-control" id="name" name="name"/>
            <br>
            <br>
        </div>

        <div class="form-group">
            <label for="email"> <strong> Email: </strong> </label>
            <input type="email" class="form-control" id="email" name="email"/>
            <br>
            <br>
        </div>

        <div class="form-group">
            <label for="password"> <strong> Password: </strong> </label>
            <input type="password" class="form-control" id="password" name="password"/>
            <br>
            <br>
        </div>

        <div class="form-group">
            <label for="password_confirmation"> <strong> Confirm Password: </strong> </label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"/>
            <br>
            <br>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> <strong> Submit </strong> </button>
        </div>

    </form>
