<style>
    .container{
        width: 70%;
        margin-left: 15%;
        padding-top: 25px;
        padding-bottom: 25px;
        background: #fcfcfc;
        border: solid 1px #eee;
        box-shadow: 0 0 7px #926f93
    }
</style>
<h2 style="text-align: center; text-shadow: 2px 2px #E9BAE8;">Application Form</h2>

<div class="container">
    <form class="form-horizontal" action="/action_page.php">

        <div class="form-group">
            <label class="control-label col-sm-3">Name of Applicant:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="applicantName" placeholder="" name="applicantName">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Father's Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="fatherName" placeholder="" name="fatherName">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Mother's Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="motherName" placeholder="" name="motherName">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Mailing Address:</label>
            <div class="col-sm-8">
                <input type="textBox" class="form-control" id="mailingAddress" placeholder="" name="mailingAddress">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Permanent Address:</label>
            <div class="col-sm-8">
                <input type="textBox" class="form-control" id="permanentAddress" placeholder="" name="permanentAddress">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Date of Birth:</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="birthDate" placeholder="" name="birthDate">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Nationality:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" value="Bangladeshi" id="nationality" placeholder="" name="nationality">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Academic Career:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="academicCareer" placeholder="" name="academicCareer">
            </div>
            <label class="col-sm-8 pull-right">Must be less than 40 years</label>

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

        <div class="form-inline">
            <div class="pull-right">
                <?php echo anchor(base_url("Authentications/dashboard"), 'Cancel', array('class' => 'btn btn-info', 'title' => 'cancel',)); ?>
                <button type="submit" class="btn btn-success ">Submit</button>
            </div>
        </div>
    </form>
</div>

