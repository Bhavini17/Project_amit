<html>

<body>
Contact Details :
<br>

First Name {{$data['fname']}}, <br>
Last Name {{$data['lname']}}, <br>
Email {{$data['email']}}, <br>
Phone Number {{$data['phone']}},<br>



 @foreach( $data['messageLines'] as $content)
			  <br> {{ $content }} 
 @endforeach

 </body>
 </html>