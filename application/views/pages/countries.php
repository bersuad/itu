<div class="content-page"><!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title mb-0">Global Countries</h4>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="page-title mb-0" align="right"><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#newCountry">Add New Country</button></h3>
                            <h4 class="mt-0 header-title">Lists</h4>
                            <table class="table table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Country Name</th>
                                    <th>Status</th>
                                    <th>Action</th>                                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($countries as $key => $list): ?>
                                <tr>
                                    <td><?php echo $key +1; ?></td>
                                    <td><?php echo $list['country_name'] ?></td>
                                    <td>
                                        <?php
                                            if( $list['country_status'] == 1 ){?>
                                                <label class="switch">
                                                    <input type="checkbox" checked id="on<?php echo $list['country_id'] ?>">
                                                    <span class="slider round"></span>
                                                </label>
                                        <?php }else{ ?>
                                            <label class="switch">
                                                <input type="checkbox" id="off<?php echo $list['country_id'] ?>">
                                                <span class="slider round"></span>
                                            </label>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success waves-effect waves-light btn-sm" data-toggle="modal" data-target="#editCountry<?php echo $list['country_id'] ?>"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-outline-danger waves-effect waves-light btn-sm" data-toggle="modal" data-target="#deleteCountry<?php echo $list['country_id'] ?>" ><i class="fa fa-remove"></i></button>
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

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="newCountry">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Add new package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('/Country/add_new');?>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Country Name</label>
                    <div class="col-sm-8"><input class="form-control" type="text" required="required" placeholder="Country Name" name="c_name"/></div>
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

<?php foreach ($countries as $key => $list): ?>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="editCountry<?php echo $list['country_id'] ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('/Country/editCountry/'.$list['country_id']);?>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-4 col-form-label">Country Name</label>
                        <div class="col-sm-8"><input class="form-control" type="text" required="required" placeholder="Country Name" name="c_name" value="<?php echo $list['country_name']?>"/></div>
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

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="deleteCountry<?php echo $list['country_id'] ?>">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0">Do you want to delete <?php echo $list['country_name'] ?>?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                
                <div class="modal-footer">
                    <?php echo form_open_multipart('/Country/delete_constant/'.$list['country_id'])?>
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#on<?php echo $list['country_id'] ?>').change(function(e){
            var id = <?php echo $list['country_id'] ?>;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>Country/changeStatus',
                data:{
                    id: id,
                },
                success: function(data){
                    // window.Location('/global-constant');
                }
            });
        });
    
        $('#off<?php echo $list['country_id'] ?>').change(function(e){
            var id = <?php echo $list['country_id'] ?>;
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>Country/changeStatus',
                data:{
                    id: id,
                },
                success: function(data){
                    // window.Location('/global-constant');
                }
            });
        });
    </script>

<?php endforeach;?>