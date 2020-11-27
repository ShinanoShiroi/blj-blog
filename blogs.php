<?php 
    include 'nav.php';
    include 'init.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name  = trim($_POST['name'])  ?? '';
        $post  = trim($_POST['post'])  ?? '';
        $title  = trim($_POST['title'])  ?? '';

        $statement = $dbConnection->prepare("INSERT INTO `posts` (created_at, created_by, post_text, post_title) VALUES(now(), :name, :message, :title)");
        $statement->execute([':name' => $name, ':message' => $post, ':title' => $title]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/blj-blog/styles.css">
</head>
<body class="blog-body">
    
<a href="#add-new-post-form" >Neuen Beitrag hinzufügen</a>

<?php 
    // if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $statement = $dbConnection->query('SELECT * FROM `posts` order by created_at desc');
        foreach($statement->fetchAll() as $posts) {
            
            echo '<p class="post-title">'   . $posts["post_title"]. '</p>';

            echo '<div class="post-border">'. 
                    '<p class="post-text">' . $posts["post_text"] . '</p>'. 
                    '<p class="created-by">'. $posts["created_by"]. '</p>'. 
                    '<p class="created-at">'. $posts["created_at"]. '</p>'. 
                 '</div>';
        } 
    // }
?>

    <form class="form-group" action="/blj-blog/blogs.php" method="post" id="add-new-post-form">
        <div class="name"><br>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?=htmlspecialchars($name ?? '' )?>">
        </div>

        <div class="title"><br>
            <label for="title">Titel:</label><br>
            <input type="text" id="title" name="title" value="<?=htmlspecialchars($title ?? '' )?>">
        </div><br>
        
        <div class="post">
            <label for="name">Beitrag:</label><br>
            <textarea name="post" rows="15" cols="60" value="<?=htmlspecialchars($post ?? '' )?>"></textarea> 
        </div>

        <input class="submit" type="submit" value="Submit">       
    </form>
</body>
</html>

<!-- INSERT INTO posts (created_at, created_by, post_text, post_title) 
 VALUES(now(), 'Corinne', 'Das war ein toller Tag! So schönes Wetter!', 'Ausflug im BLJ') -->