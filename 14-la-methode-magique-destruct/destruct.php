<?php
require_once 'Paragraph.php';

$paragraph = new Paragraph('I ❤️ PHP');

unset($paragraph);

?>

<!doctype html>
<html lang="en">

<body>
<?php echo $paragraph; ?>
</body>
</html>