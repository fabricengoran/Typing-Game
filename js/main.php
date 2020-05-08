<script type = "text/javascript">
// <?php
// session_start();
// $_SESSION['score'] = '';
// require 'config/db.php';
// $request = "SELECT * FROM message";
// $result = msqli_request($conn, $request);
// $logins = mysqli_fetch_array($result);

// print_r($logins);

// ?>
<?php
// include_once 'server.php';
// require_once '../config/db.php';
if (!isset($_SESSION['username'])) {
	header("location: login.php");
}
?>

// function saveUsertimes() {
//     $.post('index.php', {
//             point: pts.val(),
//             high_score: highScore.val(),
//         },

//         function(data, status) {
//             document.getElementById('#galoon').innerHTML = data;
//             $('#galoon').fadeIn(100);
//             setTimeout(function() {
//                 $('#galoon').fadeOut(100);
//             }, 3000);
//         });
// }



// window.addEventListener('load', init);
window.addEventListener('load', start);
// window.addEventListener('click', hider);
// window.addEventListener('input', chooseLevel);

// const ranking = {
//     3: 'Sangalong',
//     2: 'Duke',
//     1: 'Keyng'
// }
// <?php echo json_encode('Hello World!'); ?>

const levels = {
    easy: 5,
    medium: 4,
    hard: 3
}

// let x = easy;

// <?php if(isset($_SESSION['username'])) : ?>

let score = 0;
<?php if(isset($_SESSION['username'])) { ?>
    <?php if(isset($_POST['submit1']) ) { ?>
        score = <?php echo isset($_POST['submit1']) ? $_SESSION['score'] : 0; ?>
    <?php } ?>
<?php } ?>

let tempScore = 0;

// <?php echo json_encode(isset($_POST['submit1'])  ? $_SESSION['score'] : ''); ?>

let isPlaying;
let high_score = 0;
<?php if(isset($_SESSION['username'])) { ?>
    <?php if(isset($_POST['submit1']) ) { ?>
        high_score = <?php echo isset($_POST['submit1']) ? $_SESSION['high_score'] : 0; ?>
    <?php } ?>
<?php } ?>

// window.localStorage;
// let tempScore = 0;
// localStorage.serItem(tempScore, score);

// let tScore = localStorage.getItem(tempScore);
// <?php endif; ?>
// let score = <?php $_SESSION['point']; ?>
// let Game = 0;

// localStorage.setItem('score', Game.scene.score);



const wordInput = document.querySelector('#word-list');
const currentWord = document.querySelector('#current-word');
const scoreDisplay = document.querySelector('#score');
const timeDisplay = document.querySelector('#time');
const message = document.querySelector('#message');
const seconds = document.querySelector('#seconds');
const highScore = document.querySelector('#high-score');
const level = document.querySelector('select');

const hide = document.querySelector('#btnLogin');
const hide0 = document.querySelector('#btnSignup');
const hide1 = document.querySelector('#form1');
const hide2 = document.querySelector('#form2');
const hide3 = document.querySelector('#form3');

const play = document.querySelector('#btnPlay');
const pause = document.querySelector('#btnPause');
const reset = document.querySelector('#btnReset');

const pts = document.querySelector('#points');
const rating = document.querySelector('#galoon');
const ranky = document.querySelector('#rank');

let point = 0;
<?php if(isset($_SESSION['username'])) { ?>
    <?php if(isset($_POST['submit1']) ) { ?>
        point = <?php echo isset($_POST['submit1']) ? $_SESSION['point'] : 0; ?>
    <?php } ?>
<?php } ?>


let currentPoint = point;

// currentPoint.saveFile = function() {
//     var file = { high_score: currentPoint.scene.score };
//     localStorage.setItem('saveFile', JSON.stringify(file));
// };

// currentPoint.loadFile = function() {
//     var file = JSON.parse(localstorage.getItem('saveFile'));
//     currentPoint.scene.score = file.score;
//     currentPoint.scene.visits = file.visits;
// };


const words = [
    'hat',
    'river',
    'lucky',
    'statue',
    'generate',
    'stubborn',
    'cocktail',
    'runaway',
    'joke',
    'developer',
    'establishment',
    'security',
    'million',
    'obstruct',
    'total',
    'character',
    'resemblance',
    'panel',
    'realize',
    'coma',
    'sea',
    'makeup',
    'mango',
    'fruits',
    'function',
    'marriage',
    'stomach',
    'antelope',
    'octupus',
    'bread',
    'potato',
    'ginger',
    'charger',
    'sweep',
    'chinese',
    'soldier',
    'post',
    'music',
    'chords',
    'fire',
    'father',
    'chick',
    'ladder',
    'piece',
    'strong',
    'take',
    'respect',
    'weapon',
    'fall',
    'love',
    'me',
    'paper',
    'we',
    'it',
    'make',
    'donkey',
    'respect',
    'quarter',
    'zinc'
];

// <?php echo 'Hello World!'; ?>
// console.log(hasAutofocus);
level.addEventListener('input', chooseLevel);


