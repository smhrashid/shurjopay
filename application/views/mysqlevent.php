<div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Answer Question # 6
        </h4>
    </div>

    <div class="container" id="myWizard">

        <br>
        SHOW PROCESSLIST 
        <br><br>Above command to find the currently running threads.<br>  <br>
        If the event scheduler is not enabled then we need to enable by following command<br>  <br>
        SET GLOBAL event_scheduler = ON;
        <br><br>

        Here I create an event named update_status that update current time in table name active and column name active every 2 second
        <br> <br>
        CREATE EVENT update_time<br>
        ON SCHEDULE EVERY 2 SECOND<br>
        Do<br>
        UPDATE TabCurTime SET CurTime=curtime();<br> <br>
    </div>
</div>