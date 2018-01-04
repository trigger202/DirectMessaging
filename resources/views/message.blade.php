<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>


<div class="container">

<div class="list-group"><h1>Direct Messaging</h1></div>


	<form method="post" action="/send">
		{{CSRF_field()}}
		<div class="list-group-item FriendList">
			<h2>Friend List	</h2>

			<div class="panel">


			@foreach($friendsList as $friend)
				<label>{{$friend->name}}</label><input type="radio" name="friendid" value="{{$friend->id}}" checked=""><br>

			@endforeach


			</div>

		</div>


		<div class="list-group-item Messaging">

			<textarea rows="5" name="message"></textarea>

		</div>
		<br>

		<button type="submit" class="btn btn-info">Send message</button>
		<br>
	</form>

		<br>

	<div class="My messages list-group-item">
		<h2>Recived Messages</h2>
		<ul>
			@foreach($messageList as $message)
				<li>
					<div class="well well-sm">{{$message->message}} - from</div>
				</li>
			@endforeach
		</ul>
	</div>

</div>

</body>
</html>