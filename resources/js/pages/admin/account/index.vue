<template>
    <Loading v-model:active="isLoading"
             :can-cancel="false" :loader="'dots'"/>
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
                                        <input type="text" class="form-control" v-model="search.email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="exampleInputPassword1" class="form-label">Name</label>
                                        <input type="text" class="form-control" v-model="search.name" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button @click.prevent="resetFormSearch()" class="btn btn-secondary mr-5">
                                        <i class="ri-arrow-go-back-fill"></i> Clear</button>
                                    <button type="button" class="btn btn-dark" data-mdb-ripple-color="#ffffff" @click.prevent="searchAccount()"> Search </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a-button>Test button</a-button>
                    <a-alert
                        :message="alert + ' message'"
                        description="Testttttt."
                        :type="alert"
                    />
                    <div>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#accountAddModal" style="float: right">Create Account</button>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Memo</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="account in accounts">
                                <th scope="row">{{account.id}}</th>
                                <td>{{account.name}}</td>
                                <td>{{account.email}}</td>
                                <td>{{account.memo}}</td>
                                <td>
                                    <div style="float: right">
                                        <button type="button" class="btn btn-outline-secondary mr-5">Edit</button>
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </div>
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
    <create-modal />
</template>
<script>
    import CreateModal from "@/pages/admin/account/createModal.vue";
    export default {
        components: {CreateModal},
        data() {
            return {
                accounts: [],
                search: {
                    name: '',
                    email: ''
                },
                searchReset: {
                    name: '',
                    email: ''
                },
                isLoading: false,
            }
        },
        created() {
          this.getListAccount();
        },
        methods: {
            getListAccount() {
                this.isLoading = true;
                axios.get(`/accounts`).then( (response) => {
                    this.accounts = response.data
                }).catch((error) => {
                    console.error('Error', error);
                }).finally(() => this.isLoading = false);
            },
            searchAccount() {
                this.isLoading = true;
                axios.get('/accounts/search', { params: this.search }).then( (response) => {
                    this.accounts = response.data
                }).catch((error) => {
                    console.error('Error', error);
                }).finally(() => this.isLoading = false);

            },
            resetFormSearch() {
                this.search = { ...this.searchReset };
            }
        }
    }

</script>
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
