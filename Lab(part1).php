<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <h1>Application name: AAST_BIS class registration</h1>
        <style>
#name{
    width: 200px; 
    height: 20px;
    margin-left: 47px;
}
#email{
    width: 200px; 
    height: 20px;
    margin-left: 48px;
}
#group{
    width: 200px; 
    height: 20px;
    margin-left: 44px;
}
.error {
  color: red;
  position: absolute;
  bottom: -20px;  
}

        </style>
    </head>
    <body>

      <form action = "<?php $_PHP_SELF ?>" method="post">

    <label style="color:red; font-size:30px;">* Required field</label> <br><br>

    <label style="font-size: 20px;"> Name:</label>

    <input type="text" name="name" id="name" required><span Style="color:red;font-size:20px;">*</span>

    <span class="error"></span><br><br>

    <label style="font-size: 20px;"> Email:</label>

    <input type="text" name="email" id="email"> <br><br>

    <label style="font-size: 20px;"> group#</label>
    
    <input type="text" name="group" id="group"> <br><br>

    <label style="font-size: 20px;"> class details:</label>

    <textarea name="class" style="height: 120px; width:450px;"></textarea><br><br><br><br><br>

    <label style="font-size: 20px;">Gender:</label>
    
    <input style=" margin-left: 44px;" type="radio" name="gender" value="male" required>Male

    <input type="radio" name="gender" value="female">Female <span Style="color:red; font-size:20px;">*</span><br><br>
    
    <label style="font-size: 20px;">Select courses:</label>
  <select name="courses[]" multiple>
  <option value="php">PHP</option>
  <option value="javascript">Javascript</option>
  <option value="mysql">MYSQL</option>
  <option value="html">HTML</option>
  <option value="laravel">Laravel</option>
  </select><br><br>

    <label style="font-size: 20px;">Agree </label>

    <input style="margin-left: 60px;" type="checkbox" name="check" required> <span Style="color:red; font-size:20px;">*</span><br><br>
  

   <input type="submit" value="Submit">
  
      </form>
    </body>
</html>
<h2>Your given values are as:</h2>
<?php 
//check if the name, gender, and check  have been submitted in form and  not empty
if(!empty($_POST["name"]) && !empty($_POST["gender"]) && isset($_POST["check"])) {
    echo "Name:". $_POST['name']. "<br />";
    echo "Email:". $_POST['email']. " <br />";
    echo "Group#:". $_POST['group']. " <br />";
    echo "Class details:". $_POST['class']. " <br />";
    echo "Gender:". $_POST['gender']. " <br />";
    //check if the courses has been submitted and is set,If it is checks if it is an array or a single value and prints courses 
    if (isset($_POST['courses'])) {
        if (is_array($_POST['courses'])) {
            //implode convert array to string and separate them with ,
            echo "Selected courses: " . implode(", ", $_POST['courses']) . "<br>";
        } else {
            echo "Selected course: " . $_POST['courses'] . "<br>";
        }
    } else {
        echo "No course selected.<br>";
    }
  
} 
?>

