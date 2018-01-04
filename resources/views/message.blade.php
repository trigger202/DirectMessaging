<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="container">

<div><h1>Direct Messaging</h1></div>


	<form method="post" action="/send">
		{{CSRF_field()}}
		<div class="FriendList">
			<h2>Friend List	</h2>

			<div class="panel">


			@foreach($friendsList as $friend)
				<label>{{$friend->name}}</label><input type="radio" name="friendid" value="{{$friend->id}}" checked=""><br>

			@endforeach


			</div>

		</div>


		<div class="Messaging">

			<textarea rows="5" name="message"></textarea>

		</div>

		<button type="submit">Send message</button>
	</form>


</div>

</body>
</html>