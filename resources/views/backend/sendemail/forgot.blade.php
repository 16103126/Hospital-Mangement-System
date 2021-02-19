<h1>Hello{{$user->name}}</h1>
<p>Please click password reset button to reset your password<a href="{{'reset_password'.$user->email.'/'.$code}}">Reset Passsword</a></p>