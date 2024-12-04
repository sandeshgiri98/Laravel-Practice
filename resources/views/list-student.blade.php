<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <h1>Student List</h1>
    <form action="search" method="GET">
        <input type="text" placeholder="Search with name"  name="search" value="{{ @$search }}"/>
        <button>Search</button>
    </form>
    <form action="delete-multi" method="POST">
        @csrf
        <button>Delete</button>
    <table border="1px">
        <tr>
            <td>Select</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
            <td>Action</td>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td><input type="checkbox" name="ids[]" value="{{ $student->id }}"></td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="{{ 'delete/'.$student->id }}">Delete</a>
                <a href="{{ 'edit/'.$student->id }}">Edit</a>
            </td>
        </tr>

        @endforeach

    </table>
</form>
    {{ $students->links() }}
</div>
