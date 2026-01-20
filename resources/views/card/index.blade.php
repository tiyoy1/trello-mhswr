<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Page</title>
</head>
<body>
    <h1>Task Management</h1>
    <form action="/card" method="POST">
        @csrf
        <label for="">Task</label>
        <input type="text" name="task" placeholder="masukkan task mu"> <br>
        <label for="">Deadline</label>
        <input type="text" name="deadline" placeholder="masukkan deadline"> <br>
        <button type="submit">Simpan</button>
    </form>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Task</th>
            <th>Deadline</th>
        </tr>
        @foreach ($cards as $card)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $card->task }}</td>
            <td>{{ $card->deadline }}</td>
            <td>
                <a href="/card/{{ $card->id }}/edit">Edit</a>
                <form action="/card/{{ $card->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletes</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>