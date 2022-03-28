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

<script src="{$smarty.const.SITE_URL}media/{$_template_name}/js/core/jquery.min.js"></script>

<div class="row">
  <div class="col-lg-4">
    <div class="card card-chart">
      <div class="card-header">
        <h5 class="card-category">Global Sales</h5>
        <h4 class="card-title">Shipped Products</h4>
        <div class="dropdown">
          <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
            <i class="now-ui-icons loader_gear"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <a class="dropdown-item text-danger" href="#">Remove Data</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="chart-area">
          <canvas id="lineChartExample"></canvas>
        </div>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <div class="card card-chart">
      <div class="card-header">
        <h5 class="card-category">2018 Sales</h5>
        <h4 class="card-title">All products</h4>
        <div class="dropdown">
          <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
            <i class="now-ui-icons loader_gear"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <a class="dropdown-item text-danger" href="#">Remove Data</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="chart-area">
          <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
        </div>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <div class="card card-chart">
      <div class="card-header">
        <h5 class="card-category">Email Statistics</h5>
        <h4 class="card-title">24 Hours Performance</h4>
      </div>
      <div class="card-body">
        <div class="chart-area">
          <canvas id="barChartSimpleGradientsNumbers"></canvas>
        </div>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="card  card-tasks">
      <div class="card-header ">
        <h5 class="card-category">Backend development</h5>
        <h4 class="card-title">Tasks</h4>
      </div>
      <div class="card-body ">
        <div class="table-full-width table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" checked>
                      <span class="form-check-sign"></span>
                    </label>
                  </div>
                </td>
                <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                  </button>
                  <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">
                      <span class="form-check-sign"></span>
                    </label>
                  </div>
                </td>
                <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                  </button>
                  <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" checked>
                      <span class="form-check-sign"></span>
                    </label>
                  </div>
                </td>
                <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                </td>
                <td class="td-actions text-right">
                  <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                  </button>
                  <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer ">
        <hr>
        <div class="stats">
          <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-category">All Persons List</h5>
        <h4 class="card-title"> Employees Stats</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
                Country
              </th>
              <th>
                City
              </th>
              <th class="text-right">
                Salary
              </th>
            </thead>
            <tbody>
              <tr>
                <td>
                  Dakota Rice
                </td>
                <td>
                  Niger
                </td>
                <td>
                  Oud-Turnhout
                </td>
                <td class="text-right">
                  $36,738
                </td>
              </tr>
              <tr>
                <td>
                  Minerva Hooper
                </td>
                <td>
                  Curaçao
                </td>
                <td>
                  Sinaai-Waas
                </td>
                <td class="text-right">
                  $23,789
                </td>
              </tr>
              <tr>
                <td>
                  Sage Rodriguez
                </td>
                <td>
                  Netherlands
                </td>
                <td>
                  Baileux
                </td>
                <td class="text-right">
                  $56,142
                </td>
              </tr>
              <tr>
                <td>
                  Doris Greene
                </td>
                <td>
                  Malawi
                </td>
                <td>
                  Feldkirchen in Kärnten
                </td>
                <td class="text-right">
                  $63,542
                </td>
              </tr>
              <tr>
                <td>
                  Mason Porter
                </td>
                <td>
                  Chile
                </td>
                <td>
                  Gloucester
                </td>
                <td class="text-right">
                  $78,615
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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
</script>