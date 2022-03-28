<style>
h4, h5 { text-decoration: underline;  }
legend {
    padding: 0px 20px;
    margin: 20px 0 25px;
    border-left: 8px solid #c8081b !important;
    font-size: 24px !important;
}
@media only screen and (min-width: 992px)
body.header-over:not(.user-scrolled-down) .navbar .navbar-nav .nav-link {
    color: #000 !important;
}

@media only screen and (min-width: 992px)
body.header-over:not(.active) .navbar .navbar-nav .nav-link {
    color: #000 !important;
}

nav.navbar-light a {
  color: #1c0950;
}

nav.navbar-light a {
  color: #1c0950;
}
</style>

<div class="container">

    <legend style="width: 100%;">System Requirements</legend>
    
    <strong>1. Mandatory Server Requirements</strong>
    <p>
        Each of the following are <strong class="red">required</strong> in order to use DiamondPHP. Installation will fail if any of the below are not met.
    </p>
    <p style="padding-left: 20px">
        <li>Apache Server, version 2.4 or newer (Nginx support coming soon)</li>
        <li>Apache mod_rewrite module enabled</li>
        <li>PHP, version 8.0 or newer</li>
        <li>PDO extension enabled</li>
        <li>Composer package manager (<a href="https://getcomposer.org/download/" target="_blank">Download Composer</a>)</li>
        <li>Terminal / command prompt access (to use Composer)</li> 
    </p>

    <strong>2. Optional System Components</strong>
    <p>
        Each of the following are recommended, but <strong class="green">optional</strong>. 
        Installation will continue if these options are not available.
    </p>
    <p>
        <li>APC Caching</li>
        <li>Memcached or Redis</li>
        <li>SSH / Shell access to server</li>
        <li>Cron tasks</li>
    </p>

</div>