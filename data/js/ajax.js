
function showStudents(){
    $.ajax({
        url : "includes/student.php",
        method : "post",
        data : {record:1},
        success:function(data){
            $('#layoutSidenav_content').html(data);
        }
    });
}

function showStudentsComplete(){
    $.ajax({
        url : "includes/complete.php",
        method : "post",
        data : {record:1},
        success:function(data){
            $('#layoutSidenav_content').html(data);
        }
    });
}

function showEnroll(){
    $.ajax({
        url : "includes/enroll.php",
        method : "post",
        data : {record:1},
        success:function(data){
            $('#layoutSidenav_content').html(data);
        }
    });
}

function showCourses(){
    $.ajax({
        url : "includes/course.php",
        method : "post",
        data : {record:1},
        success:function(data){
            $('#layoutSidenav_content').html(data);
        }
    });
}

function showADDSTU(){
    $.ajax({
        url : "includes/add_student.php",
        method : "post",
        data : {record:1},
        success:function(data){
            $('#layoutSidenav_content').html(data);
        }
    });
}

function del_data(){
    console.log('success');
}