<?php

Session::init();

if (isset($_SESSION['users']) && isset($_SESSION['userType'])) {
    $user = $_SESSION['users'];
    $userType = $_SESSION['userType'];
} else {
    header("Location:" . LOGIN);
    exit;
}

if (isset($_SESSION['userType']) && $_SESSION['userType']['name'] !== "company") {
    header('Location:' . ERROR);
    exit;
}
    $companyModel = new company_model();
    $userc = $companyModel->getAllUsersByCreatorAndCompany();

?>
<?php include_once './views/include/header.php'; ?>

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-xxl mx-auto">

                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Liste des utiliateurs</h5>
                                <button
                                    href="#"
                                    class="btn btn-primary mt-2"
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#newFormUser">
                                    Ajouter<em class="icon ni ni-plus p-1"></em>
                                </button>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div
                                    id="DataTables_Table_1_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <table
                                        class="datatable-init nk-tb-list nk-tb-ulist dataTable no-footer"
                                        data-auto-responsive="false"
                                        id="DataTables_Table_1"
                                        aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">

                                                <th
                                                    class="nk-tb-col sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="User: activate to sort column ascending">
                                                    <span class="sub-text">#</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-md sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">
                                                    <span class="sub-text">Image</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-mb sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Balance: activate to sort column ascending">
                                                    <span class="sub-text">Noms</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-mb sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Balance: activate to sort column ascending">
                                                    <span class="sub-text">Branche</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-md sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">
                                                    <span class="sub-text">Genre</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-md sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">
                                                    <span class="sub-text">Telephone</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-md sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">
                                                    <span class="sub-text">Pays</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-md sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">
                                                    <span class="sub-text">Role</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col tb-col-md sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="Phone: activate to sort column ascending">
                                                    <span class="sub-text">Status</span>
                                                </th>
                                                <th
                                                    class="nk-tb-col nk-tb-col-tools text-end sorting"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_1"
                                                    rowspan="1"
                                                    colspan="1"
                                                    aria-label="
                                                        : activate to sort column ascending"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($userc as $usercomp) {
                                                ?>

                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            <tr class="nk-tb-item odd">

                                                <td class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <span class="tb-lead">
                                                                <?=$usercomp['num']?>
                                                                <span class=" d-md-none ms-1"></span></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="user-toggle">
                                                        <div class="user-avatar sm">
                                                            <?php if (isset($usercomp['image']) && !empty($usercomp['image'])): ?>
                                                            <img src="<?=$usercomp['image']?>" alt="User Avatar">
                                                            <?php if($usercomp['is_logged_in'] == 1): ?>
                                                            <div class="status dot dot-lg dot-success"></div>
                                                        <?php else: ?>
                                                            <div class="status dot dot-lg dot-danger"></div>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <em class="icon ni ni-user-alt"></em>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb">
                                                    <span class="tb-amount"><?=$usercomp['name']?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?=$usercomp['branche']?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?=$usercomp['gender']?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?=$usercomp['phone']?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?=$usercomp['country']?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?=$usercomp['role_name']?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <?php if($usercomp['is_active'] == 1): ?>
                                                    <span class="badge badge-dim bg-success">Actif</span>
                                                <?php else: ?>
                                                    <span class="badge badge-dim bg-danger">Désactivé</span>
                                                    <?php endif; ?>
                                                </td>

                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <!-- <li class="nk-tb-action-hidden"> <a href="#" class="btn btn-trigger
                                                        btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Wallet"
                                                        data-bs-original-title="Wallet"> <em class="icon ni ni-wallet-fill"></em> </a>
                                                        </li> <li class="nk-tb-action-hidden"> <a href="#" class="btn btn-trigger
                                                        btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send
                                                        Email" data-bs-original-title="Send Email"> <em class="icon ni
                                                        ni-mail-fill"></em> </a> </li> <li class="nk-tb-action-hidden"> <a href="#"
                                                        class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" aria-label="Suspend" data-bs-original-title="Suspend">
                                                        <em class="icon ni ni-user-cross-fill"></em> </a> </li> -->
                                                        <li>
                                                            <div class="drodown">
                                                                <a
                                                                    href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#" class="delete-button-users" data-id="<?=$users['id'];?>">
                                                                                <em class="icon ni ni-trash"></em>
                                                                                <span>Supprimer</span></a>
                                                                            <a
                                                                                href="#"
                                                                                class="update_button_profile"
                                                                                data-id="<?=$users['id'];?>"
                                                                                data-userprofile-name="<?=$users['name'];?>"
                                                                                data-userprofile-username="<?=$users['username'];?>"
                                                                                data-userprofile-email="<?=$users['email'];?>"
                                                                                data-userprofile-phone="<?=$users['phone'];?>"
                                                                                data-userprofile-address="<?=$users['address'];?>"
                                                                                data-userprofile-birthday="<?=$users['birthday'];?>">
                                                                                <em class="icon ni ni-pen"></em>
                                                                                <span>Modifier</span>
                                                                            </a>
                                                                            <a
                                                                                href="#"
                                                                                class="voir_button_profile"
                                                                                data-id="<?=$users['id'];?>"
                                                                                data-view-name="<?=$users['name'];?>"
                                                                                data-view-username="<?=$users['username'];?>"
                                                                                data-view-email="<?=$users['email'];?>"
                                                                                data-view-phone="<?=$users['phone'];?>"
                                                                                data-view-address="<?=$users['address'];?>"
                                                                                data-view-birthday="<?=$users['birthday'];?>"
                                                                                data-view-image="<?=$users['image'];?>">
                                                                                <em class="icon ni ni-eye"></em>
                                                                                <span>Voir</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a href="" class="desactiver-button-users" data-id="<?=$users['id'];?>">
                                                                                <em class="icon ni ni-spark-off-fill"></em>
                                                                                <span>
                                                                                    <?php echo $users['is_active'] ? 'Désactiver' : 'Activer'; ?>
                                                                                </span>
                                                                            </a>

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php
}
?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-7 col-sm-12 col-md-9">
                                        <div
                                            class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_1_paginate">
                                            <ul class="pagination">
                                                <!-- <li class="paginate_button page-item previous disabled"
                                                id="DataTables_Table_1_previous"> <a aria-controls="DataTables_Table_1"
                                                aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0"
                                                class="page-link">Prev</a> </li> <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="DataTables_Table_1" aria-role="link"
                                                aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a> </li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_1_next"> <a
                                                href="#" aria-controls="DataTables_Table_1" aria-role="link" data-dt-idx="next"
                                                tabindex="0" class="page-link">Next</a> </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .card-preview -->
                </div>
                <!-- nk-block -->
            </div>
            <!-- .components-preview wide-lg mx-auto -->
        </div>
    </div>