function inputFocus() {
    const hasAutofocus = document.querySelector('#word-list').focus();
}

function start() {
    // let currentLevel = levels.easy;

    // let time = currentLevel;
    // init();
    // score = 0;
    // time = currentLevel;
    play.addEventListener('click', state1);
    pause.addEventListener('click', state2);
    reset.addEventListener('click', state3);
    chooseLevel();



}

function init() {
    // console.log('init');
    // seconds.innerHTML = currentLevel;
    showWord(words);
    wordInput.addEventListener('input', startMatch);
    setInterval(countdown, 1000);
    setInterval(checkStatus, 300);
    // setInterval(chooseLevel, 1000);
    isPlaying = true;
    hide3.style.display = 'none';
    wordInput.value = '';
    saveState();
    // timeDisplay.innerHTML = '';

    // if (point < 1) {
    //     ranky.innerHTML = 'Sangaloon';
    //     ranky.style.color = 'red';
    // } else if (point >= 1 && point < 2) {
    //     ranky.innerHTML = 'Sherif';
    //     ranky.style.color = 'orange';
    // } else if (point >= 2 && point < 3) {
    //     ranky.innerHTML = 'Captain';
    //     ranky.style.color = 'blue';
    // } else {
    //     ranky.innerHTML = 'Captain';
    //     ranky.style.color = 'blue';
    // }


    // const hasAutofocus = document.querySelector('#word-list').Autofocus = true;

    // level.addEventListener('input', level1);
    // level.addEventListener('input', level2);
    // level.addEventListener('input', level3);

    // setInterval(mediumMode, 1000);
    // setInterval(hardMode, 1000);


}
// setInterval(chooseLevel, 1000);


hide.addEventListener('click', hider0);
hide.addEventListener('click', hider2);
hide0.addEventListener('click', hider1);
hide1.style.display = 'none';
hide2.style.display = 'none';
// hide3.style.display = 'none';
// setInterval(state, 300);



// function colorIndacator() {
//     if (isPlaying = true && score === -1) {
//         timeDisplay.style.color = 'green';
//         scoreDisplay.style.color = 'red';
//     } else {
//         timeDisplay.style.color = 'red';
//         scoreDisplay.style.color = 'green';
//     }
// }
// console.log(level.innerHTML);
// console.log(window);

// console.log(level.target.value);

// function genesis() {
//     time = 0;
//     score = 0;
// }

function saveState() {
    <?php
    include 'config/db.php';
    if(isset($_POST['submit1'])) {
        if(isset($_SESSION['username'])) {
    ?>
            let userName = '<?php echo isset($_POST['submit1']) ? $_SESSION['username'] : ''; ?>'
            console.log(score);
    <?php
            $sql = "UPDATE `user_info` SET score = 'score' WHERE username = 'userName'";
            $rlt = mysqli_query($conn, $sql);
            if ($sql) { ?>
                console.log('success');
           <?php } else { ?>
                console.log('failed');
           <?php }
            mysqli_close($conn);
        }
    }
    ?>
}


function state1() {
    init();
    saveState();
    inputFocus();
    // window.location.reload();
    // if (isPlaying === false) {
    //     state1();
    // }laying === false) {
    // state1();
    // }
    // isPlaying = true;
}

function state2() {
    window.stop();
    // while (isPlaying === true) {
    //     time = currentLevel;
    //     tempScore = tempScore - 1;
    //     isPlaying = false;
    // }
}

function state3() {
    window.location.reload();
    state1();
}


function hider0() {
    if (hide1.style.display === 'none' && hide2.style.display === 'none' /* && hide3.style.display === 'block'*/ ) {
        hide1.style.display = 'block';
        hide2.style.display = 'none';
        // hide3.style.display = 'none';
    } else if (hide1.style.display === 'block' && hide2.style.display === 'none' /* && hide3.style.display === 'none'*/ ) {
        hide1.style.display = 'none';
        hide2.style.display = 'none';
        // hide3.style.display = 'block';
    } else {
        hider1();
        hide1.style.display = 'block';
        hide3.style.display = 'none';
    }
}

function hider1() {
    if (hide1.style.display === 'none' && hide2.style.display === 'none') {
        hide1.style.display = 'none';
        hide2.style.display = 'block';
    } else if (hide1.style.display === 'none' && hide2.style.display === 'block') {
        hide1.style.display = 'none';
        hide2.style.display = 'none';
    } else {
        hider0();
        hide2.style.display = 'block';
    }
}

function hider2() {
    if (hide1.style.display === 'block') {
        hide3.style.display = 'none';
    } else {
        hide3.style.display = 'block';
    }
}

// function level1() {
//     time = currentLevel;
//     currentLevel = levels.easy;
//     seconds.innerHTML = 5;
//     console.log(level.value);
// }

// function level2() {
//     time = currentLevel;
//     currentLevel = levels.easy - 1;
//     seconds.innerHTML = 4;
//     console.log('mediumLevel');
// }

// function level3() {
//     time = currentLevel;
//     currentLevel = levels.easy - 2;
//     seconds.innerHTML = 3;
//     console.log('hardLevel');
// }

