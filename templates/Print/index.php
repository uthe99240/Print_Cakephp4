<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Document</title>
    <style>
        h1{
            background-color: greenyellow;
            text-align: center;
        }

        button{
                background-color: tomato;
                border-radius: 5px;    
        }

        @media print{
            #btnPrint{
                display:none;
           }
        }

        

    </style>
</head>
<body>

    <h1>Congratulations</h1>
    <div class="row my-4 mx-2">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Name : Md. Faisal Ahmed</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Document</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Name : Mohammad Rifatul Islam</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Document</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Name : Tofayel Hyder Abhi</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Document</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Name : Nishan Nisho</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Document</a>
      </div>
    </div>
  </div>
  </div>

  <div class="mx-4">
        <!-- <button id="btnPrint">Print</button> -->
        <p><span id="nothi_id"></span></p>
        <p><span id="page_num"></span></p>
  </div>
  


    <script>
        // $(document).ready(function(){
        //     $('#btnPrint').click(function(){
        //        window.print();
        //     })
        // })

        const nothi_id =  new URLSearchParams(window.location.search).get('nothi_id');
        const page_num =  new URLSearchParams(window.location.search).get('page');
        if(nothi_id!= null){
            $('#nothi_id').text('Nothi_Id : '+ nothi_id);
            $('#page_num').text('Page Number : '+ page_num);
        }
    </script>

</body>
</html>