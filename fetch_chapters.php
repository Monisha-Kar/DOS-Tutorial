
<?php

require_once "connection.php";

$query = "SELECT * FROM chapters
          WHERE status = 1
          ORDER BY chapter_order ASC";

$result = mysqli_query($connect, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($connect));
}

if (mysqli_num_rows($result) > 0) {

    $output = '<ul class="nav nav-pills nav-stacked chapter-list">';

    $i = 1;

    // Get the currently opened chapter
    $currentFile = isset($_POST['current_file'])
                   ? basename($_POST['current_file'])
                   : '';

    while ($row = mysqli_fetch_assoc($result)) {

        $chapterName = htmlspecialchars(
            $row['chapter_name'],
            ENT_QUOTES,
            'UTF-8'
        );

        $chapterFile = htmlspecialchars(
            $row['chapter_file'],
            ENT_QUOTES,
            'UTF-8'
        );

        // Highlight the currently opened chapter
        $active = ($currentFile == $row['chapter_file'])
                  ? 'active'
                  : '';

        $chapterNumber = str_pad($i, 2, '0', STR_PAD_LEFT);

        $output .= '
            <li class="'.$active.'">
                <a href="'.$chapterFile.'">
                    <span class="chapter-number">
                        '.$chapterNumber.'
                    </span>
                    '.$chapterName.'
                </a>
            </li>
        ';

        $i++;
    }

    $output .= '</ul>';

    echo $output;

} else {

    echo "No Chapters Available";

}

?>
