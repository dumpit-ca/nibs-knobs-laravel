<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('/images/n&k-icon.png') }}" type="image/x-icon">
    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>N&K | @yield('title')</title>
    <script src="https://cdn.tiny.cloud/1/p7ytnikufjkn2i9om5ow07ipse88x7sehf9qx0ovuwqlyven/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

</head>

<body>
    @include('components.front.navbar')
    <script src="{{ asset('/js/app.js') }}"></script>
    @yield('content')
    @yield('script')
    <script>
        tinymce.init({
      selector: 'textarea',
      resize: false,
      height: 250,
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
    </script>
</body>

</html>
