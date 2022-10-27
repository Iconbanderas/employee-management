<template>
<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="" method="GET">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="search">Name / Code</label>
                        <input type="text" class="form-control" name="search" id="search" placeholder="Uzbekistan">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">search</button>
                    </div>
                    <div class="col-auto">
                        <a href="" class="btn btn-primary">All Countries</a>
                    </div>
                </div>
            </form>
            <h6 class="font-weight-bold text-primary float-right"> 
                <a href=""><i class="fa fa-plus"></i> Create Country</a>
            </h6>
        </div>
        <div class="card-body">
            

            <div class="table-responsive">
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Country Code</th>
                            <th>Country Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Country Code</th>
                            <th>Country Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href=""
                                    class="btn btn-primary">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {

    }
</script>

<style>

</style>