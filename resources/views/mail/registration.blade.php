<h1>Humbara Games</h1>
<a href="{{route("user.email.verified",[
    'token'=>Illuminate\Support\Facades\Crypt::encryptString($user->email)])}}">
   Hesabı Onayla </a>

<small>eğer böyle bir başvuruda bulunmadıysanız bu maili dikkate almayınız.</small>