function chooseLevel() {





    inputFocus();
    // start();
    // time = currentLevel;
    // currentLevel = levels.hard;
    // seconds.innerHTML = currentLevel;
    // console.log(currentLevel);
    if (level.value != 4 && level.value != 3) {
        // ;
        currentLevel = levels.easy;
        time = currentLevel;
        seconds.innerHTML = 5;
        // console.log('easyLevel');
        // }
        // ediumMode();
        // start();
        // level1();
    } else if (level.value != 5 && level.value != 3) {
        level.value = 4;
        currentLevel = levels.medium;
        time = currentLevel;
        seconds.innerHTML = 4;
        // console.log('mediumLevel');
        // hardMode();
        // start();
        // level2();
    } else if (level.value != 5 && level.value != 4) {
        level.value = 3;
        currentLevel = levels.hard;
        time = currentLevel;
        seconds.innerHTML = 3;
        // console.log('hardLevel');
        // start();
        // level3();
        // console.log('nothing ' + currentLevel);
        // seconds.innerHTML = level.value;


        //     switch (level) {
        //         // case 'Easy':
        //         //     currentLevel = level.easy;
        //         //     time = currentLevel;
        //         //     seconds.innerHTML = 5;
        //         //     console.log(level.value);
        //         //     break;
        //         case 'Medium':
        //             currentLevel = levels.medium;
        //             time = currentLevel;
        //             seconds.innerHTML = levels.medium;
        //             console.log(level.value);
        //             break;
        //         case 'Hard':
        //             currentLevel = levels.hard;
        //             time = currentLevel;
        //             seconds.innerHTML = levels.hard;
        //             console.log(level.value);
        //             break;
        //         default:
        //             currentLevel = levels.easy;
        //             time = currentLevel;
        //             seconds.innerHTML = 0;
        //             console.log(level.value);
    }
}
// if (currentLevel === 3) {
//     console.log('hardLevel');
//     level.innerHTML = 'Hard';

// } else if (currentLevel === 4) {
//     console.log('mediumLevel');

//     // x = medium;
// } else {
//     console.log('easyLevel');
//     currentLevel = levels.easy;
//     seconds.innerHTML = level.value;
//     // x = hard;
// }
// }

function showWord() {
    const randIndex = Math.floor(Math.random(words) * words.length);
    currentWord.innerHTML = words[randIndex];
    // console.log(currentWord.innerHTML.split);
    // if (score === -1  score === 0) {
    //     pts.innerHTML = currentPoint;
    // } else {
    //     pts.innerHTML = ((score + 1) / 10);
    // }


}

function countdown() {
    if (time > 0) {
        time--;
        timeDisplay.style.color = 'green';
        scoreDisplay.style.color = 'red';
        highScore.HTML = '';

        if (tempScore != 0) {
            scoreDisplay.style.color = 'green';
        } else {
            scoreDisplay.style.color = 'red';
        }

    } else if (time === 0) {
        isPlaying = false;
        timeDisplay.style.color = 'red';
        // message.innerHTML = 'Game Over!!!';

        if (score > high_score) {
            high_score = score;
            highScore.innerHTML = 'New high score!!!';
        } else {
            highScore.innerHTML = 'High score: ' + high_score;
        }
    }
    timeDisplay.innerHTML = time;



    // if (time != 0) {
    //     timeDisplay.style.color = 'green';
    // } else {
    //     timeDisplay.style.color = 'red';
    // }
}

function checkStatus() {
    if (!isPlaying && time === 0) {
        message.innerHTML = 'Game Over!!!';
        message.style.color = 'red';
        // wordInput.style.borderColor = 'red';
        tempScore = -1;
        // if (isplaying = false) {
        //     saveState();
        // }
        // localStorage.setItem('tempScore', 'score');
    }
}

function startMatch() {
    if (matchWords()) {
        isPlaying = true;
        time = currentLevel + 1;
        showWord(words);
        wordInput.value = '';
        tempScore++;
    }
    score += tempScore;
    console.log(score);
    // saveState();
    return;
    
    if (tempScore === -1) {
        scoreDisplay.innerHTML = 0;
        // scoreDisplay.style.color = 'red';
    } else {
        highScore.innerHTML = '';
        scoreDisplay.innerHTML = tempScore;
        // scoreDisplay.style.color = 'green';
    }
}

function matchWords() {
    if (wordInput.value === currentWord.innerHTML) {
        message.innerHTML = 'Correct!!!';
        message.style.color = 'green';
        pts.innerHTML = ((score + 1) / 10);
        return true;
    } else {
        wordInput.innerHTML = '';
        if (isPlaying) {
            message.innerHTML = '';
        }
        return false;
    }

    // current = currentWord.innerHTML.match;
    // word = wordInput.value.split;
    // console.log(current);
    // console.log(word);
    // current.forEach(letter => {
    //     if (letter === word) {
    //         letter.style.color = 'green';
    //     }
    //     console.log(letter);
    // });


}
</script>