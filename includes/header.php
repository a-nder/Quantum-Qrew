<?php
$pages = [
    'index.php' => 'Home',
    'experience.php' => 'Gain Work Experience',
    'skills.php' => 'Practical Skills',
    'guidance.php' => 'Career Guidance',
    'resources.php' => 'Access Employment Resources'
];
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantum Link - <?php echo $pages[$current_page] ?? 'Welcome'; ?></title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <header class="main-header">
        <div class="container header-container">
            <div class="logo"><a href="index.php">Quantum<span>Link</span></a></div>
            <nav class="main-nav">
                <ul>
                    <?php foreach ($pages as $url => $title): ?>
                        <li>
                            <a href="<?php echo $url; ?>" class="<?php echo $current_page === $url ? 'active' : ''; ?>">
                                <?php echo $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
