<script type="application/ld+json">
    {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author": {
            "@type": "Person",
            "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Dashboard",
        "@context": "http://schema.org"
    }
</script>

<link rel="apple-touch-icon" sizes="144x144" href={{asset("assets/apple-touch-icon.png")}}>
<link rel="shortcut icon" href={{asset("assets/favicon.ico")}}>
<meta name="theme-color" content="#3063A0">

<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">

<link rel="stylesheet" href={{asset("assets/css/open-iconic-bootstrap.min.css")}}>
<link rel="stylesheet" href={{asset("assets/css/font-awesome.min.css")}}>
<link rel="stylesheet" href={{asset("assets/css/flatpickr.min.css")}}>

<link rel="stylesheet" href={{asset("assets/stylesheets/theme.min.css")}} data-skin="default">
<link rel="stylesheet" href={{asset("assets/stylesheets/theme-dark.min.css")}} data-skin="dark">
<link rel="stylesheet" href={{asset("assets/stylesheets/custom.css")}}>
<script>
    var skin = localStorage.getItem('skin') || 'default';
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);
    // add loading class to html immediately
    document.querySelector('html').classList.add('loading');
</script>