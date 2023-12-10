<?php include "header.php";

$signup_query = "SELECT * FROM signup";
$result = $conn->query($signup_query);
$result = $result->fetch_all(MYSQLI_ASSOC);
?>

<h2 class="center">Registered Users</h2>


<table class="table">
    <thead>
        <tr>
            <th>Sr. No</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>No-of-people</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($result as $row) { ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['uname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['people']; ?></td>
                <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> ||
                    <a href="delete.php?del=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>


</table>


<?php include "footer.php"; ?>