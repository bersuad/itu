<div class="content-page"><!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title mb-0">Wallet History</h4>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Wallet all history</h4>
                            <table class="table table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Recharged By</th>
                                    <th>Recharged To</th>
                                    <th>Recharged From</th>
                                    <th>Recharge To</th>
                                    <th>Recharge Amount</th>
                                    <th>Recharge Type</th>
                                    <th>Recharge Date</th>
                                    <th>Recharge Status</th>
                                    <th>Action</th>                                  
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($recharges as $key => $list): ?>
                                    <tr>
                                        <td><?php echo $key +1; ?></td>
                                        <td><?php echo $list['account_first_name'] ?></td>
                                        <td><?php echo $list['recharge_to_phone'] ?></td>
                                        <td><?php echo $list['recharge_from'] ?></td>
                                        <td><?php echo $list['recharge_to_name'] ?></td>
                                        <td><?php echo $list['recharge_amount'] ?></td>
                                        <td><?php echo $list['recharge_type'] ?></td>
                                        <td><?php echo date("d-M-y h:m", strtotime($list['recharge_created_date']))?></td>
                                        <td><?php
                                            if( $list['recharge_status'] == 1 ){?>
                                                <label class="switch">
                                                    <input type="checkbox" checked disabled>
                                                    <span class="slider round"></span>
                                                </label>
                                        <?php }else{ ?>
                                            <label class="switch">
                                                <input type="checkbox" disabled>
                                                <span class="slider round"></span>
                                            </label>
                                        <?php } ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-primary waves-effect waves-light btn-sm" data-toggle="modal" data-target="#viewRecharge<?php echo $list['recharge_id'] ?>"><i class="fa fa-eye"></i></button>
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


<script src="<?php echo site_url() ?>assets/js/jquery.min.js"></script>
<?php foreach ($recharges as $key => $list): ?>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="viewRecharge<?php echo $list['recharge_id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">View Recharge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharge Re<small>f</small> Number : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
							<?php echo $list['recharge_reference_number'] ;?>
						</div> 
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharged By : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['account_first_name'] ?>
						</div> 
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharged To : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['recharge_to_phone'] ?>(<?php echo $list['recharge_to_name'] ?>)
						</div>  
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharge Status :
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php
                                if( $list['recharge_status'] == 1 ){?>
                                    Active
                            <?php }else{ ?>
                                    Suspended
                            <?php } ?>
						</div>  
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
						    Recharge Type : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
							<p><?php echo $list['recharge_type'] ?></p>
						</div>  
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharge Note : 
						</div>	 
                        <div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['recharge_note'] ?>
						</div>  
                        <div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharge From : 
						</div>	
                        <div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['recharge_from'] ?>
						</div>   
                        <div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharge Amount : 
						</div>	
                        <div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['recharge_amount'] ?>
						</div>  
                        <div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Recharge Date : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo date("d-M-y H:m", strtotime($list['recharge_created_date'])) ?>
						</div> 	 		
	            	</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
