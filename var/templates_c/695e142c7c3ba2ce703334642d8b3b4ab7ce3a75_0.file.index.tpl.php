<?php
/* Smarty version 3.1.44, created on 2022-03-20 05:08:41
  from '/home2/arout77/public_html/rhapsody/public/template/default/views/employees/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6236ef19ef4b45_93468835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '695e142c7c3ba2ce703334642d8b3b4ab7ce3a75' => 
    array (
      0 => '/home2/arout77/public_html/rhapsody/public/template/default/views/employees/index.tpl',
      1 => 1647633837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6236ef19ef4b45_93468835 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.pulsate {
	box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
	transform: scale(1);
	animation: pulse 2s infinite;
}

@keyframes pulse {
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(216, 16, 171, 0.7);
	}

	70% {
		transform: scale(1);
		box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
	}

	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
	}
}
</style>

<div class="row">
    <div class="col-lg-2 col-6">
    <!-- small box -->
    <div class="small-box bg-blue">
        <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['total_assigned']->value;?>
</h3>

        <p>Unclosed Tickets</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-2 col-6">
    <!-- small box -->
    <div class="small-box bg-green">
        <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['total_new']->value;?>
</h3>

        <p>New Tickets</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-2 col-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
        <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['total_inprogress']->value;?>
</h3>

        <p>Tickets In Progess</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-2 col-6">
    <!-- small box -->
    <div class="small-box bg-burnt-orange white">
        <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['total_onhold']->value;?>
</h3>

        <p>Tickets On Hold</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-2 col-6">
    <!-- small box -->
    <div class="small-box <?php if ($_smarty_tpl->tpl_vars['total_duetoday']->value > 0) {?>pulsate<?php }?> bg-fuchsia">
        <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['total_duetoday']->value;?>
</h3>

        <p>Tickets Due Today</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-2 col-6">
    <!-- small box -->
    <div class="small-box bg-red">
        <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['total_overdue']->value;?>
</h3>

        <p>Tickets Over Due</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
</div>

    
<div class="modal fade" id="modal-error" role="dialog" aria-labelledby="ticketsOverdueModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header redvelvet">
        <h4 class="modal-title white" id="ticketsOverdueModal">Tickets Overdue</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="modal-error-message">
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?php echo '<script'; ?>
>
// Only show overdue notice once per session
$(document).ready(function() {
var dialogShown = $.cookie('ticketsOverdueNotice');

if (!ticketsOverdueNotice) {
    $(window).load(function(){
        $('#ticketsOverdueModal').modal('show');
        $.cookie('ticketsOverdueNotice', 1);
    });
}

});<?php }
}
