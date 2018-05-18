<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<style>
    .toto{
        width:350px;
    }
</style>

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

<div class="toto">
    <form action="{{route('richtextPersist')}}" method="POST">
        {{ csrf_field() }}
        <textarea name="richtextArea" class="summernote"></textarea>

        <button type="submit">Submit</button>
    </form>
</div>