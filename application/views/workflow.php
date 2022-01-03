
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Answer Question # 3
        </h4>
    </div>
    <div class="container" id="myWizard">
        <br>
        <p><strong>1 EXECUTIVE SUMMARY</strong></p>
        <p>The objective of this proposal is to establish an Employee Attendance System.  The proposed system will enable the restaurant owner has multiple shops around  the city and the solution and software that will collect the employees'  attendance.</p>
        <p>The most significant advantage of this system is that it will track if  anyone is working less hours than officially allowed</p>
        <p><strong>2 BENEFITS OF THE SYSTEM </strong></p>
        <p>The service brings the  following benefits for the restaurant owner.</p>
        <ul>
            <li>Save  hours of planning and eliminate spreadsheets.</li>
            <li>Ensure the Rota is being planned within budgets.</li>
            <li>Reduce  the time spent on administration and communication spent liaising with employees.</li>
            <li>Reduce  the cost of payroll by accurately monitoring all staff time and  attendance.</li>
            <li>Increase  employee trust in organization.</li>
            <li>Protect sensitive data.</li>
            <li>Prevent  time fraud or payroll abuse.</li>
            <li>Easily  integrate with other applications.</li>
        </ul>
        <p>&nbsp;</p>
        <p><strong>3 ARCHITECTURE &amp;  INTEGRATION</strong></p>
        <p><strong>3.1</strong>    <strong>Standard  Architecture and Data flow</strong></p>
        <p>The fingerprint-based attendance management process generally consists  of recording, management, and reporting. The method of recording attendance  data is done with the help of fingerprint attendance machine. Even though the  computer connection is running online, the administrator still needs to process  and generate reports because there is no real-time interconnection between  devices. Web services such as Simple Object Access Protocol (SOAP) and  Representational State Transfer (REST) are among the technologies that can  support real-time processing, which has been used in previous studies. SOAP is  more secure than REST. Solutions to overcome these problems, this study used  SOAP-based web service on the fingerprint attendance management system, to  support real-time data access. The results of the research have made web  services that can overcome the problem of interoperability between fingerprint  machines and systems, so that data can be accessed in real-time and safer.</p>
        <p align="center"><strong><img src="images/f1.jpg" alt="" width="608" height="401" /></strong></p>
        <p>Service Attendance Management uses fingerprint identification patterns  designed based on a client-server framework that refers to the system  architecture diagram. The system consists of an online server that contains  databases and services, web-based clients and hardware parts of fingerprint  machines as clients. The real-time data retrieval mechanism between the  fingerprint engine and the server utilizing the web service. Web services are  capable of bridging different platforms as well as stateless. Presence data  recorded on the server is stored in the database so that it can be manipulated  and served for the benefit of management and users.<br />
            An online web server can be used on a computer connected to the  Internet. For public access, the server must be configured with a public IP  address so that the user from the client application can access the presence data.  The web client can monitor data in real-time by accessing client application  from a web browser.</p>
        <p><strong>3.2</strong>    <strong>The flow  of the system</strong><br />
            Shown in Figure Web Design Flowcharts that have been designed. There are  two services designed, the first &quot;Checking Connection,&quot; used to check  the data connection between the fingerprint machine with the system. The second  service &quot;Get Data From Fingerprint Machine&quot; is designed for the  process of retrieving attendance data and employee data from a fingerprint  machine stored in the database.</p>
        <p align="center"><strong><img src="images/f2.jpg" alt="" width="323" height="570" /></strong></p>
        <p><strong>4. </strong><strong>CONCLUSION</strong></p>
        <p>Attendance  management services that can be built with SOAP architecture will able to  overcome interoperability problems. Web services with data exchange using XML  connect and retrieve attendance data from real-time fingerprint machines. Then  the attendance data will forward to the server that make the service call, if  new data then it will store in the database. Vice versa, from the system could  update data into the fingerprint machine through the service.</p>
        <p>&nbsp;</p>
        <br>
    </div>
</div>