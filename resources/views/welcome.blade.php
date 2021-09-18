<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OPEN API </title>
  <link rel="stylesheet" href="../css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
</head>
<div class="container">
          <div class="row">
          <div class="col-md-5 m-auto">
          <form action="" method="GET">
             <div class="card" style="background-color:	#90EE90;">   
            <div class="card-body m-auto">            
                <h2 class="text-center text-light">Posttask_API Finals </h4>
                <h3 class="text-center text-light">Klaudin Stella V. Caringal</h4>
                <h3 class="text-center text-light">BSIT4A</h4>


    </div>
    <div class="content border border-dark bg-opacity-tan p-6 my-6 mx-4">
      <div class="user-input text-center bg-opacity-secondary p-3">
        <form action="/" method="get">
          @csrf
          <div class="row m-2">
            <div class="col-md-12 m-1 text-center"><label for="value1">City</label></div>
            <div class="col-sm-6"><input type="text" name="q" id="" placeholder="Input City" value=""></div>
            
          </div>
          <div class="row m-2">
            <div class="col-m-7"><label for="value1">Language</label></div>
            <div class="col-m-7"><input type="text" name="language" id="" placeholder="Input Language" value=""></div>
          </div>
    
          <button type="submit" class="mt-3 btn btn-info">Submit</button>
        </form>
      </div>
    </div>

    <div class="border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($data)
          <div class="col-3"><h4>Country</h4></div>
          <div class="col-9">
            {{print_r($data["LocalizedName"])}}
          </div>
            <div class="col-9">
            </div>
          </div>
          @endisset
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>