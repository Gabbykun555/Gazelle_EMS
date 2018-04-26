

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
    <link rel="stylesheet" href="css/search.css">
    <title>Gazelle | Search</title>
</head>

<body>
  <div id="overlay">
   <section>
        <div class="jumbotron" id="wrapper">
           <h1>Search Employee Database</h1>
           <form class="form-group" action="" method="post">
               <input class="form-control"type="text" placeholder="Search term or keyword...">
               <p>Return in search results:</p>
               <ul>
                   <li><label for="employeeid">Employee ID</label>
               <input class="form-control" type="checkbox" name="employeeid" checked></li>
                   <li><label for="name">Name</label>
               <input class="form-control"type="checkbox" name="name" checked></li>
                   <li><label for="jobtitle">Job Title</label>
               <input class="form-control"type="checkbox" name="jobtitle" checked></li>
                   <li><label for="department">Department</label>
               <input class="form-control" type="checkbox" name="department" checked></li>
                   <li><label for="emailaddress">Email Address</label>
               <input class="form-control" type="checkbox" name="emailaddress" checked></li>
               </ul>
               <p></p>
               <input class="form-control" id="submit-btn" type="submit" value="SEARCH">
           </form>
        </div>
   </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </div>
</body>

</html>