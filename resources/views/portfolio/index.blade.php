<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Biodata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary">
    @include('layouts/nav-bs')

    <main class="container p-0">
        <section class="row align-items-center m-0 bg-body p-4 shadow-sm my-sm-4 my-0">
            <div class="col-lg-2 mb-4 mb-lg-0 d-flex justify-content-center" style="min-width: 130px;">
                <img src="images/user-svgrepo-com.svg" class="bg-light rounded-circle" alt="" style="width: 125px;">
            </div>
            <div class="col-lg mb-4 mb-lg-0">
                <h2 class="m-0 text-center text-lg-start" id="bio-name">AAAAAAA</h1>
                <p class="text-center text-lg-start" id="bio-role">AAAAAAA</p>
                <div class="d-flex justify-content-lg-start justify-content-center my-2 gap-2">
                    <a href="https://google.com" class="btn btn-primary">Kontak</a>
                    <a href="https://google.com" class="btn btn-primary">Edit Resume</a>
                </div>
            </div>
            <div class="col-lg">
            <div class="col-lg">
                <div class="mb-2 mb-lg-0">
                    <div class="d-lg-inline-flex" style="font-weight: bold; width: 110px;">Availability</div>
                    <span id="bio-availability"></span>
                </div>
                <div class="mb-2 mb-lg-0">
                    <div class="d-lg-inline-flex" style="font-weight: bold; width: 110px;">Usia</div>
                    <span id="bio-age"></span>
                </div>
                <div class="mb-2 mb-lg-0">
                    <div class="d-lg-inline-flex" style="font-weight: bold; width: 110px;">Lokasi</div>
                    <span id="bio-location"></span>
                </div>
                <div class="mb-2 mb-lg-0">
                    <div class="d-lg-inline-flex" style="font-weight: bold; width: 110px;">Pengalaman</div>
                    <span id="bio-exp-years"></span>
                </div>
                <div class="mb-2 mb-lg-0">
                    <div class="d-lg-inline-flex" style="font-weight: bold; width: 110px;">Email</div>
                    <span id="bio-email"></span>
                </div>
            </div>
            </div>
        </section>
        <form action="" method="post" class="p-4 bg-body shadow-sm my-sm-4 my-0">
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="role">Role</label>
                <input type="text" id="role" class="form-control" name="role" value="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="availability">Availability</label>
                <select id="availability" class="form-select" name="availability" value="">
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Busy">Busy</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="age">Age</label>
                <input type="text" id="age" class="form-control" name="age" value="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="location">Location</label>
                <input type="text" id="location" class="form-control" name="location" value="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="years_experience">Years Experience</label>
                <input type="text" id="years_experience" class="form-control" name="years_experience" value="">
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="text" id="email" class="form-control" name="email" value="">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary w-100" type="submit" value="Submit"></input>
            </div>
        </form>
    </main>
</body>
</html>

<script>
    document.getElementById('btnSwitch').addEventListener('click',()=>{
        if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
            document.documentElement.setAttribute('data-bs-theme','light')
            document.getElementById('btnSwitch').innerHTML = '<i class="bi bi-sun"></i>'
        }
        else {
            document.documentElement.setAttribute('data-bs-theme','dark')
            document.getElementById('btnSwitch').innerHTML = '<i class="bi bi-moon"></i>'
        }
    })

    $(document).ready(function() {
        $('form').submit(function(e) {
            const name = $('#name').val();
            const role = $('#role').val();
            const availability = $('#availability').val();
            const age = $('#age').val();
            const lokasi = $('#lokasi').val();
            const years_experience = $('#years_experience').val();
            const email = $('#email').val();

            if (name == '' || role == '' || availability == '' || age == '' || lokasi == '' || years_experience == '' || email == '') {
                e.preventDefault()

                Swal.fire({
                    title: 'Error',
                    text: 'One or more missing fields!',
                    icon: 'error',
                    customClass: {
                        popup: 'card',
                        confirmButton: 'btn btn-danger'
                    },
                    confirmButtonText: 'Sorry <i class="bi bi-emoji-frown-fill ms-1"></i>'
                })
            }
        });
    });

</script>
