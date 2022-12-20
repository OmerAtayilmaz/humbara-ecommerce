<h1>Sayın {{$user->name}} </h1>,<br/>
<p>Bu maile şifre sıfırlama isteğiniz üzerine almaktasınız<br><br>

<a href="{{route('user.reset-password',['token'=>$user->reset_password_token,'email'=>Illuminate\Support\Facades\Crypt::encryptString($user->email)])}}">Şifremi Sıfırla</a>
</p>
<br>
<small>Böyle bir istekle bulunmadıysanız bu maili önemsemeyiniz.</small>
