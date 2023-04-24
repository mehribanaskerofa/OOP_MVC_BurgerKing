<?php view('admin/partial/header');?>

<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        margin: 10px;
    }
    .blog-head{
        margin: 10px;
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



<h1 class="blog-head">Contact form Table</h1>
<br>
<br><br>
<div></div>
<table id="customers" class="mt-3">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($contactform as $contactform):
        ?>
        <tr>
            <td><?= $contactform['id']?></td>
            <td><?= $contactform['name']?></td>
            <td><?= $contactform['email']?></td>
            <td><?= $contactform['subject']?></td>
            <td><?= $contactform['message']?></td>
            <td>
                <form action="<?= url('admin/contact-delete/'.$contactform['id']) ?>" method="post">
                    <button class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>


</table>

<?php view('admin/partial/footer');?>

