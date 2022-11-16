
<?php
if (session_status() === PHP_SESSION_NONE) {
  header("location:../");
}
$pa = "SELECT * FROM posts LIMIT ";
$res = consl($pa, $connect);

if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {

    !($row['post_image'] == NULL) ?: $row['post_image'] = "graylog.jpg";
    echo "<div class='post'>
        <div class='post-card__info'>
        <div class='post-card__image'>
        <img src='imagenes/" . strtolower($row['post_name']) . ".jpg'/>
        </div>

        <h2 class='post-card__name'>" . $row['post_name'] . "  " . $row['dosis'] . "</h2>
        <h3 class='post-card__price'>" . $row['prize'] . "</h3>
        <p class='post-card__description'>
        " . $row['desc'] . "
        </p>
        </div>";
    $rescom = consl("SELECT * from comments", $connect);
    if (mysqli_num_rows($rescom) > 0) {
      foreach ($rescom as $comment) {
        echo "<div class='comment'>
        <h5>" . $comment['comment_user'] . "</h5>
        <p>" . $comment['comment_text'] . "</p>
        </div>";
      }
    }
    echo "</div>";
  }
} else {
  echo "Lo Sentimos, no hay usuarios asi";
}
?>
