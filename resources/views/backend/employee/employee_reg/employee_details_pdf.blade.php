<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  
 <tr>
    <td><h2>
  <?php $image_path = '/upload/school-logo.png'; ?>
  <img src="{{ public_path() . $image_path }}" width="200" height="100">

    </h2></td>
    <td><h2> School ERP</h2>
<p>Moeshpur Azizia High School</p>
<p>Phone : 01847313526</p>
<p>Email : support@sms.com</p>
<p> <b> Employee Registration Fee</b> </p>

    </td> 
  </tr>
  
  
</table>


<table id="customers">

  <tr>
    <th width="10% ">Sl</th>
    <th width="45% ">Employee Details</th>
    <th width="45% ">Employee Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Employee Name</td>
    <td>{{ $details->name }}</td>
  </tr>

  <tr>
    <td>2</td>
    <td>Employee ID No</td>
    <td>{{ $details->id_no }}</td>
  </tr>


  <tr>
    <td>3</td>
    <td>Father's Name</td>
    <td>{{ $details->fname }}</td>
  </tr>

  <tr>
    <td>4</td>
    <td>Mother's Name</td>
    <td>{{ $details->mname }}</td>
  </tr>

  <tr>
    <td>5</td>
    <td>Mobile no</td>
    <td>{{ $details->mobile }}</td>
  </tr>

  <tr>
    <td>6</td>
    <td>Address</td>
    <td>{{ $details->address }}</td>
  </tr>

  <tr>
    <td>7</td>
    <td>Gender</td>
    <td>{{ $details->gender }}</td>
  </tr>

  <tr>
    <td>8</td>
    <td>Religion</td>
    <td>{{ $details->religion }}</td>
  </tr>

  <tr>
    <td>9</td>
    <td>Date Of Birth</td>
    <td>{{ date('d-m-Y', strtotime($details->dob))  }}</td>
  </tr>

  <tr>
    <td>10</td>
    <td>Employee Designation</td>
    <td>{{ $details['designation']['name'] }} </td>
  </tr>

  <tr>
    <td>11</td>
    <td>Join Date</td>
    <td>{{ date('d-m-Y',strtotime($details->join_date))  }}</td>
  </tr>

  <tr>
    <td>12</td>
    <td>Employee Salary</td>
    <td>{{ $details->salary }}</td>
  </tr>

  
</table>

<br>
<i style="font-size: 10px; float: right;">Print Data: {{ date("d M Y") }}</i>

</body>
</html>
