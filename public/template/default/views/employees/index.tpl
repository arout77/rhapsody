<style>
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
        <h3>{$total_assigned}</h3>

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
        <h3>{$total_new}</h3>

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
        <h3>{$total_inprogress}</h3>

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
        <h3>{$total_onhold}</h3>

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
    <div class="small-box {if $total_duetoday gt 0}pulsate{/if} bg-fuchsia">
        <div class="inner">
        <h3>{$total_duetoday}</h3>

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
        <h3>{$total_overdue}</h3>

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

<script>
// Only show overdue notice once per session
$(document).ready(function() {
var dialogShown = $.cookie('ticketsOverdueNotice');

if (!ticketsOverdueNotice) {
    $(window).load(function(){
        $('#ticketsOverdueModal').modal('show');
        $.cookie('ticketsOverdueNotice', 1);
    });
}

});