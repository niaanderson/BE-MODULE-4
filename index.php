<DOCTYPE html>
    <html>
        <head>
            <title>testPage</title>
        </head>
        <body>
            <?php

                if (!empty($_POST)){
                    //defined terms
                    $ans1 = $_POST["ans1"];
                    $ans2 = $_POST["ans2"];
                    $ans3 = $_POST["ans3"];
                    $ans4 = $_POST["ans4"];
                    $correct = 0;
                    //decision structure for each question in the quiz. if answer correct, add 1 to defined value: $correct
                    if ($ans1 == 5){
                        $correct++;
                    } else{
                        echo "<p>You can't add</p>";
                    }
                    if ($ans2 == 4.4){
                        $correct++;
                    } else{
                        echo "<p>You can't subtract</p>";
                    }
                    if ($ans3 == 48){
                        $correct++;
                    } else{
                        echo "<p>You can't mutiply</p>";
                    }
                    if ($ans4 == "five"){
                        $correct++;
                    } else{
                        echo "<p>You can't divide</p>";
                    }
                    //echo's number of questions answered correctly with defined: $correct
                    echo "<p>You got $correct correct!</p>";
                    //echo's customized messaging based on value of defined: $grade which is a percentage calculation
                    $grade = ($correct/4 * 100);
                    if ($correct == 0){
                        echo "<p>Try again.</p>";
                    } elseif ($correct == 1){
                        echo "<p>You need to really, really work on arithmetic.</p>";
                    } elseif ($correct == 2){
                        echo "<p>You need to really work on arithmetic.</p>";
                    } elseif ($correct == 3){
                        echo "<p>You did ok.</p>";
                    } else {
                        echo "<p>Great job! You aced it!</p>";
                    }
                } else{
                    echo "<p>Please take the quiz.</p>";
                }
            ?>
            <!-- 4 Question form with php involvement -->
            <form action= "index.php" method="post">
                <p>What is 2 + 3?</p>
                <input type="number" name="ans1">
                <p>What is 5.5 - 1.1?</p>
                <input type="number" step="any" name="ans2">
                <p>What is 6 x 8?</p>
                <input type="number" name="ans3">
                <p>What is 10 divided by 2? Type your answer in word format.</p>
                <input type="text" name="ans4"><br>
                <input type="submit">
            </form>
            <?php
                //defined terms
                $string = 'DAE';
                $length = strlen($string);
                echo "Learning @ ";
                //for loop
                for($start=0; $start < $length; $start++){
                    echo($string[$start] . ".");
                }
                //function
                function displayWebsiteAuthor(){
                    echo("<br> Created by Nia Anderson");
                }
                displayWebsiteAuthor();
            ?>
        </body>
    </html>
