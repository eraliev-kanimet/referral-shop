<script setup lang="ts">

</script>

<template>
    <div class="mb-4 mb-lg-5">
        <h1>Some ticket title should be placed here.</h1>
        <div class="tickets-item-info">
            <div class="badge badge-success">Open</div>
            <div>ID: <strong>12345</strong></div>
            <div>Category: <strong>General</strong></div>
            <div>Date: <strong>11.08.2022</strong></div>
        </div>
        <div class="my-4">
            <div class="tickets-post border rounded mb-2">
                <div class="tickets-post-avatar"><img src="../../../assets/tmp/author-1.png" alt=""></div>
                <div class="tickets-post-content">
                    <div class="tickets-post-info">
                        <div class="tickets-post-author">You</div>
                        <div class="tickets-post-date">15.07.2022 15:11:01</div>
                    </div>
                    <div class="tickets-post-body">Best allergy pills ever! They work great and the price is Awesome! Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                </div>
            </div>
            <div class="tickets-post border rounded mb-2 bg-light ml-md-5">
                <div class="tickets-post-avatar">AD</div>
                <div class="tickets-post-content">
                    <div class="tickets-post-info">
                        <div class="tickets-post-author">Admin</div>
                        <div class="tickets-post-date">15.07.2022 15:11:01</div>
                    </div>
                    <div class="tickets-post-body">Best allergy pills ever! They work great and the price is Awesome! Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                </div>
            </div>
        </div>
        <div class="my-4">
            <div class="container-xsmall">
                <div class="h2">Add message</div>
                <div class="mt-3">
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
    </div>
</template>
