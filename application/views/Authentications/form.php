<!DOCTYPE html>
<html>
<style>
    .likeabutton {
        text-decoration: none;
        width: 75%;
        font-size: 20px;
        height: 25px;
        text-align: center;
        display: inline-block;
        padding: 2px 8px;
        color: ButtonText;
    }
    .likeabutton:active {
        color: white;
    }
    .likeabutton:hover {
        color: red;
    }
    #formTable {
        border-style: solid;
        border-width: 2px;
        width:95%;
    }

    #uploadImage {
        width: 90%;
        margin-left: 5%;
        margin-right: 5%;
        font-size: 20px;
        text-align: justify;
    }

    #highlight {
        color: red;
    }

    #submitButton {
        width: 80px;
        height: 40px;
        font-size: 16px;
        font-style: italic;
        margin-right: 5%;
        margin-top: 3px;
        margin-bottom: 5px;
        float: right;
    }

    #mainContent {
        min-height: 1000px;
        margin-bottom: 1%;
        clear: both;
    }

    #leftContent {
        width: 15%;
        min-height: 1000px;
        float: left;
    }

    #midContent {
        float: left;
        width: 69%;
        margin-left: 0.5%;
        margin-right: 0.5%;
        min-height: 1000px;
    }

    #formHeader {
        font-size: 22px;
        margin-left: 10px;
    }

    #termPara {
        color: navy;
        padding-right: 30px;
        width: 90%;
        text-align: justify;
        float: right;
    }

    #termSign {
        margin-left: 3%;
        float: left;
    }

    #textInTable {
        width: 100%;
    }

    #fullWidth {
        width: 100%;
        clear: left;
        margin-top: 5px;
    }

    #leftSide {
        width: 60%;
        float: left;
        margin-top: 5px;
    }

    #rightSide {
        width: 25%;
        float: right;
        margin-top: 25px;
        padding-top: 20px;
    }

    th, td{
        border-bottom: 1px solid #000;
        font-size: 18px;
    }

    li{
        font-size: 20px;
        padding: 5px;
    }

    label {
        font-size: 18px;
        text-align: right;
        float:left;
        padding-right: 10px;
        margin: 5px auto;
        width: 40%;
    }

    #textBox {
        font-size: 16px;
        text-align: left;
        float:left;
        margin: 5px auto;
        width: 45%;
    }

</style>

<head>
    <link rel="icon" type="image/png" href="assets/img/iit.png">
    <link rel="stylesheet" type="text/css" href="form/form.css">
    <script type="text/javascript" src="jquery.min.js"> </script>
    <script type="text/javascript" src="form/form.js"> </script>
    <title>PGDIT-Admission</title>
</head>

<body>

