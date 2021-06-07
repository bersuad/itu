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
                            <table class="table table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="user_data">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Wallet Amount</th>
                                    <th>Wallet History Date</th>
                                    <th>Wallet Note</th>
                                    <th>Wallet Recharge Amount ETB</th>
                                    <th>Wallet Transaction Date</th>
                                    <th>Action</th>                                  
                                </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php foreach ($wallet as $key => $list): ?>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="viewWallet<?php echo $list["wallet_history_id"] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">View Wallet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Wallet By : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
							<?php echo $list['account_first_name'] ;?> <?php echo $list['account_last_name'] ;?>
						</div> 
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Signed Date : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo date("d-M-y", strtotime($list['wallet_history_signed_date_time'])) ?>
						</div> 
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Wallet History Note : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['wallet_history_note'] ?>
						</div>  
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Wallet Aut<u>h</u> Amount : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo $list['wallet_history_amount'] ?>
						</div>  
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
						Wallet History Message : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
							<p><?php echo $list['wallet_history_message'] ?></p>
						</div>  
						<div class="col-md-4 col-sm-6 col-xs-6" align="right">
							Wallet Auth Date : 
						</div>	 
						<div class="col-md-8 col-sm-6 col-xs-6" align="left">
                            <?php echo date("d-M-y H:m", strtotime($list['wallet_history_auth_date_time'])) ?>
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
<script src="<?php echo site_url() ?>assets/js/jquery.min.js"></script>
<script> 
    function test($id){
        jQuery.noConflict();
        $('#viewWallet'+$id).modal();
    }
</script>

<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
    // var length = 5;
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'wallet/dataFetch'; ?>",  
                type:"POST"  
           },  
            
           "columnDefs":[  
                {  
                     "targets":[0, 1, 2],  
                     "orderable":true,  
                },  
           ],  
      });  
 });  

 
 </script>  