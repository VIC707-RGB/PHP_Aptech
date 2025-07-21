<?php
require_once('../1-controller/cms/listOfChampionController.php');
?>
<?php require_once('header.php') ?>
        <div class="main">
            <div class="tieu-de">
                <h1>List of Champions</h1>
            </div>
            <hr>
            <div class="controls">
                <div class="row">
                    <!-- danh 4 cot cho tim kiem bang text -->
                    <div class="col-4">
                        <div class="form-group">
                            <label for="_filter">Filter By Keyword</label>
                            <input type="text" name="_filter" class="form-control"
                                placeholder="Filter name, skill, ...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Filter By Role</label>
                            <select class="form-control">
                                <option value="">Choose Role</option>
                                <option value="1">Top</option>
                                <option value="2">Jungle</option>
                                <option value="3">Mid</option>
                                <option value="4">Ad Carry</option>
                                <option value="5">Support</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-1">

                        <button class="btn btn-success mt-4">Find!</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="main-table">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Avatar</th>
                            <th>Nationality</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo getAllChampionController() ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php require_once('footer.php') ?>