<div id="mainContent">
    <div id="leftContent">
        <center>
            <br/><a href="index.html" class="likeabutton">Back to home</a>
        </center>
    </div>

    <div id="midContent">
        <form action="form.php" method="post" enctype = "multipart/form-data">
            <div id="fullWidth">
                <h3 id="formHeader">Personal Information</h3>

                <label for="applicant">Name of Applicant:</label>
                <input type="text" id="textBox" value="" name="applicant" placeholder="Enter Name" maxlength="50" required/><br/>

                <label for="father">Father's Name:</label>
                <input type="text" id="textBox" value="" name="father" placeholder="Enter Father's Name" maxlength="50" required/><br/>

                <label for="mother">Mother's Name:</label>
                <input type="text" id="textBox" value="" name="mother" placeholder="Enter Mother's Name" maxlength="50" required/><br/>

                <label for="mail">E-mail Address:</label>
                <input type="email" id="textBox" value="" name="mail" placeholder="Enter Email Address" maxlength="50" required/><br/>

                <label for="mobile">Mobile Number:</label>
                <input type="text" id="textBox" placeholder="+8801XXXXXXXXX" name="mobile" pattern="[+]+8801+[0-9]{9}" required/><br/>

                <label for="birthdate">Date of Birth:</label>
                <input type="date" id="textBox" value="" name="birthDate" max="2001-12-31" min="1950-01-01" required/><br/>

                <label for="nationality">Nationality:</label>
                <input type="text" id="textBox" value="Bangladeshi" name="nationality" maxlength="50" required/><br/>

                <label for="permanentAddress">Permanent Address:</label>
                <textarea id="textBox" value="" name="permanentAddress" placeholder="Max Limit: 250 Characters" maxlength="250" required></textarea>
            </div>

            <div id="fullWidth">
                <h3 id="formHeader">Academic Career</h3>

                <ul>
                    <li>SSC/O-Level</li>
                    <table id="formTable">
                        <tr>
                            <th>School Name</th>
                            <th>Board</th>
                            <th>Group</th>
                            <th>Year</th>
                            <th>Marks/GPA</th>
                        </tr>

                        <tr>
                            <td><input type="text" id="textInTable" value="" name="schoolName" maxlength="50" required/></td>
                            <td><input type="text" id="textInTable" value="" name="schoolBoard" maxlength="20" required/></td>
                            <td><input type="text" id="textInTable" value="" name="schoolGroup" maxlength="20" required/></td>
                            <td><input type="text" id="textInTable" value="" name="schoolYear" pattern=[0-9]{4} required/></td>
                            <td><input type="text" id="textInTable" value="" name="schoolGPA" maxlength="5" required/></td>
                        </tr>
                    </table>

                    <li>HSC/A-Level</li>
                    <table id="formTable">
                        <tr>
                            <th>College Name</th>
                            <th>Board</th>
                            <th>Group</th>
                            <th>Year</th>
                            <th>Marks/GPA</th>
                        </tr>

                        <tr>
                            <td><input type="text" id="textInTable" value="" name="collegeName" maxlength="50" required/></td>
                            <td><input type="text" id="textInTable" value="" name="collegeBoard" maxlength="20" required/></td>
                            <td><input type="text" id="textInTable" value="" name="collegeGroup" maxlength="20" required/></td>
                            <td><input type="text" id="textInTable" value="" name="collegeYear" pattern=[0-9]{4} required/></td>
                            <td><input type="text" id="textInTable" value="" name="collegeGPA" maxlength="5" required/></td>
                        </tr>
                    </table>

                    <li>Bachelor Level</li>
                    <table id="formTable">
                        <tr>
                            <th>University Name</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Division/CGPA</th>
                        </tr>

                        <tr>
                            <td><input type="text" id="textInTable" value="" name="universityName" maxlength="50" required/></td>
                            <td><input type="text" id="textInTable" value="" name="deptName" maxlength="50" required/></td>
                            <td><input type="text" id="textInTable" value="" name="universityYear" pattern=[0-9]{4} required/></td>
                            <td><input type="text" id="textInTable" value="" name="universityGPA" maxlength="5" required/></td>
                        </tr>
                    </table>

                    <li>Marks in Mathematics</li>
                    <table id="formTable">
                        <tr>
                            <th>Examination</th>
                            <th>Marks Obtained (Math)</th>
                            <th>% of Obtained Marks (Math)</th>
                            <th>Did it include Algebra or Statistics?</th>
                        </tr>

                        <tr>
                            <th>HSC/A-Level</th>
                            <td><input type="text" id="textInTable" value="" name="hscMath" pattern="[0-9]*" maxlength="6"/></td>
                            <td><input type="text" id="textInTable" value="" name="hscMathPercent" pattern="[0-9.]*" maxlength="6"/></td>
                            <td>
                                <input type="radio" value="Yes" name="hscAlgebra"/>Yes
                                <input type="radio" value="No" name="hscAlgebra" checked>No
                            </td>
                        </tr>

                        <tr>
                            <th>Bachelor Level</th>
                            <td><input type="text" id="textInTable" value="" name="bachelorMath" pattern="[0-9]*" maxlength="6"/></td>
                            <td><input type="text" id="textInTable" value="" name="bachelorMathPercent" pattern="[0-9.]*" maxlength="6"/></td>
                            <td>
                                <input type="radio" value="Yes" name="bachelorAlgebra"/>Yes
                                <input type="radio" value="No" name="bachelorAlgebra" checked>No
                            </td>
                        </tr>
                    </table>
                </ul>
            </div>

            <div id="fullWidth">
                <div id="uploadImage"><strong>Upload Applicant's Photo:</strong>
                    <input type="file" id="picture" name="image" accept=".jpg" onchange="displayPreview(this.files)" required/>
                    <p style="font-size: 15px;">Image must be <strong id="highlight">less than 100 KB</strong>. The dimension of the photo must be <strong id="highlight">350 pixels * 400 pixels</strong> (width * height). Uploaded photo must be in <strong id="highlight">JPEG (.jpg extension) format</strong>. First, <strong id="highlight">upload photo</strong> to enable the Submit button.</p>
                </div>

                <input type="checkbox" value="agree" name="agreement" id="termSign" required/><div id="termPara">The information provided in this application form is true and correct. I accept that, IIT reserves the right to cancel my admission at any time if any item of information given by me on this form is found materially false or incorrect.<br/></div>

                <input type="submit" id="submitButton" name="submitButton" value="Submit" disabled/>
            </div>
        </form>
    </div>

    <div id="leftContent"> </div>
</div>

<div>
    <hr/>
    <p style="text-align: center;">
        <b>2017 &copy; IIT. Developed by Eusha Kadir &amp; Satyaki Das</b>
    </p>
    <br/>
</div>
</body>
</html>