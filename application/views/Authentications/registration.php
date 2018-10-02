<style>
    .container{
        width: 50%;
        margin-left: 25%;
        background: #fcfcfc;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93
    }
</style>

<div class="container">
    <h2>Registration</h2>
    <form class="form-horizontal" action="/action_page.php">

        <div class="form-group">
            <label class="control-label col-sm-3">Email ID:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">First Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="fisrtName" placeholder="" name="firstName">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Last Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="lastName" placeholder="" name="lastName">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Gender:</label>
            <div class="col-sm-8" style="text-align: left">
                <label class="radio-inline">
                    <input type="radio" name="optradio" checked>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Female
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Mobile No:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="mobile" placeholder="+088" name="mobile">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Password:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-default pull-right">Submit</button>
            </div>
        </div>
    </form>
</div>

