@include('backend.partials.dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://www.position-absolute.com/creation/print/jquery.printPage.js">
<script lang='javascript'>
    $(document).ready(function(){
        $('#printPage').click(function(){
            var data = '<input type="button" value="Print this page" onClick="window.print()">';
            data += '<div id="div_print">';
            data += $('#report').html();
            data += '</div>';

            myWindow=window.open('','','width=200,height=100');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        });
    });
</script>
</head>
<body style="background: #008080;">
<h1 style="text-align: center; margin-top: 0px; background: #66CDAA; padding: 20px;">Payment Information</h1>
<div style="margin-left: 100px;">
<div style="margin-left: 300px;">
	<a style="font-size: 30px;"  href="{{route('payment.create')}}" class="btn btn-success">Add</a>
    <br>
    <br>
    {{$payment->links()}}
</div>
<br>
@if($message=Session::get('success'))
<div class="alert alert-success" style="margin-left: 300px; margin-right: 250px;">
	<p>{{$message}}</p>
</div>
@endif
<table class="table table-bordered table-striped" style="margin-left: 300px; color: white; font-weight: bold; width: 1500px;">
	<thead style="color: yellow;">
		<th>Payment Id</th>
		<th>Patient Name</th>
		<th >Date</th>
		<th >Room Price</th>
		<th >Doctor visiting Price</th>
		<th >Test Price</th>
		<th >Medicine Price</th>
		<th >Total Price</th>
		
		<th>Action</th>
	</tr>
	</thead>
	<tbody id="result">
	@foreach($payment as $row)

	<tr>
	<td>{{$row->id}}</td>
	<td>{{$row->p_name}}</td>
	<td>{{$row->date}}</td>
	<td>{{$row->r_price}}</td>
	<td>{{$row->d_price}}</td>
	<td>{{$row->t_price}}</td>
	<td>{{$row->m_price}}</td>
    <td>{{$row->total_price}}</td>


	<td>
		<a href="{{route('payment.edit', ['id'=>$row->id])}}" class="btn btn-success">Edit</a>
		<a href="{{route('payment.destroy', ['id'=>$row->id])}}" class="btn btn-danger">Delete</a>
		<a href="{{route('payment.pdf', $row->id)}}" class="btn btn-primary">print</a>
		
		
	</td>
	</tr>
	
	@endforeach
	</tbody>
	
</table>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>