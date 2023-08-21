<?Php
    require "database.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Application With Timer</title>
        <link rel="stylesheet" href="poppins.css">
        <link rel="stylesheet" href="style.css">
        <link href="Font-Awesome-5.15.4/css/all.css" rel="stylesheet">
    </head>

    <body>
        <!-- start Quiz button -->
        <div class="start_btn" style="border-radius: 25px;"><button></button></div>

        <!-- Info Box -->
        <div class="detail_box">
            <div class="info-title"><span>Some Rules of this Quiz</span></div>
            <div class="info-list">
                Name : <input type="text" id="name"><br/> Number : <input type="number" id="number"><br/> Unit : <input type="text" id="unit"> <br/> Date : <input type="date" id="date">
            </div>
            <div class="buttons">
                <button class="quit">Exit Quiz</button>
                <button class="detailContinue">Continue</button>
            </div>
        </div>
        <!-- Info Box -->
        <div class="info_box">
            <div class="info-title"><span>Some Rules of this Quiz</span></div>
            <div class="info-list">
                <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
                <div class="info">2. Once you select your answer, it can't be undone.</div>
                <div class="info">3. You can't select any option once time goes off.</div>
                <div class="info">4. You can't exit from the Quiz while you're playing.</div>
                <div class="info">5. You'll get points on the basis of your correct answers.</div>
            </div>
            <div class="buttons">
                <button class="quit">Exit Quiz</button>
                <button class="restart">Continue</button>
            </div>
        </div>

        <!-- Quiz Box -->
        <div class="quiz_box">
            <header>
                <div class="title">HTML Quiz With Timer</div>
                <div class="timer">
                    <div class="time_left_txt">Time Left</div>
                    <div class="timer_sec">15</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">

                </div>
                <div class="option_list">

                </div>
            </section>


            <footer>
                <div class="total_que">

                </div>
                <button class="next_btn">Next Question</button>
            </footer>
        </div>

        <!-- Result Box -->
        <div class="result_box">
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">You've completed the Quiz!</div>
            <div class="score_text">

            </div>
            <div class="buttons">
                <button style="display: none;" class="restart">Replay Quiz</button>
                <button class="quit">Print Result</button>
            </div>
        </div>


        <!-- Result Box -->
        <iframe style="display:none;" id="printf" name="printf" src="print.html"></iframe>


        <script src="./script.js"></script>

        <!-- FontAweome CDN Link for Icons -->
        <!-- 
  <script src="./a076d05399.js"></script>
    -->

    </body>

    </html>