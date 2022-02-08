<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>City Name</td>
<td>Email</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->course }}</td>
<td>{{ $user->rollno }}</td>
<td>{{ $user->name }}</td>
<!-- <td>{{ $user->email }}</td> -->
</tr>
@endforeach
</table>
</body>
</html>