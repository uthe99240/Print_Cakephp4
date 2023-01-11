<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Document</title>

    <style>
        h1{
            text-align: center;
            background-color: red;
        }

        button{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <div>
        <h1 >Welcome to Print Page</h1>
        <button onclick="sendData(1234,1)">WindowOpen</button>
        <!-- <a id="btnWindowOpen" href="http://localhost:8765/Print/home?id=123">button</a> -->
    </div>
    <script>

        function sendData(nothi_id,page){
            reqUrl =`http://localhost:8765/Print/index?search_params=&nothi_id=${nothi_id}&page=${page}`;
            window.open(reqUrl, '_blank', 'location=yes,height=870,width=1000,scrollbars=yes,status=yes');
        }
        // $(document).ready(function(){
        //     $('#btnWindowOpen').click(function(){
        //         reqUrl ='http://localhost:8765/Print/index';
        //         window.open(reqUrl, '_blank', 'location=yes,height=870,width=1000,scrollbars=yes,status=yes');
            
        //     })
        // })

    </script>
</body>
</html>