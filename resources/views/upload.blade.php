<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>Upload Image</h1>
    <form action="" method="POST">
        @csrf
        <input type="file" name="file" enctype="multipart/form-data">
        <button>Upload</button>
    </form>
</div>