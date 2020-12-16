<?php
class RepoInfo {

    public $forksCount;
    public $starsCount;
    public $watchersCount;
    public $lastRelease;
    public $openPRs;
    public $closedPRs;

    function getRepoInfo($repo) {
        $opts = ['http' => ['method' => 'GET','header' => ['User-Agent: PHP']]];
        $context = stream_context_create($opts);

        $repoObject = new RepoInfo();

            $gitBasePath = 'https://api.github.com/repos/'.$repo;
            $gitReleases = 'https://api.github.com/repos/'.$repo.'/releases';
            $gitOpenPR = 'https://api.github.com/repos/'.$repo.'/pulls?state=open';
            $gitClosedPR = 'https://api.github.com/repos/'.$repo.'/pulls?state=closed';

            $baseContent = file_get_contents($gitBasePath, false, $context);
            $releasesContent = file_get_contents($gitReleases, false, $context);
            $openPRContent = file_get_contents($gitOpenPR, false, $context);
            $closedPRContent = file_get_contents($gitClosedPR, false, $context);
            $json_base_content = json_decode($baseContent);
            $json_releases_content = json_decode($releasesContent);
            $json_OpenPR_content = json_decode($openPRContent);
            $json_ClosedPR_content = json_decode($closedPRContent);

        $repoObject->forksCount = $json_base_content->forks_count;
        $repoObject->starsCount = $json_base_content->stargazers_count;
        $repoObject->watchersCount = $json_base_content->watchers_count;
        $repoObject->lastRelease = $json_releases_content[0]->published_at;
        $repoObject->openPRs = sizeof($json_OpenPR_content);
        $repoObject->closedPRs = sizeof($json_ClosedPR_content);
        return $repoObject;
    }
}
?>