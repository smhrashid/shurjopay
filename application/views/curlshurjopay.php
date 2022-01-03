
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Answer Question # 5
        </h4>
    </div>
   
    <div class="container" id="myWizard">
        <?php
        foreach ($html->find('div') as $e)
            $item_name[] = substr($e->plaintext, 18);
        $pr_val = wordwrap($item_name[23], 200, "<br>");
        echo '<br>';
        echo $pr_val;
        echo '<br>';
        file_put_contents('log/' . time() . '-data.log', PHP_EOL . $item_name[23], FILE_APPEND);
        ?>
    </div>
</div>