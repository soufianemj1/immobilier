<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/mvcimmobilier/view/backoffice/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;1,200;1,500&family=Raleway:wght@400;600&display=swap"
        rel="stylesheet">
    <title>message</title>
</head>

<body style="background-color: #F9F9F9;">
    <div class="admin">
    <div class="sidebar">
            <div id="sb"><a href="http://localhost/mvcimmobilier/view/overview"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg> dashboard</a></div>
            <div id="sb"><a href="http://localhost/mvcimmobilier/contact/show"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg> les messages</a></div>
            <div id="sb"><a href="http://localhost/mvcimmobilier/rdv/show"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-calendar">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg> rendez-vous</a></div>
            <div id="sb"><a href="http://localhost/mvcimmobilier/offre/showadmin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-activity">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg> Les offres</a></div>

        </div>




        <div class="content">


            <div class="title">
                <div class="logo">
                    <h2>jAAFAR IMMO</h2>
                </div>
                <div class="title">
                <h5><a href="http://localhost/mvcimmobilier/login/logout">Deconnecter</a></h5>
                </div>

            </div>




            <div class="table-container">
                <table>
                    <tr>
                        <th>
                            <h6>Nom</h6>
                        </th>
                        <th>
                            <h6>T??l??phone</h6>
                        </th>
                        <th>
                            <h6>Email</h6>
                        </th>
                        <th>
                            <h6>rendez-vous</h6>
                        </th>
                        <th><h6>supprimer</h6></th>

                    </tr>
                    <?php foreach($rdvdata as $data) { ?>
                    <tr>
                        <td> <?= $data['nom'] ?> </td>
                        <td><?= $data['telephone'] ?> </td>
                        <td><?= $data['email'] ?> </td>
                        <td><?= $data['date'] ?> </td>
                        <td><a href="http://localhost/mvcimmobilier/rdv/delete/<?= $data['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg></a></td>
                    </tr>
                    <?php } ?>
                </table> 




</body>

</html>