<style>
    table {
        table-layout: fixed;
    }
    
    th, td {
        width: 170px;
        font-size: 15px;
    }
    
    body {
    background-color: lightblue;
}
h1 {
    color: Red;
    text-align: center;
}
p {
    font-family: calibri;
    font-size: 20px;
}
    
</style>


<body>

<center>
                <p><a href="<?php echo site_url('form'); ?>">View List</a> | <a href="<?php echo site_url('form/create'); ?>">Add Details</a></p>
<table border='1' cellpadding='4' >
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Home</strong></td>
        <td><strong>Gender</strong></td>
        <td><strong>Number</strong></td>
        <td><strong>Comment</strong></td>
        <td><strong>Action</strong></td>
        
    </tr>
<?php foreach ($users as $users_item): ?>
        <tr>
            <td><?php echo $users_item['name']; ?></td>
            <td><?php echo $users_item['nickname']; ?></td>
            <td><?php echo $users_item['email']; ?></td>
            <td><?php echo $users_item['home']; ?></td>
            <td><?php echo $users_item['gender']; ?></td>
            <td><?php echo $users_item['number']; ?></td>
            <td><?php echo $users_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('form/'.$users_item['nickname']); ?>">View</a> | 
                <a href="<?php echo site_url('form/edit/'.$users_item['user_id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('form/delete/'.$users_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>