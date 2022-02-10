<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
    .center{
        background-color:'red';
       align-items:'center';
       margin:200px auto;
        display:flex;
        justify-content:center;
        border:1px solid black;
        width: fit-content;
        
    }
</style>
</head>
<body>


    <div class="center">
        <table>
        <tr>
        <td>Users</td>
        <td>Buckets</td>
        <td>Comments</td>
        <td>Images</td>
        <td>Invites</td>
        <td>Likes</td>
        <td>Migrations</td>
        <td>polls</td>
        <td>Views</td>
        <td>Writeups</td>
        </tr>

        <tr>
        <td>{{ $users }}</td>
        <td>{{ $buckets }}</td>
        <td>{{ $comments }}</td>
        <td>{{ $images }}</td>
        <td>{{ $invites }}</td>
        <td>{{ $likes }}</td>
        <td>{{ $migrations }}</td>
        <td>{{ $polls }}</td>
        <td>{{ $views }}</td>
        <td>{{ $writeups }}</td>

        </tr>

        </table>
    </div>




</table>
</body>
</html>