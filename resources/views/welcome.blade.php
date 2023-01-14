<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel DropBox</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h3 class="mb-5">Laravel DropBox!</h3>
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
        <label for="file">File Upload</label>
        <input type="file" name="file" id="file" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table table-striped table-hover table-bordered mt-5">
      <thead>
        <tr>
          <th>#</th>
          <th>name</th>
          <th>id</th>
          <th>client modified</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($list as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['client_modified'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
