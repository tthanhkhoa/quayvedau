<!DOCTYPE HTML>
<!--
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Caminar by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>
<body>


<section id="main">
    <div class="inner">
        <section id="one" class="wrapper style1">
            <form id="postForm" action="{{ route('add-blog') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                <p>Tiêu đề bài viết</p><br>
                <input name="titile" type="text"><br>
                <p>Hình ảnh</p><br>
                <input name="image" type="file"><br>
                <textarea id="summernote" name="content" style="display: none;"></textarea>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" id="cancel" class="btn">Cancel</button>
            </form>
        </section>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
    </div>
</footer>


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- include summernote css/js-->
<link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
<script src="{{ asset('js/summernote.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script>
    $('#summernote').summernote({
        height: 747,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
    });
    var postForm = function() {
        var content = $('textarea[name="content"]').html($('#summernote').code());
    }
</script>
</body>
</html>
