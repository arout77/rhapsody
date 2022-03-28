<div class="container">
<p></p>
<div class="info-bar info-bar-dark info-bar-bordered">
	<div class="container">

		<div class="row">

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-flag"></i>
				<h3>CREATE CONTROLLER</h3>
				<p class="lime">All files generated for you</p>
			</div>

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-hdd"></i>
				<h3>ADD A MODEL</h3>
				<p class="lime">Optional</p>
			</div>

			<div class="col-sm-4">
				<i class="glyphicon glyphicon-file"></i>
				<h3>VIEW FILES</h3>
				<p class="lime">Optional</p>
			</div>

		</div>

	</div>
</div>
<!-- /INFO BAR -->

<div>
  <form class="white-row" action="{$submit_controller}" method="post">
  <h2><small>Specify your controller and options to create</small></h2>
    <div class="row">
      <div class="form-group">
        <div class="col-md-12">
          <label>Controller Name (no underscores, spaces or special characters)</label>
          <input type="text" name="controller_name" placeholder="Name of Controller" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">

    <div class="col-md-4"> 
    <label for="create_model" class="switch switch-primary switch-round">
      <input type="checkbox" id="create_model" name="create_model" checked="checked">
      <span class="switch-label" data-on="YES" data-off="NO"></span>
      Generate a model for this controller?
    </label>
    </div>

    <div class="col-md-4"> 
    <label for="create_view" class="switch switch-primary switch-round">
      <input type="checkbox" id="create_view" name="create_view" checked="checked">
      <span class="switch-label" data-on="YES" data-off="NO"></span>
      Generate a view for this controller?
    </label>
    </div>

      <div class="col-md-4">
        <input type="submit" value="Generate Code" class="btn btn-primary pull-right" data-loading-text="Loading...">
      </div>
    </div>
  </form>
</div>
</div>