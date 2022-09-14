<?php
require "php/select.php";
require "php/add.php";
require "php/drop.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- link fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <!-- link style -->
    <link rel="stylesheet" href="style/style.css" />

    <title>The Project</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container-fluid pt-3 pb-2 px-5">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="right-content col-4">
                    <h1>waz<span class="colored">wez</span>.</h1>
                </div>

                <div class="left-content col-4 col-md-6 col-lg-4">
                    <div class="icon-notification me-2 order-1 order-sm-0">
                        <div>
                            <img src="asset/Notification.svg" />
                        </div>
                    </div>
                    <?php foreach ($resultUser as $user) : ?>
                        <div class="user">
                            <div class="icon-user me-md-1 me-0 order-1 order-sm-0">
                                <img src="<?= $user["avatar"] ?>" />
                            </div>
                            <span class="name-user d-none d-md-block mx-1 "><?= $user["name"] ?></span>
                            <div class="dropdown-user  d-none d-md-block">
                                <div class="container-icon">
                                    <img id="down-user" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-user','up-user','item-drop-user')" />
                                    <img id="up-user" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-user','up-user','item-drop-user')" />
                                </div>
                            </div>
                        <?php endforeach;  ?>

                        <!-- item dropdown user -->
                        <div class="item-dropdown-user hidden" id="item-drop-user">
                            <a href="">
                                <p>Profil</p>
                            </a>
                            <a href="">
                                <p>Settings</p>
                            </a>
                            <a href="">
                                <p>Exit</p>
                            </a>
                        </div>
                        <!-- End item dropdown user -->
                        </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <!-- Main Page -->
    <main>
        <div class="container col-lg-6 col-md-8 col-10">
            <p class="taks-main-first">MY TASKS</p>

            <section class="flex-content-first">
                <h4>To Do List</h4>

                <button class="button-add-tugas">
                    <img src="asset/add.svg" />
                    <span class="task-add-tugas mx-1 d-none d-md-block">Tambah tugas</span>
                </button>
            </section>

            <p class="taks-main-second">Buat list tugas harian saya</p>

            <div class="container-sort-by">
                <section class="flex-content-second mb-3">
                    <p class="taks-main-third mt-1">Sort By</p>
                    <button class="orange button-by-tanggal me-2 me-md-none border-2">
                        <span class="task-by-tanggal mx-2 d-none d-md-block">By Tanggal</span>
                        <div class="container-icon">
                            <img class="dropdown-btn" src="asset/arrow-down.svg" />
                            <img class="dropup-btn hidden" src="asset/arrow-up.svg" />
                        </div>
                    </button>
                </section>
                <!-- Fitur Sort BY -->
                <div class="hidden respons-sort-by">
                    <div class="content">
                        <label for="sort-by-1" class="taks-content-sort-by">By Tanggal</label>
                        <input type="radio" name="sort-by" id="sort-by-1" />
                    </div>
                    <div class="content">
                        <label for="sort-by-2" class="taks-content-sort-by">By Time</label>
                        <input type="radio" name="sort-by" id="sort-by-2" />
                    </div>
                    <div class="content">
                        <label for="sort-by-3" class="taks-content-sort-by">Terbaru</label>
                        <input type="radio" name="sort-by" id="sort-by-3" />
                    </div>
                </div>
                <!-- End.... -->
            </div>

            <!-- Fitur tambah tugas -->
            <div class="hidden container-respons-add-tugas">
                <form action="" method="post">

                    <section class="tambah-tugas ms-4">
                        <input type="radio" name="add-tugas" id="" checked />
                        <h6 class="nama-tugas created mx-2 mt-2">
                            <input type="text" name="nama_tugas" placeholder="Masukan nama tugas" required>
                        </h6>

                    </section>
                    <div class="add-desc-tugas ms-5">

                        <img class="mb-3" src="asset/menu.svg" />
                        <p class="ms-2">
                            <input type="text" name="deskripsi" placeholder="Deskripsi Tugas (Optional)" />
                        </p>

                    </div>
                    <div class="add-time-tugas ms-5">

                        <img class="mb-3" src="asset/calendar.svg" />
                        <p class="ms-2">
                            <input placeholder="Tanggal & Waktu" name="deadline" type="text" onfocus="(this.type='date')" id="date" required>
                        </p>

                        <button type="submit" name="submit" class="btn-chek d-flex justify-content-center align-items-center">
                            <img src="asset/Plus.svg" />
                            <p class="mt-3 ms-1 d-none d-sm-block">Tambah</p>
                        </button>
                    </div>
                </form>
            </div>
            <!-- End Tambahan Items -->
            <?php foreach ($resultTasks as $value) : ?>
                <div class="container-tugas" id="tugas-<?= $value["id"] ?>">
                    <section class="tugas mt-1">
                        <div class="content-tugas">
                            <div class="round">
                                <input class="click-checkbox" type="checkbox" id="task-<?= $value["id"] ?>" />
                                <label for="task-<?= $value["id"] ?>"> </label>
                            </div>
                            <h6 class="nama-tugas-ku mx-2 mt-2"><?= $value["nama_tugas"] ?></h6>
                            <div class="created d-md-block d-none"><?= $value["deadline"] ?></div>
                            <div id="titik-tiga-<?= $value['id'] ?>" class="titik-tiga hidden" onclick="actionTitikTiga('titik-tiga-<?= $value['id'] ?>','action-titik-<?= $value['id'] ?>')">
                                <img class="" src="asset/more-vertical.svg" onclick="actionTitikTiga('titik-tiga-<?= $value['id'] ?>','action-titik-<?= $value['id'] ?>')">
                                <div class="action-titik-tiga hidden" id="action-titik-<?= $value['id'] ?>">
                                    <div class="item-titik-tiga d-flex align-items-center edit">
                                        <img src="asset/Edit.svg" />
                                        <p class="ms-3 d-flex align-i"><a href="php/edit.php?id = <?= ($value['id']) ?>">Rename task</a></p>
                                    </div>
                                    <div class="item-titik-tiga d-flex align-items-center delete">
                                        <img src="asset/Delete.svg" />
                                        <p class="ms-3 d-flex align-i"><a href="php/drop.php?id=<?= $value['id'] ?>" onclick=" return confirm('yakin... dek?');">Delete task</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="drop-tugas me-3">
                            <div class="container-icon">
                                <img id="down-<?= $value["id"] ?>" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-<?= $value['id'] ?>' ,'up-<?= $value['id'] ?>','unchek-tugas-<?= $value['id'] ?>','titik-tiga-<?= $value['id'] ?>'),'action-<?= $value['id'] ?>' " />

                                <img id="up-<?= $value['id'] ?>" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-<?= $value['id'] ?>' ,'up-<?= $value['id'] ?>','unchek-tugas-<?= $value['id'] ?>','titik-tiga-<?= $value['id'] ?>'),'action-<?= $value['id'] ?>' " />

                            </div>
                        </div>
                    </section>

                    <div class="desc-tugas ms-4"><?= $value['deskripsi'] ?></div>

                    <!-- Uncheklist -->

                    <div id="unchek-tugas-<?= $value['id'] ?>" class="uncheklist p-3 hidden">

                        <div class="header-chek mb-1 d-flex justify-content-between align-items-center">
                            <h6>Subtask</h6>
                            <button class="btn-chek d-flex justify-content-center align-items-center">
                                <img src="asset/Plus.svg" />
                                <p class="mt-3 ms-1">Tambah</p>
                            </button>
                        </div>
                        <div class="content-chek">
                            <div class="chek-tugas">
                                <div class="right-chek">
                                    <div class="round">
                                        <input class="click-checkbox" type="checkbox" id="design<?= $subtask['id_subtask'] ?>" onclick="clickCoret('design1','nama-design-<?= $subtask['id_subtask'] ?>')" />
                                        <label for="design<?= $subtask['id_subtask'] ?>"></label>
                                    </div>
                                    <h6 id="nama-design-<?= $subtask['id_subtask'] ?>" class="mx-2 mt-2"> <?= $subtask['nama_tugas'] ?> </h6>
                                </div>
                                <div class="left-chek">
                                    <img src="asset/trash.svg" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Uncheklist -->
                </div>
            <?php endforeach; ?>


            <footer class="footer-main">
                <hr />
                <div class="content-footer-main">
                    <div class="container-icon">
                        <img id="right-complit" class="icon-dropdown" src="asset/arrow-right.svg" onclick="uncheklistTugas('right-complit','up-complit','see-tugas-complit')" />
                        <img id="up-complit" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('right-complit','up-complit','see-tugas-complit')" />
                    </div>
                    <p class="desc-footer-main mx-2 mt-3">
                        Terselesaikan <span class="colored">( 3 tugas )</span>
                    </p>
                </div>
                <div id="see-tugas-complit" class="see-complited hidden">

                    <div class="container-tugas" id="tugas-n">
                        <section class="tugas mt-1">
                            <div class="content-tugas">
                                <div class="round">
                                    <input class="click-checkbox" type="checkbox" id="task-n" checked
                                    onclick="clickCoret('task-n','name-task-n')" >
                                    <label for="task-n" ></label>
                                </div>
                                <h6 class="nama-tugas-ku mx-2 mt-2 line-through" id="name-task-n">Requirements Detail</h6>
                                <div id="titik-tiga-n" class="titik-tiga hidden" onclick="actionTitikTiga('titik-tiga-n','action-titik-n')">
                                    <img class="" src="asset/more-vertical.svg" onclick="actionTitikTiga('titik-tiga-n','action-titik-n')">
                                    <div class="action-titik-tiga hidden" id="action-titik-n">
                                        <div class="item-titik-tiga d-flex align-items-center edit">
                                            <img src="asset/Edit.svg" />
                                            <p class="ms-3 d-flex align-i"><a href="php/edit.php?id = <?= ($value['id']) ?>">Rename task</a></p>
                                        </div>
                                        <div class="item-titik-tiga d-flex align-items-center delete">
                                            <img src="asset/Delete.svg" />
                                            <p class="ms-3 d-flex align-i"><a href="php/drop.php?id=n" onclick=" return confirm('yakin... dek?');">Delete task</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="drop-tugas me-3">
                                <div class="container-icon">
                                    <img id="down-n" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-n' ,'up-n','unchek-tugas-n','titik-tiga-n'),'action-n' " />

                                    <img id="up-n" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-n' ,'up-n','unchek-tugas-n','titik-tiga-n'),'action-n' " />

                                </div>
                            </div>
                        </section>

                        <div class="desc-tugas ms-4">new deskripsi</div>

                        <!-- Uncheklist -->

                        <div id="unchek-tugas-n" class="uncheklist p-3 hidden">

                            <div class="header-chek mb-1 d-flex justify-content-between align-items-center">
                                <h6>Subtask</h6>
                                <button class="btn-chek d-flex justify-content-center align-items-center">
                                    <img src="asset/Plus.svg" />
                                    <p class="mt-3 ms-1">Tambah</p>
                                </button>
                            </div>
                            <div class="content-chek">
                                <div class="chek-tugas">
                                    <div class="right-chek">
                                        <div class="round">
                                            <input class="click-checkbox" type="checkbox" id="design<?= $subtask['id_subtask'] ?>" onclick="clickCoret('design1','nama-design-<?= $subtask['id_subtask'] ?>')" />
                                            <label for="design<?= $subtask['id_subtask'] ?>"></label>
                                        </div>
                                        <h6 id="nama-design-<?= $subtask['id_subtask'] ?>" class="mx-2 mt-2"> <?= $subtask['nama_tugas'] ?> </h6>
                                    </div>
                                    <div class="left-chek">
                                        <img src="asset/trash.svg" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Uncheklist -->
                    </div>
                    <div class="complited-tugas d-flex justify-content-between">
                        <div class="right-complited d-flex align-items-center my-1">
                            <div class="round">
                                <input class="click-checkbox" type="checkbox" id="complit2" checked checked onclick="clickCoret('complit2','nama-tugas-2')" />
                                <label for="complit2"></label>
                            </div>
                            <h6 id="nama-tugas-2" class="mx-2 mt-2 line-through">
                                Backlog Teams
                            </h6>
                        </div>

                        <div class="container-icon me-3">
                            <img id="down-complit-2" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-complit-2','up-complit-2')" />
                            <img id="up-complit-2" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-complit-2','up-complit-2')" />
                        </div>
                    </div>
                    <div class="complited-tugas d-flex justify-content-between">
                        <div class="right-complited d-flex align-items-center my-1">
                            <div class="round">
                                <input type="checkbox" id="complit3" checked onclick="clickCoret('complit3','nama-tugas-3')" />
                                <label for="complit3"></label>
                            </div>
                            <h6 id="nama-tugas-3" class="mx-2 mt-2 line-through">
                                Meeting With Teams
                            </h6>
                        </div>

                        <div class="container-icon me-3">
                            <img id="down-complit-3" class="icon-dropdown" src="asset/dropdown.svg" onclick="uncheklistTugas('down-complit-3','up-complit-3')" />
                            <img id="up-complit-3" class="icon-dropup hidden" src="asset/arrow-up.svg" onclick="uncheklistTugas('down-complit-3','up-complit-3')" />
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <!-- End Main -->
    <script src="script/script.js"></script>
</body>

</html>