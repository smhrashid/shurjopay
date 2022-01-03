
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Answer Question # 2
        </h4>
    </div>
    <div class="container" id="myWizard">

        <p align="center">&nbsp;</p>
        <p>API Protocol
        </p>
        <p>All APIs are exposed as  stateless services over HTTPS. The API generate JWT token to fetch data. The  user should generate a JWT Token and send token via POST Method action <br>on  remote URL. </p>
        <table border="1" cellspacing="0" cellpadding="0">
            <tr>
                <td width="51" valign="top"><p align="center"><strong>#</strong></p></td>
                <td width="141" valign="top"><p align="center"><strong>API Name</strong></p></td>
                <td width="440" valign="top"><p align="center"><strong>API Description</strong></p></td>
            </tr>
            <tr>
                <td width="51" valign="top"><p>1 </p></td>
                <td width="141" valign="top"><p align="center">User    Authentication </p></td>
                <td width="440" valign="top"><p align="center">Provides JWT token. </p></td>
            </tr>
        </table>
        <ol>
            <li><strong>Submit User  Information</strong><strong> </strong></li>
        </ol>
        <ol>
            <ol>
                <li><strong>URL </strong>-Base URL/threeinputsapi/</li>
                <li><strong> get headers value</strong>-jwttoken</li>
                <li>JWT Secret Key : sdfgdfgfggfd</li>
            </ol>
        </ol>
        <table border="1" cellspacing="0" cellpadding="0" width="644">
            <tr>
                <td width="644" valign="top"><p align="center"><strong>JSON Data</strong></p></td>
            </tr>
            <tr>
                <td width="644" valign="top"><p> {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&quot;name&quot;:&nbsp;&quot;MR.&nbsp;MASUDUL&nbsp;HASAN&quot;,<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&quot; password&quot;:&nbsp;&quot;*********&quot;,<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&quot;IP&quot;:&nbsp;&quot;***.***.***.***&quot; <br />
                        }</p></td>
            </tr>
        </table>
        <br>
        <p>API Response</p>
        <br>
        <?php
        $headers = get_headers(base_url()."threeinputsapi", 1);
        $token = $headers['jwttoken'];
        $jwt = new JWT();
        $JwtSecretKey = "sdfgdfgfggfd";
        $decoded_token = $jwt->decode($token, $JwtSecretKey, 'HS256');
        echo '<pre style="width: 50%;">';
        print_r($decoded_token);
        echo '</pre>';
        ?>


        <br>
    </div>
</div>