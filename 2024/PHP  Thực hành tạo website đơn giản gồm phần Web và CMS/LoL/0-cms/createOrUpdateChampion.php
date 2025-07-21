<?php
require_once('../1-controller/cms/listOfChampionController.php');
?>

<?php require_once('header.php') ?>

<div class="main">
    <div class="tieu-de">
        <h1>GAREN</h1>
    </div>
    <hr>
    
    <form class="khoi-form" action="../1-controller/cms/championUpdateController.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name of Champion" name="champName">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" class="form-control" placeholder="Gender of Champion" name="champGender">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>National</label>
                    <select class="form-control" name="champNational">
                        <option value="1">Demacia</option>
                        <option value="2">Noxus</option>
                        <option value="3">Ionia</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Avatar</label>
                    <div class="file-contaier d-flex d-flex justify-content-center align-items-center">
                        + Add file here!
                    </div>

                    <input type="file" class="form-control file-input-item" placeholder="National of Champion" name="champAvatar">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Role</label>
                    <select class="form-control select2-roles" multiple="multiple" name="champRoles[]">
                        <option value="">Choose Role</option>
                        <option value="1">Top</option>
                        <option value="2">Jungle</option>
                        <option value="3">Mid</option>
                        <option value="4">Ad Carry</option>
                        <option value="5">Support</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 skills-container">
                <label for="">Skills</label>
                <div class="row skill-item mt-3">
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Please insert skill descriptions">
                    </div>
                    <div class="col-2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary add-skill">+</button>
                            <button type="button" class="btn btn-danger remove-skill">-</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="">Main Story</label>
                <div class="row">
                    <div class="col-12">
                        <div id="editor"></div>
                    </div>
                    <div class="col-12" style="display:none">
                        <textarea name="mainStory" id="mainStory" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
<?php require_once('footer.php') ?>