
<?php

require_once "connection.php";

// Get the currently opened chapter
$currentFile = isset($_POST['current_file'])
               ? basename($_POST['current_file'])
               : '';

// Fetch all active chapters in order
$query = "SELECT chapter_file FROM chapters
          WHERE status = 1
          ORDER BY chapter_order ASC";

$result = mysqli_query($connect, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($connect));
}

$totalChapters = mysqli_num_rows($result);
$currentProgress = 0;

$i = 1;

// Find the position of the current chapter
while ($row = mysqli_fetch_assoc($result)) {

    if ($row['chapter_file'] == $currentFile) {
        $currentProgress = $i;
        break;
    }

    $i++;
}

// Calculate percentage
$percentage = ($totalChapters > 0)
              ? ($currentProgress / $totalChapters) * 100
              : 0;

// Display progress card
?>

<div class="progress-card">

    <div class="progress-info">

        <span>Your Progress</span>

        <span class="progress-count">
            <?php echo $currentProgress . " / " . $totalChapters; ?>
        </span>

    </div>

    <div class="progress-track">

        <div class="progress-fill"
             style="width: <?php echo $percentage; ?>%;">
        </div>

    </div>

</div>

<?php

mysqli_close($connect);

?>
