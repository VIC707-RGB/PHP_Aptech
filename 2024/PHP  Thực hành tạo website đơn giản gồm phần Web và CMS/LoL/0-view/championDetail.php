<?php
require_once('../1-controller/championDetailController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php $champion = getChampionDetailById();
    
    ?>
    <div class="banner">
        <img src="<?php echo $champion['avatar'] ?>" class="img-full-width" style="height: 200px !important">
    </div>
    <div class="main">
        <div class="main-title">
            <h1>
                <?php echo $champion['name'] ?>
            </h1>
        </div>
        <div class="main-content">
            <ul>
                <li>Nationality:
                    <?php echo $champion['nationality_name'] ?>
                </li>
                <li>Gener:
                    <?php echo $champion['gender'] ?>
                </li>
                <li>Position: 
                    <ul>
                        <?php echo renderRoleOfChampion($champion) ?>
                    </ul>
                </li>
            </ul>
        </div>
        <hr>
        <div class="main-title">
            Skills
        </div>
        <div class="main-content">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name of Skill</th>
                        <th>Ability Of Skill</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo renderSkillOfChampions($champion) ?>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="main-title">
            Main Story
        </div>
        <div class="main-content">
            <?php echo $champion['mainStory'] ?>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>