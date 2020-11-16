<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
    <div class="content-body">
        <!-- DOM - jQuery events table -->
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard" style="padding-top:10px; padding-bottom:10px">
                                <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <h1 style="background-color: blueviolet; text-align:center;color:white">PDF</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table style=" border:1px solid #dddddd; width: 100%;" class="table table-striped table-bordered dom-jQuery-events dataTable"  role="grid" aria-describedby="DataTables_Table_0_info" >
                                                <thead>
                                                <tr style="border:1px solid #dddddd; border-collapse: collapse;
                                                text-align: center;
                                                padding: 8px;">
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                    <th>E-mail</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user as $u)
                                                    <tr style="text-align: center;border-collapse: collapse;">
                                                        <td style="border:1px solid #dddddd;border-collapse: collapse;">{{$u->id}}</td>
                                                        <td style="border:1px solid #dddddd;border-collapse: collapse;">{{$u->first_name}}</td>
                                                        <td style="border:1px solid #dddddd;border-collapse: collapse;">{{$u->last_name}}</td>
                                                        <td style="border:1px solid #dddddd;border-collapse: collapse;">{{$u->username}}</td>
                                                        <td style="border:1px solid #dddddd;border-collapse: collapse;">{{$u->email}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>