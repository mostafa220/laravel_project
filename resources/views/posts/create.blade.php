<h2> create post</h2>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <br>
    <div class="form-group">
      <label for="exampleInputPassword1">body</label>
      <input type="text" class="form-control" name="body" id="exampleInputPassword1">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
