{literal}
    <style>
    tr { display: block; float: left; }
    th, td { display: block; }
    </style>
{/literal}

<div class="container">

<h1>SEARCH RESULTS</h1>

{foreach $results as $k => $row}

    {* Highlighting search keywords causes problems with profile links when keyword is in username. Make sure to remove <span> tags *}
    <a href="{$smarty.const.BASE_URL}member/view/{$row.content|replace:'<span style=\'background-color: yellow;\'>':''|replace:'</span>':''}">
        {$row.content}
    </a>

{/foreach}

</div>