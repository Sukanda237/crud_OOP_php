<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/login.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- start content  -->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-6">
                    <img src="../assets/draw2.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5 offset-xl-1">
                    <form>
                        <!-- id user input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form1Example13" class="form-control form-control-lg" name="id_user" hidden />
                        </div>

                        <!-- username input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Username</label>
                            <input type="text" id="form1Example13" class="form-control form-control-lg" name="username" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Password</label>
                            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email</label>
                            <input type="mail" id="form1Example13" class="form-control form-control-lg" name="email" />
                        </div>

                        <!-- nama lengkap input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Nama Lengkap</label>
                            <input type="text" id="form1Example13" class="form-control form-control-lg" name="namalengkap" />
                        </div>

                        <!-- alamat input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class=" form-label" for="form1Example13">Alamat</label>
                            <textarea name="" id="form1Example13" class="form-control form-control-lg" name="alamat">

                            </textarea>
                        </div>

                        <!-- jenis kelamin input -->
                        <div data-mdb-input-init class="form-outline">
                            <label class="form-label" for="form1Example13">Jenis Kelamin</label><br>
                            <label for="">
                                <input type="radio" name="jk" value="laki-laki" />
                                Laki-Laki
                            </label>
                            |
                            <label for="">
                                <input type="radio" name="jk" value="perempuan" />
                                Perempuan
                            </label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <!-- <label class="form-label" for="form1Example13">Nama Lengkap</label> -->
                            <input type="text" id="form1Example13" class="form-control form-control-lg" value="user" name="role" hidden />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Register</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end content  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>