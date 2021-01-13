<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database PHP Page</title>
</head>
<body>
    <?php require("database.php"); ?>

    <h1>Makayla's Assignment</h1>


    <?php 
        $sql = "SELECT tweet_text, first_name, last_name, date 
        FROM tweets JOIN users USING (user_id) 
        ORDER BY tweet_id DESC";

        $statement = $db->prepare($sql);
        $statement->execute();
        $tweets = $statement->fetchALL();
        foreach ( $tweets as $tweet);
    ?>

    <div class="tweet">
        <p>
            <?php echo $tweet['first_name'];?>
            <?php echo $tweet['last_name'];?>
            &middot;
            @<?php echo $tweet['handle'];?>
            &middot;
            <?php echo $tweet['date'];?>
        </p>
        <p>
            <?php echo $tweet['tweet_text'];?>
        </p>

    </div>
    <?php endforeach;?>
</body>
</html>