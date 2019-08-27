<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<!--JavaScript使用の宣言-->
    <meta http-equiv='Content-Style-Type' content='text/javascript'>

<!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- style-script Jquery-->
    <link rel="stylesheet" href="./style.css">
<style>
    body {
        font-size: 10px;
        margin: 0px;
        padding: 0px;
        background-image: url('./00_m.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    p {
        font-size: 1.6rem;
    }

    header {
        height: 150px;
        width: 100vw;
        background-color: coral;
        position: absolute;
        top: 0px;
        z-index: 1000;
    }

    h1 {
        line-height: 130%;
        font-size: 72px;
        color: #000;
        -webkit-text-stroke: 2px #FFF;
        text-stroke: 2px #FFF;
    }

    section {
        width: 70vw;
        height: 100vh;
        padding: 150px 10px 100px;
    }

    section form{
        style="height:100%;
        width:100%;
        height:100px;
        padding:10px;
        background-color: rgba(255,255,255,0.7);"
    }

    .btn-base{
        display: inline-block;
        padding: 0.5em 1em;
        text-decoration: none;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
        border-radius: 3px;
        /*角の丸み*/
        font-weight: bold;
        text-shadow: -1px -1px rgba(255, 255, 255, 0.44), 1px 1px rgba(0, 0, 0, 0.38);
    }
    .btn-base:active {
        /*ボタンを押したとき*/
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
        box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
        border-bottom: none;
    }

    .btn {
        background: #668ad8;
        color: #668ad8;
        border-bottom: solid 3px #627295;
    }
    .btn2 {
        background: coral;
        color: coral;
        border-bottom: solid 3px rgb(160,70,20);
    }
    .btn3 {
        background: aquamarine;
        color: aquamarine;
        border-bottom: solid 3px rgb(10,150,100);
    }
    .btn4 {
        background: white;
        color: wheat;
        border-bottom: solid 3px gray;
    }
    footer {
        height: 130px;
        width: 100vw;
        background-color: coral;
        position: absolute;
        bottom: 0px;
        z-index: 1000;
    }

    footer .copy {
        position: absolute;
        bottom: 10px;
        right: 25px;
    }
    .input-radio{
        height:30px!important;
        width:100px!important;
    }
    .input-text{
        height:30px!important;
        width:100px!important;
    }
    .custum{
        word-break:break-all;
        background-color: white;
        color:hotpink;

        max-width:50px;
        max-height:50px;
        padding:10px;
        margin:5px;
        overflow: scroll;
    }
    /*******************
    *box-js
    ********************/

    .box {
        width: 12.5%;
        height: auto;
        background: skyblue;
        cursor: pointer;
        transition: 0.8s;
        margin: 0 8px 8px 0;
        text-align: center;
        line-height: 100px;
    }

    .win {
        background-image: url(./00_m.jpg);
        background-position: center;
        border-radius: 50%;
        transform: rotateX(2880deg);
        color: antiquewhite;
        font-weight: 700;
    }

    .lose {
        background: gray;
        border-radius: 50%;
        transform: scale(0.7);
    }


</style>
    <!-- <script src="./main.js"> -->
<script>
    document.addEventListener('DOMContentLoaded', function(){

// global
        const newDiv = document.createElement('div');
        let number = 1;
        var num = 10;
// eventLIST
        const  hoge = document.getElementById('hoge');
        hoge.addEventListener('click',hogeDoAlert,false);

        const  fuga = document.getElementById('fuga');
        fuga.addEventListener('click',fugaCommentConsole,false);

        const  daja = document.getElementById('daja');
        daja.addEventListener('click',dajaCreateBox,false);
// function rogic
        function hogeDoAlert(){
            if(number > 5){
                window.alert("合格");
            } else{
                window.alert("不合格");
            }
            number += 1;
            console.log(number);
        }
        function fugaCommentConsole(){
            var radioNodeList = document.coral._radio;
            var answer = radioNodeList.value;
            if(answer === 'Yes'){
                console.log('Yeeeeeeees!');
            } else{
                console.log('wriiiiiiiiiiiiiiiiiii!');
            }
        }
        function dajaCreateBox(){
            var winner = Math.floor(Math.random() * num); // 0 - 4
            var text2 = document.querySelector('[name="_text2"]');
            var newDiv = document.createElement('div');
            var newContext = document.createTextNode(text2.value);
            var i = 1;
            i < num;
            i++;

            if (i === winner) {
                newDiv.dataset.result = 'win';
            } else {
                newDiv.dataset.result = 'lose';
            }
            newDiv.id ='parent';
            newDiv . appendChild(newContext);
            newDiv.classList.add("custum");
            newDiv.classList.add('box');
            newDiv.classList.add('col-1');
            newDiv . insertAdjacentHTML('beforeend', '<div class="box" id="nun"></div>');
            newDiv.addEventListener('click',function(){
            if (newDiv.dataset.result === 'win') {
                newDiv.textContent = 'Win!';
                newDiv.classList.add('win');
                } else {
                newDiv.textContent = 'Lose!';
                newDiv.classList.add('lose');
                }
            })
            const div3 = document.getElementById('div3');
            div3.appendChild(newDiv);
        }
}, false);
</script>

</head>
<body>
    <header>
        <div class="text-center">
            <h1>JavaScript</h1>
        </div>
    </header>

    <section class="mx-auto row">
        <div class="d-flex" style="height:100px; margin:20px 0;">
            <div class="col-6">
                <form action="#" name='blue'>
                    <input type="text" value='' name='_text' class="input-text d-block w-50 h-25 mx-auto">
                    <div class="mx-auto">
                        <input type="button" class="btn btn-base d-block mx-auto my-1" value="Click Me!"id="hoge"/>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form action="#" name="coral" class="d-flex mx-auto">
                    <div class="col-3">
                        <input name='_radio' type="radio" value='Yes' class="input-radio d-block w-50 h-25 mx-auto"/>Yes
                        <input name='_radio' type="radio" value='No' class="input-radio d-block w-50 h-25 mx-auto"/>No
                    </div>
                    <div class="col-9">
                        <input type="button" class="btn2 btn-base d-block mx-auto my-1" value="Click Me!"id="fuga"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex" style="height:100px; margin:20px 0;">
            <div class="col-6">
                <form action="#" name='green'>
                    <input type="text" value='' name='_text2' class="input-text d-block w-50 h-25 mx-auto">
                    <div class="mx-auto">
                        <input type="button" class="btn3 btn-base d-block mx-auto my-1" value="Click Me!"id="daja"/>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form action="#" name="white">
                    <input type="radio" value='fuga2' name='_radio2' class="input-radio d-block w-50 h-25 mx-auto"/>
                    <div class="mx-auto">
                        <input type="button" class="btn4 btn-base d-block mx-auto my-1" value="Click Me!"id="hafu"/>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div id="div3" class="col-12 py-2 d-flex" style="color:red;"></div>
        <P class="text-right copy" >&copy;takuya suetake</P>
    </footer>

    <script>
        // function doReload(){
        //     window.location.reload(faulse);
        // }
        // window.addEventListener('load', function () {
        //     setTimeout(doReload, 5000);
    // });

    </script>
</body>
</html>
