<template>
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
                    <div class="text-center mb-4 mt-5">
                        <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#confModal">
                            <i class="ri-check-line"></i> Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {reactive, Reactive, ref} from "vue";

export default {
    setup() {
        const account = reactive({

        });

        return {
            account
        }
    }
}
</script>
