<?php
$servername= "127.0.0.1";
$dbname = 'AWARD_WINNING_MOVIES';

$con = mysqli_connect($servername, $dbname);

  $sql = "SELECT ACTOR_NAME FROM AWARD_WINNING_MOVIES.ACTOR";
  $GENRE = mysqli_query ($con, $sql);

?>
<html>
    <head>
    <title>AWARD WINNING MOVIES</title>
    </head>
    <BODY bgcolor ="#461D7C">
        <form id="form" name="form" method="post">
            ACTORS:
            <select GENRE Name='NEW'>
            <option value="">--- Select ---</option>

        <?php

            while ($cat = mysqli_fetch_array(
                                $GENRE,MYSQLI_ASSOC)):;

                ?>
                    <option value="<?php echo $cat['ACTOR_NAME'];
                    ?>">
                               <?php echo $cat['ACTOR_NAME'];?>
                    </option>
                <?php
              endwhile;
                ?>
            </select>
            <input type="submit" name="Submit" value="Select" />
        </form>
    </body>
</html>