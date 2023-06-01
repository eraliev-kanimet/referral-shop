<script setup lang="ts">

</script>

<template>
    <div class="mb-4 mb-lg-5">
        <div class="container-xsmall">
            <h1>Open new ticket</h1>
            <div class="mt-3">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Title: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Order ID:</label>
                            <input type="text" class="form-control" placeholder="Order ID">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Your comment: <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="4" placeholder="Comment"></textarea>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="input-group">
                            <div class="form-control bg-light border-0 rounded"><a class="font-weight-bold" href="">some-file.pdf</a></div>
                            <div class="input-group-append"><a class="btn" href=""><i class="icon-close icon-inline"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Upload file:</label>
                    <div class="custom-upload">
                        <div class="d-inline-block mb-3">
                            <div class="border rounded d-flex align-items-center p-1 pr-5">
                                <input type="file" class="custom-upload-input d-none">
                                <button class="custom-upload-btn btn btn-light btn-sm mr-2">Choose file...</button>
                                <span class="custom-upload-filename text-muted">No file choosen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-submit">
                <button class="btn btn-primary">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </div>
        </div>
    </div>
</template>
