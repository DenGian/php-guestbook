<?php
declare(strict_types=1);
print_r($_POST);
?>

<body>
<div id="container">
<form action ="index.php" method="post">
<!--    <label for="date">Today's date:</label><br>-->
<!--    <input type="date" id="date" name="date"><br>-->
    <label for="title">Title for your message:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="authorName">Name:</label><br>
    <input type="text" id="authorName" name="authorName"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <button type="submit" value="<?php echo (date('m/d/Y')); ?>" name="date">Submit</button>
</form>
</div>
</body>

