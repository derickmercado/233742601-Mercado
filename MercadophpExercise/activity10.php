<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 10: Simple Grading System</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="background-animation"></div>
    <div class="container">
        <header class="activity-header">
            <h1><i class="fas fa-clipboard-check"></i> Simple Grading System</h1>
            <p class="subtitle">Averaging scores and determining pass/fail in PHP.</p>
        </header>

        <div class="activity-content">
            <?php
            // Defaults (so page looks filled on first load)
            $math    = isset($_GET['math'])    && $_GET['math']    !== '' ? floatval($_GET['math'])    : 85;
            $english = isset($_GET['english']) && $_GET['english'] !== '' ? floatval($_GET['english']) : 90;
            $science = isset($_GET['science']) && $_GET['science'] !== '' ? floatval($_GET['science']) : 80;

            $submitted = isset($_GET['math']) || isset($_GET['english']) || isset($_GET['science']);
            $errors = [];
            $average = $gradeWord = $letter = null;

            if ($submitted) {
                // Validate presence
                if ($_GET['math'] === '' || $_GET['english'] === '' || $_GET['science'] === '') {
                    $errors[] = "Please enter all three scores.";
                }

                // Validate ranges
                foreach ([['Math', $math], ['English', $english], ['Science', $science]] as [$label, $val]) {
                    if (!is_numeric($val)) {
                        $errors[] = "$label score must be a number.";
                    } elseif ($val < 0 || $val > 100) {
                        $errors[] = "$label score must be between 0 and 100.";
                    }
                }

                if (!$errors) {
                    $average = ($math + $english + $science) / 3;

                    // Pass/Fail threshold (75)
                    $gradeWord = ($average >= 75) ? 'Passed' : 'Failed';

                    // Letter grade bands (adjust as desired)
                    if ($average >= 97)       $letter = 'A+';
                    elseif ($average >= 93)   $letter = 'A';
                    elseif ($average >= 90)   $letter = 'A-';
                    elseif ($average >= 87)   $letter = 'B+';
                    elseif ($average >= 83)   $letter = 'B';
                    elseif ($average >= 80)   $letter = 'B-';
                    elseif ($average >= 77)   $letter = 'C+';
                    elseif ($average >= 75)   $letter = 'C';
                    elseif ($average >= 70)   $letter = 'D';
                    else                      $letter = 'F';
                }
            } else {
                echo "<p>Enter your three subject scores (0–100), then click <strong>Compute</strong>.</p>";
                $average = ($math + $english + $science) / 3;
                $gradeWord = ($average >= 75) ? 'Passed' : 'Failed';
                // simple letter for initial sample
                $letter = ($average >= 90) ? 'A' : (($average >= 80) ? 'B' : (($average >= 75) ? 'C' : 'F'));
            }
            ?>

            <form action="" method="GET" class="grades-form">
                <label>
                    Math:
                    <input type="number" name="math" step="0.01" min="0" max="100"
                           value="<?php echo htmlspecialchars($math); ?>">
                </label><br><br>

                <label>
                    English:
                    <input type="number" name="english" step="0.01" min="0" max="100"
                           value="<?php echo htmlspecialchars($english); ?>">
                </label><br><br>

                <label>
                    Science:
                    <input type="number" name="science" step="0.01" min="0" max="100"
                           value="<?php echo htmlspecialchars($science); ?>">
                </label><br><br>

                <input type="submit" value="Compute">
            </form>

            <?php if ($errors): ?>
                <div class="output-card" style="border-left:4px solid #e74c3c; padding-left:12px;">
                    <h3><i class="fas fa-exclamation-circle"></i> Please fix the following</h3>
                    <ul>
                        <?php foreach ($errors as $e): ?>
                            <li><?php echo htmlspecialchars($e); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="output-card">
                <h3><i class="fas fa-graduation-cap"></i> Student Grades</h3>
                <div class="output-item">
                    <strong>Math:</strong>
                    <span class="output-value"><?php echo number_format($math, 2); ?>%</span>
                </div>
                <div class="output-item">
                    <strong>English:</strong>
                    <span class="output-value"><?php echo number_format($english, 2); ?>%</span>
                </div>
                <div class="output-item">
                    <strong>Science:</strong>
                    <span class="output-value"><?php echo number_format($science, 2); ?>%</span>
                </div>
                <div class="output-item">
                    <strong>Average:</strong>
                    <span class="output-value">
                        <?php echo $average !== null ? number_format($average, 2) . '%' : '—'; ?>
                    </span>
                </div>
                <div class="output-item">
                    <strong>Final Grade:</strong>
                    <span class="output-value">
                        <?php echo $gradeWord ? htmlspecialchars($gradeWord) : '—'; ?>
                        <?php echo $letter ? ' ('.$letter.')' : ''; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Go Back to Activity List</a>
</body>
</html>
