Contact Details :


First Name {{$data['fname']}},
Last Name {{$data['lname']}},
Email {{$data['email']}},
Phone Number {{$data['phone']}},
boom
<?php
print_r($data);
?>

 $content1

 @foreach( $data['messageLines'] as $content)
			{{!!  $content	 !!}}	
 @endforeach