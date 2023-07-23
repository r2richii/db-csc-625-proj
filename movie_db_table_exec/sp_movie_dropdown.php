<?php
$servername= "127.0.0.1";
$dbname = 'AWARD_WINNING_MOVIES';

$con = mysqli_connect($servername, $dbname);

  $sql = "SELECT  TITLE FROM AWARD_WINNING_MOVIES.MOVIE";
  $GENRE = mysqli_query ($con, $sql);

?>
<html>
    <head>
    <title>AWARD WINNING MOVIES</title>
    </head>
    <BODY bgcolor ="#461D7C">
        <form id="form" name="form" method="post">
            MOVIES:
            <select GENRE Name='NEW'>
            <option value="">--- Select ---</option>

        <?php

            while ($cat = mysqli_fetch_array(
                                $GENRE,MYSQLI_ASSOC)):;

                ?>
                    <option value="<?php echo $cat['TITLE'];
                    ?>">
                               <?php echo $cat['TITLE'];?>
                    </option>
                <?php
              endwhile;
                ?>
            </select>
            <input type="submit" name="Submit" value="Select" />
        </form>
    </body>
</html>