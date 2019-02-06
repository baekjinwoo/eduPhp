<?php
  //26. 파일로 모듈화 (require)
  require_once('../lib/print.php');
  require('../view/top.php');
 ?>

    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){ ?>
      <a href="update.php?id=<?=$_GET['id']; //php echo $_GET['id']; ?>">update</a>
    <?php }  ?>
    <h2>
      <?php
        print_title();
       ?>
    </h2>
    <?php
      print_description();
     ?>
     <form action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id'] //현재아이디 전송?>">
       <p>
         <input type="text" name="title" placeholder="Title" value="<?php print_title(); //변경할 아이디 전송?>">
       </p>
       <p>
         <textarea name="description" placeholder="Description" value="<?php print_description(); ?>"></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>

     <?php
       //26. 파일로 모듈화 (require)
       require('../view/bottom.php');
      ?>
