<template>
    <section class="intro">
        <div class="h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="card mask-custom p-4 mb-5">
                        <div class="card-body">
                            <p class="h1 font-weight-bold mb-4 text-white">Account</p>
                            <form>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="exampleInputPassword1" class="form-label">Name</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-dark" data-mdb-ripple-color="#ffffff"> Search </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#accountAddModal">
                            <i class="ri-add-line"></i> Create Account</button>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary mr-5">Edit</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary mr-5">Edit</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary mr-5">Edit</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="accountAddModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="ri-add-line"></i> Create Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body mt-4">
                            <form>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label fw-semibold">Name
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label fw-semibold">Email
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label fw-semibold">Password
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputText" class="col-sm-3 col-form-label fw-semibold">Password（confirm）
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" placeholder="Password（confirm）">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="inputPassword" class="col-sm-3 col-form-label fw-semibold">Note</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" style="height: 100px" placeholder="Note"></textarea>
                                    </div>
                                </div>
                            </form>
                            <!-- End General Form Elements -->
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confModal">
                            <i class="ri-check-line"></i> Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>
<style>
html,
body,
.intro {
    height: 100%;
}

.mask-custom {
    background: rgba(24, 24, 16, .2);
    /*border-radius: 2em;*/
    backdrop-filter: blur(15px);
    border: 2px solid rgba(255, 255, 255, 0.05);
    background-clip: padding-box;
    box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}
.mr-5 {
    margin-right: 5px !important;
}
</style>
