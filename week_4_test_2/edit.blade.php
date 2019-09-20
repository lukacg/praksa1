<h2>IZMJENI POST </h2>


<form method="POST" action="{{route('updatepost', $post->id)}}">
       {{ csrf_field() }}

       
       <p>Title:</p>
<input type="text" name="title" placeholder="Title" required value="{{ $post->title }}">

<p>Content:</p>
<textarea type="text" name="content"placeholder="Unesi novi sadrzaj" required value="{{ $post->title }}"></textarea>

<p><button type="submit">Sacuvaj izmjenu</button>


</form>
<a href="/posts">
<button>Vrati nazads</button>

