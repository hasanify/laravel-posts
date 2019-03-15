@if(count($errors) > 0)
@foreach($errors -> all() as $error)
<div class="alert alert-danger alert-dismissible" id="myAlert">
	<a href="#alert" class="close">&times;</a>
	{{ $error }}
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible" id="myAlert">
	<a href="#alert" class="close">&times;</a>
	{{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible" id="myAlert">
	<a href="#alert" class="close">&times;</a>
	{{ session('error') }}
</div>
@endif
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
</script>