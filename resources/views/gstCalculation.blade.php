<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ URL::asset('public/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}">

    <title>GST Calculater</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('public/images/gst.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>GST</strong> CALCULATER</h3>

            <form action="{{ route('gst') }}" method="post">
                @csrf
              <div class="form-group first">
                <label for="username">Amount</label>
                <input type="text" class="form-control" placeholder="Enter The Amount" value="{{ old('amount') }}" name="amount">
                <span style="color:red">@error('amount') {{ $message }} @enderror</span>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Percentage</label>
                <input type="text" class="form-control" value="{{ old('percentage') }}" placeholder="Enter Percentage" name="percentage">
                <span style="color:red">@error('percentage') {{ $message }} @enderror</span>
              </div>



              <input type="submit" value="Calculate" class="btn btn-block btn-primary">

            </form>
        <br/>
        <br/>
            <?php
          if(!empty($data['gst']))
          {
          ?>
          <div>
            <h6><b>ORIGINAL PRICE :</b> &#x20b9; {{ number_format($data['origin']) }}</h6>
            <h6><b>GST :</b> &#x20b9; {{ number_format($data['gst']) }}</h6>
            <h6><b>CGST :</b> &#x20b9; {{ number_format($data['cgst']) }}</h6>
            <h6><b>SGST :</b> &#x20b9; {{ number_format($data['sgst']) }}</h6>
          </div>

          <?php
          }
          ?>
          </div>

        </div>

      </div>
    </div>


  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>



{{-- <html>
<h1>GST Calculation</h1>

<form action="{{ route('gst') }}" method="post">
    @csrf
<table>
    <tr><td>Amount</td><td><input type="text" name="amount" placeholder="Enter The Number" value="{{ old('amount') }}"></td></tr>
    <tr><td></td><td><span style="color:red">@error('amount') {{ $message }} @enderror</span></td></tr>
    <tr><td>Percentage</td><td><input type="text" name="percentage" placeholder="Enter The Percentage"></td></tr>
    <tr><td></td><td><span style="color:red">@error('percentage') {{ $message }} @enderror</span></td></tr>
    <tr><td></td><td><input type="submit" name="submit"></td></tr>
</table>
</form>
<?php
if(!empty($data['gst']))
{
?>
<table>
    <tr><td>GST</td><td>CGST</td><td>SGST</td></tr>
    <tr><td>{{ $data['gst'] }}</td><td>23</td><td>23</td></tr>
</table>
<?php
}
?>
</html> --}}
