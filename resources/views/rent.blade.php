<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

</head>
<body>
    <h1>Cars For Hire.</h1>
    <p>Address: 363 Pascual Casal St, Quiapo, Manila, 1001 Metro Manila</p>
    <h3 align="center">All Customer Reservation Data</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
 
                    <tr style="background-color: #101726;">
                        <th style="border: 1px solid; padding:12px; color:white;" width="20%">Name</th>
                        <th style="border: 1px solid; padding:12px; color:white;" width="20%">Number</th>
                        <th style="border: 1px solid; padding:12px; color:white;" width="20%">Carunit</th>
                        <th style="border: 1px solid; padding:12px; color:white;" width="20%">Daysrented</th>
                        <th style="border: 1px solid; padding:12px; color:white;" width="20%">Price</th>
                        <th style="border: 1px solid; padding:12px; color:white;" width="20%">Status</th>
                    </tr>
            @foreach ($rent as $rents)
                    <tr>
                        <td style="border: 1px solid; padding:12px;">{{ $rents->name }}</td>
                        <td style="border: 1px solid; padding:12px;">{{ $rents->number }}</td>
                        <td style="border: 1px solid; padding:12px;">{{ $rents->carunit }}</td>
                        <td style="border: 1px solid; padding:12px;">{{ $rents->daysrented }}</td>
                        <td style="border: 1px solid; padding:12px;">{{ $rents->price }}</td>
                        <td style="border: 1px solid; padding:12px;">{{ $rents->status }}</td>
                    </tr>
            @endforeach
        </table>
</body>
</html> 