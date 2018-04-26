

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
    <link rel="stylesheet" href="css/new_employee.css">
    <title>Gazelle | Registration</title>
</head>

<!--
<script>
    function verify() {
        var btn = document.getElementById('submit-btn');
        var c = window.confirm('Are you sure you want to submit this employee data?');
        if (c == false) {
            return false;
        } else {
            return true;
        }
    }
</script>
-->

<body>
  <div id="overlay">
   <section>
    <div class="jumbotron" id="wrapper">
        <h1>Register New Employee</h1>
        <br>
        <form class="form-group" action="inc/create_employee.php" method="post">
            <input class="form-control" type="text" placeholder="Employee's First Name..." name="firstname">
            <input class="form-control" type="text" placeholder="Employee's Last Name..." name="lastname">
            <select name="jobtitle" class="form-control">
                <option value="">JOB TITLE: </option>
                <option value="Database Administrator">Database Administrator</option>
                <option value="DevOps Manager">DevOps Manager</option>
                <option value="JavaScript Developer">JavaScript Developer</option>
                <option value="PHP Developer">PHP Developer</option>
                <option value="Project Manager">Project Manager</option>
                <option value="Receptionist">Receptionist</option>
                <option value="Software Engineer">Software Engineer</option>
                <option value="Web Developer">Web Developer</option>
                <option value=""></option>
            </select>
            <input class="form-control" placeholder="Start Date: " type="date"> 
            <input class="form-control" type="text" placeholder="Employee's Salary..." name="salary">
            <input class="form-control" type="text" placeholder="Employee's Email..." name="email">
            <input class="form-control" id="submit-btn" type="submit" onclick="" value="REGISTER">
        </form>
    </div>
   </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </div>
</body>

</html>