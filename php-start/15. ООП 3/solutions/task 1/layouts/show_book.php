<?php

// Вынесем html код в отдельный файл для удобства

?>

<p>
    <img src="icons/<?php echo $this->image; ?>">
    <a href="books/<?php echo $this->url; ?>">
        <?php echo $this->author; ?>, "<?php echo $this->name; ?>"
    </a>
</p>
