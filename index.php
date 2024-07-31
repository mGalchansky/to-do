
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="Card">
      <h1>To Do App</h1>
      <form method="POST" action="php/scrypt.php">
        <label>
          <input id="new_tasks" type="text" name="new_tasks" />
        </label>
        <button id="new_tasks_button" type="submit" >+</button>
      </form>
      <div id="line">
        _______________________________________________________________
      </div>
     
      <?php 
      require_once "/OSPanel/home/ToDoApp/php/scrypt.php";
      require_once "/OSPanel/home/ToDoApp/php/db.php";
      $res = mysqli_query($conn, "SELECT * FROM `to_do_list`");
      while($tsk = mysqli_fetch_assoc($res)){ ?>
        <div id="tasks"> <?php echo $tsk['tasks']?></div>
        <?php }
      ?>

      <div id="tasks"></div>
      <div id="tasks"></div>
      <div id="tasks"></div>
    </div>
  </body>
</html>
