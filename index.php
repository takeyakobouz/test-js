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
<!-- style-script -->
    <link rel="stylesheet" href="./style.css">
    <!-- <script src="./main.js"> -->
    <script>
        var number = 1;
        window.onload = function(){
            const  hoge = document.getElementById('hoge');
            hoge.addEventListener('click',function(){

                if(number > 5){
                    window.alert("合格");
                } else{
                    window.alert("不合格");
                }
                console.log('click');
                number += 1;
            })
        }

</script>
</head>
<body>
    <header>
        <div class="text-center">
            <h1>JavaScript</h1>

        </div>
    </header>

    <section class="mx-auto row">
        <div class="col-12">
            <form action="#" style="height:100%; width:100%; padding:100px">
                <input type="text" class="d-block w-50 h-25 mx-auto">
                <div class="mx-auto">
                    <input type="button" class="btn d-block mx-auto my-3" value="Click Me!"id="hoge"/>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <P class="text-right copy" >&copy;takuya suetake</P>
    </footer>

</body>
</html>