</div>

<!-- Ajouter utilisateur -->
<div
    class="modal fade"
    id="newFormUser"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un utilisateurs</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form id="registerFormUser" method="POST" enctype="multipart/form-data">
                    <div class="row gy-4">
                    <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                        <input
                                            type="file"
                                            required="required"
                                            class="form-file-input"
                                            name="image"
                                            id="image">
                                        <label class="form-file-label" for="image">Choisir un image</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="name">Nom</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="name"
                                        class="form-control form-control-lg"
                                        id="name"
                                        placeholder="Entrer le nom">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="prename">Prenom</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="prename"
                                        class="form-control form-control-lg"
                                        id="prename"
                                        placeholder="Entrer le prenom">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="employeid">Employee ID</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="employeid"
                                        class="form-control form-control-lg"
                                        id="employeid"
                                        placeholder="Entrer l'id"
                                        <?php
                                        $randomId = rand(100000000, 999999999);
                                        ?>
                                        value="<?= $randomId; ?>"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="phone">Votre telephone</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="number"
                                        name="phone"
                                        class="form-control form-control-lg"
                                        id="phone"
                                        placeholder="Entrer votre numero de telephone">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" data-select2-id="12">
                            <div class="form-group" data-select2-id="11">
                                <label class="form-label">Gender</label>
                                <div class="form-control-wrap" data-select2-id="10">
                                    <select
                                        class="form-select js-select2 select2-hidden-accessible"
                                        data-search="on"
                                        aria-hidden="true"
                                        data-ui="lg">
                                        <option value="default_option" data-select2-id="0">Default Option</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="username">Votre nom utilisateur</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="username"
                                        class="form-control form-control-lg"
                                        id="username"
                                        placeholder="Entrer votre username">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="email">Votre email</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="email"
                                        name="email"
                                        class="form-control form-control-lg"
                                        id="email"
                                        placeholder="Entrer votre email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">Mot de passe</label>
                                </div>
                                <div class="form-control-wrap">
                                    <a
                                        href="#"
                                        class="form-icon form-icon-right passcode-switch lg"
                                        data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input
                                        required="required"
                                        type="password"
                                        name="password"
                                        class="form-control form-control-lg"
                                        id="password"
                                        placeholder="Entrer votre mot de passe">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="confirm_password">Confirmer votre mot de passe</label>
                                </div>
                                <div class="form-control-wrap">
                                    <a
                                        href="#"
                                        class="form-icon form-icon-right passcode-switch lg"
                                        data-target="confirm_password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input
                                        required="required"
                                        type="password"
                                        name="confirm_password"
                                        class="form-control form-control-lg"
                                        id="confirm_password"
                                        placeholder="Confirmer votre mot de passe">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" data-select2-id="12">
                            <div class="form-group" data-select2-id="11">
                                <label class="form-label">Role</label>
                                <div class="form-control-wrap" data-select2-id="10">
                                    <select
                                        class="form-select js-select2 select2-hidden-accessible"
                                        data-search="on"
                                        aria-hidden="true"
                                        data-ui="lg">
                                        <option value="default_option" data-select2-id="0">Default Option</option>
                                        <option value="Homme">Role1</option>
                                        <option value="Femme">Role1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-select2-id="12">
                            <div class="form-group" data-select2-id="11">
                                <label class="form-label">Departements</label>
                                <div class="form-control-wrap" data-select2-id="10">
                                    <select
                                        class="form-select js-select2 select2-hidden-accessible"
                                        aria-hidden="true"
                                        data-ui="lg">
                                        <option value="default_option" data-select2-id="0">Default Option</option>
                                        <option value="Homme">Role1</option>
                                        <option value="Femme">Role1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-select2-id="12">
                            <div class="form-group" data-select2-id="11">
                                <label class="form-label">Branches</label>
                                <div class="form-control-wrap" data-select2-id="10">
                                    <select
                                        class="form-select js-select2 select2-hidden-accessible"
                                        aria-hidden="true"
                                        data-ui="lg">
                                        <option value="default_option" data-select2-id="0">Default Option</option>
                                        <option value="Homme">Role1</option>
                                        <option value="Femme">Role1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="email">Salaire net</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="salaire_net"
                                        class="form-control form-control-lg"
                                        id="salaire_net"
                                        placeholder="Entrer votre email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-select2-id="12">
                            <div class="form-group" data-select2-id="11">
                                <label class="form-label">Type de paiement</label>
                                <div class="form-control-wrap" data-select2-id="10">
                                    <select
                                        class="form-select js-select2 select2-hidden-accessible"
                                        aria-hidden="true"
                                        data-ui="lg">
                                        <option value="default_option" data-select2-id="0">Default Option</option>
                                        <option value="Homme">Par mois</option>
                                        <option value="Femme">Par semaine</option>
                                        <option value="Femme">Par heure</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <button
                            type="submit"
                            id="register_btn"
                            name="register_btn"
                            class="btn btn-lg btn-primary btn-block">Cree utilisateur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- update users -->
