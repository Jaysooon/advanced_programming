<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col"><?php
      class User{
        public $name;
        public $username;
        public $email;

      function set_name($name){
        $this->name = $name;
      }
      function get_name(){
        return $this->name;
      }
      function set_username($username){
        $this->username = $username;
      }
      function get_username(){
        return $this->username;
      }
      function set_email($email){
        $this->email = $email;
      }
      function get_email(){
        return $this->email;
      }

      function addFriend($name){
        echo $name . " added a friend <br>";
      }
      function postStatus($name){
        echo $name . " posted a status <br>";
      }
    }

      $example = new User();
      $example->set_name("Blance");
      $example->set_email("Blance@gmail.com");
      $example->set_username("Blance123");

      echo "Name: " . $example->get_name() . "<br>";
      echo "Username: " . $example->get_username() . "<br>";
      echo "Email: " . $example->get_email() . "<br>";
      $example->addFriend("Blance");
      $example->postStatus("Blance");
     ?>

      <form class="" action="" method="post" style="padding-left: 100px;">
          <h3>CALCULATOR</h3>
          <p>Input an Integer</p>
          <input type="number" name="input1">

          <p>Input the second Integer</p>
          <input type="number" name="input2">
          <br>
          <br>
          <button type="submit" name="add" value="add"> + </button>
          <button type="submit" name="subtract" value="subtract"> - </button>
          <button type="submit" name="multi" value="multi"> * </button>
          <button type="submit" name="divide" value="divide"> / </button>
          <p>Answer</p>
          <textarea name="name" rows="1" cols="30">
              <?php
                if (isset($_POST['add'])) {
                  $num1 = $_POST['input1'];
                  $num2 = $_POST['input2'];
                  $result = $num1 + $num2;
                  echo $result;
                }
                if (isset($_POST['subtract'])) {
                  $num1 = $_POST['input1'];
                  $num2 = $_POST['input2'];
                  $result = $num1 - $num2;
                  echo $result;
                }
                if (isset($_POST['multi'])) {
                  $num1 = $_POST['input1'];
                  $num2 = $_POST['input2'];
                  $result = $num1 * $num2;
                  echo $result;
                }
                if (isset($_POST['divide'])) {
                  $num1 = $_POST['input1'];
                  $num2 = $_POST['input2'];
                  $result = $num1 / $num2;
                  echo $result;
                }

               ?>
          </textarea>

        </form>
    </div>
    <div class="col">
      <form class="" action="" method="post">
        <h3>Finding GCD</h3>
        <p>Input First Integer</p>
        <input type="number" name="first" value="first">
        <p>Input Second Integer</p>
        <input type="number" name="second" value="first">
        <br>
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
        <p>Answer</p>
        <textarea name="name" rows="1" cols="20">
          <?php
            if (isset($_POST['submit'])) {
              $num1 = $_POST['first'];
              $num2 = $_POST['second'];

              if ($num1 > $num2)
              {
                $temp = $num1;
                $num1 = $num2;
                $num2 = $temp;
              }
              for($i = 1; $i < ($num1+1); $i++)
              {
                if ($num1%$i == 0 and $num2%$i == 0)
                $gcd = $i;
              }
              echo $gcd;
            }
          ?>
        </textarea>
      </form>
    </div>
  </div>
</div>

<style media="screen">
  .col{
    float: left;
    width: 50%;
  }
  .row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

  </body>
</html>
