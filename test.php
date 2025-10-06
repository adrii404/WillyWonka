<?php
// handle submitted combination
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $combination = $_POST['combination'] ?? '';
    echo "<h2>You selected: " . htmlspecialchars($combination) . "</h2>";
    // Here you can save to database, etc.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottery Teller</title>
    <style>
        .letters {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            max-width: 400px;
        }
        button.letter-btn {
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
        }
        #selected {
            font-size: 20px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Create 4-Letter Combination</h1>

    <form method="POST" onsubmit="return checkComplete()">
        <div class="letters">
            <!-- Generate alphabet buttons -->
            <?php foreach (range('A', 'Z') as $letter): ?>
                <button type="button" class="letter-btn" onclick="selectLetter('<?php echo $letter; ?>', this)">
                    <?php echo $letter; ?>
                </button>
            <?php endforeach; ?>
        </div>

        <input type="hidden" name="combination" id="combination">
        <div id="selected">Selected: </div>

        <button type="submit">Submit Combination</button>
    </form>

    <script>
        let selected = [];
        function selectLetter(letter, btn) {
            if (selected.length >= 4) {
                alert("You can only select 4 letters.");
                return;
            }
            if (selected.includes(letter)) {
                alert("You already selected this letter.");
                return;
            }
            selected.push(letter);
            btn.disabled = true;
            document.getElementById('selected').innerText = "Selected: " + selected.join('');
            document.getElementById('combination').value = selected.join('');
        }

        function checkComplete() {
            if (selected.length !== 4) {
                alert("Please select exactly 4 letters.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
