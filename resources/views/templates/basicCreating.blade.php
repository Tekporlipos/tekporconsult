<!DOCTYPE html>
<html lang="en">
<head> <script src="{{ asset('js/ckeditor.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['question'])) {
    print   $_GET['question'];
}

?>
    

    <form action="" method="get">
        <textarea name="question" id="editor" cols="30" rows="10" name="text" ></textarea>
        
       <input type="submit" value="submit">
    </form>
</body>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</html>