// 예제 8-11 아티즌 명령어에서 프로그레스바를 출력하는 예제

$totalUnits = 350;
$this->output->progressStart($totalUnits);

for ($i = 0; $i < $totalUnits; $i++) {
    sleep(1);

    $this->output->progressAdvance();
}

$this->output->progressFinish();
