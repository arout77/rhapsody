<div id="section_about" class="section">
    <div class="container">
        <div class="col-12 col-lg-6 mb-5">

            <h3 class="fw-bold mb-12">
                Your software version: {$software_version} <br>
                <span class="fw-medium">Latest version: {$latest_version}</span>
            </h3>

        </div>

        <div class="col-12 col-lg-6 mb-5">
            {if $software_version < $latest_version}
                <button class="btn btn-success btn-xl">
                    <a style="color:white;" href="https://diamondphp.org/updates/?installed={$software_version}">Download Updates</a>
                </button>
            {else}
                <span class="alert alert-info">You're all up to date!</span>
            {/if}
        </div>

    </div>
</div>







