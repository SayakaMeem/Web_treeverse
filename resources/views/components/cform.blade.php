<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{asset('assets/create_style.css')}}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Create Form </title>
</head>

<body>

    
        {{$slot}}
    



    <script>
        const form = document.querySelector("form"),
            nextBtn = form.querySelector(".nextBtn"),
            backBtn = form.querySelector(".backBtn"),
            allInput = form.querySelectorAll(".first input");
        nextBtn.addEventListener("click", () => {
            allInput.forEach(input => {
                if (input.value != "") {
                    form.classList.add('secActive');
                } else {
                    form.classList.remove('secActive');
                }
            })
        })
        backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    </script>
</body>

</html>