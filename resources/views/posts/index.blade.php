<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>
     <h1>All Posts:</h1>
     <a href="{{ route('posts.create')}}">Create a new post</a>
     <table class="table">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>TITLE</th>
                 <th>BODY</th>
                 <th>ACTIONS</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($posts as $post)
             <tr>
                 <td>{{$post->id}}</td>
                 <td>{{$post->title}}</td>
                 <td>{{$post->body}}</td>
                 <td>
                     <a href="{{route('posts.show', ['post'=> $post->id])}}" class="btn btn-primary">View</a>
                     <a href="{{route('posts.edit', ['post'=> $post->id])}}" class="btn btn-warning">Edit</a>
                     <form action="{{route('posts.destroy', ['post'=> $post->id])}}" method="post">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>                      
                     </form>
                 </td>
             </tr>
             @endforeach
         </tbody>
     </table>
 </body>
</html>