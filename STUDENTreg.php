<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["First_Name"];
  $last_name = $_POST["Last_Name"];
  $college_name = $_POST["College_Name"];
  $email = $_POST["Email_Id"];
  $mobile_number = $_POST["Mobile_Number"];
  $gender = $_POST["Gender"];
  $state = $_POST["State"];
  $course = $_POST["Course"];
  

  // Do something with the form data, such as storing it in a database

  // Example: Printing the form data
  echo "<h2>Registration Details:</h2>";
  echo "<p><strong>First Name:</strong> $first_name</p>";
  echo "<p><strong>Last Name:</strong> $last_name</p>";
  echo "<p><strong>College Name:</strong> $college_name</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Mobile Number:</strong> $mobile_number</p>";
  echo "<p><strong>Gender:</strong> $gender</p>";
  echo "<p><strong>State:</strong> $state</p>";
  echo "<p><strong>Course:</strong> $course</p>";
} else {
  // If the form is not submitted, display the registration form
?>
  <!-- partial:index.partial.html -->
  <h3>STUDENT REGISTRATION FORM</h3>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <table align="center" cellpadding="10">
      <tr>
        <td>FIRST NAME</td>
        <td><input type="text" name="First_Name" maxlength="30" />(max 30 characters a-z and A-Z)</td>
      </tr>
      <tr>
        <td>LAST NAME</td>
        <td><input type="text" name="Last_Name" maxlength="30" />(max 30 characters a-z and A-Z)</td>
      </tr>
      <tr>
        <td>COLLEGE NAME</td>
        <td><input type="text" name="College_Name" maxlength="30" /></td>
      </tr>
      <tr>
        <td>EMAIL ID</td>
        <td><input type="text" name="Email_Id" maxlength="100" /></td>
      </tr>
      <tr>
        <td>MOBILE NUMBER</td>
        <td><input type="text" name="Mobile_Number" maxlength="10" />(10 digit number)</td>
      </tr>
      <tr>
        <td>GENDER</td>
        <td>
          Male <input type="radio" name="Gender" value="Male" />
          Female <input type="radio" name="Gender" value="Female" />
        </td>
      </tr>
      <tr>
        <td>STATE</td>
        <td><input type="text" name="State" maxlength="30" />(max 30 characters a-z and A-Z)</td>
      </tr>
      <tr>
        <td>COURSES<br />PERSUING</td>
        <td>
          BCA <input type="radio" name="Course" value="BCA">
          B.Com <input type="radio" name="Course" value="B.Com">
          B.Sc <input type="radio" name="Course" value="B.Sc">
          B.A <input type="radio" name="Course" value="B.A">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Register">
          <input type="reset" value="Reset">
        </td>
      </tr>
    </table>
  </form>
<?php
}
?>
</body>
</html>