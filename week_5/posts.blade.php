<!DOCTYPE html>
<html>
<title>POSTOVI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
<table class="w3-table-all">
               <tr class="w3-red">
                   <th>Title</th>
                   <th>Content</th>
                   <th>Likes</th>
               </tr>
               @foreach($posts as $post)
               <tr>
            <td>{{$post->title}}</td> 
            <td>{{$post->content}}</td>
            <td>{{$post->likes}}</td>
            <td><a href="like/{{$post->id}}">
                <button name ="likes" class="btn btn-primary"> "Lajk" </button></a></td>
            <td><a href="editpost/{{$post->id}}">
                <button class="btn btn-success"> Izmjeni </button></a></td>
            <td><form action="delete/{{$post->id}}" method="delete">
            <button class="btn btn-danger"> Obrisi </button>
             </form></td>
        </tr>

    @endforeach
</table> <br>
</div>
<a href="/posts/create"><button>Idi na novi upis</button></a>

</body>
</html>