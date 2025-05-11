<!-- php for header -->
<?php
	$path = './';
	$title = "Comments";
	include $path.'assets/php/header.php';
 ?>
    <div class="page">
      <p class="title"> Comments </p>
<?php

  /* connects to my database table */
  include "../../../dbCon.php";

	/* for sanitizing the name and comment, htmlentities doesn't show in comment section */
  function sanitize($input, $length)
  {
    $input = trim($input);
    $input = htmlentities($input, ENT_QUOTES);
    return substr($input, 0, $length);
  }

  /* if connection was a success */
  if ($mysqli)
  {
    /* if the textboxes are not empty, grabs the values */
    if (!empty($_POST['name']) && !empty($_POST['comment']))
    {
      $name = sanitize($_POST['name'], 30);
      $comment = sanitize($_POST['comment'], 100);

      /* inserts the name, comment, and date by binding the name and comment from the textboxes and executing it */
      $nc = $mysqli -> prepare("insert into projcomments (name, comment, `last modified date`) values (?, ?, CURRENT_TIMESTAMP)");
      $nc -> bind_param("ss",$name,$comment);
      $nc -> execute();
      $nc -> close();
    }
    /* query for getting the name, comment, and date which is shown in the comments */
    $result = $mysqli -> query('select name, comment, `last modified date` from projcomments');
    /* if the query was valid */
    if($result)
    {
      /* continually loops through the table to get each row as an associative array which is then put into another array called rec */
      while($row = $result -> fetch_assoc())
      {
        $rec[] = $row;
      }
    }
  }
?>
      <ul>
        <?php
          /* loops through each array for each field which is then placed into a list with the format */
          foreach($rec as $c)
          {
            echo '<li class="cm">'.$c['name']."<hr>".$c['comment']."<hr>".$c['last modified date'].'</li>';
          }
          /* clears the submit array data if the textboxes are empty to prevent duplicate comments when submit button is pressed (does not work when page is refreshed) */
          $_POST = array();
         ?>
      </ul>
      <hr>
      <h3> Reply </h3>
      <!-- form that reloads the page upon submit -->
      <form id="input" action="comments.php" method="POST">
        <!-- the textbox for the name -->
        <span> Name: <input type="text" name="name" id="name" placeholder="Name" required><br></span>
        <!-- textarea for the comment -->
        <textarea name="comment" id="comment" placeholder="Comment" required></textarea>
        <br>
        <!-- the submit button that reloads the page -->
        <input type="submit" value="Submit" class="submit">
      </form>

<!-- php for footer -->
<?php
  $path = './';
  include $path.'assets/php/footer.php';
  ?>
