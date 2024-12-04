<div>
    <h1>Update Student</h1>
    <form action="/update/{{$data->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name">
        <br><br>
        <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter your email">
        <br><br>
        <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Enter your phone">
        <br><br>
        <button>Update</button>
        <a href="/list">Cancel</a>


    </form>
</div>
