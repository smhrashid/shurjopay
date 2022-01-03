<link rel="stylesheet" href="asset/css/normalize.min.css">
<style>
    .green {

        color: #15CD07;
    }
</style>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Answer Question # 1
        </h4>
    </div>
    <br>
    <div class="container" id="myWizard">
        <div class="navbar">
            <div class="navbar-inner" style="font-weight: bold;">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#step1" data-toggle="tab" class="green">Step 1</a></li>
                    <li><a href="#step2" data-toggle="tab" class="disable text-muted" disabled="">Step 2</a></li>
                    <li><a href="#step3" data-toggle="tab" class="text-muted">Step 3</a></li>
                    <li><a href="#step4" data-toggle="tab" class="text-muted">Step 4</a></li>
                </ul>
            </div>
        </div>
        <form class="tab-content" action="multitabs" method="post" id="myForm">
            <div class="tab-pane active" style="max-width: 400px;" id="step1">
                <p>Here is the content for the first step...</p>
                <div class="input-group">
                    <span class="input-group-addon">Input1</span>  
                    <input class="form-control" id="input1" name="input1" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input2</span>  
                    <input class="form-control" id="input2" name="input2" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input3</span>  
                    <input class="form-control" id="input3" name="input3" required>
                </div>
                <button class="btn btn-default btn-ok" style="width: 100%;" type="button">OK</button>
            </div>
            <div class="tab-pane" style="max-width: 400px;" id="step2">
                <p>Here is the content for step 2...</p>
                <div class="input-group">
                    <span class="input-group-addon">Input1</span>  
                    <input class="form-control" id="input4" name="input4" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input2</span>  
                    <input class="form-control" id="input5" name="input5" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input3</span>  
                    <input class="form-control" id="input6" name="input6" required>
                </div>
                <button class="btn btn-default btn-ok" style="width: 100%;" type="button">OK</button>
            </div>
            <div class="tab-pane" style="max-width: 400px;" id="step3">
                <p>Here is the content for step 3...</p>
                <div class="input-group">
                    <span class="input-group-addon">Input1</span>  
                    <input class="form-control" id="input7" name="input7" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input2</span>  
                    <input class="form-control" id="input8" name="input8" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input3</span>  
                    <input class="form-control" id="input9" name="input9" required>
                </div>
                <button class="btn btn-default btn-ok" style="width: 100%;" type="button">OK</button>
            </div>
            <div class="tab-pane" style="max-width: 400px;" id="step4">
                <p>This is the last step. You're done.</p>
                <div class="input-group">
                    <span class="input-group-addon">Input1</span>  
                    <input class="form-control" id="input10" name="input10" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input2</span>  
                    <input class="form-control" id="input11" name="input11" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Input3</span>  
                    <input class="form-control" id="input12" name="input12" required>
                </div>
                <input class="btn btn-default" style="width: 100%;" type="submit" name="finalsub" value="Submit">
            </div>
        </form>
    </div>
    <br>
</div>
<script src="asset/js/tabprop.js"></script>