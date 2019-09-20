<h2>KREIRAJ NOVI POST</h2>

<form method="POST" action="{{route('createpost')}}">
{{csrf_field()}}

<label>Title</label>
    <input type="text" name="title" required> <br />
<br>
<form action="/createPost.blade.php">
  <textarea name="content" rows="10" cols="30" placeholder="Unesi tekst..." reqired></textarea>
  <br>
  <p><button type="submit">Dodaj</button>
  <br>
</form>

<a href="/posts"><button>Vrati se na postove</button></a>
