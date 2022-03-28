<style>
legend { color:#E84C3D; }
</style>

<!-- Modal -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title white">Drafted Players</h4>
      </div>
      <div class="modal-body"  id="draftedplayers">
        <div>
        
            {if empty($data.drafted)}
                <div class="alert alert-danger">Slow your roll. The draft hasn't begun yet!</div>
            {else}
                <table class="table table-striped">
                {$order = 0}
                {foreach $data.drafted as $player}
                    {$order = $order + 1}
                    <tr><td><strong>{$order|ordinal:$order}</strong></td><td>{$player.player}, {$player.pos}</td></tr>
                {/foreach}
                </table>
            {/if}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>