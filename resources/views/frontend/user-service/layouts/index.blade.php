
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rmab</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""
    />
    <link rel="stylesheet" href="./scss/main.css" />
    <!-- <link ref="stylesheet" href="./scss/swiper-bundle.min.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/imask"></script>
</head>
@include('frontend.user-service.layouts._style')
<body>
@yield('content')

<script>
    const sidebarBtn = document.querySelector(".userSidebarOpen");
    const userSidebar = document.querySelector(".userSidebar");
    sidebarBtn.addEventListener("click", () => {
        userSidebar.classList.toggle("w-[600px]");
    });
</script>
</body>
</html>
