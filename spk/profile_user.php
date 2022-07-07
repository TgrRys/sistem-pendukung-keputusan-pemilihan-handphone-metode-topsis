<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./profile.css">
    <link rel="shortcut icon" href="./simpson.jpg">
    <link rel="manifest" href="JS/manifest.json">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- GSAP Animations CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins"
        rel="stylesheet"
        />
    <link href="tampilan/css/login.css" rel="stylesheet" />
</head>
<body>

    <section>
        <div class="container-fluid">
          <div class="row ">
              <div class="col-12 col-sm-12 col-md-3" style="background-color: #02dfc0;">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                    </button>
                      <a class="navbar-brand fw-bold m-auto mt-3" href="./home.php"><b>SPK</b>Pemilihan Hp</a>
                </nav>
                <div class="offcanvas offcanvas-start sidebar-nav" style="border: none; width:500px background-color: #02dfc0;" 
                    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-body " style="background-color: #02dfc0;">
                        <nav class="navbar-light">
                            <ul class="navbar-nav mt-4">
                            
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./home.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-house ms-5 me-3"></i></i>Home</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./index.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-box-arrow-left ms-5 me-3"></i>Logout</h5>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


            <div class="home col-md-8 col-sm-8 col-12" style="background-color: #02dfc0;">
          <div class="card mt-5 shadow p-4">
              <div class="card-title ">
                    <h5><b>My Profile</b></h5>
                    <h6 class="text-muted"></h6>
                    <hr>
               </div>
               <div class="card-body">
                    <div class="row">
                           <div class="col-12 col-sm-8 col-md-8">
                               <div class="row ">
                                    <div class="col-4 col-md-4 col-sm-4 ">
                                        <label class="text-muted mb-2">Name</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-8">
                                         <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="Tegar Risqy Yulian Santoso" disabled>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <label class="text-muted mb-2">Status</label>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="Mahasiswa" disabled>
                                    </div>
                                </div>
                               
                                <div class="row mt-3">
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <label class="text-muted mb-2">Universitas</label>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 ">
                                         <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="Politeknik Harapan Bersama Tegal"  disabled>
                                    </div>
                                </div>
                           </div>
                           <div class="image col-md-4 text-center">
                                <img src="tampilan/image/simpson.jpg" class="img-fluid rounded-circle" width="200px" height="100px" alt="Profile">
                           </div>
                       </div>
                       <div class="card-footer row mt-4">
                         <div class="col-md-3 col-sm-3 col-4">
                           <p class="fs-6 "><p>Follow me on</p></p>
                         </div>
                         <div class="insta col-md-3 col-sm-3 col-4 mt-3">
                            <a href="https://www.instagram.com/tgrrys" class=" text-decoration-none text-black"><i class="bi bi-instagram ">Tgr_rys</i></a>
                         </div>
                         <div class="github col-md-3 col-sm-3 col-4 mt-3">
                            <a href="https://www.github.com/TegarSantoso" class=" text-decoration-none text-black"><i class="bi bi-github "> TegarSantoso</i></a>
                         </div>

                       </div>
                       
                   </div>
               </form>  
            </div>
          
        </div>
     </section>
     <script>
      gsap.from("img",{duration:1, y:-100,opacity:0,ease:'bounce'});
      gsap.from("h5 ", {duration: 1.5, y: -100, opacity:0});
      gsap.from("h6 ", {duration: 1, y: -100, opacity:0});
      gsap.from(".card-footer .insta", {duration: 1, x: -100, opacity:0});
      gsap.from(".card-footer .github", {duration: 2, x: 100, opacity:0});
    </script>
    <script src="JS/register.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>


     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    
</body>
</html>