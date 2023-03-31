<h2> edit post</h2>
<form action="{{route('posts.update',$post->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label >Title</label>
      <input type="text" class="form-control" name="title" value="{{$post->title}}" >
    </div>
    <br>
    <div class="form-group">
      <label >body</label>
      <input type="text" class="form-control" name="body" value="{{$post->body}}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">update</button>

  </form>
