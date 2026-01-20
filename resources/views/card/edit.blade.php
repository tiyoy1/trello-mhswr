<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the task</title>
</head>
<body>
    <h1>Edit task</h1>
    <form action="/card/{{ $card->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Task</label>
        <input type="text" name="task" placeholder="masukan task" value="{{ $card->task }}"> <br>
        <label for="">Deadline</label>
        <input type="text" name="deadline" placeholder="masukan deadline" value="{{ $card->deadline }}"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>