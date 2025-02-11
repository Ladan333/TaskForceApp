<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <style>
        .basic-grid{
            text-align: center;
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <div class="basic-grid">
        <form action="TaskForceApp.php" method="POST">
            <label for="newTask">Add a task</label><br>
            <input type="text" id="newTask" name="newTask"></input>
            <input type="submit" value="Submit"></input>
        </form>
    </div>
    <div>
        <?php
            $tasks = ["one", "two", "three"];

            foreach ($tasks as $t){
                echo "$t <br>";
            }
        ?>
    </div>
</body>
</html>