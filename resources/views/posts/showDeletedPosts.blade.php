<h2> Soft Deleted Posts</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">body</th>
        <th scope="col">RestoreDeletedPost</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
          <td> {{$post->id}} </td>
          <td> {{$post->title}} </td>
          <td> {{$post->body}} </td>
          <td><a href="{{route('posts.restore',$post->id)}}">Restore</a></td>
          <td><form action="{{route('posts.destroy',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">delete</button>
         </form></td>
        </tr>
        @endforeach

    </tbody>
  </table>
