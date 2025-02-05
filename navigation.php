<?php
$base_url = "./courses/"; // Adjust this if needed

$pages = [
    "Programming" => "programming.php",
    "Designing" => "designing.php",
    "Developing" => "developing.php",
    "Machine Learning" => "machine-learning.php",
    "Database" => "database.php",
    "Cybersecurity" => "cybersecurity.php",
    "Cloud Computing" => "cloud-computing.php",
    "Data Science" => "data-science.php"
];

$current_page = basename($_SERVER['REQUEST_URI']); // Get current file name
?>

<div class="course-navigation">
    <?php foreach ($pages as $name => $file): ?>
        <a href="<?= $base_url . $file ?>" class="btn btn-primary <?= ($current_page == $file) ? 'active' : '' ?>">
            <?= $name ?>
        </a>
    <?php endforeach; ?>
</div>
