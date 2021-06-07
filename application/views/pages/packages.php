<div class="content-page"><!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title mb-0">Package List</h4>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="page-title mb-0" align="right"><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Add New List</button></h3>
                            <h4 class="mt-0 header-title">List of all Packages</h4>
                            <table class="table table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Package Name</th>
                                    <th>Package Amharic Name</th>
                                    <th>Package Amount</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>                                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($packages as $key => $list): ?>
                                <tr>
                                    <td><?php echo $key +1; ?></td>
                                    <td><?php echo $list['package_name'] ?></td>
                                    <td><?php echo $list['package_name_amharic'] ?></td>
                                    <td><?php echo $list['package_amount'] ?></td>
                                    <td>
                                        <?php
                                            if( $list['package_status'] == 1 ){?>
                                                <label class="switch">
                                                    <input type="checkbox" checked id="on<?php echo $list['package_id'] ?>">
                                                    <span class="slider round"></span>
                                                </label>
                                        <?php }else{ ?>
                                            <label class="switch">
                                                <input type="checkbox" id="off<?php echo $list['package_id'] ?>">
                                                <span class="slider round"></span>
                                            </label>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo date("d-M-y", strtotime($list['package_created_date']))?></td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-outline-primary waves-effect waves-light btn-sm"><i class="fa fa-eye"></i></button> -->
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#editPackage<?php echo $list['package_id'] ?>"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#deletePackage<?php echo $list['package_id'] ?>" ><i class="fa fa-remove"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add new package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('/Packages/add_new');?>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Package Name</label>
                    <div class="col-sm-8"><input class="form-control" type="text" require placeholder="package name" name="p_name"/></div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-4 col-form-label">Package Name (በአማርኛ)</label>
                    <div class="col-sm-8"><input class="form-control" type="search" require placeholder="Package Name (በአማርኛ)"  name="p_amharic_name"/></div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-4 col-form-label">Package Amount</label>
                    <div class="col-sm-8"><input class="form-control" type="search" require placeholder="Package Amount"  name="p_amount"/></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
</div>

<script src="<?php echo site_url() ?>assets/js/jquery.min.js"></script>
<?php foreach ($packages as $key => $list): ?>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="editPackage<?php echo $list['package_id'] ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Edit  <?php echo $list['package_name'] ?> (<?php echo $list['package_name_amharic'] ?>) package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('/Packages/edit/'.$list['package_id']);?>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Package Name</label>
                        <div class="col-sm-8"><input class="form-control" type="text" require placeholder="package name" name="p_name" value="<?php echo $list['package_name'] ?>"/></div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-4 col-form-label">Package Name (በአማርኛ)</label>
                        <div class="col-sm-8"><input class="form-control" type="search" require placeholder="Package Name (በአማርኛ)"  name="p_amharic_name" value="<?php echo $list['package_name_amharic'] ?>"/></div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-4 col-form-label">Package Amount</label>
                        <div class="col-sm-8"><input class="form-control" type="search" require placeholder="Package Amount"  name="p_amount" value="<?php echo $list['package_amount'] ?>"/></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="deletePackage<?php echo $list['package_id'] ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0">Do you want to delete  <?php echo $list['package_name'] ?> (<?php echo $list['package_name_amharic'] ?>) package?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <div class="modal-footer">
                    <?php echo form_open_multipart('/packages/delete_package/'.$list['package_id'])?>
                        <input type="hidden" name="p_name" value="<?php echo $list['package_name'] ?>">
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#on<?php echo $list['package_id'] ?>').change(function(e){
            var id = <?php echo $list['package_id'] ?>;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>Packages/changeStatus',
                data:{
                    id: id,
                },
                success: function(data){
                    window.location('packages');
                }
            });
        });
    </script>
    <script>
        $('#off<?php echo $list['package_id'] ?>').change(function(e){
            $id = <?php echo $list['package_id'] ?>;
            var id = <?php echo $list['package_id'] ?>;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>Packages/changeStatus',
                data:{
                    id: id,
                },
                success: function(data){
                    window.Location('packages');
                }
            });
        });
    </script>
<?php endforeach;?>