<div
    class="modal fade"
    id="UpdateModalProfile"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier l'utilisateur</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form id="updateFormUser" method="POST" enctype="multipart/form-data">
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="nameupdate">Votre noms</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="nameupdate"
                                        class="form-control form-control-lg"
                                        id="nameupdate"
                                        placeholder="Entrer votre noms">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="usernameupdate">Votre nom utilisateur</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="usernameupdate"
                                        class="form-control form-control-lg"
                                        id="usernameupdate"
                                        placeholder="Entrer votre username">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="emailupdate">Votre email</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="email"
                                        name="emailupdate"
                                        class="form-control form-control-lg"
                                        id="emailupdate"
                                        placeholder="Entrer votre email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="phoneupdate">Votre telephone</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="number"
                                        name="phoneupdate"
                                        class="form-control form-control-lg"
                                        id="phoneupdate"
                                        placeholder="Entrer votre numero de telephone">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="addressupdate">Votre adresse</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="addressupdate"
                                        class="form-control form-control-lg"
                                        id="addressupdate"
                                        placeholder="Entrer votre adresse">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="birthdayupdate">Date d'anniversaire</label>
                                <input
                                    type="text"
                                    class="form-control form-control-lg date-picker"
                                    name="birthdayupdate"
                                    id="birthdayupdate">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="imageFile">Veuillez inserer une image</label>
                                </div>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" name="image" id="imageupdate">
                                        <label class="form-file-label" for="imageupdate">Choisir fichier</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="id_users" name="id">
                    <div class="form-group mt-2">
                        <button
                            type="submit"
                            id="update_btn"
                            name="update_btn"
                            class="btn btn-lg btn-primary btn-block">Modifier utilisateur</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- voir users -->
<div
    class="modal fade"
    id="viewModalProfile"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">voir l'utilisateur</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>

            <div class="modal-body">
                <form id="viewFormUser" method="POST" enctype="multipart/form-data">
                    <div class="user-avatar sq xl mb-2">
                        <?php if (isset($user['image']) && !empty($user['image'])): ?>
                        <img src="" id="viewimage" alt="User Avatar">
                    <?php else: ?>
                        <em class="icon ni ni-user-alt"></em>
                        <?php endif; ?>
                    </div>
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="viewname">Votre noms</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="name"
                                        class="form-control form-control-lg"
                                        id="viewname"
                                        disabled="disabled"
                                        placeholder="Entrer votre noms">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="viewusername">Votre nom utilisateur</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="username"
                                        class="form-control form-control-lg"
                                        id="viewusername"
                                        disabled="disabled"
                                        placeholder="Entrer votre username">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="viewemail">Votre email</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="email"
                                        name="email"
                                        class="form-control form-control-lg"
                                        id="viewemail"
                                        disabled="disabled"
                                        placeholder="Entrer votre email">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="viewphone">Votre telephone</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="number"
                                        name="phone"
                                        class="form-control form-control-lg"
                                        id="viewphone"
                                        disabled="disabled"
                                        placeholder="Entrer votre numero de telephone">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="viewaddress">Votre adresse</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        required="required"
                                        type="text"
                                        name="address"
                                        class="form-control form-control-lg"
                                        id="viewaddress"
                                        disabled="disabled"
                                        placeholder="Entrer votre adresse">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="viewbirthday">Date d'anniversaire</label>
                                <input
                                    type="text"
                                    class="form-control form-control-lg date-picker"
                                    name="birthday"
                                    disabled="disabled"
                                    id="viewbirthday">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="id_users">
                </form>
            </div>
        </div>
    </div>

</div>

<?php include_once './views/include/footer.php' ?>