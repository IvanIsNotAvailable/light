<script src="data/bootstrap-tagsinput.js"></script>
<main class="add_student">
    <div class="container-fluid">
        <form method="post" action="./config/function.php">	
            <h1>Student Registration</h1>
            <div class="InputBox">
                <span>Student's Name</span>
                <div class="col-6">
                    <input class="form-control field" type="text" required name="name">                
                </div>
            </div>
            <div class="InputBox">
                <span>Student's Grade</span>
                <div class="col-6">
                    <input class="form-control field" type="text" required name="grade">                
                </div>
            </div>
            <div class="InputBox">
                <span>Guardian Name</span>
                <div class="col-6">
                    <input class="form-control field" type="text" required name="guardian">                
                </div>
            </div>
            <div class="InputBox">
                <span>Student's Ph.no</span>
                <div class="col-6">
                    <input class="form-control field" type="text" required name="ph_no">                
                </div>
            </div>
            <div class="InputBox">
                <span>Guardian Ph.no</span>
                <div class="col-6">
                    <input class="form-control field" type="text" name="guardian_ph">                
                </div>
            </div>
            <div class="InputBox">
                <span>NRC/Passport</span>
                <div class="col-6">
                    <input class="form-control  field" type="text" placeholder="Optional" name="passport">                
                </div>
            </div>
            <div class="InputBox">
                <span>Address</span>
                <div class="col-6">
                    <input class="form-control  field" type="text" placeholder="required" name="address">                
               </div>                
            </div>
            <div class="InputBox">
                <span>Student Email</span>
                <div class="col-6">
                    <input class="form-control field" type="email" required name="email">                
                </div>
            </div>
            <div class="InputBox">
                <span>Subjects</span>
                <div class="col-6">
                    <input class="form-control" type="text" id="subjects" name="subjects" data-role="tagsinput" name="subjects">
                </div>    
            </div>
            <div class="InputBox">
                <input class="form-control btn btn-primary button" type="submit" value="Register" name="register">
                <input class="form-control btn btn-primary button" type="submit" value="Enroll" name="enroll">
            </div>
        </form>
    </div>
</main>
