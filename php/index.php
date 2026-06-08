<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Learning Style Questionnaire</title>

<style>
body {
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background:
        linear-gradient(
            rgba(255, 255, 255, 0.3), 
            rgba(255, 255, 255, 0.3)
        ),
        url("../assets/bg.png") no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
}

.container {
    width: 800px;
    margin: 40px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 10px;
}

.note {
    text-align: center;
    font-size: 14px;
    color: #666;
    margin-bottom: 25px;
}

.section-title {
    margin-top: 25px;
    font-size: 18px;
    color: #34495e;
    border-bottom: 2px solid #3498db;
    padding-bottom: 5px;
}

.question-card {
    background: #f9f9f9;
    padding: 15px;
    margin: 15px 0;
    border-radius: 8px;
    border-left: 5px solid #3498db;
}

label {
    font-weight: 600;
}

.radio-group {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.radio-group label {
    font-weight: normal;
    font-size: 13px;
}

input[type=radio] {
    margin-right: 5px;
}

select, input[type=number] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 12px;
    margin-top: 30px;
    background: #3498db;
    color: white;
    font-size: 17px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

button:hover {
    background: #2980b9;
}

.progress {
    background: #eee;
    height: 8px;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 20px;
}

.progress-bar {
    width: 100%;
    height: 100%;
    background: #3498db;
}
</style>
</head>

<body>

<div class="container">

<h2>Student Learning Style Questionnaire</h2>
<p class="note">
Scale: <strong>1 (Strongly Disagree) – 5 (Strongly Agree)</strong>
</p>

<div class="progress">
    <div class="progress-bar"></div>
</div>

<form action="submit.php" method="post">

<div class="section-title">Demographic Information</div>

<div class="question-card">
    <label>Gender</label>
    <select name="gender" required>
        <option value="">-- Select Gender --</option>
        <option value="0">Male</option>
        <option value="1">Female</option>
    </select>
</div>

<div class="question-card">
    <label>Age</label>
    <input type="number" name="age" min="15" max="30" required>
</div>

<div class="section-title">Learning Preference Questions</div>

<?php
$questions = [
    "I learn better by reading what the teacher writes on the chalkboard.",
    "When I read instructions, I remember them better.",
    "I understand better when I read instructions.",
    "I learn better by reading than by listening to someone.",
    "I learn more by reading textbooks than by listening to lectures.",
    "When the teacher tells me the instructions I understand better",
    "When someone tells me how to do something in class, I learn it better.",
    "I remember things I have heard in class better than things I have read.",
    "I learn better in class when the teacher gives a lecture.",
    "I learn better in class when I listen to someone.",
    "I prefer to learn by doing something in class.",
    "When I do things in class, I learn better.",
    "I enjoy learning in class by doing experiments.",
    "I remember lessons through storytelling or audio explanations.",
    "I understand things better in class when I participate in role-playing."
];

foreach ($questions as $index => $q) {
    $num = $index + 1;
    echo "
    <div class='question-card'>
        <label>Q$num: $q</label>
        <div class='radio-group'>
            <label><input type='radio' name='q$num' value='1' required>1</label>
            <label><input type='radio' name='q$num' value='2'>2</label>
            <label><input type='radio' name='q$num' value='3'>3</label>
            <label><input type='radio' name='q$num' value='4'>4</label>
            <label><input type='radio' name='q$num' value='5'>5</label>
        </div>
    </div>";
}
?>

<button type="submit">Submit Questionnaire</button>

</form>
</div>

</body>
</html>
