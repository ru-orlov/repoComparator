<html>
    <h1>Repository comparator</h1>
    <head>
        <link rel="stylesheet" href="./style/mainStyle.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" placeholder="/owner/repo" name="firstRepo">
            <br/>
            <input type="text" placeholder="/owner/repo" name="secondRepo">
            <input type="submit" name="submit" value=" Start compare >>>">
        </form>
    <hr about="will not start to gambling with html's and style's. Just BRD impl.">
        <?php
        if (isset($_POST['submit'])) {
            require_once "RepoInfo.php";
            $firstRepoPath = $_REQUEST['firstRepo'];
            $secondRepoPath = $_REQUEST['secondRepo'];

            $repoObj = new RepoInfo();
            $firstPepoinfo = $repoObj->getRepoInfo($firstRepoPath);
            $secondPepoinfo = $repoObj->getRepoInfo($secondRepoPath);

        }
        ?>

        <div class="divTable">
            <div class="divTableBody">
                <div class="divTableRow">
                    <div class="divTableHead"></div>
                    <div class="divTableHead">firstRepo</div>
                    <div class="divTableHead">secondRepo</div>
                </div>
                <div class="divTableRow">
                    <div class="divLeftOrdinalCell">Forks:</div>
                    <div class="divTableCell"><?php echo $firstPepoinfo->forksCount ?></div>
                    <div class="divTableCell"><?php echo $secondPepoinfo->forksCount ?></div>
                </div>
                <div class="divTableRow">
                    <div class="divLeftOrdinalCell">Stars:</div>
                    <div class="divTableCell"><?php echo $firstPepoinfo->starsCount ?></div>
                    <div class="divTableCell"><?php echo $secondPepoinfo->starsCount ?></div>
                </div>
                <div class="divTableRow">
                    <div class="divLeftOrdinalCell">Watchers:</div>
                    <div class="divTableCell"><?php echo $firstPepoinfo->watchersCount ?></div>
                    <div class="divTableCell"><?php echo $secondPepoinfo->watchersCount ?></div>
                </div>
                <div class="divTableRow">
                    <div class="divLeftOrdinalCell">Last release:</div>
                    <div class="divTableCell"><?php echo $firstPepoinfo->lastRelease ?></div>
                    <div class="divTableCell"><?php echo $firstPepoinfo->lastRelease ?></div>
                </div>
                <div class="divTableRow">
                    <div class="divTableCell">PR's: /open/closed/declined</div>
                    <div class="divTableCell"><?php echo $firstPepoinfo->openPRs .'/'. $firstPepoinfo->closedPRs?></div>
                    <div class="divTableCell"><?php echo $secondPepoinfo->openPRs .'/'. $secondPepoinfo->closedPRs ?></div>
                </div>
            </div>
        </div>
        <hr about="Are you no">
    </body>
</html>
